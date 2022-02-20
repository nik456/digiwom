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

input[type="date"]::before {
	color: #999999!important;
	content: attr(placeholder)!important;
}
input[type="date"] {
	color: #6c31cb!important;
	color: #e3d9fa;
    background: rgba(67, 34, 167, .4);
    border-radius: 10px;
    border-radius: 40px;
    border: none;
    padding: 1.5rem 1.5rem;
    margin-top: 1.5rem;
    display: block;
    width: 100%;
    font-size: 1rem;
    line-height: 1.25;
    color: #495057;
    background-clip: padding-box;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
}
input[type="date"]:focus!important,
input[type="date"]:valid {
	color: #666666!important;
}
input[type="date"]:focus::before!important,
input[type="date"]:valid::before {
	content: "" !important;
}
    </style>
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

                    <a class="ml-3 btn btn-outline-light rounded-pill" href="registerMobile.php">Marketers</a>

                    <a class="ml-3 btn btn-outline-light rounded-pill" href="register_subscribersMobile.php">Subscribers</a>

                <input type="hidden" value="2" name="typeOfUser">
            </div>

                <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="First Name" name="fname" value="" required>
                </div>
                <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" placeholder="Last Name" name="lname" value="" required>
                </div>
                <div class="form-group m-form__group">
                    <input class="form-control m-input" type="text" placeholder="Phone" name="email" autocomplete="off"  value="" required>
                </div>
                  <div class="form-group m-form__group">
                  <select class="form-control m-input" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group m-form__group">
                 <select name="other_params[]" style="border-color: #ebedf200!important;"  class="selectpicker form-control "  multiple data-live-search="true">
                      <option value="" disabled selected>Preferences</option>
                                                            <option value="Fitness_and_wellness">Fitness and wellness</option>
                                                            <option value="Fashion_Shopping">Fashion & Shopping</option>
                                                            <option value="Automobile">Automobile</option>
                                                            <option value="Banking_Finance">Banking & Finance</option>
                                                            <option value="Household">Household</option>
                                                            <option value="Food_Beverage">Food& Beverage</option>
                                                            <option value="Electronics_Tech">Electronics & Tech</option>
                                                            <option value="Travel">Travel</option>
                                                            <option value="Entertainment">Entertainment</option>
                                                            <option value="Cosmetics">Cosmetics</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Baby_Family">Baby & Family</option>

                    </select>
            </div>
                <div class="form-group m-form__group">
                <input class="" type="date" placeholder="Date of birth"  placeholder="Age" name="age">
            </div>
                <div class="form-group m-form__group">
                 <select name="country"  class="select form-control countries order-alpha"   id="countryId">

                </select>
            </div>
            <div class="form-group m-form__group">
                            <input class="form-control m-input" type="password" placeholder="Password, at least 6 characters long" name="password" required>
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                            <input type="hidden" name="mobile" value="1">
                             <div class="mt-3 text-center"><a href = "register_subscribers.php" class="text-black" style="margin-top:1rem;text-align:center;"> Use Email to Register</a></div>
            <div class="m-login__form-action">
                            <input id="m_login_signup_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary" type="submit" name="submit" value="Sign Up">
                             </div>

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
