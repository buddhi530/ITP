<?php

include 'connection.php';

$connect = new PDO("mysql:host=localhost;dbname=db_sale", "root", "");

function fill_unit_select_box($connect,$con)
{ 

 $output = '';
 $query = "SELECT id,cat1,cat2,cat3,cat4 FROM product_item WHERE status='1' ORDER BY id ASC";
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
           
    
  $output .= '<option value="'.$id.'">'.$item_name.'</option>';
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
//	tax_sum=total/100*$('#tax').val();
//	$('#tax_amount').val(tax_sum.toFixed(2));
//	$('#total_amount').val((tax_sum+total).toFixed(2));
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


 <div class="content-wrapper"
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>New GRN (Products to Stores)</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">New GRN</li>
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
                            <h3 class="card-title">Enter GRN Details</h3>
                        </div>
                        <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                            <div class="card-body">
                                <div class="row">
                                    <!-- left column -->
                                    <div class="col-md-6">
                                        <!-- general form elements -->

                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="form-group">
                                            <label for="examplesphone">GRN Description</label>
                                            <input type="text" class="form-control" id="total" name="total"  placeholder="Enter GRN total" autocomplete="off" >
                                        </div>
                                   
                                    </div>
                                    <!-- /.card-body -->






                                    <div class="col-md-6">


                                        
                                       
                                                <!-- select -->

                                        <div class="form-group">
                  <label>Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
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
            <th class="text-center"> Qty </th>
            
          </tr>
        </thead><tbody>
             <tr id='addr0'>
            <td>1</td>
            <td><select name="item_name[]"  class='form-control itemname' required><option value="">Select Item</option><?php echo fill_unit_select_box($connect,$con); ?></select></td>
            <td><input type="text" name='qty[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Qty' class="form-control qty"  /></td>
           

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
         
        
        
        </tbody>
      </table>
                  
                  
                  </div> </div>
  
     <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Generate GRN </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                              
                            </div>
  
        
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

