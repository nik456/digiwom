<?php

/*
	* Config for PayPal specific values
*/

// Urls
if(isset($_SERVER['SERVER_NAME'])) {
    $url = @($_SERVER["HTTPS"] != 'on') ? 'http://' . $_SERVER["SERVER_NAME"] : 'https://' . $_SERVER["SERVER_NAME"];
    $url .= ($_SERVER["SERVER_PORT"] !== 80) ? ":" . $_SERVER["SERVER_PORT"] : "";
    $url .= $_SERVER["REQUEST_URI"];
}
else {
    $url = "";
}

define("URL", array(

    "current" => $url,

    "services" => array(
        "paymentCreate" => 'api/createPayment.php',
        "paymentGet" => 'api/getPayment.php',
        "paymentExecute" => 'api/executePayment.php'
    ),

	"redirectUrls" => array(
        "returnUrl" => 'pages/success.php',
		"cancelUrl" => 'pages/cancel.php',
    )
));

// PayPal Environment 
define("PAYPAL_ENVIRONMENT", "sandbox");

// PayPal REST API endpoints
define("PAYPAL_ENDPOINTS", array(
	"sandbox" => "https://api.sandbox.paypal.com",
	"production" => "https://api.paypal.com"
));

// PayPal REST App credentials
define("PAYPAL_CREDENTIALS", array(
	"sandbox" => [
		"client_id" => "AbgtW_c5gyfGrz8SvMflWMPAs2ucYhbC2W5s474av4lrzcUjNgOHPEHlvWTiDGzO5iAnh7UQNse741x5",
		"client_secret" => "EKgk_z3uCkIOqNmFuCBa-cZGInJqD5UyA2AinmFMFBx_OPJtpdG8YQqvGxWYNX_QQTB_uroRYGdfVeET"
	],
	"production" => [
		"client_id" => "",
		"client_secret" => ""
	]
));

// PayPal REST API version
define("PAYPAL_REST_VERSION", "v1");

// ButtonSource Tracker Code
define("SBN_CODE", "PP-DemoPortal-EC-php-REST-SS");