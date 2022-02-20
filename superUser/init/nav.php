<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 

$user = getUserData($_SESSION['username']);
 ?>
<header data-minimize-offset="200" data-minimize-mobile-offset="200" class="m-grid__item    m-header ">
   <div class="m-container m-container--fluid m-container--full-height">
      <div class="m-stack m-stack--ver m-stack--desktop">
         <div class="m-stack__item m-brand  m-brand--skin-dark ">
            <div class="m-stack m-stack--ver m-stack--general">
               <div class="m-stack__item m-stack__item--middle m-brand__logo"><a href="dashboard.php" class="m-brand__logo-wrapper"><img alt="" style="width:47px;" src="../assets/img/admin/logo-ads-white-25.png"></a></div>
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
                  <ul class="m-topbar__nav m-nav m-nav--inline">
<li data-dropdown-toggle="click" class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" aria-expanded="true">
                        <a href="#" class="m-nav__link m-dropdown__toggle"><span class="m-topbar__userpic"><img src="../assets/img/admin/user.png" alt="" class="m--img-rounded m--marginless m--img-centered"></span> <span class="m-topbar__username m--hide">
                        Nick
                        </span></a>
                        <div class="m-dropdown__wrapper">
                           <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 12.5px;"></span>
                           <div class="m-dropdown__inner">
                              <div class="m-dropdown__header m--align-center" style="background: url(../assets/img/admin/user_profile_bg.jpg) 0% 0% / cover;">
                                 <div class="m-card-user m-card-user--skin-dark">
                                    <div class="m-card-user__pic"><img src="../assets/img/admin/user.png" alt="" class="m--img-rounded m--marginless"></div>
                                    <div class="m-card-user__details">
                                      <h4 class="text-white"> <?php echo $_SESSION['username']; ?></h4>

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
                  <h4 class="m-menu__section-text ">Admin ACCOUNT</h4>
               </li>
                <?php
                $user = $_SESSION['username'];
    $sql = "SELECT * FROM admin WHERE user = '$user' ";
    $r = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_array($r)){
            $restrict1 = $row['restrict1'];
            $restrict2 = $row['restrict2'];
            $restrict3 = $row['restrict3'];
            $restrict4 = $row['restrict4'];
            $restrict5 = $row['restrict5'];
            if ($restrict1 === '1'){
                echo '<li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-clipboard "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">View Users</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="m-menu__submenu ">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewMarketers.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">View Marketers</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewSubscribers.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">View Subscribers</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewSuperUser.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">View SuperUsers</span></a></li>
                    </ul>
                  </div>
               </li>';
            }

            if ($restrict2 === '1'){
                echo '<li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-clipboard "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Campaigns</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="m-menu__submenu ">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewCampaignList.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Approve Campaign</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewAds.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Approve  Ad</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="viewSurveyList.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Approve  Survey</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="surveyListAnswers.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Survey Answers</span></a></li>
                     </ul>
                  </div>
               </li>';
            }

            if ($restrict3 === '1'){
                echo '<li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="#" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-2 "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Reports</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="m-menu__submenu ">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                        <li aria-haspopup="true" class="m-menu__item "><a href="report_by_date.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By date</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="report_by_campaign.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By campaign</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="report_by_ads.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By ad</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="report_by_surveys.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By survey</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="report_by_transactions.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">By transactions</span></a></li>
                     </ul>
                  </div>
               </li>';
            }

            if ($restrict4 === '1'){
                echo '<li class="m-menu__section">
                  <h4 class="m-menu__section-text ">Finance</h4>
               </li>
               <li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="finance.php" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-coins "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Finance</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                  <div class="m-menu__submenu ">
                     <span class="m-menu__arrow"></span>
                     <ul class="m-menu__subnav">
                        <li aria-haspopup="true" class="m-menu__item "><a href="pricing.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pricing</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="withdraw.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fund withdrawal</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="promoCodes.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Promo codes creator</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="vat.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">VAT</span></a></li>
                        <li aria-haspopup="true" class="m-menu__item "><a href="invoices.php" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Invoicing</span></a></li>
                     </ul>
                  </div>
               </li>';
            }
            if ($restrict5 === '1'){
                echo '<li class="m-menu__section">
                  <h4 class="m-menu__section-text ">Admin Creation</h4>
               </li>
               <li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="superUserCreation.php" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-2 "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Super Users Creation</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
               </li>';
            }
        }
?>
<li class="m-menu__section">
                  <h4 class="m-menu__section-text ">Chat Functions</h4>
               </li>
               <li aria-haspopup="true" data-menu-submenu-toggle="hover" class="m-menu__item  m-menu__item--submenu ">
                  <a href="messaging.php" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-music-2 "></i><span class="m-menu__link-title"><span class="m-menu__link-wrap"><span class="m-menu__link-text">Messaging</span><span class="m-menu__link-badge"></span></span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
               </li>
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