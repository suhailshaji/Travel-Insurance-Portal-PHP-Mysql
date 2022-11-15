<?php

include('agent_header.php');

?>

<div class="content-body">

<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
        </ol>



   </div>
                    <div class="col-lg-12">
                    <?php 
                                          include '../includes/config.php';
                                  
                                          $sql ="SELECT * FROM plan where policy_status='Active' ";
                                          $qsql = mysqli_query($conn,$sql);
                                          while($rs = mysqli_fetch_array($qsql))
                                           {?>
                        <div class="card">

                       
                        
                            <div class="card-body">
                                <h4 class="card-title">Travel Insurance - <?php echo " $rs[type]";?> - <?php echo " $rs[plan_name]";?></h4>
                                <p class="text-muted"><code></code>
                                </p>
                                <div id="accordion-three" class="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0" data-toggle="collapses" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4"><i class="fa" aria-hidden="true"></i>Plan Benefits</h5>
                                            <div class="card-body">Accidental and Sickness Medical Reimbursement Upto  <strong >INR<?php echo " $rs[coverage_amount]";?>  </strong> 
                                            Emergency Medical Evacuation Upto <strong >INR<?php echo " $rs[coverage_amount]";?>  </strong>
                                            Accidental Death and Permanent Disablement Upto  <strong >INR<?php echo " $rs[coverage_amount]";?>  </strong>
                                            Tune Protect Travel Assurance is underwritten by Insurance Company.For Schedule of Benefits & Terms & Conditions.
                                       
                                        </div>
                                        <!-- <div id="collapseOne4" class="collapse show" data-parent="#accordion-three">
                                            <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.</div>
                                        </div> -->
                                    </div>
                                  
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6"><i class="fa" aria-hidden="true"></i> Book </h5>
                                        </div>
                                        <div id="collapseThree6" class="collapse" data-parent="#accordion-three">
                                            <div class="card-body">

                                <!-- <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Plan</strong> <span><?php echo " $rs[plan_name]";?></span></li>
                                    <li><strong class="text-dark mr-4">Type</strong> <span><?php echo " $rs[type]";?></span></li>
                                    <li><strong class="text-dark mr-4">Type</strong> <span><?php echo " $rs[type]";?></span></li>
                                    <li><strong class="text-dark mr-4">Period</strong> <span><?php echo " $rs[period]";?> Days</span></li>
                                </ul> -->
                                <div class="col-lg-12">
                      
                         
                              
                            
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Policy ID</th>
                                                <th>Name</th>
                                                <th>Plan Type</th>
                                                <th>Coverage Period</th>
                                                <th>Coverage Amount</th>
                                                <th>Plan Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="alert alert-danger">
                                                <th><?php echo " $rs[policy_id]";?></th>
                                                <td><?php echo " $rs[plan_name]";?></td>
                                                <!-- <td><span class="badge badge-primary px-2">Sale</span>
                                                </td> -->
                                                <td><?php echo " $rs[type]";?></td>
                                                <td><?php echo " $rs[period]";?> Days</td>
                                                <td><strong> <?php echo " ₹$rs[coverage_amount]";?></td> </strong>
                                                <td><strong> <?php echo " ₹$rs[price]";?></td> </strong>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                   <?php    echo "           <a href='book_policy.php?policy_id=$rs[policy_id]&&agent_id=$agent_id' class='btn btn-success '>  </i> Book ₹$rs[price]</a> &nbsp;&nbsp;
                                </div>
                  ";?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <?php } ?>

                    
                </div>
                
            </div>























<?php
include('agent_footer.php');

?>




