<?php
function CreateUser($data){
	global $connect;

	$email = $data["email"];
	$password = $data["password"];
	$typeOfUser = $data["typeOfUser"];

	
	$email = mysqli_real_escape_string($connect,$email);
	$email = strip_tags($data['email']); //Remove html tags
	$email = str_replace('"', '', $email); //remove spaces	
	$email = stripslashes($email);

    $password = pass_hash($password);

 	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$check_database_query = mysqli_query($connect,$sql);
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
			while($row = mysqli_fetch_array($check_database_query)){
				$typeOfUserDb = $row['typeOfUser'];
					if($typeOfUserDb === $typeOfUser){
					    if ($row['verify'] === '1'){
					        if ($typeOfUserDb == 1) {
                                $_SESSION['username'] = $email;
                                header('Location: admin/dashboard.php');
                                exit();
                            }
                            else
                            {
                                $_SESSION['username'] = $email;
                                header('Location: subscriber/dashboard.php');
                                exit();
                            }
                        }else{
						return '<div class="alert alert-danger" role="alert">
									  Activate your account!You have a email that has a link for the activation of your account.
									</div>';
					    }

					}else{
					    return '<div class="alert alert-danger" role="alert">
									 Email or password is not correct!
									</div>';
					}
			}	
	} else{
		// return '<div class="alert alert-danger" role="alert">
		// 	  Email or password is not correct!
		// 	</div>';

			return '<div class="alert alert-danger" role="alert">
									  Email or password is not correct!
									</div>';
	}
	

}

