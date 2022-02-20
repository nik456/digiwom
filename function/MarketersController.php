<?php  

function AddCampaign($data,$email,$pageid){
	global $connect;
	 $campaignName = isEmpty($data['campaignName']);
	 $campaignName = mysqli_real_escape_string($connect,$campaignName); //Remove sql Injection
     $campaignName = strip_tags($data['campaignName']); //Remove html tags

	 $mondayFrom = isEmpty($data['mondayFrom']);
	 $mondayTo = isEmpty($data['mondayTo']);
	 $tuesdayFrom = isEmpty($data['tuesdayFrom']);
	 $tuesdayTo = isEmpty($data['tuesdayTo']);
	 $wednesdayFrom = isEmpty($data['wednesdayFrom']);
	 $wednesdayTo = isEmpty($data['wednesdayTo']);
	 $thursdayFrom = isEmpty($data['thursdayFrom']);
	 $thursdayTo = isEmpty($data['thursdayTo']);
	 $fridayFrom = isEmpty($data['fridayFrom']);
	 $fridayTo = isEmpty($data['fridayTo']);
	 $saturdayFrom = isEmpty($data['saturdayFrom']);
	 $saturdayTo = isEmpty($data['saturdayTo']);
	 $sundayFrom = isEmpty($data['sundayFrom']);
	 $sundayTo = isEmpty($data['sundayTo']);

	 $frequencyCap = isEmpty($data['frequencyCap']);
	 $dateFrom = isEmpty($data['dateFrom']);
	 $dateTo = isEmpty($data['dateTo']);
	 $timeZone = isEmpty($data['timeZone']);
	 $dailyBudget = isEmpty($data['dailyBudget']);
	 $ageFrom = isEmpty($data['ageFrom']);
	 $ageTo = isEmpty($data['ageTo']);
	 $GeoTargetingIncluded = $data['included_country'];
	 $GeoTargetingIncluded = mysqli_real_escape_string($connect,$GeoTargetingIncluded); //Remove sql Injection
     $GeoTargetingIncluded = strip_tags($data['GeoTargetingIncluded']); //Remove html tags
	 $GeoTargetingExcluded = $data['excluded_country'];
	 $GeoTargetingExcluded = mysqli_real_escape_string($connect,$GeoTargetingExcluded); //Remove sql Injection
     $GeoTargetingExcluded = strip_tags($data['GeoTargetingExcluded']); //Remove html tags
	 $other_params = $data['other_params'];
	 $other_params = mysqli_real_escape_string($connect,$other_params); //Remove sql Injection
     $other_params = strip_tags($data['other_params']); //Remove html tags

	 $hoursToShow = array(
	 	'mondayFrom' => $mondayFrom,
	 	'mondayTo' => $mondayTo,
	 	'tuesdayFrom' => $tuesdayFrom,
		'tuesdayTo' => $tuesdayTo,
		'wednesdayFrom' => $wednesdayFrom,
		'wednesdayTo' => $wednesdayTo,
		'thursdayFrom' => $thursdayFrom,
		'thursdayTo' => $thursdayTo,
		'fridayFrom' => $fridayFrom,
		'fridayTo' => $fridayTo,
		'saturdayFrom' => $saturdayFrom,
		'saturdayTo' => $saturdayTo,
		'sundayFrom' => $sundayFrom,
		'sundayTo' => $sundayTo
	 );
	 $hoursToShow = json_encode($hoursToShow);
	 $GeoTargetingIncluded = json_encode($GeoTargetingIncluded);
	 $GeoTargetingExcluded = json_encode($GeoTargetingExcluded);
	 $other_params = json_encode($other_params);

	 $newVirtualWallet = calculatefunds($email,$dailyBudget);
	 $time = date("Y/m/d h:i:sa");
	 $note = "Marketer ".$email." funded the campaign".$campaignName." with the amount of: ".$dailyBudget." at - ".$time;
	 if ($newVirtualWallet != 0) {
	 		 $query = "INSERT INTO campaign 
	 		(campaignName,hoursToShow,frequencyCap,dateFrom,dateTo,timeZone,dailyBudget,ageFrom,ageTo,GeoTargetingIncluded,GeoTargetingExcluded,creator,other_params) 
		 VALUES ('$campaignName','$hoursToShow','$frequencyCap','$dateFrom','$dateTo','$timeZone','$dailyBudget','$ageFrom','$ageTo','$GeoTargetingIncluded','$GeoTargetingExcluded','$email','$other_params')";
		 $sql = mysqli_query($connect,$query);

	 	if (!$sql) {
		 	return '<div class="alert alert-danger" role="alert">
					  Error in campaign create !
					</div>';
		 }else{
		 	$sql = "UPDATE users SET VirtualWallet = '$newVirtualWallet' WHERE email = '$email' ";
		 	$r = mysqli_query($connect,$sql);

		 	addTransaction ($connect,$email,$dailyBudget,$time,$note,$campaignName);


            if($pageid == 0){
                header('Location: new_ad.php');
			    exit();
            }else{
                header('Location: new_survey.php');
			    exit();
            }
		 	
		 }
	 }else{
	 	return '<div class="alert alert-danger" role="alert">
					  Not enough funds !
					</div>';
	 }


	 

}

