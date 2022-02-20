<?php
require_once '../connect/connect.php';
$id = $_GET['id'];
$token = $_GET['token'];

switch ($token) {
    case 1:
        $sql = "DELETE FROM users WHERE id='$id'";
        $r = mysqli_query($connect,$sql);
        header('Location: viewMarketers.php');
        exit();
        break;
    case 2:
        $sql = "DELETE FROM users WHERE id='$id'";
        $r = mysqli_query($connect,$sql);
        header('Location: viewSubscribers.php');
        exit();
        break;
    case 3:
        $sql = "DELETE FROM admin WHERE id='$id'";
        $r = mysqli_query($connect,$sql);
        header('Location: viewSuperUser.php');
        exit();
        break;
}
?>