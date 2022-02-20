<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
  require_once 'init/top.php';
?>

<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button> 
<?php  
  require_once 'init/nav.php';
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Simulation tool</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Simulation tool</span></li></ul></div> <div></div></div></div> <div class="m-content"><div class="m-portlet m-portlet--mobile"><div class="m-portlet__head"><div class="m-portlet__head-caption"><div class="m-portlet__head-title"><h3 class="m-portlet__head-text"> Simulation tool
	<small></small></h3></div></div> <div class="m-portlet__head-tools"><ul class="m-portlet__nav"></ul></div></div> <div class="m-portlet__body"><div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30"><div class="row align-items-center"><div class="col-xl-12"><div class="form-group m-form__group row align-items-center"></div></div></div> <div class="row" style="margin-top: 20px;"><div class="col-xl-12"><div class="form-group m-form__group row align-items-center">
	<div class="col-md-3">
		<select name="mobileDesktop[]"  class="select form-control countries order-alpha"   id="countryId" multiple>
			<option>Windows</option>
			<option>linux</option>
			<option>Mac</option>
			<option>Android</option>
			<option>Ios</option>
		</select>
	</div> 
	<div class="col-md-3">
		<select name="traficType[]"  class="selecte form-control countries order-alpha"   id="countryId" multiple>
			<option>Push</option>
			<option>Pop</option>
			<option>DirectLinks</option>
		</select>
	</div> 
	<div class="col-md-3"><div class="m-input-icon m-input-icon--left"><div class="col-xs-8 col-xs-offset-2 search-box">
			<div class="input-group">
			  <input oninput="updateResult(this.value)" type="search" class="form-control" placeholder="Search..." />
			</div>
		</div> 
		<span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-search"></i></span></span></div></div></div></div></div></div> <div id="json_data" class="m_datatable m-datatable m-datatable--default m-datatable--loaded" style="">
			
		<div class="container">
			<table class="table result">
				
			</table>
		</div>
		</div></div></div></div></div></div> <footer class="m-grid__item m-footer "><div class="m-container m-container--fluid m-container--full-height m-page__container"><div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop"><div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--first"><!----> <!----> <!----></div></div></div></footer> <div aria-hidden="true" id="modal-ajax" class="modal"><div class="modal-dialog modal-dialog-centered m-loader m-loader--lg"></div></div> <div aria-hidden="true" id="modal-back-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm redirect</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Some changes aren't saved</p></div> <div class="modal-footer row m-0 p-2"><div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save and continue</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Continue without saving</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div> <div aria-hidden="true" id="modal-delete-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm deletion</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Are you sure?</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-danger btn-delete">Delete</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div> <!----> <div aria-hidden="true" id="modal-save-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm save</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>No changes to save</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save anyway</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div>
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
<script src="../assets/js/multiple-select.js"></script>
<script src="../assets/js/dist/slimselect.min.js"></script>
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

<div class="daterangepicker dropdown-menu ltr show-calendar opensright"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="ranges"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div></body></html>