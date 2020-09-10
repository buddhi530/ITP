<?php
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
   $category = $_POST['category'];
   $type =$_POST['type'];
       
   
   $sql = "insert into expenses_types(category,type) values ('$category','$type')";
   
   if(mysqli_query($con,$sql))
   {
        echo "<div class='callout callout-success'><center>CATEGORY01  INSERT SUCCESSULLY !</center><div>";
   }
 else {
     echo "<div class='callout callout-danger'><center>CATEGORY01 INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
   }
}

?>



