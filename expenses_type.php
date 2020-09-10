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
                            <h1>Add Expenses Main Category</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Expenses_category_01</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter Name for a Main Expense</h3>
                        </div>
                        <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                            <div class="card-body">

                                <!-- left column -->
                                
                                
                                <div class="row">
                            
                                <div class="col-md-6">
                                             <div class="form-group">
                                            <label>Expenses Category<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="category" id ="category" required>
                                                <option value=""> SELECT CATEGORY</OPTION> 

                                                <?php
                                                $sql = "select id,type from expenses_category where status = '1'";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <option value = " <?php echo $row['type'] ?> "> <?php echo $row['type'] ?> </option>;


                                                    <?php
                                                }
//mekadi <?php ekn strt krnne } php wlt aithi tag ekk hind nttm ek html kiyl hithal error ekk anw .udadit php ek close krl tiynw et psee
//tiynne html code ekk.ek hind tm aye php tag ekn strt krnne
                                                ?>


                                            </select>
                                        </div>
                                </div>
                                     <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="examplesname">Expenses Type</label>
                                        <input type="hidden" class="form-control" name="id"  id="id">
                                        <input type="text" class="form-control" name="type"  id="type" placeholder="Type" autocomplete="off">
                                    </div>
                                    
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
                            <h3 class="card-title">Expenses type details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">

                                <thead>
                                    <?php
                                    echo '<tr><th><center> Category</center></th><th><center> type</center></th>
                                    <th width="10%"><center> Action</center></th>
					</tr>
                                    </thead>
                               
                                 <tbody>';
                                    $sql = "select id,category,type from expenses_types where status ='1'";
                                    $result = mysqli_query($con,$sql);

                                    while ($arraySomething1 = mysqli_fetch_array($result)) {

                                        $id = $arraySomething1['id'];
                                        $category = $arraySomething1['category'];
                                         $type = $arraySomething1['type'];




                                        echo "<tr><td>&nbsp " . $category . "</td><td>&nbsp " . $type . "</td>";

                                        echo"<td> <div class='btn-group'>
                              
                           <center>   <button type='button' class='btn btn-warning'>Delete</button></div></td></center></tr>";
                                    }

                                    echo "</tbody>
                               ";
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


        
        
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ShanazMGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Developer</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
          
            <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
               Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">REGISTRATION</li>
         
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Customers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="customer_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Individual Customers</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="company_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Customer</p>
                </a>
              </li>
           
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Suppliers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="supplier_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suppliers Bank Account</p>
                </a>
              </li>
           
            </ul>
          </li>
       
          
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Item - Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="product_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product category 04</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="product_item.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Item</p>
                </a>
              </li>
         
            </ul>
          </li>
          
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Item - Raw
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="row_category01.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw category 01</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category02.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw category 02</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category03.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw category 03</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="row_category04.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Raw category 04</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Item</p>
                </a>
              </li>
         
            </ul>
          </li>
          
          
                    <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Expenses
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="supplier_register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenses Category</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenses type</p>
                </a>
              </li>
               <li class="nav-item">
                  <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Expenses</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">SALES</li>
           <li class="nav-header">PAYMENTS</li>
            <li class="nav-header">GRN</li>
             <li class="nav-header">VEHICLE DETAILS</li>
             <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Vehicle
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="vehicle.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicles</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="Driver.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers</p>
                </a>
              </li>
           
            </ul>
          </li>
           <li class="nav-header">ALL REPORTS</li>
          
        
    
      
        
          
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