function isEmpty($empty){
		if (empty($empty) || $empty == '' || $empty == null) {
			return '0';
		}else{
			return $empty;
		}
}


function listAsignToCampaign(){
	global $connect;

	$sql = "SELECT * FROM campaign WHERE dailyBudget > 0 ";
	$r = mysqli_query($connect,$sql);
		while ($row = mysqli_fetch_array($r)) {
			echo ' <option valie = "'.$row["id"].'" >'.$row["campaignName"].'</option>';
		}
}
function listIpOptimization(){
	global $connect;

	$sql = "SELECT * FROM ipaddress  ";
	$r = mysqli_query($connect,$sql);
		while ($row = mysqli_fetch_array($r)) {
			echo ' <option valie = "'.$row["id"].'" >'.$row["ipName"].'</option>';
		}
}
function listIspOptimization(){
	global $connect;

	$sql = "SELECT * FROM isp  ";
	$r = mysqli_query($connect,$sql);
		while ($row = mysqli_fetch_array($r)) {
			echo ' <option valie = "'.$row["id"].'" >'.$row["isp_name"].'</option>';
		}
}
function listSourceOptimization(){
	global $connect;

	$sql = "SELECT * FROM sourceid  ";
	$r = mysqli_query($connect,$sql);
		while ($row = mysqli_fetch_array($r)) {
			echo ' <option valie = "'.$row["id"].'" >'.$row["sourceName"].'</option>';
		}
}

function CreateAd($data){
	global $connect;

     $email = '';
	 $adName = isEmpty($data['adName']);
	 
	 $campaignAssign = isEmpty($data['campaignAssign']);
	  $campaignAssign = mysqli_real_escape_string($connect,$campaignAssign); //Remove sql Injection
     $campaignAssign = strip_tags($data['campaignAssign']); //Remove html tags
	 $frequencyCap = isEmpty($data['frequencyCap']);
	  $frequencyCap = mysqli_real_escape_string($connect,$frequencyCap); //Remove sql Injection
     $frequencyCap = strip_tags($data['frequencyCap']); //Remove html tags
	 $dateFrom = isEmpty($data['dateFrom']);
	  $dateFrom = mysqli_real_escape_string($connect,$dateFrom); //Remove sql Injection
     $dateFrom = strip_tags($data['dateFrom']); //Remove html tags
	 $dateTo = isEmpty($data['dateTo']);
	  $dateTo = mysqli_real_escape_string($connect,$dateTo); //Remove sql Injection
     $dateTo = strip_tags($data['dateTo']); //Remove html tags
	 $timeZone = isEmpty($data['timeZone']);
	  $timeZone = mysqli_real_escape_string($connect,$timeZone); //Remove sql Injection
     $timeZone = strip_tags($data['timeZone']); //Remove html tags
	 $dailyBudget = isEmpty($data['dailyBudget']);
	  $dailyBudget = mysqli_real_escape_string($connect,$dailyBudget); //Remove sql Injection
     $dailyBudget = strip_tags($data['dailyBudget']); //Remove html tags
	 $ageFrom = isEmpty($data['ageFrom']);
	  $ageFrom = mysqli_real_escape_string($connect,$ageFrom); //Remove sql Injection
     $ageFrom = strip_tags($data['ageFrom']); //Remove html tags
	 $ageTo = isEmpty($data['ageTo']);
	  $ageTo = mysqli_real_escape_string($connect,$ageTo); //Remove sql Injection
     $ageTo = strip_tags($data['ageTo']); //Remove html tags
	 $GeoTargetingIncluded = $data['included_country'];
	  $GeoTargetingIncluded = mysqli_real_escape_string($connect,$GeoTargetingIncluded); //Remove sql Injection
     $GeoTargetingIncluded = strip_tags($data['GeoTargetingIncluded']); //Remove html tags
	 $GeoTargetingExcluded = $data['excluded_country'];
	  $GeoTargetingExcluded = mysqli_real_escape_string($connect,$GeoTargetingExcluded); //Remove sql Injection
     $GeoTargetingExcluded = strip_tags($data['GeoTargetingExcluded']); //Remove html tags

	 $GeoTargetingIncluded = json_encode($GeoTargetingIncluded);
	 $GeoTargetingExcluded = json_encode($GeoTargetingExcluded);

	 $newVirtualWallet = calculateSpentMoneyOnAdvertising($dailyBudget,$campaignAssign);

	 $findEnail = "SELECT * FROM campaign WHERE campaignName = '$campaignAssign'";
	 $findresu = mysqli_query($connect,$findEnail);
	    while($row = mysqli_fetch_array($findresu)){
	        $email = $row['creator'];
        }

	  $time = date("Y/m/d h:i:sa");
	 $note = "Marketer ".$email." funded the add".$adName." with the amount of: ".$dailyBudget." at - ".$time;
	 if ( $newVirtualWallet != 0 ) {
	 	extract($data);
		$error=array();
		$extension=array("mp4", "avi", "wav","webm");
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
		    $file_name=$_FILES["files"]["name"][$key];
		    $file_tmp=$_FILES["files"]["tmp_name"][$key];
		    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

		    if(in_array($ext,$extension)) {
		        if(!file_exists("videos/".$file_name)) {
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"videos/".$file_name);
		            $video_src = "videos/".$file_name;

				 $query = "INSERT INTO adds (name,campaign,frequencyCap,dateFrom,dateTo,timeZone,dailyBudget,ageFrom,ageTo,GeoTargetingIncluded,GeoTargetingExcluded,videoSRC) VALUES ('$adName','$campaignAssign','$frequencyCap','$dateFrom','$dateTo','$timeZone','$dailyBudget','$ageFrom','$ageTo','$GeoTargetingIncluded','$GeoTargetingExcluded','$video_src')";
					 $sql = mysqli_query($connect,$query);
					 if (!$sql) {
					 	return '<div class="alert alert-danger" role="alert">
								  Error in campaign create !
								</div>';
					 }else{
					     addTransaction ($connect,$email,$dailyBudget,$time,$note,$adName);
					 	$sql = "UPDATE campaign SET dailyBudget = '$newVirtualWallet' WHERE campaignName = '$campaignAssign' ";
		 				$r = mysqli_query($connect,$sql);
		 				// echo $sql;
					 	header('Location: list_ad.php');
						exit();
					 }
		        }
		        else {
		            $filename=basename($file_name,$ext);
		            $newFileName=$filename.time().".".$ext;
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"videos/".$newFileName);
		            $video_src = "videos/".$newFileName;

					 $query = "INSERT INTO adds (name,campaign,frequencyCap,dateFrom,dateTo,timeZone,dailyBudget,ageFrom,ageTo,GeoTargetingIncluded,GeoTargetingExcluded,videoSRC) VALUES ('$adName','$campaignAssign','$frequencyCap','$dateFrom','$dateTo','$timeZone','$dailyBudget','$ageFrom','$ageTo','$GeoTargetingIncluded','$GeoTargetingExcluded','$video_src')";
					 $sql = mysqli_query($connect,$query);
					 if (!$sql) {
					 	return '<div class="alert alert-danger" role="alert">
								  Error in campaign create !
								</div>';
					 }else{
					 	$sql = "UPDATE campaign SET dailyBudget = '$newVirtualWallet' WHERE campaignName = '$campaignAssign' ";
		 				$r = mysqli_query($connect,$sql);
		 				addTransaction ($connect,$email,$dailyBudget,$time,$note,$adName);
					 	header('Location: list_ad.php');
						exit();
					 }
		        }
		    }
		    else {
		        array_push($error,"$file_name, ");
		    }
		}

	 }else{
	 	return '<div class="alert alert-danger" role="alert">
								  The amount that you specified is more that you have to spend!
								</div>';
	 }
	
	 

	
	
}

