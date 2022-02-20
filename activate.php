<?php
require 'connect/connect.php';
$token = $_GET['token'];

$sql = "UPDATE users SET verify = 1 WHERE token = '$token' ";
$r = mysqli_query($connect,$sql);
    if (!$r)
    {
    }
    else{
        header('Location: login.php');
        exit();
    }