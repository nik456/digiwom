<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
require_once '../connect/connect.php';

$from_user_id = '';
$from = $_SESSION['username'];
$to_user_id =  $_GET['id'];
$getAdminId = "SELECT * FROM admin WHERE user = '$from' ";
$queryResult = mysqli_query($connect,$getAdminId);
    while($row = mysqli_fetch_array($queryResult)){
        $from_user_id = $row['id'];
    }

    $roomKey = "chatRoom".$to_user_id;
    $sql = "SELECT * FROM chat_message WHERE  roomKey = '$roomKey' ";
    $r = mysqli_query($connect,$sql);
    while($row1 = mysqli_fetch_array($r)){
        $isAdmin = $row1['isAdmin'];
        $from_user_idDB = $row1['from_user_id'];
        $date = $row1['timestamp'];
        $date1 = explode(" ", $date);
        $now = date("Y-m-d"); 
        $chat_message = $row1['chat_message'];
        if($date1[0] === $now){
        if($from_user_id == $from_user_idDB && $isAdmin == 0){
            $update  = "UPDATE chat_message SET status = 1";
            $rup = mysqli_query($connect,$update);
            echo '<div id="user_details">
                    <div class="media media-chat media-chat-reverse">
                                        <div class="media-body">
                                            <p>'. $chat_message.'</p>
                                        </div>
                                    </div>
                    </div>
            ';
        }else{
            echo '
                <div class="media media-chat"> <img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <div class="media-body">
                                <p>'. $chat_message.'</p>
                            </div>
                        </div>
            ';
        }
        }
    }
?>
