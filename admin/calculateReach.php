<?php
require_once '../connect/connect.php';
$q = $_GET['q'];
$amount = 0;

$sql = "SELECT * FROM watchsate WHERE id = '1' ";
$r = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($r)){
		$amount = $row['price'];
	}
	$answer = intval($q) / $amount;
 echo 'Based on the Watch Share price you will reach '. intval($answer) .' people';
?>