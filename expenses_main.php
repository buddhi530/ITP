<?php
include 'header.php';
include 'connection.php';

$connect = new PDO("mysql:host=localhost;dbname=db_sale", "root", "");

function fill_unit_select_box($connect,$con)
{ 

 $output = '';
 $query = "SELECT id,type FROM expenses_category WHERE status='1' ORDER BY id ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $arraySomething78)
 {
   
     
     $id = $arraySomething78['id'];
    $type = $arraySomething78['type'];
  
   
    
  $output .= '<option value="'.$id.'">'.$type.'</option>';
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
			var price = 1;
			$(this).find('.total').val(qty);
			
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

}
//ADD REMOVE ROWS INVOICE - END

</script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 
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
                            <h1>New Expenses</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">New Expenses</li>
                            </ol>
                        </div>
                    </div>
<!--                </div> /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter Expenses Details</h3>
                        </div>
                        <form action="expenses_main_proc.php" method='post'>
                            <div class="card-body">
                                <div class="row">
                                    <!-- left column -->
                                      <div class="col-md-4">
                                        <!-- general form elements -->

                                        <!-- /.card-header -->
                                        <!-- form start -->
                                       
                                        <div class="form-group">
                                            <label for="examplesphone">Payee</label>
                                            <input type="text" class="form-control" id="total" name="pay"   dir="ltr" placeholder="Enter Payee Name" autocomplete="off" >
                                        </div>
                                   
                                    </div>
                                    <div class="col-md-4">
                                        <!-- general form elements -->

                                        <!-- /.card-header -->
                                        <!-- form start -->
                                       
                                        <div class="form-group">
                                            <label for="examplesphone">Expenses Description</label>
                                            <input type="text" class="form-control" id="total" name="des"   dir="ltr" placeholder="Enter GRN Description" autocomplete="off" >
                                        </div>
                                   
                                    </div>
                                    <!-- /.card-body -->






                                    <div class="col-md-4">


                                        
                                       
                                                <!-- select -->

                                        <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name='date' class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>





                                    

                                        <div class="form-group">
                                    
                                        </div>   </div>

        <table class="table table-bordered table-hover" id="tab_logic">
    
        <thead>
          <tr>
            <th class="text-center"> # </th>
            <th class="text-center" width='80%'> Item </th>
            <th class="text-center"> Amount </th>
            <th class="text-center">  </th>
          
          </tr>
        </thead><tbody>
             <tr id='addr0'>
            <td>1</td>
            <td><select name="item_name[]"  class='form-control itemname' required><option value="">Select Item</option><?php echo fill_unit_select_box($connect,$con); ?></select></td>
             <td><input type="text" name='qty[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Qty' class="form-control qty"  /></td>
            <td><input type="hidden" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>

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
                                <button type="submit" class="btn btn-primary" id ="submit">Generate Report </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                              
                            </div>
</form>
        
   <?php     
//    }
//    }
//    
//    }
?>
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




        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                    "responsive": true,
                    "autoWidth": false,
                });
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>




