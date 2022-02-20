<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require 'connect/connect.php';
require 'function/LoginController.php';
$response = '';
if (isset($_POST['submit'])) {
    $response = regUser($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
.iti--allow-dropdown{
        width: 100%;
    margin-top: 1.5rem;
}
    </style>
    
    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
    </head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->

<script src="assets/local/index-tr.js"></script>
<script src="assets/js/lingumania.min.js"></script>

<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--2 m-login-2--skin-1"
         id="m_login" style="background-image: url('assets/img/bg/bg-1.jpg');">
        <div class="m-grid__item m-grid__item--fluid  m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="index.php">
                        <img src="assets/img/white_logo.png">
                    </a>
                </div>

                
    <div class="m-login__signup">
        <div class="m-login__head">
            <h3 class="m-login__title">Sign Up</h3>
            <div class="m-login__desc">Enter your details to create your account:</div>
        </div>
        <?php echo $response; ?>
        <form

                class="m-login__form m-form"
                method="POST"
        >
            <div class="d-flex justify-content-center">

                    <a class="ml-3 btn btn-outline-light rounded-pill" href="register.php">Marketers</a>

                    <a class="ml-3 btn btn-outline-light rounded-pill" href="register_subscribers.php">Subscribers</a>

                <input type="hidden" value="1" name="typeOfUser">
            </div>
            <div class="1 box" >
                 <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="First Name" name="fname" value="" required>
                </div>
                <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="Last Name" name="lname" value="" required>
                </div>
                <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="Company Name" name="companyName" value="" required>
                </div>
                <div class="form-group m-form__group">
                    <input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off"  value="" required>
                </div>
                <div class="form-group m-form__group">
                    <input style="padding-left: 4rem;" class="form-control m-input" id="phone" type="tel" placeholder="Phone number" name="phone" autocomplete="off"  value="" required>
                </div>
                <div class="form-group m-form__group">
                <input class="form-control m-input" type="password" placeholder="Password, at least 6 characters long" name="password" required>
                </div>
                <div class="form-group m-form__group">
                    <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                </div>
                <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="Line of business" name="lineOfBusiness" value="" required>
                </div>

            </div>
            <input type="hidden" name="mobile" value="0">
                <div class="mt-3 text-center"><a href = "registerMobile.php" class="text-black" style="margin-top:1rem;text-align:center;"> Use Mobile Number to Register</a></div>

                <div class="m-login__form-action">
                    <input id="m_login_signup_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit" name="submit" value="Sign Up">
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/countrystate.js"></script>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
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
</html>
