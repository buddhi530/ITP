<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$cat1 = $_POST['cat1'];
$msp = $_POST['msp'];
$cat2 = $_POST['cat2'];
$cash = $_POST['cash'];

$cat3 = $_POST['cat3'];
$credit = $_POST['credit'];
$cat4 = $_POST['cat4'];


$sql = "insert into product_item (cat1,cat2,cat3,cat4,min_sale_price,cash_price,credit_price) values ('$cat1','$cat2','$cat3','$cat4','$msp','$cash','$credit')";
if(mysqli_query($con,$sql))
{
    echo "<div class='callout callout-success'><center>DATA  INSERT SUCCESSULLY !</center><div>";
}
else 
    {
    echo "<div class='callout callout-danger'><center>DATA INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
    }
}



?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

