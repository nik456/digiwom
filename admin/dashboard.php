<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
  require_once 'init/top.php';
    $user = getUserData($_SESSION['username']);
?>
<style type="text/css">
    #lingumania_langswitcher{
        right: 50%!important;
    }
</style>

<script src="../assets/local/admin-tr.js"></script>
<script src="../assets/js/lingumania.min.js"></script>
<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Dashboard</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet"><div class="m-portlet__body"><div class="m-form m-form--state"><span class="h3">
        User ID:
        <span style="margin-right:2rem;" class="m--font-success">
            <?php echo $user['id'] ?>
        </span>
        UserName:
        <span style="margin-right:2rem;"  class="m--font-success">
           <?php echo $user['name'] ?>
        </span>   
        Country:
        <span style="margin-right:2rem;"  class="m--font-success">
           <?php echo $user['country'] ?>
        </span>
        </span></div></div></div> 
            <div class="col"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Clicks</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div id="clicks" style="height: 50vh; width: 100%; padding: 0px; position: relative;"><canvas class="flot-base" width="900" height="328" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 900px; height: 328.5px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 1px; text-align: center;">2020-05-06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 55px; text-align: center;">2020-05-07</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 110px; text-align: center;">2020-05-08</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 165px; text-align: center;">2020-05-09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 220px; text-align: center;">2020-05-10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 275px; text-align: center;">2020-05-11</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 330px; text-align: center;">2020-05-12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 385px; text-align: center;">2020-05-13</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 140px; left: 3px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 7px; text-align: right;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 280px; left: 1px; text-align: right;">-1</div></div></div><canvas class="flot-overlay" width="900" height="328" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 900px; height: 328.5px;"></canvas></div></div></div></div></div> <div class="col"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><h3 class="m-portlet__head-text text-dark">Spendings, $</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div id="spendings" style="height: 50vh; width: 100%; padding: 0px; position: relative;"><canvas class="flot-base" width="900" height="328" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 900px; height: 328.5px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 1px; text-align: center;">2020-05-06</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 55px; text-align: center;">2020-05-07</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 110px; text-align: center;">2020-05-08</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 165px; text-align: center;">2020-05-09</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 220px; text-align: center;">2020-05-10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 275px; text-align: center;">2020-05-11</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 330px; text-align: center;">2020-05-12</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 55px; top: 294px; left: 385px; text-align: center;">2020-05-13</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 140px; left: 3px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 7px; text-align: right;">1</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 280px; left: 1px; text-align: right;">-1</div></div></div><canvas class="flot-overlay" width="400 height="328" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 4900x; height: 328.5px;"></canvas></div></div></div></div></div><<div class="m-portlet"><div class="m-portlet__body m-portlet__body--no-padding"><div class="m-form m-form--state"><div class="row m-row--no-padding m-row--col-separator-xl"><div class="col-xl-4"><div class="m-widget1"><div class="m-widget1__item"><div class="row m-row--no-padding align-items-center"><div class="col"><h3 class="m-widget1__title">Clicks</h3> <span class="m-widget1__desc">Today's clicks</span></div> <div class="col m--align-right"><span class="m-widget1__number m--font-danger">
                                0
                            </span></div></div></div> <div class="m-widget1__item"><div class="row m-row--no-padding align-items-center"><div class="col"><h3 class="m-widget1__title">Spendings</h3> <span class="m-widget1__desc">Today's spendings</span></div> <div class="col m--align-right"><span class="m-widget1__number m--font-danger">
                                $0.00
                            </span></div></div></div> <div class="m-widget1__item"><div class="row m-row--no-padding align-items-center"><div class="col"><h3 class="m-widget1__title">Ad</h3> <span class="m-widget1__desc">Active / Total</span></div> <div class="col m--align-right">
                                                                        0 / 0
                                                            </div>
                                                
                                                            </div>
                                                            <div class="row m-row--no-padding align-items-center mt-3"><div class="col"><h3 class="m-widget1__title">Survey</h3> <span class="m-widget1__desc">Active / Total</span></div> <div class="col m--align-right">
                                                                        0 / 0
                                                            </div>
                                                
                                                            </div>
                                                            </div></div></div>
                                                            <div class="col-xl-4"><div class="m-widget14"><div class="m-widget14__header m--margin-bottom-30"><h3 class="m-widget14__title">
                Clicks
            </h3> <span class="m-widget14__desc">
                Today's clicks by hour
            </span></div> <div class="m-widget14__chart" style="height: auto;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><canvas id="clicks-by-hour" width="282" height="150" class="chartjs-render-monitor" style="display: block; width: 282px; height: 150px;"></canvas></div></div></div> <div class="col-xl-4"><div class="m-widget14"><div class="m-widget14__header"><h3 class="m-widget14__title">
                Spendings
            </h3> <span class="m-widget14__desc">
                Today's spendings by Ads / Survey
            </span>
            </div> <div class="row align-items-center"><div class="col"><div id="spending-by-campaign-piechart" class="m-widget14__chart" style="height: auto;"><div class="m-widget14__stat"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"></svg></div></div> <div class="col"><div class="m-widget14__legends"></div></div></div></div></div></div></div></div></div></div></div></div> <footer class="m-grid__item m-footer "><div class="m-container m-container--fluid m-container--full-height m-page__container"><div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop"><div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--first"><!----> <!----> <!----></div></div></div></footer> <div aria-hidden="true" id="modal-ajax" class="modal"><div class="modal-dialog modal-dialog-centered m-loader m-loader--lg"></div></div> <div aria-hidden="true" id="modal-back-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm redirect</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Some changes aren't saved</p></div> <div class="modal-footer row m-0 p-2"><div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save and continue</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Continue without saving</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div> <div aria-hidden="true" id="modal-delete-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm deletion</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Are you sure?</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-danger btn-delete">Delete</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div> <!----> <div aria-hidden="true" id="modal-save-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm save</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>No changes to save</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save anyway</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div>
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