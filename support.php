<?php  
	require_once 'init/top.php';
	require_once 'init/nav.php';
	
	if (isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message44 = $_POST['message'];


//change this to your email.
    $to ="support@digiwom.net";
    $from = $email;
    $subject = "Support Question";

    //begin of HTML message
     $message ="<html> 
  <body> 
    <h1>Hello i am ".$name."</h1>";
     $message .="<p>".$message44."</p>";

   $message .="</body>
</html>";
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

            // Sending email
            if(mail($to, $subject, $message, $headers)){
                header('Location: index.php');
                exit();
            } else{
                	return '<div class="alert alert-danger" role="alert">
					  Unable to send email. Please try again.
					</div>';
            }
}
?>

<script src="assets/local/index-tr.js"></script>
<script src="assets/js/lingumania.min.js"></script>

  <main class="main" style="background-image: url('assets/img/gg2.png');">
    <section class="platform">
      <div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
					<img src="assets/contact/images/img-01.png" alt="IMG">
				</div>

				<form method='post' class="contact100-form validate-form">
					<span class="contact100-form-title">
						Get in touch
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Name is required">
						<input class="form-control" type="text" name="name" placeholder="Name/Company Name">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="form-control" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="form-control" name="message" placeholder="Message"></textarea>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
					    <input class="contact100-form-btn" type="submit" name="submit" value="Send">
					</div>
				</form>
			</div>
    </section>
    
<script type="text/javascript">

var _iub = _iub || [];

_iub.csConfiguration = {"consentOnContinuedBrowsing":false,"whitelabel":false,"lang":"en","siteId":2026721,"cookiePolicyId":55126786, "banner":{ "acceptButtonDisplay":true,"customizeButtonDisplay":true,"position":"float-bottom-center","backgroundColor":"white" }};

</script>

<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
  <footer class="footer" style="    position: fixed; margin-top:1rem;">
    <div class="footer-block">
      <div class="footer-logo">
        <img style="height:90px;margin-left: -2rem" src="assets/img/logo.png">
        <img style="height: 74px;
    width: 211px;
    margin-left: 2rem;" src="init/1222.png">
      </div>
      <p class="footer-description">Make a step and reach your goals!</p>
    </div>
    <div class="footer-menu">
        <div class="row">
            <div class="col-sm-6">
                        <a href="https://www.iubenda.com/terms-and-conditions/55126786" class="iubenda-white iubenda-embed" title="Terms and Conditions ">Terms and Conditions</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/privacy-policy/55126786" class="iubenda-white iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            </div>
            <div class="col-sm-6">
                      <a href="marketers.php">Marketers</a>
                        <a href="subscribers.php">Subscribers</a>
                     <a href="support.php">Support</a>
            </div>
        </div>

    </div>
    <div class="footer-question">
      <p class="footer-question-text">Any questions?</p>
      <a class="footer-question-contact" href="support.php">Contact us</a>
    </div>
    <p class="footer-copyright">Copyright © 2020 DigiWom platform</p>
  </footer>
  <script src="assets/js/jquery.easing.1.3.js" charset="utf-8"></script>
  <script src="assets/js/jquery.parallax-scroll.js" charset="utf-8"></script>
  <script src="assets/js/common.js" charset="utf-8"></script>
</body>
</html>