<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
$user = getUserData($_SESSION['username']);
$my_id = '';
$user = getUserData($_SESSION['username']);
$my_id = $user['id'];
 ?>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<header data-minimize-offset="200" data-minimize-mobile-offset="200" class="m-grid__item    m-header ">
   <div class="m-container m-container--fluid m-container--full-height">
      <div class="m-stack m-stack--ver m-stack--desktop">
         <div class="m-stack__item m-brand  m-brand--skin-dark ">
            <div class="m-stack m-stack--ver m-stack--general">
               <div class="m-stack__item m-stack__item--middle m-brand__logo"><a href="dashboard.php" class="m-brand__logo-wrapper"><img alt="" style="width:47px;"  src="../assets/img/admin/logo-ads-white-25.png"></a></div>
               <div class="m-stack__item m-stack__item--middle m-brand__tools"><a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block"><span></span></a> <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block"><span></span></a> <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block"><i class="flaticon-more"></i></a></div>
            </div>
         </div>
         <div id="m_header_nav" class="m-stack__item m-stack__item--fluid m-header-head">
            <button id="m_aside_header_menu_mobile_close_btn" class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "><i class="la la-close"></i></button> 
            <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
               <ul class="m-menu__nav  m-menu__nav--submenu-arrow "></ul>
            </div>
            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general text-right">
               <div class="m-stack__item m-topbar__nav-wrapper d-inline-flex">
         
                 <ul class="m-topbar__nav m-nav m-nav--inline mx-auto">
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" style="margin-top: 4px;" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-expanded="true">
                        <li class="m-nav__item d-flex align-items-center"><span id="widget-user-balance" class="h1 mb-0 m--font-danger" style="font-family: Roboto;"><?php echo getVirtualWllet($_SESSION['username']); ?></span></li>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="changeCurr.php?id=0">USD</a>
                        <a class="dropdown-item" href="changeCurr.php?id=1">JOD</a>
                        <a class="dropdown-item" href="changeCurr.php?id=2">AED</a>
                      </div>
                    </div>
                     
                  </ul>
               </div>
               <div class="m-stack__item m-topbar__nav-wrapper d-inline-flex">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                     <li data-dropdown-toggle="click" data-dropdown-persistent="true" class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--mobile-full-width" aria-expanded="true">
                        <a href="messagesQue.php"  class="m-nav__link"><span class="m-nav__link-icon"><i class="flaticon-music-2"></i>
                        <span id="user_details">
                            <?php checkMail($my_id); ?>
                            
                        </span>
                        </span></a> 

                     </li>
                     <li data-dropdown-toggle="click" class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" aria-expanded="true">
                        <a href="#" class="m-nav__link m-dropdown__toggle"><span class="m-topbar__userpic"><?php echo getIMG1($_SESSION['username']); ?></span> <span class="m-topbar__username m--hide">
                        Nick
                        </span></a> 
                        <div class="m-dropdown__wrapper">
                           <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 12.5px;"></span> 
                           <div class="m-dropdown__inner">
                              <div class="m-dropdown__header m--align-center" style="background: url(../assets/img/admin/user_profile_bg.jpg) 0% 0% / cover;">
                                 <div class="m-card-user m-card-user--skin-dark">
                                    <div class="m-card-user__pic"><?php echo getIMG2($_SESSION['username']); ?></div>
                                    <div class="m-card-user__details"><a href="user.php" class="m-card-user__name m--font-weight-500">
                                       <?php echo $user['name'] ?>
                                       </a> <a href="user.php" class="m-card-user__email m--font-weight-300 m-link">
                                       <?php echo $user['email'] ?>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="m-dropdown__body">
                                 <div class="m-dropdown__content">
                                    <ul class="m-nav m-nav--skin-light">
                                       <li class="m-nav__section m--hide"><span class="m-nav__section-text">
                                          Section
                                          </span>
                                       </li>
                                       <li class="m-nav__item"><a href="user.php" class="m-nav__link"><i class="m-nav__link-icon flaticon-profile-1"></i> <span class="m-nav__link-title"><span class="m-nav__link-wrap"><span class="m-nav__link-text">
                                          My Profile
                                          </span></span></span></a>
                                       </li>
                                       <li class="m-nav__separator m-nav__separator--fit"></li>
                                       <li class="m-nav__item"><a href="logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                          Logout
                                          </a>
                                       </li>
                                    </ul>
                                    <form id="logout-form" action="" method="POST" style="display: none;"><input type="hidden" name="_token" value="YIFZTEEn21DOfnfiTPb2wiCpv1WrdUsCB93k9qBD"></form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
   <div id="m_ver_menu" data-menu-vertical="true" data-menu-scrollable="true" data-menu-dropdown-timeout="500" class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar" style="height: 587px; position: relative; overflow: visible;">
      <div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;">
         <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
               <li aria-haspopup="true" class="m-menu__item m-menu__item--active m-menu__item--expanded m-menu__item--open"><a href="dashboard.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text ">Dashboard</span><span class="m-menu__link-badge"></span></span></span></a></li>
              
               <li class="m-menu__section">
                  <h4 class="m-menu__section-text ">SUBSCRIBER ACCOUNT</h4>
               </li>
            
               <li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <!--<a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-clipboard "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Campaigns</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>-->
                  <li aria-haspopup="true" class="m-menu__item "><a href="viewAds.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"><span></span></i><span class="m-menu__link-text">Ads</span></a></li>
                  <li aria-haspopup="true" class="m-menu__item "><a href="viewSurveyList.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard "><span></span></i><span class="m-menu__link-text">Surveys</span></a></li>
                  <li aria-haspopup="true" class="m-menu__item "><a href="finance.php" class="m-menu__link "><i class="m-menu__link-icon flaticon-coins "><span></span></i><span class="m-menu__link-text">My Wallet</span></a></li>
