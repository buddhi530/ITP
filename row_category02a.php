
<?php
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $brand =$_POST['brand'];
   
   
   $sql = "insert into row_two(brand) values ('$brand')";
   
   if(mysqli_query($con, $sql))
   {
        echo "<div class='callout callout-success'><center>CATEGORY 02  INSERT SUCCESSULLY !</center><div>";
   }
 else {
     echo "<div class='callout callout-danger'><center>CATEGORY 02 INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
   }
}

?>



<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


