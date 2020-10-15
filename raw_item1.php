<?php

include 'connection.php';


//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat1 = $_POST['cat1'];
    $cat2 = $_POST['cat2'];
    $cat3 = $_POST['cat3'];
    $cat4 = $_POST['cat4'];
    $reorder = $_POST['reorder'];
    
    $sql = "insert into row_item(cat1,cat2,cat3,cat4,reorder) values ('$cat1','$cat2','$cat3','$cat4','$reorder')";
    if(mysqli_query($con,$sql))
{
   echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  Expense has been saved Successfully !
                </div>';
}
else 
    {
               echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  Expense saving has been Failed !
                </div>';
    }

//}
    
    ?>