<?php if(isset($_POST["submit"]))
                                {

                                    include '../includes/config.php';

    $customer_name =$_POST['customer_name'];                              
    $customer_email = $_POST['customer_email'];
    $nationality=$_POST['nationality'];
    $gender = $_POST['gender'];
    $residence = $_POST['residence'];
    $passportno = $_POST['passportno'];
    $dob = $_POST['dob'];
    $mobileno = $_POST['mobileno'];
    $nomine_name= $_POST['nomine_name'];
    $nomine_gender = $_POST['nomine_gender'];
    $nomine_mobile = $_POST['nomine_mobile'];
    $agent_id = $_POST['agent_id'];
    $policy_id = $_POST['policy_id'];
    $currentdate = date('Y-m-d');

    $price = $_POST['price'];

    
                                    



    


    $sql="insert into customer(customer_name,customer_email,nationality,gender,residence,passportno,dob,mobileno,nomine_name,nomine_gender,nomine_mobile,agent_id,policy_id,created_date)
    VALUES('$customer_name','$customer_email','$nationality','$gender','$residence','$passportno','$dob','$mobileno','$nomine_name','$nomine_gender','$nomine_mobile','$agent_id','$policy_id','$currentdate')";
    if(mysqli_query($conn,$sql))
    {
      
    

        
                 echo "<script type = \"text/javascript\">
                                alert(\"Booking Completed\");
                                window.location = (\"view_Booking.php\")
                                
                                
                                </script>";


                                
    
                                  
 
}   
else
{
echo mysqli_error($conn);
}
                   

                                    
                                }
                                    
                                    
                                    
                                    ?>