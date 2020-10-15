<?php

include 'connection.php';
$user=1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exp_account = $_POST['exp_account'];
    $exp_type = $_POST['exp_type'];
    $date = $_POST['date'];
    $amount = strtoupper($_POST['amount']);
    $note = strtoupper($_POST['note']);
   
    
    
      $sql = "INSERT INTO expenses(exp_account,exp_type,amount,date,note,user ) VALUES 
			('$exp_account','$exp_type','$amount','$date','$note','$user')";
                     
      if(mysqli_query($con, $sql)){
                            echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  Expense has been saved Successfully !
                </div>';
                       }
                        else 
                           {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Expense saving has been Failed !
                </div>';
                       }
}

?>