<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'connect/connect.php';
require 'function/LoginController.php';
    if (isset($_POST['submit'])){
        $email = $_POST['email'];

$sql = "SELECT * FROM users WHERE email = '$email' ";
$r = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_array($r)){
        $token = $row['token'];
    }


//change this to your email.
    $to = $email;
    $from = "support@digiwom.net";
    $subject = "Password Reset";

$message = '<p>Hi ' . $to . ',<br/><br/>welcome!</p><p>The Link for Password Change !</p><p>
<a href="https://digiwom.net/reserpass.php?id=' . $token . '"> Please click this link </a>
to change the password to your account</p><p>We hope you enjoy our page and are happy to hear about your experiences!</p><p>DigiWom</p>';  
    
    
    $header  = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $header .= "From: DigiWom <support@digiwom.net>";
    $header .= "X-Mailer: PHP ". phpversion();
    
    
            // Sending email
            if(mail($email, 'Thank you for registering!', $message, $header)){
                header('Location: successSend.php');
                exit();
            } else{
                	return '<div class="alert alert-danger" role="alert">
					  Unable to send email. Please try again.
					</div>';
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<!-- Mirrored from platform.adscompass.com/password/reset by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Apr 2020 08:17:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title>
        DigiWom
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="assets/img/site.webmanifest">
    <!--begin::Web font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,800" rel="stylesheet">
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <style>
        .btn.btn-default,
.btn.btn-secondary {
                        border-color: #ebedf200!important;
                                color: white!important;
                    }
span{
    color: #9a9a9a !important;
}
    </style>
    </head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-1"
         id="m_login" style="background-image: url('assets/img/bg/bg-1.jpg');">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="index.php">
                        <img  src="assets/img/white_logo.png">
                    </a>
                </div>

                    <div class="m-login__signin">

        
        <form class="m-login__form m-form" method="POST">

            

            <div class="form-group m-form__group">
                <input
                        autofocus
                        class="form-control m-input"
                        id="email"
                        name="email"
                        placeholder="Email"
                        required
                        type="email"
                        value=""
                >

                            </div>

            <div class="m-login__form-action">
                <input class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary" type="submit" name="submit" value="Send Password Reset Link">
            </div>

        </form>
    </div>

            </div>
        </div>
    </div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="assets/js/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script>
    $(document).ready(
        () => {
            // These methods can be done with URLSearchParams, but it wont support IOS Safari 10.2 users (0.53% of global usage)(2018-03-28)(https://caniuse.com/#search=URLSearchParams). It is better to support them since they are likely to be rich.
            let getGetParameter = function(name, url = window.location.href) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            };

            // These methods can be done with URLSearchParams, but it wont support IOS Safari 10.2 users (0.53% of global usage)(2018-03-28)(https://caniuse.com/#search=URLSearchParams). It is better to support them since they are likely to be rich.
            let removeGetParameter = function(key, sourceURL = window.location.href) {
                var rtn = sourceURL.split("?")[0],
                    param,
                    params_arr = [],
                    queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
                if (queryString !== "") {
                    params_arr = queryString.split("&");
                    for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                        param = params_arr[i].split("=")[0];
                        if (param === key) {
                            params_arr.splice(i, 1);
                        }
                    }
                    rtn = (params_arr.length > 0)
                        ?
                        rtn + "?" + params_arr.join("&")
                        :
                        rtn
                    ;
                }
                return rtn;
            };

            let toastrMessage = getGetParameter('toastrMessage');
            if (toastrMessage !== null) {
                toastr.info(toastrMessage);
                window.history.replaceState({}, null, removeGetParameter('toastrMessage'));
            }
        }
    );
</script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->

<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>

   