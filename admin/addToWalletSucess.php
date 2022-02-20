<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
$wallet = getVirtualWllet($_SESSION['username']);
$wallet = substr($wallet, 1);

$response = addFunds($_SESSION['amount_fund'],$_SESSION['username'],$wallet);
