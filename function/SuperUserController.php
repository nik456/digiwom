<?php
function listAdSuper(){
	global $connect;

	$sql = "SELECT * FROM adds";
	$r = mysqli_query($connect,$sql);
	
		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['name'].'</th>';
			echo '<th valign=middle>'.$row['campaign'].'</th>';
			echo '<th valign=middle>'.$row['frequencyCap'].'</th>';
			echo '<th valign=middle>'.$row['dailyBudget'].'</th>';
			echo '<th valign=middle><a href="theAd.php?id='.$row['id'].'">Go To '.$row['name'].'</a></th>';
			if ($row['aproved'] == true){
			    echo '<th class="text-center" valign=middle><a href="approveFunctionAdd.php?id=0&sid='.$row['id'].'"><i class="fas fa-check"></i></a></th>';
            }else{
			    echo '<th class="text-center" valign=middle><a href="approveFunctionAdd.php?id=1&sid='.$row['id'].'"><i class="far fa-times-circle"></i></a></th>';
            }
	echo '</tr>';
		}
}

function loadFirstTenMarketers(){
	global $connect;
    $campw ='';
    $totalSum = 0;
    $amountSur= 0;
    $amountads = 0;

	$sql = "SELECT * FROM users WHERE typeOfUser = '1' LIMIT 10";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    $email = $row['email'];

		    $sql1 = "SELECT * FROM campaign WHERE creator = '$email'";
	        $check_database_query = mysqli_query($connect,$sql1);
	        $amountCamp = mysqli_num_rows($check_database_query);
	        while($row2 = mysqli_fetch_array($check_database_query)){
                $totalSum += $row2['dailyBudget'];
                $campw = $row2['campaignName'];

                $sql2 = "SELECT * FROM survey WHERE campaign = '$campw'";
	            $check_database_query1 = mysqli_query($connect,$sql2);
	            $amountSur += mysqli_num_rows($check_database_query1);

	            $sql3 = "SELECT * FROM adds WHERE campaign = '$campw'";
	            $check_database_query2 = mysqli_query($connect,$sql3);
	            $amountads += mysqli_num_rows($check_database_query2);
            }
            $id = $row['id'];
			echo '<tr>';
			echo '<td class="text-center">'.$row['name'].'</td>';
			echo '<td class="text-center">'.$row['email'].'</td>';
			echo '<td class="text-center">'.$amountCamp.'</td>';
			echo '<td class="text-center">'.$amountSur.'</td>';
			echo '<td class="text-center">'.$amountads.'</td>';
			echo '<td class="text-center">$'.$totalSum.'</td>';
			echo '<td class="text-center">'.$row['affiliateNumber'].'</td>';
			echo '<td class="text-center">
                    <a class="ml-3" href="viewUser.php?id='.$id.'"><i class="fas fa-pen"></i></a>
                     <a class="ml-3" href="deleteUser.php?id='.$id.'"><i class="fas fa-trash-alt"></i></a>
                  </td>';
			echo '</tr>';


		}
}

function loadFirstTenSubscribers(){
		global $connect;
$Total = 0;
	$sql = "SELECT * FROM users WHERE typeOfUser = '2' LIMIT 10";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    $email = $row['email'];
		    $id = $row['id'];
		    $sql1 = "SELECT * FROM transaction WHERE user = '$email'";
	        $r1  = mysqli_query($connect,$sql1);
            $amount = mysqli_num_rows($r1);
            while($row1 = mysqli_fetch_array($r1)){
                $Total +=$row1['amount'];
            }
			echo '<tr>';	
			echo '<td class="text-center">'.$row['name'].'</td>';
			echo '<td class="text-center">'.$email.'</td>';
			echo '<td class="text-center">'.$amount.'</td>';
			echo '<td class="text-center">$'.$Total.'</td>';
			echo '<td class="text-center">'.$row['affiliateNumber'].'</td>';
			echo '<td class="text-center">
			<a class="ml-3" href=""><i class="fas fa-pen"></i></a>
                     <a class="ml-3" href="deleteUser.php?id='.$id.'"><i class="fas fa-trash-alt"></i></a>
                  </td>';
			echo '</tr>';
		}
}
function listSurveySuper(){
	global $connect;

	$sql = "SELECT * FROM survey";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['name'].'</th>';
			echo '<th valign=middle>'.$row['campaign'].'</th>';
			echo '<th valign=middle><a href="theSurvey.php?id='.$row['id'].'">Go To '.$row['name'].'</a></th>';
			if ($row['aproved'] == true){
			    echo '<th class="text-center" valign=middle><a href="approveFunctionSurvey.php?id=0&sid='.$row['id'].'"><i class="fas fa-check"></i></a></th>';
            }else{
			    echo '<th class="text-center" valign=middle><a href="approveFunctionSurvey.php?id=1&sid='.$row['id'].'"><i class="far fa-times-circle"></i></a></th>';
            }
			echo '</tr>';
		}
}

function loadMarketers(){
	global $connect;
	    $campw ='';
    $totalSum = 0;
    $amountSur= 0;
    $amountads = 0;

	$sql = "SELECT * FROM users WHERE typeOfUser = '1'";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    $email = $row['email'];

		    $sql1 = "SELECT * FROM campaign WHERE creator = '$email'";
	        $check_database_query = mysqli_query($connect,$sql1);
	        $amountCamp = mysqli_num_rows($check_database_query);
	        while($row2 = mysqli_fetch_array($check_database_query)){
                $totalSum += $row2['dailyBudget'];
                $campw = $row2['campaignName'];

                $sql2 = "SELECT * FROM survey WHERE campaign = '$campw'";
	            $check_database_query1 = mysqli_query($connect,$sql2);
	            $amountSur += mysqli_num_rows($check_database_query1);

	            $sql3 = "SELECT * FROM adds WHERE campaign = '$campw'";
	            $check_database_query2 = mysqli_query($connect,$sql3);
	            $amountads += mysqli_num_rows($check_database_query2);
            }

			echo '<tr>';
			echo '<td class="text-center">'.$row['name'].'</td>';
			echo '<td class="text-center">'.$row['email'].'</td>';
			echo '<td class="text-center">'.$amountCamp.'</td>';
			echo '<td class="text-center">'.$amountSur.'</td>';
			echo '<td class="text-center">'.$amountads.'</td>';
			echo '<td class="text-center">'.$totalSum.'</td>';
			echo '<td class="text-center">'.$row['affiliateNumber'].'</td>';
			echo '<td class="text-center">
			<a class="ml-3" href="editUsers.php?id='.$row['id'].'&token=1"><i class="fas fa-pen"></i></a>
			<a class="ml-3" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal'.$row['id'].'">
              <i class="fas fa-trash-alt"></i>
            </a>
                     
                  </td>';
			echo '</tr>';
			echo '
			<!-- Modal -->
<div class="modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are about to delete a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you shure you want to delete this user.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="deluser.php?id='.$row['id'].'&token=1" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
			';


		}
}

