<?php
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $model =$_POST['model'];
   
   
   $sql = "insert into category_three(model) values ('$model')";
   
   if(mysqli_query($con, $sql))
   {
        echo "<div class='callout callout-success'><center>CATEGORY 03  INSERT SUCCESSULLY !</center><div>";
   }
 else {
     echo "<div class='callout callout-danger'><center>CATEGORY 03 INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
   }
}

?>






<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