function calculateSpentMoneyOnAdvertising($amount,$campaign){
	global $connect;

	$campaignAmount = 0;

	$sql = "SELECT * FROM campaign WHERE campaignName = '$campaign' ";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			$campaignAmount = $row['dailyBudget'];
		}

	if ($campaignAmount < $amount) {
		return 0;
	}else{
		return number_format((float)$campaignAmount - $amount, 2, '.', '');
	}
}

function listCampaign(){
	global $connect;

	$sql = "SELECT * FROM campaign";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th>'.$row['id'].'</th>';
			echo '<th>'.$row['campaignName'].'</th>';
			echo '<th>'.$row['frequencyCap'].'</th>';
			echo '<th>'.$row['dailyBudget'].'</th>';
			echo '<th>'.$row['ageFrom'].'</th>';
			echo '</tr>';
		}
}


function listAd(){
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
			echo '<th valign=middle>	
					<a class="ml-3" href="viewAd.php?id='.$row['id'].'">Read more</a>';
			echo '</tr>';
		}
}


function CreateSurvey($data){
	global $connect;
    $email = '';
    $adName = isEmpty($data['adName']);
     $adName = mysqli_real_escape_string($connect,$adName); //Remove sql Injection
     $adName = strip_tags($data['adName']); //Remove html tags
    $campaignAssign = isEmpty($data['campaignAssign']);
     $campaignAssign = mysqli_real_escape_string($connect,$campaignAssign); //Remove sql Injection
     $campaignAssign = strip_tags($data['campaignAssign']); //Remove html tags
    $frequencyCap = isEmpty($data['frequencyCap']);
     $frequencyCap = mysqli_real_escape_string($connect,$frequencyCap); //Remove sql Injection
     $frequencyCap = strip_tags($data['frequencyCap']); //Remove html tags
    $dateFrom = isEmpty($data['dateFrom']);
     $dateFrom = mysqli_real_escape_string($connect,$dateFrom); //Remove sql Injection
     $dateFrom = strip_tags($data['dateFrom']); //Remove html tags
    $dateTo = isEmpty($data['dateTo']);
     $dateTo = mysqli_real_escape_string($connect,$dateTo); //Remove sql Injection
     $dateTo = strip_tags($data['dateTo']); //Remove html tags
    $timeZone = isEmpty($data['timeZone']);
     $timeZone = mysqli_real_escape_string($connect,$timeZone); //Remove sql Injection
     $timeZone = strip_tags($data['timeZone']); //Remove html tags
    $dailyBudget = isEmpty($data['dailyBudget']);
     $dailyBudget = mysqli_real_escape_string($connect,$dailyBudget); //Remove sql Injection
     $dailyBudget = strip_tags($data['dailyBudget']); //Remove html tags
    $ageFrom = isEmpty($data['ageFrom']);
     $ageFrom = mysqli_real_escape_string($connect,$ageFrom); //Remove sql Injection
     $ageFrom = strip_tags($data['ageFrom']); //Remove html tags
    $ageTo = isEmpty($data['ageTo']);
     $ageTo = mysqli_real_escape_string($connect,$ageTo); //Remove sql Injection
     $ageTo = strip_tags($data['ageTo']); //Remove html tags
    $GeoTargetingIncluded = $data['included_country'];
     $GeoTargetingIncluded = mysqli_real_escape_string($connect,$GeoTargetingIncluded); //Remove sql Injection
     $GeoTargetingIncluded = strip_tags($data['GeoTargetingIncluded']); //Remove html tags
    $GeoTargetingExcluded = $data['excluded_country'];
     $GeoTargetingExcluded = mysqli_real_escape_string($connect,$GeoTargetingExcluded); //Remove sql Injection
     $GeoTargetingExcluded = strip_tags($data['GeoTargetingExcluded']); //Remove html tags
	 
    $multichoiceQuestion = $data['multichoiceQuestion'];
    $multichoiceAnswer1 = $data['multichoiceAnswer1'];
    $multichoiceAnswer2 = $data['multichoiceAnswer2'];
    $multichoiceAnswer3 = $data['multichoiceAnswer3'];
    $multichoiceAnswer4 = $data['multichoiceAnswer4'];
    $checkboxQuestion = $data['checkboxQuestion'];
    $checkboxAnswer1 = $data['checkboxAnswer1'];
    $checkboxAnswer2 = $data['checkboxAnswer2'];
    $checkboxAnswer3 = $data['checkboxAnswer3'];
    $checkboxAnswer4 = $data['checkboxAnswer4'];
    $dropdownQuestion = $data['dropdownQuestion'];
    $dropdownAnswer1 = $data['dropdownAnswer1'];
    $dropdownAnswer2 = $data['dropdownAnswer2'];
    $dropdownAnswer3 = $data['dropdownAnswer3'];
    $dropdownAnswer4 = $data['dropdownAnswer4'];

	$GeoTargetingIncluded = json_encode($GeoTargetingIncluded);
	$GeoTargetingExcluded = json_encode($GeoTargetingExcluded);

    $multichoiceQuestion = json_encode($multichoiceQuestion);
    $multichoiceAnswer1 = json_encode($multichoiceAnswer1);
    $multichoiceAnswer2 = json_encode($multichoiceAnswer2);
    $multichoiceAnswer3 = json_encode($multichoiceAnswer3);
    $multichoiceAnswer4 = json_encode($multichoiceAnswer4);
    $checkboxQuestion = json_encode($checkboxQuestion);
    $checkboxAnswer1 = json_encode($checkboxAnswer1);
    $checkboxAnswer2 = json_encode($checkboxAnswer2);
    $checkboxAnswer3 = json_encode($checkboxAnswer3);
    $checkboxAnswer4 = json_encode($checkboxAnswer4);
    $dropdownQuestion = json_encode($dropdownQuestion);
    $dropdownAnswer1 = json_encode($dropdownAnswer1);
    $dropdownAnswer2 = json_encode($dropdownAnswer2);
    $dropdownAnswer3 = json_encode($dropdownAnswer3);
    $dropdownAnswer4 = json_encode($dropdownAnswer4);
    
    $newVirtualWallet = calculateSpentMoneyOnAdvertising($dailyBudget,$campaignAssign);

	$time = date("Y/m/d h:i:sa");
	$note = "Marketer ".$email." funded the add".$adName." with the amount of: ".$dailyBudget." at - ".$time;


    $sql = "INSERT INTO survey (name,campaign,frequencyCap,dateFrom,dateTo,timeZone,dailyBudget,ageFrom,ageTo,GeoTargetingIncluded,GeoTargetingExcluded,aproved,multichoiceQuestion,multichoiceAnswer1,multichoiceAnswer2,multichoiceAnswer3,multichoiceAnswer4,checkboxQuestion,checkboxAnswer1,checkboxAnswer2,checkboxAnswer3,checkboxAnswer4,dropdownQuestion,dropdownAnswer1,dropdownAnswer2,dropdownAnswer3,dropdownAnswer4) VALUES ('$adName','$campaignAssign','$frequencyCap','$dateFrom','$dateTo','$timeZone','$dailyBudget','$ageFrom','$ageTo','$GeoTargetingIncluded','$GeoTargetingExcluded','0','$multichoiceQuestion','$multichoiceAnswer1','$multichoiceAnswer2','$multichoiceAnswer3','$multichoiceAnswer4','$checkboxQuestion','$checkboxAnswer1','$checkboxAnswer2','$checkboxAnswer3','$checkboxAnswer4','$dropdownQuestion','$dropdownAnswer1','$dropdownAnswer2','$dropdownAnswer3','$dropdownAnswer4') ";
    $r = mysqli_query($connect,$sql);
        if(!$r){
            echo "contact Support";
        }else{
            addTransaction ($connect,$email,$dailyBudget,$time,$note,$adName);
					 	$sql = "UPDATE campaign SET dailyBudget = '$newVirtualWallet' WHERE campaignName = '$campaignAssign' ";
		 				$r = mysqli_query($connect,$sql);
		 				// echo $sql;
					 	header('Location: list_surveys.php');
						exit();
        }


}

