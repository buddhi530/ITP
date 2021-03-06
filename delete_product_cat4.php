
<?php
include 'header.php';
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


    <body>
        <?php
        if (isset($_GET['r'])) {
            $id = $_GET['r'];
            ?> <br><br><br><br><br><br><br>

        <body class="hold-transition skin-blue sidebar-mini"> 


        <center> 


            <div class="col-md-6">
                <div class="box box-default">
                    <form action = "delete_product_cat4.php" class="form-horizontal" method="POST"  enctype="multipart/form-data" name="form" id="form">
                        <div class="box-header with-border">
                            <i class="fa fa-bullhorn"></i>
                            <input type='hidden' name='r' value='<?php echo $id ?>'>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-danger">
                                <h4 class="modal-title">Are you sure you want to remove this product item ?</h4>

                                <p>This will lead to remove the product items after your confirmation. All transactions, combined with this products will be removed and system won't be able to roll-back these transactions in future.</p>

                                <div class="card-footer">
                                    <a href='product_category04.php?'><button type="button" class="btn btn-info float-left" >Cancel</button></a>
                                    <button type="submit" name='delete' class="btn btn-warning float-right">Delete</button>
                                </div>
                            </div>


                        </div>
                    </form>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>

        </center>


    </body>

    <?php
}

if (isset($_POST['delete'])) {
    $id = $_POST['r'];

    $sql = "UPDATE category_four SET status='0' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        $message = "ITEM HAS BEEN REMOVED !";
        echo "<script type='text/javascript'>alert('$message');window.location.href='product_category04.php';</script>";

        //echo "<script>window.location = 'product_category04.php?msg=ITEM HAS BEEN REMOVED ! ';</script>";
    } else {
        echo "<script>window.location = 'product_category04.php?msge=ROMVING ITEM FAILED ! CONTACT ADMINISTRATOR ';</script>";
    }
}
//
?>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>  


