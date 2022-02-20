<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  

  require_once 'init/top.php';
  
    $user = getUserData($_SESSION['username']);
    if (isset($_POST['submit']))
    {
        echo earnNow($_SESSION['username'],$_POST);
    }
?>

<?php  
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Dashboard</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet"><div class="m-portlet__body"><div class="m-form m-form--state"><span class="h1">
        User ID:
        <span class="m--font-success">
            <?php echo $user['id'] ?>
        </span></span></div></div></div> <div class="row">

        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Ads</h3></div></div></div> <div class="m-portlet__body">
        <div class="row">
            <?php loadAdsForSubscribers(); ?>
        </div>
        </div></div>
       

        </div>

                <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Surveys</h3></div></div></div> <div class="m-portlet__body">
                    <table class="table table-striped" >
              <thead class="thead-dark">
                <tr>
                  <th scope="col"  >#</th>
                  <th scope="col"  >Name</th>
                  <th scope="col"  >Campaign </th>
                  <th scope="col"  >Go To Survey</th>
                  <th scope="col"  ></th>
                </tr>
              </thead>
              <tbody>
                    <?php listSurvey1(); ?>
              </tbody>
        </table>
        </div></div>
       

        </div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'top',
        trigger: 'hover'
    });
});
</script>
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>