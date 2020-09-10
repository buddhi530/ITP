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
        
        <!-- Main Sidebar Container -->
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
