<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require 'connect/connect.php';
require 'function/LoginController.php';
$response = '';
if (isset($_POST['submit'])) {
    $response = CreateUser($_POST);
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
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
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
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="index.php">
                       <img  src="assets/img/white_logo.png">
                    </a>
                </div>

                
    
    <div class="m-login__signin">
        <?php echo $response; ?>
        <form class="m-login__form m-form" method="POST">
            <input id="g-recaptcha-v3" name="g-recaptcha-v3" value="" type="hidden">
                        <input type="hidden" name="_token" value="gyCXkeZtvTgj46DgixApsirZBr7NwJCYnIYrHqFr">
                                    <div class="form-group">
                <select class="form-control m-input" name="typeOfUser">
                    <option value="1">Marketers</option>
                    <option value="2">Subscribers</option>
                </select>
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input" type="email" placeholder="Email" name="email"
                       autocomplete="off" value="" required>
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input m-login__form-input--last" type="password"
                       placeholder="Password" name="password" required>
            </div>
            <div class="row m-login__form-sub">
<!--                 <div class="col m--align-left m-login__form-left">
                    <label class="m-checkbox  m-checkbox--light">
                        <input type="checkbox" name="remember" >
                        Remember me
                        <span></span>
                    </label>
                </div> -->

                <div class="col m--align-right m-login__form-right">
                    <a href = "loginMobile.php" class="m-link mr-5 pr-2"> Use Mobile Number to Log in</a>
                    <a href="passnew.php" id="m_login_forget_password" class="m-link">Forgot Password ?</a>
                </div>
            </div>
            <div class="m-login__form-action">
                
                <input id="m_login_signin_submit"
                        class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary" type="submit" name="submit" value="Sign In">              
            </div>
            <div class="m-login__form-action">
                Don't have an account? <a class="m--font-inverse-primary" href="register.php">Registration</a>
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
