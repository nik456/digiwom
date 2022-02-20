<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';

$curr = $_GET['id'];

$user = getUserData($_SESSION['username']);
$email = $user['email'];

$sql = "UPDATE users SET currType = '$curr' WHERE email = '$email' ";
$r = mysqli_query($connect,$sql);

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;

?>