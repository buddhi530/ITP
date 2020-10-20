<?php
include 'header.php';
include 'connection.php';


$connect = new PDO("mysql:host=localhost;dbname=db_sale", "root", "");

function fill_unit_select_box($connect,$con)
{ 

 $output = '';
 $query = "SELECT id,cat1,cat2,cat3,cat4,cash_price FROM product_item WHERE status='1' ORDER BY id ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $arraySomething78)
 {
   
   
     $id = $arraySomething78['id'];
    $cat1 = $arraySomething78['cat1'];
    $cat2 = $arraySomething78['cat2'];
    $cat3 = $arraySomething78['cat3'];
    $cat4 = $arraySomething78['cat4'];
    $cash_price = $arraySomething78['cash_price'];
   



        $sql18 = "SELECT type FROM category_one WHERE id='$cat1' ";
        $result18 = mysqli_query($con,$sql18);
        while ($arraySomething18 = mysqli_fetch_array($result18)) {
        $cat1_name = $arraySomething18['type'];
        }

        $sql2 = "SELECT brand FROM category_two WHERE id='$cat2' ";
        $result2 = mysqli_query($con, $sql2);
        while ($arraySomething2 = mysqli_fetch_array($result2)) {
        $cat2_name = $arraySomething2['brand'];
        }

        $sql3 = "SELECT model FROM category_three WHERE id='$cat3' ";
        $result3 = mysqli_query($con, $sql3);
        while ($arraySomething3 = mysqli_fetch_array($result3)) {
        $cat3_name = $arraySomething3['model'];
        }


        $sql4 = "SELECT extra FROM category_four WHERE id='$cat4' ";
        $result4 = mysqli_query($con, $sql4);
        while ($arraySomething4 = mysqli_fetch_array($result4)) {
        $cat4_name = $arraySomething4['extra'];
        }
    
    
    $item_name = $cat1_name." ".$cat2_name." ".$cat3_name." ".$cat4_name;
           
    
        
      
           
    
  $output .= '<option value="'.$id.'">'.$item_name.' [Rs. '.$cash_price.']</option>';
 }
 return $output;
}



?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style>
    input { 
    text-align: right; 
}

.itemname{
    text-align: left; 
}
    </style>
