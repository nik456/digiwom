<?php
require_once '../connect/connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id='$id'";
$r = mysqli_query($connect,$sql);
header('Location: dashboard.php');
exit();