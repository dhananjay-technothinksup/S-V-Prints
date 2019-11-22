<!DOCTYPE html>
<html>
<?php
$page = "party_list";
include('head.php');
?>
<style>

  td{
    padding:2px 10px !important;
  }
  table{
    /* overflow: hidden; */
  }
  th, td { min-width:200px; }
  .sr_no, .td_btn{
    min-width:50px !important;
  }
  .td_w{
    min-width:100px !important;
  }
  html, body, .row{
    overflow-x: hidden;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div> -->


            <!-- Main content -->
            <div class="invoice p-3 mb-3">

              <table class="table table-bordered mb-0 invoice-table">
        <style media="screen">
          .invoice-table td{
            Width:33% !important;
              border: 1px solid #555!important;
          }
          .invoice-table{
            margin-bottom:0px;
            border: 1px solid #555!important;
          }
          .invoice-table p{
            line-height: 15px;
          }
        </style>
        <tr>

          <td colspan="3">
            <div class="row">
              <div class="col-md-4">
                  <!-- <img class="" src="<?php echo base_url(); ?>assets/images/universal.png" width="150" height="100" alt=""> -->
              </div>
              <div class="col-md-4 text-center pt-2 pb-2">
                <h3 >S V Prints </h3>
                <p   style="font-size:16px; margin-bottom:8px;">Ford Corner Laxmipuri Kolhapur Maharashtra </p>
                <p  style="font-size:16px; margin-bottom:8px;" >Ph No. 0231-2646189</p>
                <p  style="font-size:16px; margin-bottom:8px;"> Mob No. 9422413073, 9423044173</p>
                <p  style="font-size:16px; margin-bottom:8px;">Email: info@univarsaldigital.net</p>
                <p  style="font-size:16px; margin-bottom:8px;">Website: www.universaldigital.net</p>
              </div>
              <div class="col-md-4 ">
                <!-- <div class=" text-center">
                  <img class=" mx-auto " src="<?php echo base_url(); ?>assets/images/contitech.png" width="100" height="50" alt=""> <br>
                  <img class=" mx-auto " src="<?php echo base_url(); ?>assets/images/phonix.png" width="100" height="50" alt=""> <br>
                  <img class=" mx-auto " src="<?php echo base_url(); ?>assets/images/sansui.png" width="100" height="50" alt=""> <br>
                  <img class=" mx-auto " src="<?php echo base_url(); ?>assets/images/godrej.png" width="100" height="50" alt=""> <br>

                </div> -->
                  </div>
            </div>
          </td>

        </tr>
        <tr>
          <td style="border-right:0px!important; padding-left: 20px; padding-top:25px;" >
             <p style="font-size:16px; margin-bottom:5px; padding-top:10px;"><strong>Party Name and Address</strong></p>
            <p style="font-size:16px; margin-bottom:5px;"> Vaibhav Wadkar</p>
            <p style="font-size:16px; margin-bottom:5px;"> Kolhapur kolhapur</p>
            <p style="font-size:16px; margin-bottom:5px;">Sate : Maharashtra</p>
            <p style="font-size:16px; margin-bottom:5px;"> Contact No. 9876543210</p>

            </td>
          <td style="border-left:0px!important; border-right:0px!important;">

          </td>
          <td style="padding:0px!important;">
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"><b> &nbsp;Invoice No. : 1</b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"> <b> &nbsp;Invoice Date : </b>&nbsp;  <strong>09 Nov 2019</strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"><b> &nbsp;PO No. : 1</b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"> <b> &nbsp;PO Date : </b>&nbsp;  <strong>09 Nov 2019</strong></p> <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;">
          <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"><b> &nbsp;Vehicle No. : MH-09 AK 1218</b></p>  <hr style="border-bottom:1px solid #000; padding:0px; margin:0px;" >
         <p style="font-size:14px; margin-bottom:3px; margin-top:3px;"> <b> &nbsp;Transport : </b>&nbsp;  </p>
         <!-- <p style="font-size:14px; margin-bottom:3px; margin-top:3px;" ><b> &nbsp;Terms : &nbsp; Credit </b></p> -->
        </td>
      </tr>
      </table>


      <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-botttom">
          <style media="screen">
          .table-bottom {
    border-collapse: collapse;
  }

  .table-bottom, tr, td{

          border: 1px solid #000;

          margin-left: auto;
          margin-right: auto;
          }
           p{
            margin-bottom: 0px;
          }
          </style>
          <thead>
          <tr>
            <th>Sr. No.</th>
            <th>Party </th>
            <th>Perticular</th>
            <th>Platter Size </th>
            <th>HSN No.</th>
            <th>GST</th>
            <th>Qty</th>
            <th>Rate</th>
            <th>Amount</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>ABCD</td>
            <td>ABCD</td>
            <td>100kg</td>
            <td>1234</td>
            <td>150</td>
            <td>2 Nos</td>
            <td>5000</td>
            <td>10000.00</td>
          </tr>

          <tr>
            <td colspan="7"  rowspan="6"><p> <b>DC No : 1234, 1234</b> </p></td>
              <td colspan="1"><p style="text-align:left;">Basic Amount : </p>  </td>
              <td colspan="3"><p> <b>90000.00</b> </p></td>
          </tr>
          <tr>

              <td colspan="1"><p style="text-align:left;">CGST Amount : </p>  </td>
              <td colspan="3"><p> <b>500.00</b> </p></td>
          </tr>
          <tr>

              <td colspan="1"><p style="text-align:left;">SGST Amount : </p>  </td>
              <td colspan="3"><p> <b>500.00</b> </p></td>
          </tr>
          <tr>

              <td colspan="1"><p style="text-align:left;">IGST Amount : </p>  </td>
              <td colspan="3"><p> <b>00.00</b> </p></td>
          </tr>
          <tr>

              <td colspan="1"><p style="text-align:left;">GST TOTAL : </p>  </td>
              <td colspan="3"><p> <b>1000.00</b> </p></td>
          </tr>
          <tr>

              <td colspan="1"><p style="text-align:left;">Net Amount : </p>  </td>
              <td colspan="3"><p> <b>100000.00</b> </p></td>
          </tr>

          <tr>
            <td colspan="5"> <p>Bill Amount In Words : <b>Rupees One Lakh Only</b> </p> </td>
            <td colspan="1"><p>GRAND TOTAL : </p> </td>
            <td colspan="3"><p> <b>100000.00</b> </p></td>
          </tr>

          <tr>
            <td colspan="9"> <p style="float:right;"> <b> For S V Prints </b> </p>
            </td>
          </tr>

          <tr>

            <td colspan="9"> <br> <p style="text-align:right"> Authorised Signature</p> </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>



<br><br>



              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo base_url() ?>Transactional/sale_invoice_print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include('script.php') ?>



</body>
</html>
