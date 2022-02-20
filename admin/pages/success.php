<?php
/*
    * Success page -  Shortcut and Mark Flow.
    * Buyer can change shipping information for Shortcut flow before execute.
    * Buyer can view order details after execute.
*/
    $rootPath = "../";
    include_once('../api/Config/Config.php');
    include('../templates/header.php');
?>
<!-- HTML Content -->
<div class="row-fluid">
    <!-- Middle Section -->
    <div class="col-sm-offset-3 col-md-4">
        <div id="loadingAlert"
             class="card"
             style="display: none;">
            <div class="card-body">
                <div class="alert alert-info block"
                     role="alert">
                    Loading....
                </div>
            </div>
        </div>
        <form id="orderConfirm"
              class="form-horizontal"
              style="display: none;">
            <h3>Your payment is authorized.</h3>
            <h4>Confirm the payment to execute</h4>
            <hr>
            <div class="form-group">
                <label class="col-sm-5 control-label">Shipping Information</label>
                <div class="col-sm-7">
                    <p id="confirmRecipient"></p>
                    <p id="confirmAddressLine1"></p>
                    <p id="confirmAddressLine2"></p>
                    <p>
                        <span id="confirmCity"></span>,
                        <span id="confirmState"></span> - <span id="confirmZip"></span>
                    </p>
                    <p id="confirmCountry"></p>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-7">
                    <label class="btn btn-primary" id="confirmButton">Complete Payment</label>
                </div>
            </div>
        </form>
        <form id="orderView"
              class="form-horizontal"
              style="display: none;">
            <h3>Your payment is complete</h3>
            <h4>
                <span id="viewFirstName"></span>
                <span id="viewLastName"></span>,
                Thank you for your Order
            </h4>
            <hr>
            <div class="form-group">
                <div class="form-group">
                    <label class="col-sm-5 control-label">Shipping Details</label>
                    <div class="col-sm-7">
                        <p id="viewRecipientName"></p>
                        <p id="viewAddressLine1"></p>
                        <p id="viewAddressLine2"></p>
                        <p>
                            <span id="viewCity"></span>,
                            <span id="viewState"></span> - <span id="viewPostalCode"></span>
                        </p>
                        <p id="confirmCountry"></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">Transaction Details</label>
                    <div class="col-sm-7">
                        <p>Transaction ID: <span id="viewTransactionID"></span></p>
                        <p>Payment Total Amount: <span id="viewFinalAmount"></span> </p>
                        <p>Currency Code: <span id="viewCurrency"></span></p>
                        <p>Payment Status: <span id="viewPaymentState"></span></p>
                        <p>Payment Type: <span id="viewTransactionType"></span> </p>
                    </div>
                </div>
            </div>
            <hr>
            <h3> Click <a href='../finance.php'>here </a> to return to Home Page</h3>
        </form>
    </div>
</div>

<!-- Javascript Import -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="<?= $rootPath ?>js/config.js"></script>

<!-- PayPal In-Context Checkout script -->
<script type="text/javascript">

    let inputParams = {
        "pay_id": getUrlParams('paymentId'),
        "payer_id": getUrlParams('PayerID')
    };

    showDom('loadingAlert');
    paypal.request.post(
        '<?= $rootPath.URL['services']['paymentGet'] ?>',
        inputParams
    ).then(function (response) {
        hideDom('loadingAlert');
        if (response.ack) {
            if(getUrlParams('commit') === 'true') {
                showPaymentExecute(response.data);
            }
            else {
                showPaymentGet(response.data);
            }
        }
        else
            alert("Something went wrong");
    });

    function showPaymentGet(res) {
        let shipping = res.payer.payer_info.shipping_address;

        document.getElementById('confirmRecipient').innerText = shipping.recipient_name;
        document.getElementById('confirmAddressLine1').innerText = shipping.line1;
        if(shipping.line2)
            document.getElementById('confirmAddressLine2').innerText = shipping.line2;
        else
            document.getElementById('confirmAddressLine2').innerText = "";
        document.getElementById('confirmCity').innerText = shipping.city;
        document.getElementById('confirmState').innerText = shipping.state;
        document.getElementById('confirmZip').innerText = shipping.postal_code;
        document.getElementById('confirmCountry').innerText = shipping.country_code;

        showDom('orderConfirm');

        // Listen for click on confirm button
        document.querySelector('#confirmButton').addEventListener('click', function () {

            let postData = {
                    "pay_id": res.id,
                    "payer_id": res.payer.payer_info.payer_id,
                    "item_amt": res.transactions[0].amount.details.subtotal,
                    "tax_amt": res.transactions[0].amount.details.tax,
                    "handling_fee": res.transactions[0].amount.details.handling_fee,
                    "insurance_fee": res.transactions[0].amount.details.insurance,
                    "shipping_discount": res.transactions[0].amount.details.shipping_discount,
                    "total_amt": res.transactions[0].amount.total,
                    "currency": res.transactions[0].amount.currency,
                    "current_shipping": res.transactions[0].amount.details.shipping
                };

            // Execute the payment
            hideDom('confirmButton');
            showDom('loadingAlert');
            paypal.request.post(
                '<?= $rootPath.URL['services']['paymentExecute'] ?>',
                postData
            ).then(function (res) {
                hideDom('orderConfirm');
                hideDom('loadingAlert');
                if (res.ack)
                    showPaymentExecute(res.data);
                else
                    alert("Something went wrong");
            });
        });
    }

    function showPaymentExecute(result) {

        let payerInfo = result.payer.payer_info;

        document.getElementById('viewFirstName').textContent = payerInfo.first_name;
        document.getElementById('viewLastName').textContent = payerInfo.last_name;
        document.getElementById('viewRecipientName').textContent = payerInfo.shipping_address.recipient_name;
        document.getElementById('viewAddressLine1').textContent = payerInfo.shipping_address.line1;
        if(payerInfo.shipping_address.line2)
            document.getElementById('viewAddressLine2').textContent = payerInfo.shipping_address.line2;
        else
            document.getElementById('viewAddressLine2').textContent = "";
        document.getElementById('viewCity').textContent = payerInfo.shipping_address.city;
        document.getElementById('viewState').textContent = payerInfo.shipping_address.state;
        document.getElementById('viewPostalCode').innerHTML = payerInfo.shipping_address.postal_code;
        document.getElementById('viewTransactionID').textContent = result.transactions[0].related_resources[0].sale.id;
        document.getElementById('viewFinalAmount').textContent = result.transactions[0].amount.total;
        document.getElementById('viewCurrency').textContent = result.transactions[0].amount.currency;
        document.getElementById('viewPaymentState').textContent = result.state;
        document.getElementById('viewTransactionType').textContent = result.intent;
        
        hideDom('orderConfirm');
        hideDom('loadingAlert');
        showDom('orderView');
       var data = {
            amount: result.transactions[0].amount.total
        };

        $.post("AddToWalletPaypal.php", data);
    }
    

   
</script>

<?php
include('../templates/footer.php');
?>