function listSurvey(){
	global $connect;

	$sql = "SELECT * FROM survey";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['name'].'</th>';
			echo '<th valign=middle>'.$row['campaign'].'</th>';
			echo '<th valign=middle>'.$row['frequencyCap'].'</th>';
			echo '<th valign=middle><a class="ml-3" href="viewSurvey.php?id='.$row['id'].'">Read more</a></th>';
			echo '</tr>';
		}
}


function getUserData($email){
	global $connect;
$array = array();
	$sql = "SELECT * FROM users WHERE email  = '$email'";
	$r = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    if ($row['typeOfUser'] === '1'){
		        	$array = [
				"id" => $row['id'],
				"name" => $row['companyName'],
				"email" => $row['email'],
				"affiliateNumber" => $row['affiliateNumber'],
				"hasp" => $row['password'],
				"country" => $row['country'],
			];
            }else{
		           	$array = [
				"id" => $row['id'],
				"name" => $row['name'].' '.$row['lname'],
				"email" => $row['email'],
				"affiliateNumber" => $row['affiliateNumber'],
				"hasp" => $row['password'],
				"country" => $row['country'],
			];
            }

		}
		return $array;
}

function changeUser($data,$session){
	global $connect;

	 $affiliateNumber = isEmpty($data['affiliateNumber']);
	 $affiliateNumber = mysqli_real_escape_string($connect,$affiliateNumber); //Remove sql Injection
     $affiliateNumber = strip_tags($data['affiliateNumber']); //Remove html tags
	 $name = isEmpty($data['name']);
	 $name = mysqli_real_escape_string($connect,$name); //Remove sql Injection
     $name = strip_tags($data['name']); //Remove html tags
	 $address = isEmpty($data['address']);
	 $address = mysqli_real_escape_string($connect,$address); //Remove sql Injection
     $address = strip_tags($data['address']); //Remove html tags
	 $genders = isEmpty($data['gender']);
	 $genders = mysqli_real_escape_string($connect,$genders); //Remove sql Injection
     $genders = strip_tags($data['genders']); //Remove html tags
	 $other_params = $data['other_params'];
	 $other_params = mysqli_real_escape_string($connect,$other_params); //Remove sql Injection
     $other_params = strip_tags($data['other_params']); //Remove html tags
	 $oldpassword = isEmpty($data['oldpassword']);
	 $oldpassword = mysqli_real_escape_string($connect,$oldpassword); //Remove sql Injection
     $oldpassword = strip_tags($data['oldpassword']); //Remove html tags
	 $passwordnew1 = isEmpty($data['passwordnew1']);
	 $passwordnew1 = mysqli_real_escape_string($connect,$passwordnew1); //Remove sql Injection
     $passwordnew1 = strip_tags($data['passwordnew1']); //Remove html tags
	 $passwordnew2 = isEmpty($data['passwordnew2']);
	 $passwordnew2 = mysqli_real_escape_string($connect,$passwordnew2); //Remove sql Injection
     $passwordnew2 = strip_tags($data['passwordnew2']); //Remove html tags

     $user = getUserData($session);
	 $id = $user['id'] ;
	 $hasp = $user['hasp'];


	 $oldpassword = pass_hash($oldpassword);

	 if ($oldpassword != '0' && $passwordnew1 != '0' && $passwordnew2 != '0') {
	 	if($oldpassword == $hasp && $passwordnew1 === $passwordnew2){
	 		$passwordnew1 = pass_hash($passwordnew1);
			$passChange = "UPDATE users SET password = '$passwordnew1' WHERE id = '$id' ";
			$res = mysqli_query($connect,$passChange);
				if(!$res){
					return '<div class="alert alert-danger" role="alert">
					  Passwords dont match or the old pass not teh same!
					</div>';

				}else{
					return '<div class="alert alert-success" role="alert">
					  Passwords changed!
					</div>';
				}

	 	}else{
	 		return '<div class="alert alert-danger" role="alert">
									  Passwords dont match!
									</div>';
	 	}
	 	
	 }

	  if($address != ''){
	      $sql = "UPDATE users SET address = '$address', name = '$name' WHERE id = '$id' ";
		 	$r =  mysqli_query($connect,$sql);

      }

	  if($genders != ''){
	      $sql = "UPDATE users SET gender = '$genders' WHERE id = '$id' ";
		 	$r =  mysqli_query($connect,$sql);

      }
	  if($other_params != ''){
	      $other_params = json_encode($other_params);

	      $sql = "UPDATE users SET other = '$other_params' WHERE id = '$id' ";
		 	$r =  mysqli_query($connect,$sql);
		 	echo $sql;

      }
	  if ($affiliateNumber != '0' && $name != '0' ) {

		 	$sql = "UPDATE users SET affiliateNumber = '$affiliateNumber', name = '$name' WHERE id = '$id' ";
		 	$r =  mysqli_query($connect,$sql);
		 		if(!$r){
		 			return '<div class="alert alert-danger" role="alert">
		 			  Error in login in Please try again later!
		 			</div>';

		 		}else{
//		 			header('Location: user.php');
//		 			exit();
		 		}
	 	
	  }



}

