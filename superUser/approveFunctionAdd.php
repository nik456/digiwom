<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
require_once '../connect/connect.php';

    $sid = $_GET['sid'];
    
    if ($_GET['id'] === "0"){
        $sql = "UPDATE adds SET aproved = '0' WHERE id = '$sid' ";
        $r = mysqli_query($connect,$sql);
         header('Location: viewAds.php');
    exit();
    }elseif ($_GET['id'] === "1"){
        $sql = "UPDATE adds SET aproved = '1' WHERE id = '$sid' ";
        $r = mysqli_query($connect,$sql);
         header('Location: viewAds.php');
    exit();
    }
?>