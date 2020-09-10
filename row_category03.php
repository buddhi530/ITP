<?php
include 'connection.php';
?>

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


    </head>

    <script>

        function submitForm() {

        var form_data = new FormData(document.getElementById("myForm"));
        form_data.append("label", "WEBUPLOAD");
        $.ajax({
        url: "row_category03a.php",
                type: "POST",
                data: form_data,
                processData: false, // tell jQuery not to process the data
                contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
        console.log(data);
        $("#example1").load(window.location + " #example1");
        $("#example2").load(window.location + " #example2");
        $('#model').val("");
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
                            <h1>Add Row-Item Category 03</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Row_category_03</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter the category Model</h3>
                        </div>
                        <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                            <div class="card-body">

                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->

                                    <!-- /.card-header -->
                                    <!-- form start -->


                                    <div class="form-group">
                                        <label for="examplesname">Category Brand</label>
                                        <input type="hidden" class="form-control" name="id"  id="id">
                                        <input type="text" class="form-control" name="model"  id="model" placeholder="Model" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Submit </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                                <button type="submit" class="btn btn-primary float-right" onclick="myFunction()">Reset</button>
                            </div>

                        </form>
                    </div>
              


                    <br>



                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Category Brand details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">

                                <thead>
                                    <?php
                                    echo '<tr><th><center> Category brand</center></th>
                                    <th width="10%"><center> Action</center></th>
					</tr>
                                    </thead>
                               
                                 <tbody>';
                                    $sql = "select id,model from row_three where status ='1'";
                                    $result = mysqli_query($con, $sql);

                                    while ($arraySomething1 = mysqli_fetch_array($result)) {

                                        $id = $arraySomething1['id'];
                                        $model1 = $arraySomething1['model'];




                                        echo "<tr><td>&nbsp " . $model1 . "</td>";

                                        echo"<td> <div class='btn-group'>
                              
                           <center>   <button type='button' class='btn btn-info'>Delete</button></center></div></td></tr>";
                                    }

                                    echo "</tbody>      ";
                         
                                  ?>                   
                                    </tbody>



                            </table>

                        </div>  

                    </div>
  </div>
                    <!--    final-->
                       </section>
                </div>
         
       
    </body>
    <!-- Form Element sizes -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTEfor demo purposes -->
    <script src="dist/js/demo.js"></script>

</body>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="plugins/moment/moment.min.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script type="text/javascript"></script>

             <script>
            $(function () {
              
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