function my_simple_crypt( $string, $action = 'e' ) {
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

function pass_hash($password){
	$password = str_replace('"', '', $password); //remove spaces
	$password = str_replace('`', '', $password); //remove spaces
	$password = str_replace('”', '', $password); //remove chars
	$password = str_replace('“', '', $password); //remove chars
	$password = str_replace(' ', '', $password); //remove spaces




	//password cripting
	$hashFormat = "$2y$10$";
	$salt = "justcryptingstufforgod";
	$hashing = $hashFormat . $salt;
	$password = my_simple_crypt( $password,'e' );
 	$password = crypt($password,$hashing);

 	return $password;
}

function new_isp_list($data){
	global $connect;

	$user = $_SESSION['username'];

	$name_of_isp = $_POST['name_of_isp'];
	 $name_of_isp = mysqli_real_escape_string($connect,$name_of_isp); //Remove sql Injection
     $name_of_isp = strip_tags($data['name_of_isp']); //Remove html tags
  	$ispdata = $_POST['ispdata'];
  	 $ispdata = mysqli_real_escape_string($connect,$ispdata); //Remove sql Injection
     $ispdata = strip_tags($data['ispdata']); //Remove html tags

  	$sql = "INSERT INTO isp (isp_name,isp_data,user) VALUES ('$name_of_isp','$ispdata','$user')";
  	$r = mysqli_query($connect,$sql);
  		if (!$r) {
  			echo $sql;
  			// return '<div class="alert alert-danger" role="alert">
					// 			  Error in ips create !
					// 			</div>';
  		}else{
		 	header('Location: optimization_list.php');
			exit();
		 }

}
 function new_source_id_list($data){
	global $connect;

	$user = $_SESSION['username'];

	$name_of_isp = $_POST['name_of_source_id'];
  	 $name_of_isp = mysqli_real_escape_string($connect,$name_of_isp); //Remove sql Injection
     $name_of_isp = strip_tags($data['name_of_isp']); //Remove html tags
  	$ispdata = $_POST['source_id'];
	 $ispdata = mysqli_real_escape_string($connect,$ispdata); //Remove sql Injection
     $ispdata = strip_tags($data['ispdata']); //Remove html tags

  	$ispdata = json_encode($ispdata);

  	$sql = "INSERT INTO sourceid (sourceName,sourceData,username) VALUES ('$name_of_isp','$ispdata','$user')";
  	$r = mysqli_query($connect,$sql);
  		if (!$r) {
  			echo $sql;
  			// return '<div class="alert alert-danger" role="alert">
					// 			  Error in ips create !
					// 			</div>';
  		}else{
		 	header('Location: optimization_list.php');
			exit();
		 }

} 
function new_ip_address_list($data){
	global $connect;

	$user = $_SESSION['username'];

	$name_of_isp = $_POST['name_of_ipaddress'];
	 $name_of_isp = mysqli_real_escape_string($connect,$name_of_isp); //Remove sql Injection
     $name_of_isp = strip_tags($data['name_of_isp']); //Remove html tags
  	$ispdata = $_POST['ipdata'];
  	 $ispdata = mysqli_real_escape_string($connect,$ispdata); //Remove sql Injection
     $ispdata = strip_tags($data['ispdata']); //Remove html tags

  	$ispdata = json_encode($ispdata);

  	$sql = "INSERT INTO ipaddress (ipName,ipData,username) VALUES ('$name_of_isp','$ispdata','$user')";
  	$r = mysqli_query($connect,$sql);
  		if (!$r) {
//  			echo $sql;
  			 return '<div class="alert alert-danger" role="alert">
					 			  Error in ips create !
					 			</div>';
  		}else{
		 	header('Location: optimization_list.php');
			exit();
		 }

}
function get_optimization_list(){
	global $connect;

	$user = $_SESSION['username'];

	$sql = "SELECT * FROM ipaddress WHERE username  = '$user' LIMIT 3 ";
	$r = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
  			echo '<tr>';
  			echo '<th>'.$row['id'].'</th>';
  			echo '<th>'.$row['ipName'].'</th>';
  			echo '<th>'.$row['ipData'].'</th>';
  			echo '</tr>';
  		}  	
	
	$sql1 = "SELECT * FROM sourceid WHERE username  = '$user' LIMIT 3 ";
	$r1 = mysqli_query($connect,$sql1);
		while($row = mysqli_fetch_array($r1)){
  			echo '<tr>';
  			echo '<th>'.$row['id'].'</th>';
  			echo '<th>'.$row['sourceName'].'</th>';
  			echo '<th>'.$row['sourceData'].'</th>';
  			echo '</tr>';
  		}  	

	$sql2 = "SELECT * FROM isp WHERE user  = '$user' LIMIT 3 ";
	$r2 = mysqli_query($connect,$sql2);
		while($row = mysqli_fetch_array($r2)){
  			echo '<tr>';
  			echo '<th>'.$row['id'].'</th>';
  			echo '<th>'.$row['isp_name'].'</th>';
  			echo '<th>'.$row['isp_data'].'</th>';
  			echo '</tr>';
  		}

}
function getVirtualWlletCal($email){
	global $connect;

	$sql = "SELECT * FROM users WHERE email  = '$email'";
	$r = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    switch ($row['currType']) {
                case 0:
                    return number_format((float)$row['VirtualWallet'], 2, '.', '');
                    break;
                case 1:
                    return (number_format((float)$row['VirtualWallet'], 2, '.', ''))*0.7086;
                    break;
                case 2:
                    return (number_format((float)$row['VirtualWallet'], 2, '.', ''))*3.6723;
                    break;
            }
			return number_format((float)$row['VirtualWallet'], 2, '.', '');
		}
}
function getVirtualWllet($email){
	global $connect;

	$sql = "SELECT * FROM users WHERE email  = '$email'";
	$r = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    switch ($row['currType']) {
                case 0:
                    return '$'.number_format((float)$row['VirtualWallet'], 2, '.', '');
                    break;
                case 1:
                    return 'JOD '.(number_format((float)$row['VirtualWallet'], 2, '.', ''))*0.7086;
                    break;
                case 2:
                    return 'AED '.(number_format((float)$row['VirtualWallet'], 2, '.', ''))*3.6723;
                    break;
            }
			return number_format((float)$row['VirtualWallet'], 2, '.', '');
		}
}

