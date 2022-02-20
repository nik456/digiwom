<?php 

include_once('Config/Config.php');
include_once('Helpers/PayPalHelper.php');

$paypalHelper = new PayPalHelper;

$paymentData = array(
	"intent" => "sale",
	"payer" => array(
		"payment_method" => "paypal"
	),
	"transactions" => array(
		array(
			"amount" => array(
				"total" => $_POST['total_amt'],
				"currency" => $_POST['currency'],
				"details" => array (
					"subtotal" => $_POST['total_amt']
				)
			)
		)
	),
	"redirect_urls" => array(
		"return_url" => $_POST['return_url'],
		"cancel_url" => $_POST['cancel_url']
	)
);


header('Content-Type: application/json');
echo json_encode($paypalHelper->paymentCreate($paymentData));