<?php

include 'header.php';
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

    
    
    
//    
//    $query12 = mysql_query("SELECT * FROM company_customer");
//
//$flag = false; // I am using a flag variable
//
//// fetch the value of the name field
//$CategoryName = $_POST['name'];
//
// while($Row = mysql_fetch_array($query12 )) {
//    $ID = $Row['id'];
//    $Name = $Row['person_name'];
//    if($CategoryName === $Name) {
//       $flag = true;
//    }
//    
    
    
    
    
}

if($flag) {
    echo "here is an element with the same name";
}

    
    
    
    
    
    

    $sql = "INSERT INTO company_customer(nic,type_customer,salutation,person_name,company_address,person_mobile,company_email,min_sale_price,recidence,user) VALUES 
			('$nic','$type','$salutation','$name','$address','$mobile','$email','$msp','$recidence','$user')";

if (mysqli_query($con, $sql)){
    $query = mysql_query("SELECT COUNT(person_name) FROM company_customer WHERE person_name = '" . mysql_real_escape_string($_POST['name']) . "'");
    $row = mysql_fetch_array($query);
    if ($row[0]) {
        echo "here is an element with the same name";
    }
}


    if (mysqli_query($con, $sql)) {
        echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  Customer has been registered Successfully !
                </div>';
    } else {
        echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Customer registration has been Failed !
                </div>';
    }

?>