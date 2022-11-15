<?php

include('agent_header.php');
	include '../includes/config.php';
	$policy_id= $_REQUEST['policy_id'];
    $agent_id= $_REQUEST['agent_id'];

    $query = "select  * FROM plan WHERE policy_id = '$policy_id'";
	$result = $conn->query($query);
    while($row = $result->fetch_assoc()){
        ?>


 
    ?>




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
    <div class="row">
        <div class="col-12">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><u>Review Your Policy</u></h4>
                    
                    <div class="row form-material">
                        <div class="col-md-3">
                            <label class="m-t-20"><h5> Selected Plan - <strong><?php echo " $row[plan_name]   - $row[type] "  ?></label></h4></strong>
                          
                           
                        </div>
                        <div class="col-md-3">
                        <label class="m-t-20"><h5> Policy Type - <strong><?php echo "$row[type] "  ?></label></h4></strong>
             

                        </div>
                        <div class="col-md-3">
                        <label class="m-t-20"><h5> Coverage Amount - <strong><?php echo "  $row[coverage_amount] "  ?></label></h4></strong>
                        </div>
                        <div class="col-md-3">
                        <label class="m-t-20"><h5> Coverage Period - <strong><?php echo "  $row[period] Days"  ?></label></h4></strong>
             
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Passenger Information</h4>
                    <form action="policy_procces.php" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="m-t-20">Name</label>
                            <div class="input-group ">
                                <input type="text" class="form-control" name="customer_name" placeholder="Enter Customer Name"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-user-o"></i></span></span>
                            </div>
                            <input type="text" class="form-control" name="policy_id" value="<?php  echo $policy_id ?>" readonly hidden> 
                            <input type="text" class="form-control" name="agent_id" value="<?php echo  $_REQUEST['agent_id']; ?>"readonly hidden > 
                            <input type="text" class="form-control" name="price" value="<?php echo  $row['price']; ?>"hidden  > 
                            <input type="text" class="form-control" name="balance" value="<?php echo  $bal; ?>" hidden> 
                            <label class="m-t-40">Nationality</label>
                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                <!-- <input type="text" class="form-control" name="nationality" Place> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-flag"></i></span></span> -->
                            </div> <select class="form-control" id="val-skill" name="nationality"><span class="input-group-text">
                                                    <option value="">Please select Nationality</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Mongolia">Mongolia</option>
                                               
                                                </select>
                        </div>
                        
                        <div class="col-md-4">
                            <label class="m-t-20">Gender</label>
                            <div class="input-group">
                            <select class="form-control" id="val-skill" name="gender"><span class="input-group-text">
                                                    <option value="">Please</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="other">Other</option>
                                              
                                                </select>
                            </div>
                            <label class="m-t-40">Country of  Residence</label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                            <select class="form-control" id="val-skill" name="residence"><span class="input-group-text">
                            <option value="">Please select</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Mongolia">Mongolia</option>
                                              
                                                </select>
                            </div>
                        </div>
                          
                        <div class="col-md-4">
                            <label class="m-t-20">Passport No.</label>
                            <div class="input-group">
                                <input class="form-control" id="single-input" name="passportno" placeholder="Enter Passport Number"> <span class="input-group-btn">
                            </div>
                            <label class="m-t-40">Date of Birth</label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                <input type="date" class="form-control" name="dob"> <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Contact Information</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="example">
                                <h6 class="box-title m-t-30">Mobile Number</h6>
                                <input class="form-control input-daterange-datepicker" type="text" name="mobileno" placeholder="Enter Mobile Number"">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="example">
                                <h6 class="box-title m-t-30">Email</h6>
                                <input type="email" class="form-control input-daterange-timepicker" name="customer_email" placeholder="Enter Email ID">
                            </div>
                           
                        </div>
                       
                        </div>
                       
                    </div>
                    <div class="col-md-12">
                        <div class="alert alert-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Please enter correct Mobile number.Incorrect mobile number might cause issue at time
                            of cancellation and refund
                        </div>

                         </div>
                </div>
            </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Beneficiary(Nomine)Details</h4>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <label class="m-t-20">Name</label>
                            <div class="input-group ">
                                <input type="text" class="form-control" name="nomine_name" placeholder="Enter Nomine Name"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-user-o"></i></span></span>
                            </div>
                        
                        </div>
                        
                        <div class="col-md-4">
                            <label class="m-t-20">Gender</label>
                            <div class="input-group">
                            <select class="form-control" id="val-skill" name="nomine_gender"><span class="input-group-text">
                                                    <option value="">Please</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="other">Other</option>
                                              
                                                </select>
                            </div>

                            <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                           
                            </div>
                        </div>
                          
                        <div class="col-md-4">
                            <label class="m-t-20">Enter Mobile Number</label>
                            <div class="input-group">
                                <input class="form-control" id="single-input" name="nomine_mobile" placeholder="Enter Mobile Number Number"> <span class="input-group-btn">
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <!-- Card -->
            <!-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Date Range picker</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="example">
                                <h5 class="box-title m-t-30">Date Range Pick</h5>
                                <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="example">
                                <h5 class="box-title m-t-30">Date Range With Time</h5>
                                <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="example">
                                <h5 class="box-title m-t-30">Limit Selectable Dates</h5>
                                <input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Card -->
    </div>
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                             
                                <p class="text-muted"><code></code>
                                </p>
                                <div id="accordion-three" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i> Rules & Restrictions</h5>
                                        </div>
                                        <div id="collapseOne4" class="collapse show" data-parent="#accordion-three">
                                            <div class="card-body">

                                            <h6>Kindly check the spelling & reconfirm the passenger name before you look</h6>
                                            <h6>Ticket  name changes are  not permitted  once issued.</h6>
                                         
                                            <h6><strong>1. You must be  a permament resident of the India </strong></h6>
                                            <h6><strong>2. Any pre-existing medical Conditions and/or ailments declared or undeclared will be exculded from the policy.</strong></h6>
                                            <h6><strong>3.This Policy provided cover on worldwide basis subject to the territorial exculsion under 
                                            which this policy does not cover any claims,loss,injury,damage or leagal liability arising directly
                                            or indirectly from planned or actaul travel in,to or through Afghanistan,Cuba, iran,Syria,North Korea
                                            and the Crimea Region.<strong></h6>
                                            <h6><strong>4.I/We Confirm that each Information under this policy are resident of india and the information
                                                provided are accurate .I/We have read and understand the terms and conditions of the policy.</strong></h6>
        <br>
                                               <h6> <input class="form-check-input" type="checkbox" required>
                                                <label class="form-check-label">I have read and accept the rules and restriction.</label>
                                                <h6> <input class="form-check-input" type="checkbox" required>
                                                <label class="form-check-label">I Confirm that I am holding Valid Visa</label>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Payment Option</h4>
                    <div class="row">
                     
                    <div class="col-md-12">
                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                                    <input type="checkbox"  checked readonly>
                                                </div>
                                            </div>
                                            <input type="text" value="Using Deposite Amount"  readonly class="form-control">
                                        </div>
                        </div>
                        <div class="alert alert-success"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                        By Click on Make Payment I agree with booking 

                        
                        </div>
                        

                         </div>
                         <div class="col-md-12" >
                         <input type="submit" name="submit" value="Make Payment" class="btn mb-1 btn-success btn-lg">
                </div>
            </div>



            </div>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
    </form>

    </div>
                                  
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>


























        
<?php
include('agent_footer.php');
    }
?>


