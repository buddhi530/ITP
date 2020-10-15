<?php

include 'connection.php';
include 'header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dnic = $_POST['dnic'];
    $dname = $_POST['dname'];
    $daddress = $_POST['daddress'];
     $dphone= $_POST['dphone'];
    $dlicence = $_POST['dlicence'];
    $rnic = $_POST['rnic'];
    $rname = $_POST['rname'];
    $raddress = $_POST['raddress'];
    $rphone = $_POST['rphone'];
    $rlicence = $_POST['rlicence'];

  
    
    
      $sql = "INSERT INTO driver(dnic,dname,daddress,dphone,dlicense,rnic,rname,raddress,rphone,rlicense) VALUES 
			('$dnic','$dname','$daddress','$dphone','$dlicence','$rnic','$rname','$raddress','$rphone','$rlicence')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
}

?>
