<?php  
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
  if (isset($_POST['submit'])) {

      new_source_id_list($_POST);
  }
  require_once 'init/top.php';

?>

<!-- begin:: Page -->
<form method="post">
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php  
  require_once 'init/nav.php';
?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">New source id list</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/dashboard" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="/admin/optimisation-list" class="m-nav__link"><span class="m-nav__link-text">Optimization lists</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">New source id list</span></li></ul></div> <div></div></div></div> <div class="m-content"><div id="errors" style="visibility: hidden; height: 0px;"></div> <!----> <div><div class="row"><div class="col"><div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-home"></i></span> <h3 class="m-portlet__head-text text-dark">General Information</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="m-form__group form-group"><div class="m-form__group form-group row"> <div class="col"></label></span></div></div> <!----></div> <div class="form-group m-form__group"><label for="form-control-name">
    
    Name
    </label> <input id="form-control-name" name="name_of_source_id" type="text" class="form-control m-input m-input--air"> <!----></div> <div class="form-group m-form__group m-select2 m-select2--air"> <!----></div></div></div></div>

         <div class="m-portlet"><div class="m-portlet__head m--bg-custom-light-blue"><div class="m-portlet__head-caption"><div class="m-portlet__head-title align-items-center"><span class="m-portlet__head-icon text-dark"><i class="la la-home"></i></span> <h3 class="m-portlet__head-text text-dark">Optimization list</h3></div></div></div> <div class="m-portlet__body"><div class="m-form m-form--state"><div class="form-group m-form__group"><label for="form-control-text">
    
    Optimization list
    </label> 
        <select name="source_id[]"  class="select form-control "   multiple>
            <option>DirectLink</option> 
            <option>Pop</option> 
            <option>Facebook</option> 
            <option>Personal Website</option> 
        </select>

     <!----></div></div></div></div></div></div></div></div></div></div> <footer class="m-grid__item m-footer "><div class="m-container m-container--fluid m-container--full-height m-page__container"><div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop"><div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--first">
                <input class="btn btn-success" type="submit" name="submit" value="Save and go to list" >
                <a href="dashboard.php" class="btn btn-danger">Back</a>
             </div></div></div></footer> <div aria-hidden="true" id="modal-ajax" class="modal"><div class="modal-dialog modal-dialog-centered m-loader m-loader--lg"></div></div> <div aria-hidden="true" id="modal-back-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm redirect</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Some changes aren't saved</p></div> <div class="modal-footer row m-0 p-2"><div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save and continue</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Continue without saving</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div> <div aria-hidden="true" id="modal-delete-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm deletion</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Are you sure?</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-danger btn-delete">Delete</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div> <!----> <div aria-hidden="true" id="modal-save-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm save</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>No changes to save</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save anyway</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div>
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="100vh" data-scroll-speed="300">
  <i class="la la-arrow-up"></i>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
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
<!-- end::Scroll Top -->
<?php  
  require_once 'init/bot.php';
?>