function loadSubscribers()
{
    global $connect;
    $Total = 0;
    $sql = "SELECT * FROM users WHERE typeOfUser = '2'";
    $r = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($r)) {
        $email = $row['email'];
        $sql1 = "SELECT * FROM transaction WHERE user = '$email'";
        $r1 = mysqli_query($connect, $sql1);
        $amount = mysqli_num_rows($r1);
        while ($row1 = mysqli_fetch_array($r1)) {
            $Total += $row1['amount'];
        }
        echo '<tr>';
        echo '<td class="text-center">' . $row['name'] . '</td>';
        echo '<td class="text-center">' . $email . '</td>';
        echo '<td class="text-center">' . $amount . '</td>';
        echo '<td class="text-center">$' . $Total . '</td>';
        echo '<td class="text-center">' . $row['affiliateNumber'] . '</td>';
        echo '<td class="text-center">
             <a class="ml-3" href="editUsers.php?id='.$row['id'].'&token=2"><i class="fas fa-pen"></i></a>
			<a class="ml-3" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal'.$row['id'].'">
              <i class="fas fa-trash-alt"></i>
            </a>
                     
                  </td>';
			echo '</tr>';
			echo '
			<!-- Modal -->
<div class="modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are about to delete a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you shure you want to delete this user.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="deluser.php?id='.$row['id'].'&token=2" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
			';
    }
}

function selectTrans(){
    global $connect;
    $name = '';

    $sql = "SELECT * FROM transaction ";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    $id  = $row['name'];
		    $sql1 = "SELECT * FROM adds WHERE id = '$id' ";
    	    $r1  = mysqli_query($connect,$sql1);
    	        while($row1 = mysqli_fetch_array($r1)){
    	            $name = $row1['name'];
                }
			echo '<tr>';
			echo '<td class="text-center">'.$row['id'].'</td>';
			echo '<td class="text-center">'.$row['user'].'</td>';
			echo '<td class="text-center">'.$row['amount'].'</td>';
			echo '<td class="text-center">'.$row['date_created'].'</td>';
			echo '<td class="text-center">'.$row['note'].'</td>';
			echo '<td class="text-center">'.$name.'</td>';
			echo '<td class="text-center">Credit/Debit</td>';
			echo '</tr>';
		}
}

function getUserData1($id){
    global $connect;
    $array = array();
	$sql = "SELECT * FROM users WHERE id  = '$id'";
	$r = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
			$array = [
				"id" => $row['id'],
				"name" => $row['name'],
				"email" => $row['email'],
				"affiliateNumber" => $row['affiliateNumber'],
				"money" => $row['VirtualWallet'],
				"hasp" => $row['password'],
			];
		}
		return $array;
}

function changeUser1($data){
    global $connect;

	 $affiliateNumber = isEmpty($data['affiliateNumber']);
	 $name = $data['name'];
	 $email = $data['email'];
	 $id = $data['id'];

			$passChange = "UPDATE users SET name = '$name', email = '$email', affiliateNumber = '$affiliateNumber' WHERE id = '$id' ";
			$res = mysqli_query($connect,$passChange);
			
			header('Location: dashboard.php');
            exit();

}
function changeUsersuper($data,$email){
    global $connect;

	 $name = isEmpty($data['name']);
	 $oldpassword = $data['oldpassword'];
	 $passwordnew1 = $data['passwordnew1'];
	 $passwordnew2 = $data['passwordnew2'];
	 
	 $oldpassword = pass_hash($oldpassword);
	 
	 $sql = "SELECT * FROM admin WHERE user = '$email' AND password = '$oldpassword' ";
	 $r = mysqli_query($connect,$sql);

	 	$check_login_query = mysqli_num_rows($r);

        if($name === $email){
            if($check_login_query == 1){
                if($passwordnew1 === $passwordnew2){
                    $passwordnew1 = pass_hash($passwordnew1);
                    
                    $passChange = "UPDATE admin SET   password = '$passwordnew1' WHERE user = '$email' ";
    			    $res = mysqli_query($connect,$passChange);
        			header('Location: dashboard.php');
                    exit();
                }else{
                    echo '<div class="alert alert-danger text-center" style="    position: relative;
    top: 70px;" role="alert">
    									 New Passwords dont match.
    									</div>';
                }
            }else{
                echo '<div class="alert alert-danger text-center" style="    position: relative;
    top: 70px;" role="alert">
    									 Old Password doesnt match.
    									</div>';
            }	
        }else{
           if($check_login_query == 1){
                if($passwordnew1 === $passwordnew2){
                    $passwordnew1 = pass_hash($passwordnew1);
                    
                    $passChange = "UPDATE admin SET   password = '$passwordnew1' WHERE user = '$email' ";
    			    $res = mysqli_query($connect,$passChange);
        			header('Location: dashboard.php');
                    exit();
                }else{
                    echo '<div class="alert alert-danger text-center" style="    position: relative;
    top: 70px;" role="alert">
    									 New Passwords dont match.
    									</div>';
                }
            }else{
                echo '<div class="alert alert-danger text-center" style="    position: relative;
    top: 70px;" role="alert">
    									 Old Password doesnt match.
    									</div>';
        }
		

}
}

