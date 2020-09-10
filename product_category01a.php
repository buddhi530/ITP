<?php
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $type =$_POST['type'];
   
   
   $sql = "insert into category_one(type) values ('$type')";
   
   if(mysqli_query($con, $sql))
   {
        echo "<div class='callout callout-success'><center>CATEGORY01  INSERT SUCCESSULLY !</center><div>";
   }
 else {
     echo "<div class='callout callout-danger'><center>CATEGORY01 INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
   }
}

?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

