<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
require_once 'init/top.php';
$id = $_GET['id'];

$item = array();

$sql= "SELECT * FROM campaign WHERE id = '$id'";
$r = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($r)){
        $item['name'] = $row['campaignName'];
        $item['ageFrom'] = $row['ageFrom'];
        $item['ageTo'] = $row['ageTo'];
        $item['timeZone'] = $row['timeZone'];
        $item['dailyBudget'] = $row['dailyBudget'];
        $item['creator'] = $row['creator'];
        $item['other_params'] = $row['other_params'];
    }
  
?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">The Campaign</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">The Campaign</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet"><div class="m-portlet__body"><div class="m-form m-form--state"><span class="h1">
        Ad Name:
        <span class="m--font-success">
            <?php echo $item['name']; ?>
        </span></span></div></div></div> <div class="row">
        <div class="col-12"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Ad Information</h3></div></div></div> <div class="m-portlet__body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-6">
                    <h3>Campaign name: <?php echo $item['name']; ?></h3>
                    <h3>Ad timezone: <?php echo $item['timeZone']; ?></h3>
                </div>
                <div class="col-6"><h3>Ad age from : <?php echo $item['ageFrom']; ?></h3>
                    <h3>Ad age to : <?php echo $item['ageTo']; ?></h3></div> 
                    <div class="col-6">
                    <h3>Daily Budget: <?php echo $item['dailyBudget']; ?></h3>
                </div>
                <div class="col-6">
                    <h3>Creator : <?php echo $item['creator']; ?></h3></div>
                    <?php 
                    $item = json_decode($item['other_params']);
                    foreach($item as $param){
                        echo '<div class="col-6"> <h3>Tags :'.$param.'</h3></div>';
                    }
                 ?>
           </div>   
            
                                 
            
            
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