<?php
require_once '../connect/connect.php';
$q = $_GET['q'];

$sql = "SELECT * FROM campaign WHERE campaignName = '$q' ";
$r = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($r)){
		echo '<strong>'.'$'.$row['dailyBudget'].'</strong>';
	}
?>