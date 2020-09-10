<?php

include 'connection.php';


//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cat1 = $_POST['cat1'];
    $cat2 = $_POST['cat2'];
    $cat3 = $_POST['cat3'];
    $cat4 = $_POST['cat4'];
    $reorder = $_POST['reorder'];
    
    $sql = "insert into row_item (cat1,cat2,cat3,cat4,reorder) values ('$cat1','$cat2','$cat3','$cat4','$reorder')";
    if(mysqli_query($con,$sql))
{
    echo "<div class='callout callout-success'><center>DATA  INSERT SUCCESSULLY !</center><div>";
}
else 
    {
    echo "<div class='callout callout-danger'><center>DATA INSERT HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";  
    }

//}
    
    ?>