<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
   $response1 = '';
// paypal php   
   $rootPath = "";
    include_once('api/Config/Config.php');
    // include_once('api/Config/Sample.php');


    $baseUrl = str_replace("index.php", "", URL['current']);
    $baseUrl = str_replace('finance.php', '', $baseUrl);
$_SESSION['amount_fund'] = '';
  if (isset($_POST['submit'])){
//       if($_POST['amount_fund'] < 100){
//           $response1 = 'The amount must be more than 99';
//       }else{
        // $response = addFunds($_POST,$_SESSION['username'],getVirtualWllet($_SESSION['username']));
$_SESSION['amount_fund'] = $_POST['amount_fund'];
$orderID = time();
$amount = 1;


$curl = curl_init();
$token = base64_encode("merchant.9800065100:8fb34ffca486fdb7e37efb686b3542bc");

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://mepspay.gateway.mastercard.com/api/rest/version/59/merchant/9800065100/session",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n\t\"apiOperation\":\"CREATE_CHECKOUT_SESSION\",\n\t\"interaction\":{\n\t\t\"operation\":\"PURCHASE\"\n\t},\n\t\"order\":{\n\t\t\"currency\":\"JOD\",\n\t\t\"id\":\"$orderID\"\n\t}\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Basic ".$token.""
  ),
));

$response = curl_exec($curl);
$json = json_decode($response, TRUE);
 $artist = $json['session']['id']; 

echo '
<html>
    <head>
        <script src="https://mepspay.gateway.mastercard.com/checkout/version/59/checkout.js"
                data-error="errorCallback"
                data-complete="successCallback"
                data-timeout="errorCallback"
                data-cancel="cancelCallback">
        </script>

        <script type="text/javascript">
            function errorCallback(error) {
                  console.log(error);
            }
            function cancelCallback() {
                  window.location.href = "cancelTransaction.php";
            }
            function successCallback() {
                  window.location.href = "addToWalletSucess.php";
            }

            Checkout.configure({
                session:{
                  id:"'.$artist.'"   
                },
                merchant: "9800065100",
                order: {
                    amount: '.$_POST['amount_fund'].',
                    currency: "JOD",
                    description: "Funds for Ads and Surveys",
                  id: "1002"
                },
                interaction: {
                    operation: "PURCHASE",
                    merchant: {
                        name: "Meps",
                        address: {
                            line1: "Amman",
                            line2: "Jordan"            
                        }    
                    },
                    locale        : "ar_JO",
                    theme         : "default",
                    displayControl: {
                        billingAddress  : "HIDE",
                        customerEmail   : "HIDE",
                        orderSummary    : "HIDE",
                        shipping        : "HIDE"
                    }
                }
            });

            
        </script>
    </head>
    <body onload="Checkout.showPaymentPage();">
    <h1 style="font-size: 20;text-align: center;direction: ltr;">Please wait...</h1>
    </body>
</html>
';
}
//   }
    require_once 'init/top.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("#__hc-action-cancel") > -1) {
      
                  window.location.href = "cancelTransaction.php";
           
    }
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    if (window.location.href.indexOf("#__hc-action-success") > -1) {
      
                  window.location.href = "addToWalletSucess.php";
           
    }
  });
</script>
   <!--<script src="https://mepspay.gateway.mastercard.com/checkout/version/59/checkout.js"-->
   <!--             data-error="errorCallback"-->
   <!--             data-complete="successCallback"-->
   <!--             data-timeout="errorCallback"-->
   <!--             data-cancel="cancelCallback">-->
   <!--     </script>-->

        // <script type="text/javascript">
        //     function errorCallback(error) {
        //           console.log(error);
        //     }
        //     function cancelCallback() {
        //           window.location.href = "cancelTransaction.php";
        //     }
        //     function successCallback() {
        //           window.location.href = "addToWalletSucess.php";
        //     }
        //     </script>
<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
  <?php  
  require_once 'init/nav.php';

