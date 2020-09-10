<?php
include 'connection.php';




 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        
                    
                        $companyname =$_POST['companyname'];
                        $br = $_POST['br'];
                        $vat = $_POST['vat'];
                        $com_phone = $_POST['phone'];
                         $fax = $_POST['fax'];
                        $com_address = $_POST['address'];
                       
                        $com_email = $_POST['email'];
                        
                        $salutation = $_POST['salutation'];
                        $pname = $_POST['cname'];
                        $pmobile = $_POST['cmobile'];
                        $country =$_POST['country'];
                       
                        
                        
                        $sql = "INSERT INTO supplier(company_name,br_no,vat_no,company_phone,company_fax,company_address,person_name,person_mobile,salutation,company_email,country) VALUES 
			('$companyname','$br','$vat','$com_phone','$fax','$com_address','$pname','$pmobile','$salutation','$com_email','$country')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
                    }
     

?>

