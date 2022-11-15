<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    include('admin_header.php');
?>



        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="name">Full Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter Full Name">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Enter Email">
                                            </div>
                                        </div>
                                       
                                        
                                        <!-- <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Best Skill <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="val-skill">
                                                    <option value="">Please select</option>
                                                    <option value="html">HTML</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mobile">Mobile  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="address">Address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="address" placeholder="Enter Address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="qualification">Qualification <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phoneus" name="qualification" placeholder="Qualification">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="dob">DOB <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="dob" name="dob" placeholder="5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="balance">Initail Deposit <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-number" name="balance" placeholder="Initial Deposit ">
                                            </div>
                                        </div>

                                       
                                       
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <input type="submit" name="submit" class="btn btn-primary"></button>
                                            </div>
                                        </div>
                                        
                        <?php
            if(isset($_POST["submit"]))
                {
	
  
             include '../includes/config.php';
                {
		
  
    
      
    	$email = $_POST['email'];
        $name =$_POST['name'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $qualification= $_POST['qualification'];
        $balance = $_POST['balance'];
        $dob = $_POST['dob'];
        $currentdate = date('Y-m-d');
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, 8 );

       

        
        $sql = "SELECT * FROM agent WHERE email='$email'";
        $res = mysqli_query($conn, $sql);

      
        if(mysqli_num_rows($res) > 0){
        // //   $email_error = "Email $email is alredy taken"; 
        //   echo "<br";
     
        //   echo  "<p  class='emailcss'>" .$email_error;
       echo ' <div class="alert alert-danger" role="alert">
         Email is already Taken
        </div>';
        }
       
        else{


		
		$sql="insert into agent(email,password,created_date,name,mobile,qualification,balance,address,dob,status)VALUES('$email','$password','$currentdate','$name','$mobile','$qualification',$balance,'$address','$dob','Active')";
		if(mysqli_query($conn,$sql))
        {
            require '../PHPMailer/src/Exception.php';
            require '../PHPMailer/src/PHPMailer.php';
            require '../PHPMailer/src/SMTP.php';
            
            
            $mail = new PHPMailer(true);
            
            
             {
             
                $mail->SMTPDebug =1;                 
                $mail->isSMTP();                                           
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'suhail09442@gmail.com';                  
                $mail->Password   = 'pmujmnytmfulxcwt';                             
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = 465;                                    
            
              
                $mail->setFrom('tarvel@gmail.com', 'Travel ');
            
                $mail->addAddress($email);             
            
            
                $mail->isHTML(true);                                 
                $mail->Subject = 'You are Onboarded as Agent';
                $mail->Body    = "Your credential For Login</b>
                                   
                                    <h2> Email: $email <h2>
                                    <h2> Password : $password </h2>

                                        
                                             <br></b><br>   
                                            ";
                $mail->AltBody = 'you will recieve ';
            
                $mail->send();
                
                } 
        

            
                     echo "<script type = \"text/javascript\">
                                    alert(\"Succesfully Registered\");
                                    window.location = (\"add_agent.php\")
                                    
                                    
                                    </script>";


                                    
        
                                      
     
    }   
else
{
    echo mysqli_error($conn);
}
}   }
mysqli_close($conn);
} 
?>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
 
        <!--**********************************
            Footer end
        ***********************************-->
        <?php include('admin_footer.php'); ?>

</html>