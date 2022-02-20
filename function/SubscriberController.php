<?php

function loadAdsForSubscribers(){
	global $connect;
	$img = '';
	$img1 = '';
$i = 0;
		$sql = "SELECT * FROM adds WHERE aproved = '1' LIMIT 6";
	$r = mysqli_query($connect,$sql);

	    $amountGein = amountYouWillEarn1();
		while ($row = mysqli_fetch_array($r)) {
		    $campName = $row['campaign'];
           $img = getimg24($campName);
			echo '<div class="col-4 mt-3">
                    <div>
                    '.$img.'
                    <p class="text-center mt-3 mb-3">Add Name:<strong>'.$row['name'].'</strong></p>           
                    </div>
					
					<video style="width:95%;border-radius:10px" id="video'.$i.'">
						<source src="../admin/'.$row['videoSRC'].'" type="video/mp4">
					</video></td>
					<div class="d-flex justify-content-between mx-auto mt-1" style="width:51%;background:black;border-radius:10px;padding:3px;">
						<button type="button" class="btn btn-danger btn-circle btn-lg" onclick="playVid'.$i.'()">W</button>
						<button id="share'.$i.'" type="button" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#myModal'.$i.'" disabled>S</button>
						<form method="post">
						    <input type="hidden" name="add" value="'.$row['id'].' ">
						     <div class="tooltip-wrapper" style="display:block" data-toggle="popover" title="Amount You will Earn" data-content="$'.$amountGein.'" >
                                <input type="submit" value="E" name="submit" id="earn'.$i.'" class="btn btn-success btn-circle btn-lg " data-toggle="popover" title="Popover title" data-content="Default popover" disabled>
                        </div>
						</form>
					</div>
				</div>
				
			';
			echo '
			<!-- The Modal -->
                <div class="modal" id="myModal'.$i.'">
                  <div class="modal-dialog">
                    <div class="modal-content">
                
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Share to earn </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p class="text-center">Please share on :</p>
                        <div class="d-flex justify-content-between">
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-facebook" style="color: white;"></i> Facebook</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-instagram" style="color: white;"></i> Instagram</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fas fa-globe" style="color: white;"></i> Your own website</button>
                        </div>
                        
                        
                      </div>
                
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="shared'.$i.'()">Shared</button>
                      </div>
                
                    </div>
                  </div>
                </div>
			';
			echo '<script>
                    var vid'.$i.' = document.getElementById("video'.$i.'");
                    document.getElementById().addEventListener("ended",myHandler,false);

                function playVid'.$i.'() {
                    vid'.$i.'.play();
                        document.getElementById("video'.$i.'").addEventListener("ended", function(e) {
                         document.getElementById("share'.$i.'").disabled = false;
                            });

                }
                
                 function shared'.$i.'(){
                   document.getElementById("earn'.$i.'").disabled = false;
                 }
                </script>';
            $i++;
		}
}

function getimg24($campName){
    global $connect;
    $creator = '';

                $sqlcmap = "SELECT * FROM campaign WHERE campaignName = '$campName' ";
            $rcam = mysqli_query($connect,$sqlcmap);
                while($rowcamp = mysqli_fetch_array($rcam)){
                    $creator = $rowcamp['creator'];
                }

                 	$sql = "SELECT * FROM users WHERE email = '$creator' ";
                    $check_database_query = mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_array($check_database_query)){
                        $img = $row['img'];
                        if ($img !== ''){
                            return'<img style="height: 80px;width: 80px;border-radius:50%;"  src="'.$img .'" alt=""  class=" rounded-pill m--img-rounded m--marginless m--img-centered" >';
                        }else{
                            return'<img style="height: 80px;width: 80px;border-radius:50%;" src="../assets/img/admin/user.png" alt="" class="m--img-rounded m--marginless m--img-centered">';
                        }
                    }
}
function loadAdsForSubscribers11(){
	global $connect;
	$img = '';
	$img1 = '';
$i = 0;
		$sql = "SELECT * FROM adds";
	$r = mysqli_query($connect,$sql);

	    $amountGein = amountYouWillEarn1();
		while ($row = mysqli_fetch_array($r)) {
		    $campName = $row['campaign'];
           $img = getimg24($campName);
			echo '<div class="col-4 mt-3">
                    <div>
                    '.$img.'
                    <p class="text-center mt-3 mb-3"><strong>'.$row['name'].'</strong></p>           
                    </div>
					
					<video style="width:95%;border-radius:10px" id="video'.$i.'">
						<source src="../admin/'.$row['videoSRC'].'" type="video/mp4">
					</video></td>
					<div class="d-flex justify-content-between mx-auto mt-1" style="width:34%;background:black;border-radius:10px;padding:3px;">
						<button type="button" class="btn btn-danger btn-circle btn-lg" onclick="playVid'.$i.'()">W</button>
						<button id="share'.$i.'" type="button" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#myModal'.$i.'" disabled>S</button>
						<form method="post">
						    <input type="hidden" name="add" value="'.$row['id'].' ">
						     <div class="tooltip-wrapper" style="display:block" data-toggle="popover" title="Amount You will Earn" data-content="$'.$amountGein.'" >
                                <input type="submit" value="E" name="submit" id="earn'.$i.'" class="btn btn-success btn-circle btn-lg " data-toggle="popover" title="Popover title" data-content="Default popover" disabled>
                        </div>
						</form>
					</div>
				</div>
				
			';
			echo '
			<!-- The Modal -->
                <div class="modal" id="myModal'.$i.'">
                  <div class="modal-dialog">
                    <div class="modal-content">
                
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Share to earn </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p class="text-center">Please share on :</p>
                        <div class="d-flex justify-content-between">
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-facebook" style="color: white;"></i> Facebook</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-instagram" style="color: white;"></i> Instagram</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fas fa-globe" style="color: white;"></i> Your own website</button>
                        </div>
                        
                      </div>
                
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="shared'.$i.'()">Shared</button>
                      </div>
                
                    </div>
                  </div>
                </div>
			';
			echo '<script>
                    var vid'.$i.' = document.getElementById("video'.$i.'");
                    document.getElementById().addEventListener("ended",myHandler,false);

                function playVid'.$i.'() {
                    vid'.$i.'.play();
                        document.getElementById("video'.$i.'").addEventListener("ended", function(e) {
                         document.getElementById("share'.$i.'").disabled = false;
                            });

                }
                
                 function shared'.$i.'(){
                   document.getElementById("earn'.$i.'").disabled = false;
                 }
                </script>';
            $i++;
		}
}