function regUser($data){
    	global $connect;
    	
        $typeOfUser = $data['typeOfUser'];

        if ($typeOfUser === '1'){
            $fname = $data['fname'];
            $lname = $data['lname'];
            $companyName = $data['companyName'];
            $email = $data['email'];
            $password = $data['password'];
            $password1 = $data['password_confirmation'];
            $lineOfBusiness = $data['lineOfBusiness'];
            $mobileapiCheck = $data['mobile'];
            


            $fname = clear_escape($fname);
            $fname = mysqli_real_escape_string($connect,$fname); //Remove sql Injection
	        $fname = strip_tags($data['fname']); //Remove html tags
            $lname = clear_escape($lname);
            $lname = mysqli_real_escape_string($connect,$lname); //Remove sql Injection
	        $lname = strip_tags($data['$lname']); //Remove html tags
            $companyName = clear_escape($companyName);
            $companyName = mysqli_real_escape_string($connect,$companyName); //Remove sql Injection
	        $companyName = strip_tags($data['companyName']); //Remove html tags
            $email = clear_escape($email);
            $email = mysqli_real_escape_string($connect,$email); //Remove sql Injection
	        $email = strip_tags($data['email']); //Remove html tags
            $password = clear_escape($password);
           
            $password1 = clear_escape($password1);
            
            $typeOfUser = clear_escape($typeOfUser);
            $typeOfUser = mysqli_real_escape_string($connect,$typeOfUser); //Remove sql Injection
	        $typeOfUser = strip_tags($data['typeOfUser']); //Remove html tags
            $lineOfBusiness = clear_escape($lineOfBusiness);
            $lineOfBusiness = mysqli_real_escape_string($connect,$lineOfBusiness); //Remove sql Injection
	        $lineOfBusiness = strip_tags($data['lineOfBusiness']); //Remove html tags
            $num = rand(10,10000);
            $affiliateNumber = $fname.$num;
            $hash = hash('ripemd160', $affiliateNumber);
            $hash = substr($hash, 0, 6);

            if ($password == $password1) {
                $password = pass_hash($password);
                
                $e_check = mysqli_query($connect, "SELECT email FROM users WHERE email='$email'");

			//Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
			    return '<div class="alert alert-danger" role="alert">
                          Email already in use!
                        </div>';
			
			}

                $sql = "INSERT INTO users (name,lname,companyName,lineOfBusiness,email,password,typeOfUser,affiliateNumber,token) VALUES ('$fname','$lname','$companyName','$lineOfBusiness','$email','$password','$typeOfUser','$affiliateNumber','$hash') ";
                $r = mysqli_query($connect,$sql);
                    if(!$r){
                        return '<div class="alert alert-danger" role="alert">
                          Error in login in Please try again later!
                        </div>';

                    }else{
                        

                                 if($mobileapiCheck == 1){
                                     

                                     $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://sendsms.ngt.jo/http/send_sms_http.php?login_name=digiwom&login_password=Digiwom_2086&msg=activationKey-$hash&mobile_number=".$email."&from=DigiWoom");
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close ($ch);

                            
                  
                   $_SESSION['username'] = $email;
                        header('Location: activateMobile.php');
                        exit();
                 
            }else{
                //change this to your email.
    $to = $email;
    $from ="support@digiwom.net";
    $subject = "Support Question";

    //begin of HTML message
     $message ="<html> 
  <body> 
    <h1>Please use the activation link to activate your account.</h1>";
     $message .="<a href='https://digiwom.net/activate.php?token=".$hash."'>Activate account</p>";

   $message .="</body>
</html>";
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

            // Sending email
            if(mail($to, $subject, $message, $headers)){
                $_SESSION['username'] = $email;
                        header('Location: emailsend.php');
                        exit();
            } else{
                	return '<div class="alert alert-danger" role="alert">
					  Unable to send email. Please try again.
					</div>';
            }
            }   




                       
                        
                        
                    }
            }else{
                return '<div class="alert alert-danger" role="alert">
                  Passwords don`t Match!
                </div>';
            }
        }else{
            $fname = $data['fname'];
            $lname = $data['lname'];
            $email = $data['email'];
            $gender = $data['gender'];
            $other_params = $data['other_params'];
            $age = $data['age'];
            $country = $data['country'];
            $password = $data['password'];
            $password1 = $data['password_confirmation'];

            $other_params = json_encode($other_params);

            $fname = clear_escape($fname);
            $fname = mysqli_real_escape_string($connect,$fname); //Remove sql Injection
	        $fname = strip_tags($data['fname']); //Remove html tags
            $lname = clear_escape($lname);
            $lname = mysqli_real_escape_string($connect,$lname); //Remove sql Injection
	        $lname = strip_tags($data['lname']); //Remove html tags
            $email = clear_escape($email);
            $email = mysqli_real_escape_string($connect,$email); //Remove sql Injection
	        $email = strip_tags($data['email']); //Remove html tags
            $password = clear_escape($password);
           
            $password1 = clear_escape($password1);
            
            $typeOfUser = clear_escape($typeOfUser);
            $typeOfUser = mysqli_real_escape_string($connect,$typeOfUser); //Remove sql Injection
	        $typeOfUser = strip_tags($data['typeOfUser']); //Remove html tags
            $gender = clear_escape($gender);
            $gender = mysqli_real_escape_string($connect,$gender); //Remove sql Injection
	        $gender = strip_tags($data['gender']); //Remove html tags
            $age = clear_escape($age);
            $age = mysqli_real_escape_string($connect,$age); //Remove sql Injection
	        $age = strip_tags($data['age']); //Remove html tags
            $country = clear_escape($country);
            $country = mysqli_real_escape_string($connect,$country); //Remove sql Injection
	        $country = strip_tags($data['country']); //Remove html tags
            $num = rand(10,10000);
            $affiliateNumber = $fname.$num;
            $hash = hash('ripemd160', $affiliateNumber);
            $hash = substr($hash, 0, 10);

              if ($password == $password1) {
                $password = pass_hash($password);

                $sql = "INSERT INTO users (name,lname,gender,age,country,other,email,password,typeOfUser,affiliateNumber,token) VALUES ('$fname','$lname','$gender','$age','$country','$other_params','$email','$password','$typeOfUser','$affiliateNumber','$hash') ";
                $r = mysqli_query($connect,$sql);
                    if(!$r){
                        return '<div class="alert alert-danger" role="alert">
                          Error in login in Please try again later!
                        </div>';

                    }else{
            if($mobileapiCheck == 1){
                                     $ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://sendsms.ngt.jo/http/send_sms_http.php?login_name=digiwom&login_password=Digiwom_2086&msg=activationKey-$hash&mobile_number=".$email."&from=DigiWoom");
curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close ($ch);
                  
                   $_SESSION['username'] = $email;
                        header('Location: activateMobile.php');
                        exit();
                 
            }else{
                //change this to your email.
    $to = $email;
    $from ="support@digiwom.net";
    $subject = "Support Question";

    //begin of HTML message
     $message ="<html> 
  <body> 
    <h1>Please use the activation link to activate your account.</h1>";
     $message .="<a href='https://digiwom.net/activate.php?token=".$hash."'>Activate account</p>";

   $message .="</body>
</html>";
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

            // Sending email
            if(mail($to, $subject, $message, $headers)){
                $_SESSION['username'] = $email;
                        header('Location: emailsend.php');
                        exit();
            } else{
                	return '<div class="alert alert-danger" role="alert">
					  Unable to send email. Please try again.
					</div>';
            }
            }

                       
                        
                  
                    }
            }else{
                return '<div class="alert alert-danger" role="alert">
                  Passwords don`t Match!
                </div>';
            }
        }




		

}

function clear_escape($xvar){
	$xvar=str_replace('"', ' ', $xvar);
    return addslashes($xvar);
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

function kick(){
	if (isset($_SESSION['username'])) {
		
	}else{
		header('Location: login.php');
		exit();
	}
}

function loginAdmin($data){
	global $connect;

	$user = $data["email"];
	$password = $data["password"];
	

	
	$user = mysqli_real_escape_string($connect,$user);
	$user = strip_tags($data['email']); //Remove html tags
	$user = str_replace('"', '', $user); //remove spaces	
	$user = stripslashes($user);

    $password = pass_hash($password);

 	$sql = "SELECT * FROM admin WHERE user = '$user' AND password = '$password'";
	$check_database_query = mysqli_query($connect,$sql);
	$check_login_query = mysqli_num_rows($check_database_query);

	if($check_login_query == 1) {
			$_SESSION['username'] = $user;
			header('Location: superUser/dashboard.php');
			exit();
	}else{
		return '<div class="alert alert-danger" role="alert">
				  '.$user.' or password is not correct!
				</div>';
	}
}

?>