<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  

  require_once 'init/top.php';
    $user = getUserData($_SESSION['username']);
?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "> <div class="row">

        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Surveys</h3></div></div></div> <div class="m-portlet__body">
        <div class="row">
          <table class="table table-striped" >
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"  >#</th>
                    <th scope="col"  >Name</th>
                    <th scope="col"  >Campaign </th>
                    <th scope="col"  >Go To Survey</th>
                  </tr>
                </thead>
                <tbody>
                      <?php listSurvey1(); ?>
                </tbody>
          </table>
        </div>
        </div></div>
       

        </div>


<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>