<!--                  <div class="m-menu__submenu ">-->
<!--                     <span class="m-menu__arrow"></span>-->
<!--                     <ul class="m-menu__subnav">-->
<!--                        <li aria-haspopup="true" class="m-menu__item "><a href="viewCampaignList.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">View Campaign</span></a></li>-->
                       
<!--                         <li aria-haspopup="true" class="m-menu__item "><a href="#/help" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Help</span></a></li> -->
<!--                     </ul>-->
<!--                  </div>-->
               </li>
               <!--<li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">-->
               <!--   <a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-2 "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Reports</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>-->
               <!--   <div class="m-menu__submenu ">-->
               <!--      <span class="m-menu__arrow"></span>-->
               <!--      <ul class="m-menu__subnav">-->
               <!--         <li aria-haspopup="true" class="m-menu__item "><a href="report_by_date.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By date</span></a></li>-->
               <!--         <li aria-haspopup="true" class="m-menu__item "><a href="report_by_campaign.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By campaign</span></a></li>-->
               <!--         <li aria-haspopup="true" class="m-menu__item "><a href="report_by_ads.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By ad</span></a></li>-->
               <!--         <li aria-haspopup="true" class="m-menu__item "><a href="report_by_surveys.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By survey</span></a></li>-->
               <!--      </ul>-->
               <!--   </div>-->
               <!--</li>-->
               <!--<li class="m-menu__section">-->
               <!--    <a href="finance.php" class="m-menu__link m-menu__toggle"><i class="text-white m-menu__link-icon flaticon-coins "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text"></span><span class="m-menu__link-badge"></span></span></span> <h4 class=" pl-3 m-menu__section-text ">My wallet</h4> </a>-->

               <!--</li>-->
            </ul>
         </div>
      </div>
      <div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;">
         <div class="mCSB_draggerContainer">
            <div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 0px; top: 0px;">
               <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
            </div>
            <div class="mCSB_draggerRail"></div>
         </div>
      </div>
   </div>
   "
</div>
 <script>  
$(document).ready(function(){


 setInterval(function(){
  check_Mail();
 }, 3000);

 function check_Mail()
 {
  $.ajax({
   url:"init/check_Mail.php",
  success:function(data){
    $('#user_details').html(data);
   }
  })
 }
 
});  
</script>