function marketersSpec(){
    global $connect;

    $sql = "SELECT * FROM users WHERE typeOfUser = '1' AND added = '0' ";
    $r = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($r)) {
        $id_super = $row['id'];
            $sql2 = "SELECT * FROM countries";
            $r2 = mysqli_query($connect,$sql2);
            while($row1 = mysqli_fetch_array($r2)) {
                $id = $row1['id'];
                    if ($row['country'] === $row1['name']){
                        $getcount = "SELECT * FROM countries WHERE id = '$id'";
                        $querycount = mysqli_query($connect,$getcount);
                            while($row2 = mysqli_fetch_array($querycount)){
                                $currentNum = $row2['markNum'];
                            }
                             $newNum = $currentNum + 1;
                        $updateSql = "UPDATE countries SET markNum = '$newNum' WHERE id = '$id'  ";
                        $updateResult = mysqli_query($connect,$updateSql);
                        $updateSql = "UPDATE users SET added = 1 WHERE id = '$id_super'  ";
                        $updateResult = mysqli_query($connect,$updateSql);
                    }

            }


    }

    $sql = "SELECT * FROM users WHERE typeOfUser = '1'  AND added1 = '0'  ";
    $r = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($r)) {
        $id_super = $row['id'];
        $other_var = json_decode($row['other']);
        foreach ($other_var as $item){
            $getcount = "SELECT * FROM segment WHERE name = '$item'";
            $querycount = mysqli_query($connect,$getcount);
                while($row2 = mysqli_fetch_array($querycount)){
                    $id = $row2['id'];
                    $currentNum = $row2['sumMark'];
                }
                $newNum = $currentNum + 1;
                $updateSql = "UPDATE segment SET sumMark = '$newNum' WHERE id = '$id'  ";
                                     $updateResult = mysqli_query($connect,$updateSql);
                                     $updateSql = "UPDATE users SET added1 = 1 WHERE id = '$id_super'  ";
                        $updateResult = mysqli_query($connect,$updateSql);
        }





    }



    $sql7 = "SELECT * FROM users WHERE typeOfUser = '1'";
    $r7 = mysqli_query($connect,$sql7);
    $checkTotalNumOfUsers = mysqli_num_rows($r7);

            echo '<tr>';
        echo '<td class="text-center">' . $checkTotalNumOfUsers . '</td>';
        $sql6 = "SELECT * FROM countries ";
        $r6 = mysqli_query($connect,$sql6);
            while ($row6 = mysqli_fetch_array($r6)){
                echo '<td class="text-center">' . $row6['markNum'] . '</td>';
            }
            $sql7 = "SELECT * FROM segment ";
        $r7 = mysqli_query($connect,$sql7);
            while ($row7 = mysqli_fetch_array($r7)){
                echo '<td class="text-center">' . $row7['sumMark'] . '</td>';
            }
        echo '</tr>';

}

function subscribersSpec(){
    global $connect;

    $sql = "SELECT * FROM users WHERE typeOfUser = '2' AND added = '0' ";
    $r = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($r)) {
        $id_super = $row['id'];
            $sql2 = "SELECT * FROM countries";
            $r2 = mysqli_query($connect,$sql2);
            while($row1 = mysqli_fetch_array($r2)) {
                $id = $row1['id'];
                    if ($row['country'] === $row1['name']){
                        $getcount = "SELECT * FROM countries WHERE id = '$id'";
                        $querycount = mysqli_query($connect,$getcount);
                            while($row2 = mysqli_fetch_array($querycount)){
                                $currentNum = $row2['subNum'];
                            }
                            $newNum = $currentNum + 1;

                        $updateSql = "UPDATE countries SET subNum = '$newNum' WHERE id = '$id'  ";
                        $updateResult = mysqli_query($connect,$updateSql);
                        $updateSql = "UPDATE users SET added = 1 WHERE id = '$id_super'  ";
                        $updateResult = mysqli_query($connect,$updateSql);
                    }

            }

    }

    $sql1 = "SELECT * FROM users WHERE typeOfUser = '2' AND gender = 'male' ";
    $r1 = mysqli_query($connect,$sql1);
    $checkTotalNumOfMaleUsers = mysqli_num_rows($r1);

    $sql7 = "SELECT * FROM users WHERE typeOfUser = '2'";
    $r7 = mysqli_query($connect,$sql7);
    $checkTotalNumOfUsers = mysqli_num_rows($r7);

    $checkTotalNumOfFemaleUsers = $checkTotalNumOfUsers - $checkTotalNumOfMaleUsers;
}

function subscriberTotalCheck(){
    global $connect;
      $sql7 = "SELECT * FROM users WHERE typeOfUser = '2'";
    $r7 = mysqli_query($connect,$sql7);
    $checkTotalNumOfUsers = mysqli_num_rows($r7);
    return $checkTotalNumOfUsers;
    
}
function subscriberMaleCheck(){
    global $connect;
     $sql1 = "SELECT * FROM users WHERE typeOfUser = '2' AND gender = 'male' ";
    $r1 = mysqli_query($connect,$sql1);
    $checkTotalNumOfMaleUsers = mysqli_num_rows($r1);
    return $checkTotalNumOfMaleUsers;
    
}
function subscriberFemaleCheck(){
    global $connect;
     $sql1 = "SELECT * FROM users WHERE typeOfUser = '2' AND gender = 'female' ";
    $r1 = mysqli_query($connect,$sql1);
    $checkTotalNumOfMaleUsers = mysqli_num_rows($r1);
    return $checkTotalNumOfMaleUsers;
    
}