function calculatefunds($email,$amount){

	$virtualWallet =  getVirtualWlletCal($email);

	if ($amount > $virtualWallet) {
		return 0;
	}else{
		return number_format((float)$virtualWallet - $amount, 2, '.', '');
	}
}

function addFunds($amount_fund,$email,$virtualwallet){
	global $connect;
	
	 $time = date("Y/m/d h:i:sa");
	 $note = "Marketer ".$email." Added funds to his account on - ".$time;

	 		 $result = $virtualwallet + $amount_fund;

			 $result = number_format((float)$result, 2, '.', '');

			 $sql = "UPDATE users SET VirtualWallet = '$result' WHERE email = '$email' ";
			 $r = mysqli_query($connect,$sql);
			 if (!$r) {
			 	return '<div class="alert alert-danger" role="alert">
				  Credit Or debit Card is incorrect or doesnt have funds !
				</div>';
			 }else{
                addTransaction ($connect,$email,$amount_fund,$time,$note,'Add Funds');
 			 	header('Location: success.php');
				exit();
			 }

	


	 
}

function addTransaction ($connect,$email,$amount_fund,$time,$note,$name){
    $addTrans = "INSERT INTO transaction ( user, amount, date_created, note, name) VALUES('$email','$amount_fund','$time','$note','$name')";
    $sendQuery= mysqli_query($connect,$addTrans);
}