function loadAdsForSubscribers111(){
	global $connect;
	$img = '';
	$img1 = '';
$i = 0;
		$sql = "SELECT * FROM adds WHERE aproved = '1' ";
	$r = mysqli_query($connect,$sql);

	    $amountGein = amountYouWillEarn1();
		while ($row = mysqli_fetch_array($r)) {
		    $campName = $row['campaign'];
           $img = getimg24($campName);
			echo '<div class="col-4 mt-3">
                    <div>
                    '.$img.'
                    <p class="text-center mt-3 mb-3"><strong>'.$row['name'].'</strong></p>           
                    </div>
					
					<video style="width:95%;border-radius:10px" id="video'.$i.'">
						<source src="../admin/'.$row['videoSRC'].'" type="video/mp4">
					</video></td>
					<div class="d-flex justify-content-between mx-auto mt-1" style="width:51%;background:black;border-radius:10px;padding:3px;">
						<button type="button" class="btn btn-danger btn-circle btn-lg" onclick="playVid'.$i.'()">W</button>
						<button id="share'.$i.'" type="button" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#myModal'.$i.'" disabled>S</button>
						<form method="post">
						    <input type="hidden" name="add" value="'.$row['id'].' ">
						     <div class="tooltip-wrapper" style="display:block" data-toggle="popover" title="Amount You will Earn" data-content="$'.$amountGein.'" >
                                <input type="submit" value="E" name="submit" id="earn'.$i.'" class="btn btn-success btn-circle btn-lg " data-toggle="popover" title="Popover title" data-content="Default popover" disabled>
                        </div>
						</form>
					</div>
				</div>
				
			';
			echo '
			<!-- The Modal -->
                <div class="modal" id="myModal'.$i.'">
                  <div class="modal-dialog">
                    <div class="modal-content">
                
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Share to earn </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                
                      <!-- Modal body -->
                      <div class="modal-body">
                        <p class="text-center">Please share on :</p>
                        <div class="d-flex justify-content-between">
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-facebook" style="color: white;"></i> Facebook</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fab fa-instagram" style="color: white;"></i> Instagram</button>
                        <button style="width:170px!important;height:40px!important;" class="btn btn-primary ml-3"><i class="fas fa-globe" style="color: white;"></i> Your own website</button>
                        </div>
                        
                      </div>
                
                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="shared'.$i.'()">Shared</button>
                      </div>
                
                    </div>
                  </div>
                </div>
			';
			echo '<script>
                    var vid'.$i.' = document.getElementById("video'.$i.'");
                    document.getElementById().addEventListener("ended",myHandler,false);

                function playVid'.$i.'() {
                    vid'.$i.'.play();
                        document.getElementById("video'.$i.'").addEventListener("ended", function(e) {
                         document.getElementById("share'.$i.'").disabled = false;
                            });

                }
                
                 function shared'.$i.'(){
                   document.getElementById("earn'.$i.'").disabled = false;
                 }
                </script>';
            $i++;
		}
}