function marketerTotalCheck(){
    global $connect;
      $sql7 = "SELECT * FROM users WHERE typeOfUser = '1'";
    $r7 = mysqli_query($connect,$sql7);
    $checkTotalNumOfUsers = mysqli_num_rows($r7);
    return $checkTotalNumOfUsers;
    
}
function marketerMaleCheck(){
    global $connect;
     $sql1 = "SELECT * FROM users WHERE typeOfUser = '1' AND gender = 'male' ";
    $r1 = mysqli_query($connect,$sql1);
    $checkTotalNumOfMaleUsers = mysqli_num_rows($r1);
    return $checkTotalNumOfMaleUsers;
    
}
function marketerFemaleCheck(){
    global $connect;
     $sql1 = "SELECT * FROM users WHERE typeOfUser = '1' AND gender = 'female' ";
    $r1 = mysqli_query($connect,$sql1);
    $checkTotalNumOfMaleUsers = mysqli_num_rows($r1);
    return $checkTotalNumOfMaleUsers;
    
}

function randomHex() {
   $chars = 'ABCDEF0123456789';
   $color = '#';
   for ( $i = 0; $i < 6; $i++ ) {
      $color .= $chars[rand(0, strlen($chars) - 1)];
   }
   return $color;
}


function subscribercountryCheck(){
    global $connect;
    
    
     $sql1 = "SELECT * FROM countries ";
    $r1 = mysqli_query($connect,$sql1);
    echo "data: [";
    while($row = mysqli_fetch_array($r1)){
        
        if($row['subNum'] !== '0'){
            echo $row['subNum'] .",";
        }
    }
    echo "],";

    
    
}
function subscribercountryNameCheck(){
    global $connect;

     $sql1 = "SELECT * FROM countries ";
    $r1 = mysqli_query($connect,$sql1);
    echo "labels: [";
    while($row = mysqli_fetch_array($r1)){
        
        if($row['subNum'] !== '0'){
            echo "'".$row['name'] ."'" .",";
        }
    }
    echo "]";

    
}

function marketercountryCheck(){
    global $connect;
    
    
     $sql1 = "SELECT * FROM countries ";
    $r1 = mysqli_query($connect,$sql1);
    echo "data: [";
    while($row = mysqli_fetch_array($r1)){
        
        if($row['markNum'] !== '0'){
            echo $row['markNum'] .",";
        }
    }
    echo "],";

    
    
}

function marketersegmentCheck(){
    global $connect;
    
    
     $sql1 = "SELECT * FROM segment ";
    $r1 = mysqli_query($connect,$sql1);
    echo "data: [";
    while($row = mysqli_fetch_array($r1)){
        
        if($row['sumMark'] !== '0'){
            echo $row['sumMark'] .",";
        }
    }
    echo "],";

    
    
}
function marketersegmentNameCheck(){
    global $connect;
    
    
     $sql1 = "SELECT * FROM segment ";
    $r1 = mysqli_query($connect,$sql1);
    echo "labels: [";
    while($row = mysqli_fetch_array($r1)){
        
       if($row['sumMark'] !== '0'){
            echo "'".$row['name'] ."'" .",";
        }
    }
    echo "],";

    
    
}
function marketercountryNameCheck(){
    global $connect;

     $sql1 = "SELECT * FROM countries ";
    $r1 = mysqli_query($connect,$sql1);
    echo "labels: [";
    while($row = mysqli_fetch_array($r1)){
        
        if($row['sumMark'] !== '0'){
            echo "'".$row['name'] ."'" .",";
        }
    }
    echo "]";

    
}


function coutry(){
    global $connect;

            $sql2 = "SELECT * FROM countries";
            $r2 = mysqli_query($connect,$sql2);
            while($row1 = mysqli_fetch_array($r2)) {
                    echo " <th class='text-center'>". $row1['name'] ."</th>";

            }
}
function segment(){
    global $connect;

            $sql2 = "SELECT * FROM segment";
            $r2 = mysqli_query($connect,$sql2);
            while($row1 = mysqli_fetch_array($r2)) {
                    echo " <th class='text-center'>". $row1['name'] ."</th>";

            }
}

function createSuperUser($data){
    global $connect;

    $user = $data['user'];
  	 $user = mysqli_real_escape_string($connect,$user); //Remove sql Injection
     $user = strip_tags($data['user']); //Remove html tags
    $password = $data['password'];
  	 $password = mysqli_real_escape_string($connect,$password); //Remove sql Injection
     $password = strip_tags($data['password']); //Remove html tags
    $restrict1 = emptyYes($data['restrict1']);
  	 $restrict1 = mysqli_real_escape_string($connect,$restrict1); //Remove sql Injection
     $restrict1 = strip_tags($data['restrict1']); //Remove html tags
    $restrict2 = emptyYes($data['restrict2']);
  	 $restrict2 = mysqli_real_escape_string($connect,$restrict2); //Remove sql Injection
     $restrict2 = strip_tags($data['restrict2']); //Remove html tags
    $restrict3 = emptyYes($data['restrict3']);
  	 $restrict3 = mysqli_real_escape_string($connect,$restrict3); //Remove sql Injection
     $restrict3 = strip_tags($data['restrict3']); //Remove html tags
    $restrict4 = emptyYes($data['restrict4']);
  	 $restrict4 = mysqli_real_escape_string($connect,$restrict4); //Remove sql Injection
     $restrict4 = strip_tags($data['restrict4']); //Remove html tags
    $restrict5 = emptyYes($data['restrict5']);
  	 $restrict5 = mysqli_real_escape_string($connect,$restrict5); //Remove sql Injection
     $restrict5 = strip_tags($data['restrict5']); //Remove html tags

    $password = pass_hash1($password);

    $sql = "INSERT INTO admin (user, password, restrict1, restrict2, restrict3, restrict4, restrict5) VALUES ('$user', '$password', '$restrict1', '$restrict2', '$restrict3', '$restrict4', '$restrict5')";
    $r = mysqli_query($connect,$sql);
    		if(!$r){
					echo $sql;

				}else{
					header('Location: dashboard.php');
					exit();
				}
}