?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button> 
<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><?php echo $response1; ?><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Finance</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/dashboard" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Finance</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet m-portlet--full-height"><div class="m-portlet__head"><div class="m-portlet__head-caption"><div class="m-portlet__head-title"><h3 class="m-portlet__head-text">
                    Payments methods
                </h3></div></div></div> <div class="m-portlet__body"><div id="m_accordion_1" role="tablist" class="m-accordion m-accordion--default m-accordion--solid m-accordion--section  m-accordion--toggle-arrow"><div style="padding: 1rem;"><p><strong>ATTENTION:</strong>

                   
                </p> <p>
                Skype: <strong>digi.wom</strong></p> <p>
    Email: <strong><a href="mailto: support@digiwom.net">support@digiwom.net</a></strong></p></div> <div class="row"><div class="col-lg-12"><div class="m-accordion__item"><div role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="false" class="m-accordion__item-head collapsed"><span class="m-accordion__item-title"><img style="width: 89px;" src="../assets/img/admin/wire_transfer.png"> <span class="m--font-success pull-right m--padding-right-20">Active</span></span> <span class="m-accordion__item-mode"></span></div> <div id="m_accordion_1_item_1_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1" class="m-accordion__item-body collapse"><div class="m-accordion__item-content"><p>
                    Minimum deposit: <strong>$100.00</strong></p> <p>
                    <div>
                        <form method="post">
                            <label class="mt-3">Amount</label>
                            <input class="form-control" type="number" name="amount_fund" step="any">
                            <input class=" btn btn-success mt-3" type="submit" name="submit" value="Fund">
                        </form>
                    </div>
    </p></div></div></div> 
    
    
    <div class="m-accordion__item"><div role="tab" id="m_accordion_2_item_2_head" data-toggle="collapse" href="#m_accordion_2_item_2_body" aria-expanded="false" class="m-accordion__item-head collapsed"><span class="m-accordion__item-title"><img src="../assets/img/admin/PayPal.png"> <span class="m--font-success pull-right m--padding-right-20">Active</span></span> <span class="m-accordion__item-mode"></span></div> <div id="m_accordion_2_item_2_body" role="tabpanel" aria-labelledby="m_accordion_2_item_2_head" data-parent="#m_accordion_1" class="m-accordion__item-body collapse"><div class="m-accordion__item-content"><p>
                                    Minimum deposit: <strong>$50.00</strong></p> <hr> <p>
                                        <!-- Middle Section -->
    <div class="col-md-12">
        <h3 class="text-center">Pricing Details</h3>
        <hr>
        <form class="form-horizontal">
            <!-- Cart Details -->
            
            <div class="form-group">
                <label for="total_amt" class="col-sm-6 control-label">Amount</label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="total_amt"
                           name="total_amt"
                           value="">
                </div>
            </div>
            <div class="form-group">
                <label for="currency_Code" class="col-sm-6 control-label">Currency</label>
                <div class="col-sm-6">
                    <select class="form-control" name="currency_Code" id="currency_Code">
                        <option value="AUD">AUD</option>
                        <option value="BRL">BRL</option>
                        <option value="CAD">CAD</option>
                        <option value="CZK">CZK</option>
                        <option value="DKK">DKK</option>
                        <option value="EUR">EUR</option>
                        <option value="HKD">HKD</option>
                        <option value="MYR">MYR</option>
                        <option value="MXN">MXN</option>
                        <option value="NOK">NOK</option>
                        <option value="NZD">NZD</option>
                        <option value="PHP">PHP</option>
                        <option value="PLN">PLN</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                        <option value="SGD">SGD</option>
                        <option value="SEK">SEK</option>
                        <option value="CHF">CHF</option>
                        <option value="THB">THB</option>
                        <option value="USD" selected>USD</option>
                    </select>
                </div>
            </div>
            <hr>

            <!-- Checkout Options -->
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-7">
                    <!-- Container for PayPal Shortcut Checkout -->
                    <div id="paypalCheckoutContainer"></div>

                </div>
            </div>
        </form>
    </div>
                                    </div></div></div></div></div></div></div></div> 
<!-- Javascript Import Paypal -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="<?= $rootPath ?>js/config.js"></script>

<!-- PayPal In-Context Checkout script -->
<script type="text/javascript">

    paypal.Button.render({

        // Set your environment
        env: '<?= PAYPAL_ENVIRONMENT ?>',

        // Set style of buttons
        style: {
            layout: 'horizontal',   // horizontal | vertical
            size:   'responsive',   // medium | large | responsive
            shape:  'pill',         // pill | rect
            color:  'gold',         // gold | blue | silver | black,
            fundingicons: false,    // true | false,
            tagline: false          // true | false,
        },

        // Set allowed funding sources
        funding: {
            allowed: [
                paypal.FUNDING.CARD,
                paypal.FUNDING.CREDIT
            ],
            disallowed: [ ]
        },

        // Wait for the PayPal button to be clicked
        payment: function() {

            let currencySelect = document.getElementById("currency_Code"),
                postData = {
                    "total_amt": document.getElementById("total_amt").value,
                    "currency": currencySelect.options[currencySelect.selectedIndex].value,
                    "return_url": '<?= $baseUrl.URL["redirectUrls"]["returnUrl"]?>' + '?commit=false',
                    "cancel_url": '<?= $baseUrl.URL["redirectUrls"]["cancelUrl"]?>'
                };

            return paypal.request.post(
                '<?= $rootPath.URL['services']['paymentCreate'] ?>',
                postData
            ).then(function(res) {
                return res.data.id;
            });
        },

        // Wait for the payment to be authorized by the customer
        onAuthorize: function(data, actions) {
            actions.redirect();
        },

        // Handle cancelled payment by the customer
        onCancel: function(data, actions) {
            actions.redirect();
        }

    }, '#paypalCheckoutContainer');

</script>

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>

<!-- end::Body -->

<div class="datetimepicker datetimepicker-dropdown-bottom-left dropdown-menu" style="left: 302.468px; z-index: 1110;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">18:00</span><span class="minute">18:05</span><span class="minute">18:10</span><span class="minute">18:15</span><span class="minute active">18:20</span><span class="minute">18:25</span><span class="minute">18:30</span><span class="minute">18:35</span><span class="minute">18:40</span><span class="minute">18:45</span><span class="minute">18:50</span><span class="minute">18:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour active">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day active">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day today">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day">31</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month active">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020-2029</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year ">2019</span><span class="year active">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year ">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div><div class="datetimepicker datetimepicker-dropdown-bottom-left dropdown-menu" style="left: 634.14px; z-index: 1120;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">13 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">18:00</span><span class="minute">18:05</span><span class="minute">18:10</span><span class="minute">18:15</span><span class="minute active">18:20</span><span class="minute">18:25</span><span class="minute">18:30</span><span class="minute">18:35</span><span class="minute">18:40</span><span class="minute">18:45</span><span class="minute">18:50</span><span class="minute">18:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">13 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour active">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day today active">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day">31</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month active">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020-2029</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year ">2019</span><span class="year active">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year ">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div></div>