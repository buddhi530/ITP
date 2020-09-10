<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $type = $_POST['type'];
    $salutation = $_POST['salutation'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $recidence = $_POST['recidence'];

    $msp = $_POST['msp'];
    
    
      $sql = "INSERT INTO company_customer(nic,type_customer,salutation,company_name,company_address,person_mobile,company_email,min_sale_price,recidence) VALUES 
			('$nic','$type','$salutation','$name','$address','$mobile','$email','$msp','$recidence')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
}

?>