function pass_hash1($password){
	$password = str_replace('"', '', $password); //remove spaces
	$password = str_replace('`', '', $password); //remove spaces
	$password = str_replace('”', '', $password); //remove chars
	$password = str_replace('“', '', $password); //remove chars
	$password = str_replace(' ', '', $password); //remove spaces




	//password cripting
	$hashFormat = "$2y$10$";
	$salt = "justcryptingstufforgod";
	$hashing = $hashFormat . $salt;
	$password = my_simple_crypt1( $password,'e' );
 	$password = crypt($password,$hashing);

 	return $password;
}

function my_simple_crypt1( $string, $action = 'e' ) {
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

        if( $action == 'e' ) {
            $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
        }
        else if( $action == 'd' ){
            $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
        }

        return $output;
    }
function emptyYes($data){
    if ($data == '' || empty($data)){
        return 0;
    }else{
        return $data;
    }
}

function loadSuperUsers(){
       global $connect;
       $restrict1 = 'Access Granted';
       $restrict2 = 'Access Granted';
       $restrict3 = 'Access Granted';
       $restrict4 = 'Access Granted';
       $restrict5 = 'Access Granted';

    $Total = 0;
    $sql = "SELECT * FROM admin ";
    $r = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($r)) {
        if ($row['restrict1'] === '0'){
            $restrict1 = 'No Access Granted';
        }
        if ($row['restrict2'] === '0'){
            $restrict2 = 'No Access Granted';
        }
        if ($row['restrict3'] === '0'){
            $restrict3 = 'No Access Granted';
        }
        if ($row['restrict4'] === '0'){
            $restrict4 = 'No Access Granted';
        }
        if ($row['restrict5'] === '0'){
            $restrict5 = 'No Access Granted';
        }
        $id = $row['id'];
        echo '<tr>';
        echo '<td class="text-center">' . $row['user'] . '</td>';
        echo '<td class="text-center">' .$restrict1. '</td>';
        echo '<td class="text-center">' . $restrict2 . '</td>';
        echo '<td class="text-center">' . $restrict3 . '</td>';
        echo '<td class="text-center">' . $restrict4 . '</td>';
        echo '<td class="text-center">' . $restrict5 . '</td>';
        echo '<td class="text-center">
                    <a class="ml-3" href="editSuperUserPassword.php?id='.$id.'"><i class="fas fa-key"></i></a>
                    <a class="ml-3" href="editSuperUser.php?id='.$id.'"><i class="fas fa-pen"></i></a>
                     <a class="ml-3" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal'.$row['id'].'">
              <i class="fas fa-trash-alt"></i>
            </a>
                     
                  </td>';
			echo '</tr>';
			echo '
			<!-- Modal -->
<div class="modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">You are about to delete a User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you shure you want to delete this user.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="deluser.php?id='.$row['id'].'&token=3" class="btn btn-primary">Delete</a>
      </div>
    </div>
  </div>
</div>
			';

    }
}

function loadAccess($id){
           global $connect;

    $Total = 0;
    $sql = "SELECT * FROM admin WHERE id LIKE '$id'";
    $r = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($r)) {
        if ($row['restrict1'] === '0'){
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict1" value="1">
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Users</label><br>';
        }else{
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict1" value="1" checked>
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Users</label><br>';
        }
        if ($row['restrict2'] === '0'){
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict2" value="1">
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Campaigns,Ads and Surveys</label><br>';
        }else{
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict2" value="1" checked>
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Campaigns,Ads and Surveys</label><br>';
        }
        if ($row['restrict3'] === '0'){
           echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict3" value="1">
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Reports</label><br>';
        }else{
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict3" value="1" checked>
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Reports</label><br>';
        }
        if ($row['restrict4'] === '0'){
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict4" value="1">
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Finances</label><br>';
        }else{
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict4" value="1" checked>
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Finances</label><br>';
        }
        if ($row['restrict5'] === '0'){
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict5" value="1">
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Creating super Users</label><br>';
        }else{
            echo '<input class="ml-3 mt-3 big-checkbox" type="checkbox" id="vehicle1" name="restrict5" value="1" checked>
                                                      <label class="ml-2 big-font" for="vehicle1">Access to Creating super Users</label><br>';
        }


    }
}
function updateSuperUser($data){
    global $connect;

   $restrict1 = emptyYes($data['restrict1']);
 	 $restrict1 = mysqli_real_escape_string($connect,$restrict1); //Remove sql Injection
     $restrict1 = strip_tags($data['restrict1']); //Remove html tags
    $restrict2 = emptyYes($data['restrict2']);
  	 $restrict2 = mysqli_real_escape_string($connect,$restrict2); //Remove sql Injection
     $restrict2 = strip_tags($data['restrict2']); //Remove html tags
    $restrict3 = emptyYes($data['restrict3']);
  	 $restrict3 = mysqli_real_escape_string($connect,$restrict3); //Remove sql Injection
     $restrict3 = strip_tags($data['restrict3']); //Remove html tags
    $restrict4 = emptyYes($data['restrict4']);
  	 $restrict4 = mysqli_real_escape_string($connect,$restrict4); //Remove sql Injection
     $restrict4 = strip_tags($data['restrict4']); //Remove html tags
    $restrict5 = emptyYes($data['restrict5']);
  	 $restrict5 = mysqli_real_escape_string($connect,$restrict5); //Remove sql Injection
     $restrict5 = strip_tags($data['restrict5']); //Remove html tags

    $sql = "UPDATE admin SET restrict1 = '$restrict1',restrict2 = '$restrict2',restrict3 = '$restrict3',restrict4 = '$restrict4',restrict5 = '$restrict5' ";
    $r = mysqli_query($connect,$sql);
    		if(!$r){
					echo $sql;

				}else{
					header('Location: viewSuperUser.php');
					exit();
				}
}

