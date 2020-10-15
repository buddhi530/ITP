<?php

include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nic = $_POST['nic'];
    $type = $_POST['type'];
    $salutation = strtoupper($_POST['salutation']);
    $name = strtoupper($_POST['name']);
    $address = strtoupper($_POST['address']);
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $recidence = $_POST['recidence'];

    $msp = $_POST['msp'];
    
    
      $sql = "INSERT INTO company_customer(nic,type_customer,salutation,person_name,company_address,person_mobile,company_email,min_sale_price,recidence) VALUES 
			('$nic','$type','$salutation','$name','$address','$mobile','$email','$msp','$recidence')";
                       if(mysqli_query($con, $sql)){
                            echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  Customer has been registered Successfully !
                </div>';
                       }
                        else 
                           {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Customer registration has been Failed !
                </div>';
                       }
}

?>