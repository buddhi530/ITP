<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $invoice_num = $_POST['innum'];
    $recieved_date = $_POST['re_date'];
    $pay_done = $_POST['pay_done'];
     $pay_type = $_POST['pay_type'];

    $description = $_POST['description'];
   
    

  
    
    
      $sql = "INSERT INTO feedback(recieved_date,pay_done,pay_type,description) VALUES 
			('$recieved_date','$pay_done','$pay_type','$description')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
}

?>