function listcampaign21(){
    global $connect;

    	$sql = "SELECT * FROM campaign";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['campaignName'].'</th>';
			echo '<th valign=middle>'.$row['dateFrom'].'</th>';
			echo '<th valign=middle>'.$row['dateTo'].'</th>';
			echo '<th valign=middle>'.$row['ageFrom'].'</th>';
			echo '<th valign=middle>'.$row['ageTo'].'</th>';
			echo '<th valign=middle>'.$row['creator'].'</th>';
			echo '<th valign=middle>'.$row['dailyBudget'].'</th>';
			echo '<th valign=middle>'.$row['other_params'].'</th>';
			echo '<th valign=middle><a href="theCampaign.php?id='.$row['id'].'">Go To '.$row['campaignName'].'</a></th>';
			if ($row['aproved'] == true){
			    echo '<th class="text-center" valign=middle><a href="approveFunction.php?id=0&sid='.$row['id'].'"><i class="fas fa-check"></i></a></th>';
            }else{
			    echo '<th class="text-center" valign=middle><a href="approveFunction.php?id=1&sid='.$row['id'].'"><i class="far fa-times-circle"></i></a></th>';
            }
			echo '</tr>';
		}
}

function listsyrveyList21(){
    global $connect;

    	$sql = "SELECT * FROM surveyAnswers";
	    $r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
		    $syrveyName = '';
		    $syrveyid = $row['surveyId'];
		    $sql1 = "SELECT * FROM survey WHERE id = $syrveyid";
	        $r1 = mysqli_query($connect,$sql1);
	        while ($row1 = mysqli_fetch_array($r1)) {
	            $syrveyName = $row1['name'];
	        }
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['user'].'</th>';
			echo '<th valign=middle>'.$syrveyName.'</th>'; 
			echo '<th valign=middle><a href="surveySingleAnswers.php?id='.$row['id'].'">Go To '.$syrveyName.' Answers</a></th>';
			echo '</tr>';
		}
}

function watchsate(){
    global $connect;

    $sql = "SELECT * FROM watchsate WHERE id = 1 ";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo $row['price'];
		}
}

function updateWatchSate($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];

    $sql = "UPDATE watchsate SET price = '$priceWatchShare' WHERE id = 1 ";
    $r = mysqli_query($connect,$sql);
    header('Location: pricing.php');
    exit();
}
function priceSurveys (){
    global $connect;

    $sql = "SELECT * FROM watchsate WHERE id = 2";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo $row['price'];
		}
}

function watchsateSurveys (){
    global $connect;

    $sql = "SELECT * FROM watchsate WHERE id = 4";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo $row['price'];
		}
}

function updateSurveys ($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];

    $sql = "UPDATE watchsate SET price = '$priceWatchShare' WHERE id = 2 ";
    $r = mysqli_query($connect,$sql);
    header('Location: pricing.php');
    exit();
}
function watchsatepayout (){
    global $connect;

    $sql = "SELECT * FROM watchsate WHERE id = 3";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo $row['price'];
		}
}

function updatePayoutWS ($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];

    $sql = "UPDATE watchsate SET price = '$priceWatchShare' WHERE id = 3 ";
    $r = mysqli_query($connect,$sql);
    header('Location: pricing.php');
    exit();
}
function updatePayoutSurvey ($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];

    $sql = "UPDATE watchsate SET price = '$priceWatchShare' WHERE id = 4 ";
    $r = mysqli_query($connect,$sql);
    header('Location: pricing.php');
    exit();
}

function promoCodeCreation ($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];
    $promocode = generateRandomString1();
    $now = date("Y/m/d h:i:sa");
    $sql = "INSERT INTO promocodes (promocode,price,date_created) VALUES ('$promocode','$priceWatchShare','$now')";
    $r = mysqli_query($connect,$sql);
    header('Location: promoCodes.php');
    exit();
}

function generateRandomString1($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function loadPromoCodes(){
       global $connect;

    $sql = "SELECT * FROM promocodes";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
		    $id = $row['id'];
			echo '<tr scope="row">';
			echo '<th class="text-center" valign=middle>'.$row['id'].'</th>';
			echo '<th class="text-center" valign=middle>'.$row['promocode'].'</th>';
			echo '<th class="text-center" valign=middle>'.$row['price'].'</th>';
			echo '<th class="text-center" valign=middle>'.$row['date_created'].'</th>';
			echo '<td class="text-center">
                     <a class="ml-3" href="deletePromoCodes.php?id='.$id.'"><i class="fas fa-trash-alt"></i></a>
                  </td>';
			echo '</tr>';
		}
}

function countrySelect(){
       global $connect;

    $sql = "SELECT * FROM countries";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
		    $id = $row['id'];
		    $name = $row['name'];
			echo '<option value="'.$id.'">'.$name.'</option>';
		}
}

function updateCountryVAT($data){
    global $connect;

    $priceWatchShare = $data['priceWatchShare'];
      	 $priceWatchShare = mysqli_real_escape_string($connect,$priceWatchShare); //Remove sql Injection
     $priceWatchShare = strip_tags($data['priceWatchShare']); //Remove html tags
    $country = $data['country'];
  	 $country = mysqli_real_escape_string($connect,$country); //Remove sql Injection
     $country = strip_tags($data['country']); //Remove html tags

    $sql = "UPDATE countries SET vat = '$priceWatchShare' WHERE id = '$country' ";
    $r = mysqli_query($connect,$sql);
    header('Location: vat.php');
    exit();
}

function listCountryVAT(){
           global $connect;

    $sql = "SELECT * FROM countries";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
		    $id = $row['id'];
			echo '<th class="text-center" valign=middle>'.$row['vat'].'</th>';

		}
}