function myLoadInvoicing($user){
    global $connect;
    $name = '';

    $sql = "SELECT * FROM transaction WHERE user = '$user' ";
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
                echo '<td class="text-center"><a class="ml-3" href="../superUser/invoiceDoc.php?id='.$id_x.'" target="_blank"><i class="fas fa-eye"></i></a></td>';
                echo '</tr>';
            }

		}
}



function getIMG($user){
    global $connect;

    $sql="SELECT * FROM users WHERE email = '$user'";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $img = $row['img'];
            if ($img !== ''){
                echo '<img style="height: 123px;width: 123px;" src="'.$img .'" alt="">';
            }else{
                echo '<img src="../assets/img/admin/user.png" alt="">';
            }
        }
}
function getIMG1($user){
    global $connect;

    $sql="SELECT * FROM users WHERE email = '$user'";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $img = $row['img'];
            if ($img !== ''){
                echo '<img style="height: 41px;width: 50px;border-radius:50%;"  src="'.$img .'" alt=""  class=" rounded-pill m--img-rounded m--marginless m--img-centered" >';
            }else{
                echo '<img src="../assets/img/admin/user.png" alt="" class="m--img-rounded m--marginless m--img-centered">';
            }
        }
}

function uploadImage($data,$user){
        global $connect;

        extract($data);
        $error=array();
        $extension=array("jpeg","jpg","png","gif","zip","rar","7zip");
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
                if(!file_exists("../assets/img/profilePic/".$file_name)) {
                    move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profilePic/".$file_name);
                    $img_src = "../assets/img/profilePic/".$file_name;

                    $sql = "UPDATE users SET img = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                        return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                    }else{
                        header('Location: user.php');
                        exit();
                    }

                }
                else {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profilePic/".$newFileName);
                    $img_src = "../assets/img/profilePic/".$newFileName;

                    $sql = "UPDATE users SET img = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                        return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                    }else{
                        header('Location: user.php');
                        exit();
                    }

                }
            }
            else {
                array_push($error,"$file_name, ");
            }
        }

    }
