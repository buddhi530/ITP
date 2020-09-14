<?php
include 'connection.php';
?>




<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
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

    $(document).ready(function () {

        var i = 1;
        $("#add_row").click(function () {
            b = i - 1;
            $('#addr' + i).html($('#addr' + b).html()).find('td:first-child').html(i + 1);
            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
        $("#delete_row").click(function () {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
            calc();
        });

        $('#tab_logic tbody').on('keyup change', function () {
            calc();
        });
        ////////////////
        $('#tab_logic1 tbody').on('keyup change', function () {
            calc();
        });

        ////////////////
        $('#tax').on('keyup change', function () {
            calc_total();
        });


    });

    function calc()
    {
        $('#tab_logic tbody tr').each(function (i, element) {
            var html = $(this).html();
            if (html != '')
            {
                var qty = Number($(this).find('.qty').val().replace(/,/g, ''));
                var price = Number($(this).find('.price').val().replace(/,/g, ''));
                $(this).find('.total').val(qty * price);

                calc_total();
            }
        });
    }

    function calc_total()
    {
        total = 0;
        $('.total').each(function () {
            total += parseInt($(this).val());
        });
        $('#sub_total').val(total.toFixed(2));
        tax_sum = total / 100 * $('#tax').val();
        $('#tax_amount').val(tax_sum.toFixed(2));
        $('#total_amount').val((tax_sum + total).toFixed(2));
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
    </head>

    <script>

    function submitForm() {

        var form_data = new FormData(document.getElementById("myForm"));
        form_data.append("label", "WEBUPLOAD");
        $.ajax({
            url: "expenses_type01.php",
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


    <body>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
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

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Main Expense<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="cat3" id ="cat3" required>
                                                <option value=""> SELECT SUB EXPENSES</OPTION>


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
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Sub Expense<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="cat3" id ="cat3" required>
                                                <option value=""> SELECT MAIN EXPENSES</OPTION>


                                                <?php
                                                $sql = "select id,type from expenses_types where status = '1'";
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

                                </div>



                                <div class="row">  

                                    <div class="col-md-6">
                                                                  
                                   <div class="form-group">
                  <label>Payment Date:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Note</label>
                                            <input type="text" class="form-control" placeholder="Enter ...">
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
                                            <td><select name="item_name[]"  class='form-control itemname' required><option value="">Select Item</option><?php echo fill_unit_select_box($connect, $con); ?></select></td>
                                            <td><input type="text" name='qty[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Qty' class="form-control qty"  /></td>
                                            <td><input type="text" name='price[]' autocomplete="off" onkeypress="return isNumber(event)" placeholder='Unit Price' class="form-control price"  /></td>
                                            <td><input type="text" name='total[]' placeholder='0.00' class="form-control total" readonly/></td>
                                        </tr>
                                        <tr id='addr1'></tr>
                                    </tbody>
                                </table>

                            </div>
                            <!--  </div>-->
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
                                <button type="submit" class="btn btn-primary" id ="submit">Generate </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->

                            </div>
                    </div>

                    </form>
                </div>      </section>
        </div>


<!--!-- date-range-picker -->-->
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
  

   
    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox();


  })
</script>
        
        
        
        
        

!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
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
<!-- Page script -->

</body>
</html>







 