function loadInvoicing(){
    global $connect;
    $name = '';

    $sql = "SELECT * FROM transaction ";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    if ($row['amount'] > 1){
		        $id  = $row['name'];
                $id_x  = $row['id'];
                echo '<tr>';
                echo '<td class="text-center">'.$row['id'].'</td>';
                echo '<td class="text-center">'.$row['user'].'</td>';
                echo '<td class="text-center">'.$row['amount'].'</td>';
                echo '<td class="text-center">'.$row['date_created'].'</td>';
                echo '<td class="text-center"><a class="ml-3" href="invoiceDoc.php?id='.$id_x.'" target="_blank"><i class="fas fa-eye"></i></a></td>';
                echo '</tr>';
            }

		}
}

function invoice($id){
    global $connect;
    $array = array();

    $sql = "SELECT * FROM transaction WHERE  id = '$id'";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
            $array['name']= $row['user'];
            $array['amount']= $row['amount'];
            $array['date']= $row['date_created'];
            $array['note']= $row['note'];

		}
		return $array;
}

function messagerMarketers(){
    global $connect;
    $from = $_SESSION['username'];
      $my_id = '';
      $getAdminId = "SELECT * FROM admin WHERE user = '$from' ";
      $queryResult = mysqli_query($connect,$getAdminId);
        while($row = mysqli_fetch_array($queryResult)){
            $my_id = $row['id'];
        } 
        $sql = "SELECT * FROM users WHERE  typeOfUser = '1'";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    
		    $roomKey = "chatRoom".$row['id'];
		    $checkMessages = "SELECT * FROM  chat_message WHERE roomKey = '$roomKey' AND to_user_id = '$my_id' AND status = '0' AND isAdmin = '1'";
		    $rcheck = mysqli_query($connect,$checkMessages);
		    if(!$rcheck){
		        
		    }else{
		       $numRowsCheck = mysqli_num_rows($rcheck); 
		    }
		    
		    
		    $id = $row['id'];
            echo '<tr>';
			echo '<td class="text-center">'.$row['name'].'</td>';
			echo '<td class="text-center">'.$row['email'].'</td>';
			echo '<td class="text-center">
                    <a class="ml-3" href="messanger.php?id='.$id.'"><i class="fa fa-commenting"></i></a>
                  </td>';
            echo '<td class="text-center">'.$numRowsCheck.'</td>';
			echo '</tr>';

		}
    
}
function messagerSubscriber(){
    global $connect;
    $from = $_SESSION['username'];
      $my_id = '';
      $getAdminId = "SELECT * FROM admin WHERE user = '$from' ";
      $queryResult = mysqli_query($connect,$getAdminId);
        while($row = mysqli_fetch_array($queryResult)){
            $my_id = $row['id'];
        } 
        $sql = "SELECT * FROM users WHERE  typeOfUser = '2'";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    
		    $roomKey = "chatRoom".$row['id'];
		    $checkMessages = "SELECT * FROM  chat_message WHERE roomKey = '$roomKey' AND to_user_id = '$my_id' AND status = '0' AND isAdmin = '1'";
		    $rcheck = mysqli_query($connect,$checkMessages);
		    if(!$rcheck){
		        
		    }else{
		       $numRowsCheck = mysqli_num_rows($rcheck); 
		    }
		    
		    $id = $row['id'];
            echo '<tr>';
			echo '<td class="text-center">'.$row['name'].'</td>';
			echo '<td class="text-center">'.$row['email'].'</td>';
			echo '<td class="text-center">
                    <a class="ml-3" href="messanger.php?id='.$id.'"><i class="fa fa-commenting"></i></a>
                  </td>';
                  echo '<td class="text-center">'.$numRowsCheck.'</td>';
			echo '</tr>';

		}
    
}

function loadAdminMessages($from_user_id,$to_user_id){
    global $connect;
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
}

