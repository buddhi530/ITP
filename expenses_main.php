<?php
include 'connection.php';
include 'header.php';
?>



    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | General Form Elements</title>
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

<!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    </head>
    
    
    
    <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    input { 
        text-align: right; 
    }

    .itemname{
        text-align: left; 
    }
</style>

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
   
    </head>

    <script>

    function submitForm() {

        var form_data = new FormData(document.getElementById("myForm"));
        form_data.append("label", "WEBUPLOAD");
        $.ajax({
            url: "expenses_main_proc.php",
            type: "POST",
            data: form_data,
            processData: false, // tell jQuery not to process the data
            contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
            console.log(data);
            $("#example1").load(window.location + " #example1");
            $("#example2").load(window.location + " #example2");
            $('#type').val("");
            MessageManager.show(data);
        });
        return false;
    }

    var MessageManager = {
        show: function (content) {
            $('#ajaxmsg').html(content);
            setTimeout(function () {
                $('#ajaxmsg').html('');
            }, 6000);
        }
    };
    window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 6000);


    </script> 

    <script>
        function myFunction() {
            document.getElementById("myForm").reset();
        }
    </script>


     <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

 <?php
  
   include 'sidebar.php';
  
  ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                 <div id='ajaxmsg'>
                    </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>New Expense</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Expenses_MAIN</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter Expense Details</h3>
                        </div>
          <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                            <div class="card-body">

                                <!-- left column -->


                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Expense Type<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="exp_type" id ="cat3" required>
                                                <option value=""> SELECT EXPENSES TYPE</OPTION>


                                                <?php
                                                $sql = "select id,type from expenses_category where status = '1'";
                                                $result = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <option value = " <?php echo $row['id'] ?> "> <?php echo $row['type'] ?> </option>;


                                                    <?php
                                                }
                                                ?>

                                            </select>
                                        </div>

                                    </div>    
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Expense Account<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="exp_account" id ="" required>
                                                <option value=""> SELECT EXPENSES ACCOUNT</OPTION>

                                                <option value="1"> PETTY CASH</OPTION>
                                                <option value="2"> BANK ACCOUNT</OPTION>

                                            </select>
                                        </div>

                                    </div>    

                              



                              

                                    <div class="col-md-3">
                                                                  
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
                                        <div class="form-group">
                                            <label>Amount<font color='red'> *</font></label>
                                            <input type="text" name='amount' class="form-control" placeholder="Enter Amount">
                                        </div>

                                    </div>
                              </div>  
                                    
                                    <div class="row">
                     <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Note<font color='red'> *</font></label>
                                            <input type="text" name='note' class="form-control" placeholder="Enter Note">
                                        </div>

                                    </div>


                               

                            </div>
                            <!--  </div>-->
                            


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Save </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->

                            </div>
                    </div>

                    </form>
                </div>  
            
                    <br><br>
            
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Expenses Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">
                                <thead>


                                    <?php
                                    echo "<tr><th><center>Expenses Type</center></th><th><center>Expenses Account </center></th><th><center> Date</center></th><th><center> Amount</center></th><th><center>Note</center></th>
					<th width='1%'><center> Actions</center></th>
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";


                                    $credit_limit1 = 0;

                                    $sql = "SELECT id,exp_account,exp_type,amount,date,note FROM expenses WHERE  status = '1' ORDER BY exp_account ASC";
                                    $result = mysqli_query($con, $sql);
                                    while ($arraySomething1 = mysqli_fetch_array($result)) {
                                        $id = $arraySomething1['id'];
                                        $exp_account = $arraySomething1['exp_account'];
                                        $exp_type = $arraySomething1['exp_type'];
                                        $date = $arraySomething1['date'];
                                        $amount = $arraySomething1['amount'];
                                        $note = $arraySomething1['note'];
                                        
                                        if($exp_account==1)
                                            $exp_account = "PETTY CASH";
                                        else
                                             $exp_account = "BANK ACCOUNT";
                                      
                                        
                                        $sql2 = "SELECT type FROM expenses_category WHERE  id='$exp_type'";
                                    $result2 = mysqli_query($con, $sql2);
                                    while ($arraySomething12 = mysqli_fetch_array($result2)) {
                                        $exp_type_name = $arraySomething12['type'];
                                    }
                                    
//                                        $id1 = $id + 1000;
                                    echo "<tr><td>$exp_type_name</td><td> &nbsp" .$exp_account  . " </td><td> &nbsp" .$date. " </td><td> &nbsp" . $amount . " </td><td>" . $note . "</td>
                                                           ";


                                    echo "<td> <div class='btn-group'>
                              <a href='edit_vehicle.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_expenses.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
                      </div></td>";
                                    }




                                    echo "</tbody>
                                                                                 ";
                                    ?>                   


                                    </tbody>

                            </table>

                        </div>  </div>  



                    <br>
                    <br>

                    <!-- /.card-body -->
                </div>
            
            
            
            
            
            
            
            
            
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
       $('.select3').select2();

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




