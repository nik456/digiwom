<?php
require_once '../connect/connect.php';
require_once '../function/SuperUserController.php';
$id = $_GET['id'];

$data = invoice($id);
?>
<link href="../assets/css/invoice.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            DigiWom, Inc
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small>from</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">DigiWom, Inc.</strong><br>
                  Street Address<br>
                  City, Zip Code<br>
                  Phone: (123) 456-7890<br>
                  Fax: (123) 456-7890
               </address>
            </div>
            <div class="invoice-to">
               <small>to</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $data['name'];?></strong><br>
                  Street Address<br>
                  City, Zip Code<br>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice / July period</small>
               <div class="date text-inverse m-t-5"><?php echo $data['date'];?></div>
                   #0000<?php echo $id; ?>DSS<br>
                  Services
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>TASK DESCRIPTION</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <span class="text-inverse"></span><br>
                           <small class="text-wrap"><?php echo $data['note'];?></small>
                        </td>
                     </tr>

                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">

                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">$<?php echo $data['amount'];?></span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            * Payment is due within 30 days<br>
            * If you have any questions concerning this invoice, contact  [support@digiwom.net]
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR CHOOSING US
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> digiwom.net</span>
               <span class="m-r-10 "><i class="fa fa-fw fa-lg fa-envelope"></i> support@digiwom.net</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>
