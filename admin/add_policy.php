<?php


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
                                            <label class="col-lg-4 col-form-label" for="name"> Plan Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="plan_name" placeholder="Enter Plan Name">
                                            </div>
                                        </div>  
                                       
                                        
                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Type <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="type">
                                                    <option value="">Please select</option>
                                                    <option value="single">Single</option>
                                                    <option value="Family">Family</option>
                                                    <option value="Platinum">Platinum</option>
                                                    <option value="Gold">Gold</option>
                                               
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="mobile">Coverage amount  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="mobile" name="coverage_amount" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="address">Policy Price<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="price" placeholder="Enter Policy Price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="address">Coverage Period In Days<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-website" name="period" placeholder="Enter Coverage Period">
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
                
		
  
    
      
    
        $plan_name =$_POST['plan_name'];
        $type = $_POST['type'];
        $coverage_amount = $_POST['coverage_amount'];
        $price= $_POST['price'];
        $period= $_POST['period'];
        $currentdate = date('Y-m-d');



		
		$sql="insert into plan(plan_name,type,coverage_amount,period,price,created_date,policy_status)
        VALUES('$plan_name','$type','$coverage_amount','$period','$price','$currentdate','Active')";
		if(mysqli_query($conn,$sql))
        {
          
        

            
                     echo "<script type = \"text/javascript\">
                                    alert(\"Succesfully Registered\");
                                    window.location = (\"add_policy.php\")
                                    
                                    
                                    </script>";


                                    
        
                                      
     
    }   
else
{
    echo mysqli_error($conn);
}


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