function loadAdsForSubscribers1(){
	global $connect;
$i = 0;
		$sql = "SELECT * FROM adds  ";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
            echo '<tr scope="row">';
			echo '<th >'.$row['id'].'</th>';
			echo '<th >'.$row['name'].'</th>';
			echo '<th >'.$row['campaign'].'</th>';
			echo '<th >'.$row['dailyBudget'].'</th>';
					if ($row['aproved'] == true){
			    echo '<th class="" valign=middle><a href="#"><i class="fas fa-check"></i></a></th>';
            }else{
			    echo '<th class="" valign=middle><a href="#"><i class="far fa-times-circle"></i></a></th>';
            }
			echo '<th class="text-right"><video controls style="width:30%;border-radius:10px" id="video'.$i.'">
						<source src="../admin/'.$row['videoSRC'].'" type="video/mp4">
					</video></th>';

			echo '</tr>';

		}
}

function listSurvey1(){
	global $connect;

	$sql = "SELECT * FROM survey WHERE aproved ='1'";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
		    if ($row['aproved'] == true){
		        echo '<tr scope="row">';
            	echo '<th valign=middle>'.$row['id'].'</th>';
            	echo '<th valign=middle>'.$row['name'].'</th>';
            	echo '<th valign=middle>'.$row['campaign'].'</th>';
            	echo '<th valign=middle><a href="theSurvey.php?id='.$row['id'].'">Go To '.$row['name'].'</a></th>';
        		echo '</tr>';
		    }
			
		
		}
}

function listcampaign1(){
	global $connect;

	$sql = "SELECT * FROM campaign";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['id'].'</th>';
			echo '<th valign=middle>'.$row['campaignName'].'</th>';
			echo '<th valign=middle><a href="#">Go To '.$row['campaignName'].'</a></th>';
			if ($row['aproved'] == true){
			    echo '<th class="text-center" valign=middle><a href="#"><i class="fas fa-check"></i></a></th>';
            }else{
			    echo '<th class="text-center" valign=middle><a href="#"><i class="far fa-times-circle"></i></a></th>';
            }
			echo '</tr>';
		}
}

function loadAllAdsForSubscribers(){
	global $connect;

		$sql = "SELECT * FROM adds";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {

			echo '<div class="col-4">	
					<p class="text-center mt-3 mb-3"><strong>'.$row['name'].'</strong></p>
					<video controls style="width:95%;border-radius:10px">
						<source src="../admin/'.$row['videoSRC'].'" type="video/mp4">
					</video></td>
					<div class=" mx-auto mt-1" style="width:34%;background:black;border-radius:10px;padding:3px;">
						<button type="button" class="btn btn-danger btn-circle btn-lg">W</button>
						<button type="button" class="btn btn-warning btn-circle btn-lg">S</button>
						<button type="button" class="btn btn-success btn-circle btn-lg">E</button>
					</div>
				</div>
				
			';

		}
}
function earnNow2($email,$id){
    global $connect;
    $watchAmount = 0;
    $currentWallet = 0;
    $name = '';
    $campaign = '';
    $name1 = '';

    $id = $id;
    $time = date("Y/m/d h:i:sa");


    $sql3 = "SELECT * FROM transaction WHERE user = '$email' AND name ='$name'";
    $r3 = mysqli_query($connect,$sql3);
    $check_login_query = mysqli_num_rows($r3);
    if($check_login_query < 1) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $currentWallet = $row['VirtualWallet'];
        }

        $watchShareSql = "SELECT * FROM watchsate WHERE id ='4' ";
        $rwatchSareSql = mysqli_query($connect,$watchShareSql);
            while($row = mysqli_fetch_array($rwatchSareSql)){
                $watchAmount = $row['price'];
            }
    $note = "Subscriber".$email." received  the amount of: ".$watchAmount." at - ".$time;
        $newWallet = $currentWallet + $watchAmount;

        $addFunds = "UPDATE users SET VirtualWallet = '$newWallet' WHERE email = '$email' ";
        $reasadd = mysqli_query($connect,$addFunds);
            if(!$reasadd){
                return '<div class="alert alert-danger" role="alert">
				  Error in Adding funds!
				</div>';
            }else{
                $addTrans = "INSERT INTO transaction ( user, amount, date_created, note, name,campaign,ad_servay) VALUES('$email','$watchAmount','$time','$note','$name','$campaign','$name1')";
                $sendQuery= mysqli_query($connect,$addTrans);

            }
    }else{
        return '<div class="alert alert-danger text-center" style="margin-top:5rem" role="alert">
				  You have watched this!
				</div>';
    }


}
function earnNow($email,$data){
    global $connect;
    $watchAmount = 0;
    $currentWallet = 0;
    $name = $data['add'];
  	 $name = mysqli_real_escape_string($connect,$name); //Remove sql Injection
     $name = strip_tags($data['name']); //Remove html tags
    $campaign = $data['campaign'];
  	 $campaign = mysqli_real_escape_string($connect,$campaign); //Remove sql Injection
     $campaign = strip_tags($data['campaign']); //Remove html tags
    $name1 = $data['name'];
  	 $name1 = mysqli_real_escape_string($connect,$name1); //Remove sql Injection
     $name1 = strip_tags($data['name1']); //Remove html tags

    $id = $data['add'];
    $time = date("Y/m/d h:i:sa");


    $sql3 = "SELECT * FROM transaction WHERE user = '$email' AND name ='$name'";
    $r3 = mysqli_query($connect,$sql3);
    $check_login_query = mysqli_num_rows($r3);
    if($check_login_query < 1) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $currentWallet = $row['VirtualWallet'];
        }

        $watchShareSql = "SELECT * FROM watchsate WHERE id ='3' ";
        $rwatchSareSql = mysqli_query($connect,$watchShareSql);
            while($row = mysqli_fetch_array($rwatchSareSql)){
                $watchAmount = $row['price'];
            }
    $note = "Subscriber".$email." received  the amount of: ".$watchAmount." at - ".$time;
        $newWallet = $currentWallet + $watchAmount;

        $addFunds = "UPDATE users SET VirtualWallet = '$newWallet' WHERE email = '$email' ";
        $reasadd = mysqli_query($connect,$addFunds);
            if(!$reasadd){
                return '<div class="alert alert-danger" role="alert">
				  Error in Adding funds!
				</div>';
            }else{
                $addTrans = "INSERT INTO transaction ( user, amount, date_created, note, name,campaign,ad_servay) VALUES('$email','$watchAmount','$time','$note','$name','$campaign','$name1')";
                $sendQuery= mysqli_query($connect,$addTrans);

            }
    }else{
        return '<div class="alert alert-danger text-center" style="margin-top:5rem" role="alert">
				  You have watched this!
				</div>';
    }


}

