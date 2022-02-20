<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$id = $_GET['id'];
$user='';
require_once '../connect/connect.php';
require_once '../function/MarketersController.php';
require_once '../function/SuperUserController.php';

  if (isset($_POST['submit'])) {
      changeUser1($_POST);
  }
  $user = getUserData1($id);
  require_once 'init/top.php';

?>
<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
<?php
  require_once 'init/nav.php';
?>
 <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body"><button id="m_aside_left_close_btn" class="m-aside-left-close m-aside-left-close--skin-dark"><i class="la la-close"></i></button>

<div class="m-grid__item m-grid__item--fluid m-wrapper"><div class="m-subheader "><div class="d-flex align-items-center"><div class="mr-auto"><h3 class="m-subheader__title m-subheader__title--separator">Edit User</h3> <ul class="m-subheader__breadcrumbs m-nav m-nav--inline"><li class="m-nav__item m-nav__item--home"><a href="" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><a href="" class="m-nav__link"><span class="m-nav__link-text">Dashboard</span></a></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">Users</span></li> <li class="m-nav__separator">-</li> <li class="m-nav__item"><span class="m-nav__link-text">User Name</span></li></ul></div> <div></div></div></div> <div class="m-content"><div id="errors" style="visibility: hidden; height: 0px;"></div> <!----> <div><div class="row"><div class="col-xl-3 col-lg-4"><div class="m-portlet"><div class="m-portlet__body"><div class="m-form m-form--state"><div class="m-card-profile"><div class="m-card-profile__title m--hide">
                        Your Profile
                    </div> <div class="m-card-profile__pic"><div class="m-card-profile__pic-wrapper"><img src="../assets/img/admin/user.png" alt=""></div></div> <div class="m-card-profile__details"><span class="m-card-profile__name" style="word-break: break-word;"><?php $user = getUserData1($id); echo $user['name'] ?></span> <!----> <a href="" class="m-card-profile__email m-link" style="word-break: break-word;"> <?php $user = getUserData1($id); echo $user['email'] ?></a> <!----></div></div> <div class="m-portlet__body-separator"></div> <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides"></ul> <div class="m-widget1 m-widget1--paddingless"><div class="m-widget1__item"><div class="row m-row--no-padding align-items-center"><div class="col col-auto"><h3 class="m-widget1__title">Total</h3> <span class="m-widget1__desc">Total balance</span></div> <div class="col text-right"><span class="m-widget1__number text-nowrap pl-3 m--font-danger">
                        <?php $user = getUserData1($id); echo $user['money'] ?>
                    </span></div></div></div></div></div></div></div></div><div class="col-xl-9 col-lg-8"><div class="m-portlet m-portlet--tabs"><div class="m-portlet__head"><form method="post"><div class="m-portlet__head-tools"><ul role="tablist" class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary"><li class="nav-item m-tabs__item"><a data-toggle="tab" href="#m_user_profile_tab_1" role="tab" class="nav-link m-tabs__link active"><i class="flaticon-share m--hide"></i>
                                    Update Profile
                                </a></li></ul></div></div> <div class="tab-content"><div id="m_user_profile_tab_1" class="tab-pane active"><div class="m-form m-form--fit m-form--label-align-right"><div class="m-portlet__body"><div class="form-group m-form__group row"><div class="col col-auto mx-auto"><h3 class="mb-0">General Information</h3></div></div> <div class="form-group m-form__group"><label for="form-control-id">

    Affiliate ID
    </label> <input  id="form-control-id" type="text" class="form-control m-input m-input--air" value="<?php  $user = getUserData1($id); echo $user['affiliateNumber'] ?>" name="affiliateNumber" required> <!----></div> <div class="form-group m-form__group"><label for="form-control-name">

    Name
    </label> <input  id="form-control-name" type="text" class="form-control m-input m-input--air" value="<?php  $user = getUserData1($id); echo $user['name'] ?>" name="name" required> <!----></div> <div class="form-group m-form__group"><label for="form-control-email">

    Email
    </label> <input id="form-control-email" type="text" class="form-control m-input m-input--air" value=" <?php  $user = getUserData1($id); echo $user['email'] ?>" name="email" required> <!----></div> <div class="form-group m-form__group"><label for="form-control-password_current">
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <input class="btn btn-success btn-save" type="submit" name="submit" value="Save">
         <a class="btn btn-primary" href="dashboard.php" class="btn">Send New Password</a>
         <a class="btn btn-secondary" href="dashboard.php" class="btn">Back</a>
</div></div></div>
</form>
    </footer> <div aria-hidden="true" id="modal-ajax" class="modal"><div class="modal-dialog modal-dialog-centered m-loader m-loader--lg"></div></div> <div aria-hidden="true" id="modal-back-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm redirect</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Some changes aren't saved</p></div> <div class="modal-footer row m-0 p-2"><div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save and continue</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Continue without saving</button></div> <div class="col col-auto m-0 p-2"><button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div> <div aria-hidden="true" id="modal-delete-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm deletion</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>Are you sure?</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-danger btn-delete">Delete</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div> <!----> <div aria-hidden="true" id="modal-save-confirm" role="dialog" tabindex="-1" class="modal"><div role="document" class="modal-dialog modal-dialog-centered"><div class="modal-content"><div class="modal-header"><h5 class="modal-title">Confirm save</h5> <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button></div> <div class="modal-body"><p>No changes to save</p></div> <div class="modal-footer"><button data-dismiss="modal" type="button" class="btn btn-success btn-save">Save anyway</button> <button data-dismiss="modal" type="button" class="btn">Cancel</button></div></div></div></div></div>
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