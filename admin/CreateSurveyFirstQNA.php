<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
  if (isset($_POST['submit'])) {
      CreateAd($_POST);
  }
  require_once 'init/top.php';
?>
<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

    <div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><form method="post" enctype="multipart/form-data"><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">New Ad</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/dashboard" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/advertiser/campaigns" class="m-nav__link"><span class="m-nav__link-text">Campaigns</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">New Ad</span></li></ul></div> <div></div></div></div> <div class="m-content"><div id="errors" style="visibility: hidden; height: 0px;"></div> <!----> <div><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="flaticon-cogwheel-2"></i></span> <h3 class="m-portlet__head-text text-dark">General Ad Settings</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="row"><div class="col">
    <div class="form-group m-form__group"><label for="form-control-name">
        <a href="new_campaign.php?id=2" class="btn btn-primary">Create new campaign for the survey</a>
        <a href="new_survey.php" class="btn btn-primary">Use Old campaign for the survey</a>
     <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 972.406px;"></span> <!----></div></div></div></div></div></div> 
         <div class="row"><div class="col"></div></div></div></div></div></div> <!-- end:: Page -->
</form>
<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<script src="../assets/js/multiple-select.js"></script>
<script src="../assets/js/dist/slimselect.min.js"></script>
    <script>

        function switchCountry() {
  var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV1");
  var z = document.getElementById("myDIV2");
  var c = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
    z.style.display = "block";
    y.style.display = "none";
    c.style.display = "none";
  } else {
    x.style.display = "none";
    z.style.display = "none";
    y.style.display = "block";
    c.style.display = "block";
  }
}

      </script>
    <script>
      setTimeout(function() {
        new SlimSelect({
          select: '.select'
        })
      }, 300)
      setTimeout(function() {
        new SlimSelect({
          select: '.selecte'
        })
      }, 300)
      </script>
<script>
    $(function() {
        $('.ms').change(function() {
            console.log($(this).val());
        }).multipleSelect({
            width: '100%'
        });
    });
</script>

<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getamount.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>


<!-- end::Body -->