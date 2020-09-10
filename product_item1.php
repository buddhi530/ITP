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
$count =$_POST['count'];

$sql = "insert into product_item (cat1,min_sale_price,cat2,cash_price,cat3,credit_price,cat4,stock) values ('$cat1','$msp','$cat2','$cash','$cat3','$credit','$cat4','$count')";
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