function getIMG2($user){
    global $connect;

    $sql="SELECT * FROM users WHERE email = '$user'";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $img = $row['img'];
            if ($img !== ''){
                echo '<img style="height: 80px;width: 80px;border-radius:50%;"  src="'.$img .'" alt=""  class=" rounded-pill m--img-rounded m--marginless m--img-centered" >';
            }else{
                echo '<img src="../assets/img/admin/user.png" alt="" class="m--img-rounded m--marginless m--img-centered">';
            }
        }
}

function uploadImage1($data,$user){
    global $connect;

        extract($data);
		$error=array();
		$extension=array("jpeg","jpg","png","gif","zip","rar","7zip");
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
		    $file_name=$_FILES["files"]["name"][$key];
		    $file_tmp=$_FILES["files"]["tmp_name"][$key];
		    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

		    if(in_array($ext,$extension)) {
		        if(!file_exists("../assets/img/profileDoc/".$file_name)) {
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profileDoc/".$file_name);
		            $img_src = "../assets/img/profileDoc/".$file_name;

                    $sql = "UPDATE users SET doc1page = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                             return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                        }else{
                            header('Location: user.php');
                            exit();
                         }

		        }
		        else {
		            $filename=basename($file_name,$ext);
		            $newFileName=$filename.time().".".$ext;
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profileDoc/".$newFileName);
		            $img_src = "../assets/img/profileDoc/".$newFileName;

                    $sql = "UPDATE users SET doc1page = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                             return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                        }else{
                            header('Location: user.php');
                            exit();
                         }

		        }
		    }
		    else {
		        array_push($error,"$file_name, ");
		    }
		}

}
function uploadImage2($data,$user){
    global $connect;

        extract($data);
		$error=array();
		$extension=array("jpeg","jpg","png","gif","zip","rar","7zip");
		foreach($_FILES["files3"]["tmp_name"] as $key=>$tmp_name) {
		    $file_name=$_FILES["files"]["name"][$key];
		    $file_tmp=$_FILES["files"]["tmp_name"][$key];
		    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

		    if(in_array($ext,$extension)) {
		        if(!file_exists("../assets/img/profileDoc/".$file_name)) {
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profileDoc/".$file_name);
		            $img_src = "../assets/img/profileDoc/".$file_name;

                    $sql = "UPDATE users SET doc2page = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                             return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                        }else{
                            header('Location: user.php');
                            exit();
                         }

		        }
		        else {
		            $filename=basename($file_name,$ext);
		            $newFileName=$filename.time().".".$ext;
		            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../assets/img/profileDoc/".$newFileName);
		            $img_src = "../assets/img/profileDoc/".$newFileName;

                    $sql = "UPDATE users SET doc2page = '$img_src' WHERE email = '$user'";
                    $r = mysqli_query($connect,$sql);
                    if (!$r) {
                             return '<div class="alert alert-danger" role="alert">
                                     			  Error in ips create !
                                     			</div>';
                        }else{
                            header('Location: user.php');
                            exit();
                         }

		        }
		    }
		    else {
		        array_push($error,"$file_name, ");
		    }
		}

}

function doc($user){
    global  $connect;

    $error1 = '1';
    $error2 = '2';

    $sql = "SELECT * FROM users WHERE email = '$user' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $img1 = $row['doc1page'];
            $img2 = $row['doc2page'];

             if ($img1 !== ''){
                echo '<img style="height: 150px;width: 200px;border-radius:3%;margin-bottom:2rem!important;"  src="'.$img1 .'" alt=""  class="mr-5 rounded-pill m--img-rounded m--marginless m--img-centered" >';
            }else{
                 $error1 = "No Documents Uploaded";
            }

              if ($img2 !== ''){
                echo '<img style="height: 150px;width: 200px;border-radius:3%; margin-left:20px!important; margin-bottom:2rem!important;"  src="'.$img2 .'" alt=""  class="mb-5 rounded-pill m--img-rounded m--marginless m--img-centered" >';
            }else{
                  $error2 = "No Documents Uploaded";
            }

              if ($error1 === $error2){
                    echo '<div class="mt-3 mb-5">'.$error1.'</div>';
              }
        }
}

function checkMail($my_id){
    global  $connect;
    
    $sql = "SELECT * FROM chat_message WHERE  to_user_id = '$my_id' AND status = '0' AND isAdmin = 0";
    $r = mysqli_query($connect,$sql);
    echo mysqli_num_rows ( $r );
}

function loadAdminToMarketerMessages($from_user_id,$to_user_id){
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
        if($to_user_id == $from_user_idDB && $isAdmin == 1){
            
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

function messagerMarketers1($id){
    global $connect;
    $roomKey = "chatRoom".$id;
        $sql = "SELECT * FROM chat_message WHERE roomKey = '$roomKey' AND  to_user_id = '$id' AND isAdmin = '0'";
	$r  = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($r)){
		    $idAdmin = $row['from_user_id'];
		    $timestamp = $row['timestamp'];
		}
		$numRowsCheck = mysqli_num_rows($r);
		echo '<tr>';
			echo '<td class="text-center">From Admin</td>';
			echo '<td class="text-center">'.$timestamp.'</td>';
			echo '<td class="text-center">
                    <a class="ml-3" href="messanger.php?id='.$idAdmin.'">Read more</a>
                  </td>';
            echo '<td class="text-center">'.$numRowsCheck.'</td>';   
			echo '</tr>';
    
}
