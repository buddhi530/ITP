
<?php
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $brand =$_POST['brand'];
   
   
   $sql = "insert into row_two(brand) values ('$brand')";
   
   if(mysqli_query($con, $sql))
    {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Row Category-02 has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Row Category-02 Registration has been Failed !
                </div>';
                            
                        }
                    }
     
?>
     




