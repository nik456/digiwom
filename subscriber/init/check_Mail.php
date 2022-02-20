<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require_once '../../connect/connect.php';
require_once '../../function/MarketersController.php';

$my_id = '';
$user = getUserData($_SESSION['username']);
$my_id = $user['id'];

$sql = "SELECT * FROM chat_message WHERE  to_user_id = '$my_id' AND status = '0' AND isAdmin = '0'";
$r = mysqli_query($connect,$sql);
echo mysqli_num_rows ( $r );


 