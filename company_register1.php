
<?php
include 'connection.php';


if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
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
                        $msp =$_POST['msp'];
                     
                        
                               $sql = "INSERT INTO company_customer(company_name,br_no,vat_no,company_phone,company_fax,company_address,person_name,person_mobile,salutation,company_email,min_sale_price) VALUES 
			('$companyname','$br','$vat','$com_phone','$fax','$com_address','$pname','$pmobile','$salutation','$com_email','$msp')";
                       if(mysqli_query($con, $sql))
                            echo "<div class='callout callout-success'><center>COMPANY CUSTOMER REGISTERED SUCCESSULLY !</center><div>";
                        else 
                            echo "<div class='callout callout-danger'><center>COMPANY CUSTOMER REGISTRATION HAS BEEN FAILED ! CONTACT ADMINISTRATOR</center><div>";
                    }
     