<script>

    
    function isNumber(evt) {
      
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    
 $(document).ready(function(){
     
    var i=1;
    $("#add_row").click(function(){b=i-1;
      	$('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
      	$('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      	i++; 
  	});
    $("#delete_row").click(function(){
    	if(i>1){
		$("#addr"+(i-1)).html('');
		i--;
		}
		calc();
	});
	
	$('#tab_logic tbody').on('keyup change',function(){
		calc();
	});
        ////////////////
        $('#tab_logic1 tbody').on('keyup change',function(){
		calc();
	});
        
        ////////////////
	$('#tax').on('keyup change',function(){
		calc_total();
	});
	

});

function calc()
{
	$('#tab_logic tbody tr').each(function(i, element) {
		var html = $(this).html();
		if(html!='')
		{
			var qty =  Number($(this).find('.qty').val().replace(/,/g, ''))     ;
			var price = Number($(this).find('.price').val().replace(/,/g, ''));
			$(this).find('.total').val(qty*price);
			
			calc_total();
		}
    });
}

function calc_total()
{
	total=0;
	$('.total').each(function() {
        total += parseInt($(this).val());
    });
	$('#sub_total').val(total.toFixed(2));
	tax_sum=total/100*$('#tax').val();
	$('#tax_amount').val(tax_sum.toFixed(2));
	$('#total_amount').val((tax_sum+total).toFixed(2));
}
//ADD REMOVE ROWS INVOICE - END

</script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>





<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shanaz</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

        <!-- Select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

        
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

 <?php
  
   include 'sidebar.php';
  
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>New Invoice</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Sales invoice</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                  <form method="POST" action="sale_invoice_proc.php">
                <div class="container-fluid">
 
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter Sales Details</h3>
                        </div>
                        
                            <div class="card-body">

                                <!-- left column -->
                                
                                <div class="row">
                                <div class="col-md-4">
                                 

                             
                                    
                                     <div class="form-group">
                                            <label>Customer <font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="customer" id="customer" >
                                                <option value='' >SELECT CUSTOMER</option>
                                                 <?php
                                              $sql1 = mysqli_query($con,"SELECT id,company_name FROM company_customer WHERE status='1' and type_customer='2' ORDER BY company_name  ASC");
                                              while ($row = mysqli_fetch_array($sql1)) {
                                                      ?>
                                                      <option value=" <?php echo $row['id'] ?> "> <?php echo $row['company_name'] ?> </option>;
                                              <?php }
                                              ?>
                                                      <?php
                                              $sql1 = mysqli_query($con,"SELECT id,person_name FROM company_customer WHERE status='1' and type_customer='0' ORDER BY company_name  ASC");
                                              while ($row = mysqli_fetch_array($sql1)) {
                                                      ?>
                                                      <option value=" <?php echo $row['id'] ?> "> <?php echo $row['person_name'] ?> </option>;
                                              <?php }
                                              ?>
                                                
                                            </select>
                                        </div>
                                    
                                    
                                </div>
                                    
                                         <div class="col-md-4">
                                    
                                   <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                        <input type="text" name='date' class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                                             
                                             
                                             
                                             
                                </div>
                                    
                                         <div class="col-md-2">
                              
                                 <label>Sales Type<font color='red'> *</font></label>
                                 <select name="sale_type" class="form-control select2" style="width: 100%;" id="stype" name="stype" required="">
                    <option value=''>SELECT SALES TYPE</option>
                   <option value="CREDIT-SALE"> CREDIT SALE </OPTION>
                <option value="CASH-SALE"> CASH SALE </OPTION>
                   
                  </select>
                                </div>
                                    
                                    <div class="col-md-2">
                              
                                 <label>Invoice Type<font color='red'> *</font></label>
                                 <select  class="form-control select2" style="width: 100%;" id="stype" name="invoice_type" required="">
                    <option VALUE='' >INVOICE TYPE</option>
                   <option value="VAT"> TAX INVOICE </OPTION>
                <option value="NON-VAT"> NON-TAX INVOICE </OPTION>
                   
                  </select>
                                </div>
                                   
                            </div>
                                
                                  <div class="row">
                                <div class="col-md-4">
                                
                                  <div class="form-group">
                                            <label>Driver <font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="driver" id="driver" >
                                                <option value="" >SELECT Driver</option>
                                                 <?php
                                              $sql1 = mysqli_query($con,"SELECT id,dname FROM driver WHERE status='1' ORDER BY dname ASC");
                                              while ($row = mysqli_fetch_array($sql1)) {
                                                      ?>
                                                      <option value=" <?php echo $row['id'] ?> "> <?php echo $row['dname'] ?> </option>;
                                              <?php }
                                              ?>
                                                
                                            </select>
                                        </div>
                                    
                                </div>
                                    
                                         <div class="col-md-4">
                               
                                    <div class="form-group">
                                         <label>Vehicle <font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="vehicle" id="vehicle" >
                                                <option value="" >SELECT VEHICLE</option>
                                                 <?php
                                              $sql1 = mysqli_query($con,"SELECT id,registration_num FROM vehicle WHERE status='1' ");
                                              while ($row = mysqli_fetch_array($sql1)) {
                                                      ?>
                                                      <option value=" <?php echo $row['id'] ?> "> <?php echo $row['registration_num'] ?> </option>;
                                              <?php }
                                              ?>
                                                
                                            </select>
                                    </div>
                                </div>
                                    
                                         <div class="col-md-4">
             
                                               <div class="form-group">
                                         <label>Sales Rep <font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="porter" id="rep" >
                                                <option value="" >SELECT SALES REP</option>
                                                 <?php
                                              $sql1 = mysqli_query($con,"SELECT id,rname FROM driver WHERE status='1' ");
                                              while ($row = mysqli_fetch_array($sql1)) {
                                                      ?>
                                                      <option value=" <?php echo $row['id'] ?> "> <?php echo $row['rname'] ?> </option>;
                                              <?php }
                                              ?>
                                                
                                            </select>
                                    </div>
                                             
                                             
                                </div>
                            </div>
                                
                  <table class="table table-bordered table-hover" id="tab_logic">
    
        <thead>
          <tr>
            <th class="text-center"> # </th>
            <th class="text-center" width='60%'> Item </th>
            <th class="text-center"> Qty </th>
            <th class="text-center"> Price </th>
            <th class="text-center"> Total </th>
          </tr>
        </thead><tbody>
             <tr id='addr0'>
            <td></td>
            <td><select name="item_name[]"  class='form-control itemname' required><option value="">Select Item</option><?php echo fill_unit_select_box($connect,$con); ?></select></td>
            <td><input type="text" name='quantity[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Qty' class="form-control qty"  /></td>
            <td><input type="text" name='unit_price[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Unit Price' class="form-control price"  /></td>
            <td><input type="text" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>
        
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-md-12">
      <button id="add_row" class="btn btn-default pull-left">Add Row</button>
      <button id='delete_row' class="pull-right btn btn-default">Delete Row</button>
    </div>
  </div>
  <div class="row clearfix" style="margin-top:20px">
    <div class="pull-right col-md-4">
      <table class="table table-bordered table-hover" id="tab_logic_total">
        <tbody>
          <tr>
            <th class="text-center">Total</th>
            <td class="text-center"><input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly/></td>
          </tr>
         
        
        
        </tbody>
      </table>
                  
                  
                  </div> </div>
               
                                
                                
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Generate Order </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                          
                            </div>
</div>    </form>    
                     
       

                 </section>     
                    </div>
            




<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
                                            format: 'YYYY-MM-DD'
                                        });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button

      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox();


  })
