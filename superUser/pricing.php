<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../connect/connect.php';
require_once '../function/SuperUserController.php';
if (isset($_POST['submit'])){
    updateWatchSate($_POST);
}
if (isset($_POST['submit1'])){
    updateSurveys($_POST);
}
if (isset($_POST['submit2'])){
    updatePayoutWS($_POST);
}
if (isset($_POST['submit3'])){
    updatePayoutSurvey($_POST);
}
  require_once 'init/top.php';
?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
  <?php
  require_once 'init/nav.php';
?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>
<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Finance</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/dashboard" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Finance</span></li></ul></div> <div></div></div></div> <div class="m-content">
                                 <div class="m-portlet m-portlet--mobile"><div class="m-portlet__body"><div class="m-form m-form--label-align-right"><div class="row align-items-center"><div class="col col-auto mb-3"><h1>Price for Watch/Share</h1></div> <div class="col col-auto mb-3"></div></div>
<div>
    <form method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
        <div class="mt-3">
            <label for="">Price of Watch/Share</label>
            <input class="form-control" type="text" name="priceWatchShare" value="<?php watchsate();?>" >
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" value="Save" name="submit">
        </div>
    </form>
</div>
</div>
</div>
</div>


                                 <div class="m-portlet m-portlet--mobile"><div class="m-portlet__body"><div class="m-form m-form--label-align-right"><div class="row align-items-center"><div class="col col-auto mb-3"><h1>Price for Surveys</h1></div> <div class="col col-auto mb-3"></div></div>
<div>
    <form method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
        <div class="mt-3">
            <label for="">Price for Surveys</label>
            <input class="form-control" type="text" name="priceWatchShare" value="<?php priceSurveys();?>">
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" value="Save" name="submit1">
        </div>
    </form>
</div>
                                             </div>
</div>
</div>
                                             <div class="m-portlet m-portlet--mobile"><div class="m-portlet__body"><div class="m-form m-form--label-align-right"><div class="row align-items-center"><div class="col col-auto mb-3"><h1>Payout Amount</h1></div> <div class="col col-auto mb-3"></div></div>
<div>
    <form method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
        <div class="mt-3">
            <label for="">Payout amount for Watch/Share</label>
            <input class="form-control" type="text" name="priceWatchShare" value="<?php watchsatepayout();?>">
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" value="Save" name="submit2">
        </div>
    </form>
    <form method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
        <div class="mt-3">
            <label for="">Payout amount for Survey</label>
            <input class="form-control" type="text" name="priceWatchShare" value="<?php watchsateSurveys();?>">
        </div>
        <div class="mt-3">
            <input class="btn btn-success" type="submit" value="Save" name="submit3">
        </div>
    </form>
</div>
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

<!-- end::Body -->

<div class="datetimepicker datetimepicker-dropdown-bottom-left dropdown-menu" style="left: 302.468px; z-index: 1110;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">18:00</span><span class="minute">18:05</span><span class="minute">18:10</span><span class="minute">18:15</span><span class="minute active">18:20</span><span class="minute">18:25</span><span class="minute">18:30</span><span class="minute">18:35</span><span class="minute">18:40</span><span class="minute">18:45</span><span class="minute">18:50</span><span class="minute">18:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour active">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day active">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day today">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day">31</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month active">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020-2029</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year ">2019</span><span class="year active">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year ">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div><div class="datetimepicker datetimepicker-dropdown-bottom-left dropdown-menu" style="left: 634.14px; z-index: 1120;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">13 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="minute">18:00</span><span class="minute">18:05</span><span class="minute">18:10</span><span class="minute">18:15</span><span class="minute active">18:20</span><span class="minute">18:25</span><span class="minute">18:30</span><span class="minute">18:35</span><span class="minute">18:40</span><span class="minute">18:45</span><span class="minute">18:50</span><span class="minute">18:55</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">13 May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="hour">0:00</span><span class="hour">1:00</span><span class="hour">2:00</span><span class="hour">3:00</span><span class="hour">4:00</span><span class="hour">5:00</span><span class="hour">6:00</span><span class="hour">7:00</span><span class="hour">8:00</span><span class="hour">9:00</span><span class="hour">10:00</span><span class="hour">11:00</span><span class="hour">12:00</span><span class="hour">13:00</span><span class="hour">14:00</span><span class="hour">15:00</span><span class="hour">16:00</span><span class="hour">17:00</span><span class="hour active">18:00</span><span class="hour">19:00</span><span class="hour">20:00</span><span class="hour">21:00</span><span class="hour">22:00</span><span class="hour">23:00</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">May 2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="day old">26</td><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day today active">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day">31</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month active">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2020-2029</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year ">2019</span><span class="year active">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year ">2030</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div></div>