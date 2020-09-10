<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $revenue_date = $_POST['revenue_date'];
    $reg_num = $_POST['reg_num'];
     $dname= $_POST['dname'];
    $sname = $_POST['sname'];
    $insu_date = $_POST['insu_date'];
    $insu_company = $_POST['insu_company'];
    

  
    
    
      $sql = "INSERT INTO vehicle(type,dname,rname,revenue_license,insurance_company,insurance_date,registration_num) VALUES 
			('$type','$dname','$sname','$revenue_date','$insu_company','$insu_date','$reg_num')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
}

?>
