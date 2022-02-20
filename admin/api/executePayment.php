<?php 

include_once('Config/Config.php');
include_once('Helpers/PayPalHelper.php');

$paypalHelper = new PayPalHelper;

$paymentData = array(
    "pay_id" => $_POST['pay_id'],
	"payer_id" => $_POST['payer_id']
);



header('Content-Type: application/json');
echo json_encode($paypalHelper->paymentExecute($paymentData));