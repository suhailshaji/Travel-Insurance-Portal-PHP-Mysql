
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">View Policy</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Policy Number</th>
                                                <th>Name </th>
                                                <th>Type</th>
                                                <th> Amount</th>
                                                <th>Duration Start</th>
                                                <th>Duration End</th>
                                                <th>Created Date</th>
                                                <th>Status </th>
                                                <th>Action </th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                <?php 
                                          include '../includes/config.php';
                                  
                                          $sql ="SELECT * FROM plan ";
                                          $qsql = mysqli_query($conn,$sql);
                                          while($rs = mysqli_fetch_array($qsql))
                                          
                                     {
                                        
                                          echo "<tr>
                      
                                          <td>&nbsp;$rs[policy_id]</td>	 
                                          <td>&nbsp;$rs[plan_name]</td>
                                          <td>&nbsp;$rs[type]</td>
                                          <td>&nbsp;$rs[coverage_amount]</td> 
                                          <td>&nbsp;$rs[duration_start]</td>
                                          <td>&nbsp;$rs[duration_start]</td>  
                                          <td>&nbsp;$rs[created_date]</td> 
                                         	 ";
                                          ?>
                                          <?php
                                       
                                          if($rs['policy_status'] == 'Active')
                                          {
                                            echo "
                                            <td>
                                            $rs[policy_status] <span class='dot-green'></span>
                                           
                                            </td>";
                                          }	 
                                          else
                                          {
                                            echo "
                                            <td>
                                            $rs[policy_status] <span class='dot-red'></span>
                                            
                                            </td>
                                            ";
                                            
                                          }
                                          ?>
                                                <?php

                                                 if($rs['policy_status'] == 'Active')
                                                 {
                                                   echo "
                                                   <td>
                                                   <a href='disable_agent.php?agent_id=$rs[policy_id]' class='btn btn-outline-warning btn-sm'>  </i> Disable</a> &nbsp;&nbsp;
                                                   <a href='del_agent.php?agent_id=$rs[policy_id]' class='btn btn-danger btn-sm'>  <i class='fa fa-close'></i> Delete</a>
                                                  
                                                  
                                                   </td>";
                                                 }	 
                                                 else
                                                 {
                                                   echo "
                                                   <td>
                                                   <a href='active_agent.php?agent_id=$rs[policy_id]' class='btn btn-outline-success btn-sm'>  </i> Active</a> &nbsp;&nbsp;
                                                   <a href='del_agent.php?agent_id=$rs[policy_id]' class='btn btn-danger btn-sm'>  <i class='fa fa-close'></i> Delete</a> 
</td>
                                                 
                                                   ";
                                                 }  
                                                 echo "
                                             

                                       
                                     
                                         	</tr>";   
                                        
                                              
				}
				?>      </tbody>


                                          
                                    </table>
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
        <?php include('admin_footer.php'); ?>