function SyrveyAnswers($id,$idSurvey){
    global $connect;

    $sql = "SELECT * FROM survey WHERE id = '$id' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $multichoiceQuestion = $row['multichoiceQuestion'];
            $multichoiceAnswer1 = $row['multichoiceAnswer1'];
            $multichoiceAnswer2 = $row['multichoiceAnswer2'];
            $multichoiceAnswer3 = $row['multichoiceAnswer3'];
            $multichoiceAnswer4 = $row['multichoiceAnswer4'];
            $checkboxQuestion = $row['checkboxQuestion'];
            $checkboxAnswer1 = $row['checkboxAnswer1'];
            $checkboxAnswer2 = $row['checkboxAnswer2'];
            $checkboxAnswer3 = $row['checkboxAnswer3'];
            $checkboxAnswer4 = $row['checkboxAnswer4'];
            $dropdownQuestion = $row['dropdownQuestion'];
            $dropdownAnswer1 = $row['dropdownAnswer1'];
            $dropdownAnswer2 = $row['dropdownAnswer2'];
            $dropdownAnswer3 = $row['dropdownAnswer3'];
            $dropdownAnswer4 = $row['dropdownAnswer4'];

            $multichoiceQuestion = json_decode($multichoiceQuestion);
            $multichoiceAnswer1 = json_decode($multichoiceAnswer1);
            $multichoiceAnswer2 = json_decode($multichoiceAnswer2);
            $multichoiceAnswer3 = json_decode($multichoiceAnswer3);
            $multichoiceAnswer4 = json_decode($multichoiceAnswer4);
            
            $checkboxQuestion = json_decode($checkboxQuestion);
            $checkboxAnswer1 = json_decode($checkboxAnswer1);
            $checkboxAnswer2 = json_decode($checkboxAnswer2);
            $checkboxAnswer3 = json_decode($checkboxAnswer3);
            $checkboxAnswer4 = json_decode($checkboxAnswer4);
            
            $dropdownQuestion = json_decode($dropdownQuestion);
            $dropdownAnswer1 = json_decode($dropdownAnswer1);
            $dropdownAnswer2 = json_decode($dropdownAnswer2);
            $dropdownAnswer3 = json_decode($dropdownAnswer3);
            $dropdownAnswer4 = json_decode($dropdownAnswer4);
            
            $multichoiceAnswerFromUser1 = '';
            $multichoiceAnswerFromUser2 = '';
            $multichoiceAnswerFromUser3 = '';
            $multichoiceAnswerFromUser4 = '';
            $checkboxAnswerFromUser = '';
            $dropdownAnswerFromUser = '';
            
            $sql1 = "SELECT * FROM surveyAnswers WHERE id = '$idSurvey' ";
            $r1 = mysqli_query($connect,$sql1);
            while($row1 = mysqli_fetch_array($r1)){
                $multichoiceAnswerFromUser1 = $row1['multichoiceAnswer1'];
                $multichoiceAnswerFromUser2 = $row1['multichoiceAnswer2'];
                $multichoiceAnswerFromUser3 = $row1['multichoiceAnswer3'];
                $multichoiceAnswerFromUser4 = $row1['multichoiceAnswer4'];
                $checkboxAnswerFromUser = $row1['checkboxAnswer'];
                $dropdownAnswerFromUser = $row1['dropdownAnswer'];
                
                $multichoiceAnswerFromUser1 = json_decode($multichoiceAnswerFromUser1);
                $multichoiceAnswerFromUser2 = json_decode($multichoiceAnswerFromUser2);
                $multichoiceAnswerFromUser3 = json_decode($multichoiceAnswerFromUser3);
                $multichoiceAnswerFromUser4 = json_decode($multichoiceAnswerFromUser4);
                $checkboxAnswerFromUser = json_decode($checkboxAnswerFromUser);
                $dropdownAnswerFromUser = json_decode($dropdownAnswerFromUser);
            }

            $i = 0;
            foreach ( $multichoiceQuestion as $multiquestion){
                echo '<div class="col-6 mt-5 mx-auto border">
                <h1 class="text-center pt-4">'.$multiquestion.'</h1>
                        <div class="d-flex justify-content-between mt-5 pb-4">
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="multifooby1['.$i.'][]" value="'.$multichoiceAnswer1[$i].'">
                            <label class="big-font" for="vehicle1"> '.$multichoiceAnswer1[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="multifooby2['.$i.'][]" value="'.$multichoiceAnswer2[$i].'">
                            <label class="big-font" for="vehicle2"> '.$multichoiceAnswer2[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="multifooby3['.$i.'][]" value="'.$multichoiceAnswer3[$i].'">
                            <label class="big-font" for="vehicle3"> '.$multichoiceAnswer3[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="multifooby4['.$i.'][]" value="'.$multichoiceAnswer4[$i].'">
                            <label class="big-font" for="vehicle3"> '.$multichoiceAnswer4[$i].'</label><br>
                            </div>
                                        </div>';
                            switch ($i) {
                                    case 0:
                                        foreach ( $multichoiceAnswerFromUser1 as $answerx){
                                            echo '<div class="col-12"><p style ="text-align: center;
    margin-top: 1rem;"><strong>Answer By user: '.$answerx.'</strong></p></div>';
                                        }
                                        break;
                                    case 1:
                                        foreach ( $multichoiceAnswerFromUser2 as $answerx){
                                            echo '<div class="col-12"><p style ="text-align: center;
    margin-top: 1rem;"><strong>Answer By user: '.$answerx.'</strong></p></div>';
                                        }
                                        break;
                                    case 2:
                                        foreach ( $multichoiceAnswerFromUser3 as $answerx){
                                            echo '<div class="col-12"><p style ="text-align: center;
    margin-top: 1rem;"><strong>Answer By user: '.$answerx.'</strong></p></div>';
                                        }
                                        break;
                                    case 3:
                                       foreach ( $multichoiceAnswerFromUser4 as $answerx){
                                            echo '<div class="col-12"><p style ="text-align: center;
    margin-top: 1rem;"><strong>Answer By user: '.$answerx.'</strong></p></div>';
                                        }
                                        break;
                                }
                        
                $i++;
            }
            
                $i = 0;
            foreach ( $checkboxQuestion as $checkboxquestion){
                echo '<div class="col-6 mt-5 mx-auto border">
                <h1 class="text-center pt-4">'.$checkboxquestion.'</h1>
                        <div class="d-flex justify-content-between mt-5 pb-4">
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="fooby['.$i.'][]" value="'.$checkboxAnswer1[$i].'">
                            <label class="big-font" for="vehicle1"> '.$checkboxAnswer1[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="fooby['.$i.'][]" value="'.$checkboxAnswer2[$i].'">
                            <label class="big-font" for="vehicle2"> '.$checkboxAnswer2[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="fooby['.$i.'][]" value="'.$checkboxAnswer3[$i].'">
                            <label class="big-font" for="vehicle3"> '.$checkboxAnswer3[$i].'</label><br>
                            <input class="big-checkbox" type="checkbox" id="vehicle1" name="fooby['.$i.'][]" value="'.$checkboxAnswer4[$i].'">
                            <label class="big-font" for="vehicle3"> '.$checkboxAnswer4[$i].'</label><br>
                             <p><strong>Answer Bu user = '.$checkboxAnswerFromUser[$i].'</strong></p>
                        </div>
                </div>';
                $i++;
            }             
            
            $i = 0;
            foreach ( $dropdownQuestion as $dropdownquestion){
                echo '<div class="col-6 mt-5 mx-auto border">
                <h1 class="text-center pt-4">'.$dropdownquestion.'</h1>
                        <div class="d-flex justify-content-between mt-5 pb-4">
                             <select class="form-control" name="dropdownfooby['.$i.']" >
                                <option value="'.$dropdownAnswer1[$i].'">'.$dropdownAnswer1[$i].'</option>
                                <option value="'.$dropdownAnswer2[$i].'">'.$dropdownAnswer2[$i].'</option>
                                <option value="'.$dropdownAnswer3[$i].'">'.$dropdownAnswer3[$i].'</option>
                                <option value="'.$dropdownAnswer4[$i].'">'.$dropdownAnswer4[$i].'</option>
                              </select>
                              <p><strong>Answer Bu user = '.$dropdownAnswerFromUser[$i].'</strong></p>
                              
                        </div>
                </div>';
                $i++;
            }
            

        }
}