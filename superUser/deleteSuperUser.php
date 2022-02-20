<?php
require_once '../connect/connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id = '$id'";
$r = mysqli_query($connect,$sql);
header('Location: viewSuperUser.php');
					exit();
