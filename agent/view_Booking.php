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
</div>
<!-- row -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">View Booking</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>Customer ID</th>
                                    <th>Name </th>
                                    <th>Mobile</th>
                                    <th> Email</th>
                                    <th>Plan Name</th>
                                    <th>Type </th>
                                    <th>Coverage </th>
                                    <th>Price </th>
                                    <th>Period </th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
    <?php 
                              include '../includes/config.php';
                      
                              $sql ="SELECT * FROM customer join plan  where customer.policy_id = plan.policy_id  and  customer.agent_id=$agent_id ";
                              $qsql = mysqli_query($conn,$sql);
                              while($rs = mysqli_fetch_array($qsql))
                              
                         {
                            
                              echo "<tr>
          
                              <td>&nbsp;$rs[cusid]</td>	 
                              <td>&nbsp;$rs[customer_name]</td>
                              <td>&nbsp;$rs[mobileno]</td>
                              <td>&nbsp;$rs[customer_email]</td> 
                              <td>&nbsp;$rs[plan_name]</td>
                              <td>&nbsp;$rs[type]</td>  
                              <td>&nbsp;RS.$rs[coverage_amount]</td> 
                              <td>&nbsp;RS.$rs[price]</td> 
                              <td>&nbsp;$rs[period]</td> 
                                  ";
                              ?>
                              
                                
                            
                                  
         </tbody>
<?php }?>

                              
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>






















<?php
include('agent_footer.php');
                 
?>