function amountYouWillEarn1(){
    global $connect;
            $watchShareSql = "SELECT * FROM watchsate WHERE id ='3' ";
        $rwatchSareSql = mysqli_query($connect,$watchShareSql);
            while($row = mysqli_fetch_array($rwatchSareSql)){
                $watchAmount = $row['price'];
                return $watchAmount;
            }
}
function address($user){
    global $connect;

    $sql = "SELECT * FROM users WHERE email = '$user' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            return $row['address'];
        }
}
function gender($user){
    global $connect;

    $sql = "SELECT * FROM users WHERE email = '$user' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $gender = $row['gender'];

            if ($gender === 'male'){
                echo '<option value="male" selected>Male</option>
                    <option value="female">Female</option>';
            }else{
                 echo '<option value="male" >Male</option>
                    <option value="female" selected>Female</option>';
            }
        }
}
function other_params($user){
    global $connect;
    $arr = ['','','','','','','','','','','',''];

    $sql = "SELECT * FROM users WHERE email = '$user' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)) {
            $gender = $row['other'];
            if ($gender !== '') {
                $other_param = json_decode($gender);
                foreach ($other_param as $item) {
                    switch ($item) {
                        case 'Fitness_and_wellness':
                            $arr[0] = 'selected';
                            break;
                        case 'Fashion_Shopping':
                            $arr[1] = 'selected';
                            break;
                        case 'Automobile':
                            $arr[2] = 'selected';
                            break;
                        case 'Automobile':
                            $arr[3] = 'selected';
                            break;
                        case 'Banking_Finance':
                            $arr[4] = 'selected';
                            break;
                        case 'Household':
                            $arr[5] = 'selected';
                            break;
                        case 'Food_Beverage':
                            $arr[6] = 'selected';
                            break;
                        case 'Electronics_Tech':
                            $arr[7] = 'selected';
                            break;
                        case 'Travel':
                            $arr[8] = 'selected';
                            break;
                        case 'Entertainment':
                            $arr[9] = 'selected';
                            break;
                        case 'Cosmetics':
                            $arr[10] = 'selected';
                            break;
                        case 'Healthcare':
                            $arr[11] = 'selected';
                            break;
                    }
                }
            }
        }

        return $arr;
}
function listtransaction11($user){
    global $connect;

    $sql = "SELECT * FROM transaction WHERE user = '$user' ";
	$r = mysqli_query($connect,$sql);

		while ($row = mysqli_fetch_array($r)) {
			echo '<tr scope="row">';
			echo '<th valign=middle>'.$row['amount'].'</th>';
			echo '<th valign=middle>'.$row['campaign'].'</th>';
			echo '<th valign=middle>'.$row['ad_servay'].'</th>';
			echo '<th valign=middle>'.$row['date_created'].'</th>';
			echo '</tr>';
		}
}

function Syrvey($id){
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
                        </div>
                </div>';
                $i++;
            }
            

        }
}