</script>


<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>




<script>
       $(function () {
                                        //Initialize Select2 Elements
                                        $('.select2').select2()

                                        //Initialize Select2 Elements
                                        $('.select2bs4').select2({
                                            theme: 'bootstrap4'
                                        })

                                        //Datemask dd/mm/yyyy
                                        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
                                        //Datemask2 mm/dd/yyyy
                                        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
                                        //Money Euro
                                        $('[data-mask]').inputmask()

                                        //Date range picker
                                        $('#reservationdate').datetimepicker({
                                            format: 'YYYY-MM-DD'
                                        });
                                        $('#reservationdate1').datetimepicker({
                                            format: 'YYYY-MM-DD'
                                        });
                                        //Date range picker
                                        $('#reservation').daterangepicker();
                                        //Date range picker with time picker
                                       
                                        $('#reservationtime').daterangepicker({
                                            timePicker: true,
                                            timePickerIncrement: 30,
                                            locale: {
                                                format: 'MM/DD/YYYY hh:mm A'
                                            }
                                        })
                                        //Date range as a button
                                        $('#daterange-btn').daterangepicker(
                                                {
                                                    ranges: {
                                                        'Today': [moment(), moment()],
                                                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                                                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                                    },
                                                    startDate: moment().subtract(29, 'days'),
                                                    endDate: moment()
                                                },
                                                function (start, end) {
                                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                                }
                                        )

                                        //Timepicker
                                        $('#timepicker').datetimepicker({
                                            format: 'LT'
                                        })

                                        //Bootstrap Duallistbox
                                        $('.duallistbox').bootstrapDualListbox()

                                        //Colorpicker
                                        $('.my-colorpicker1').colorpicker()
                                        //color picker with addon
                                        $('.my-colorpicker2').colorpicker()

                                        $('.my-colorpicker2').on('colorpickerChange', function (event) {
                                            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                                        });

                                        $("input[data-bootstrap-switch]").each(function () {
                                            $(this).bootstrapSwitch('state', $(this).prop('checked'));
                                        });

                                    })
        </script>

</script>




