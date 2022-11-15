{
    <?php
   session_start();
   require('../includes/config.php');
      if (!empty($_POST))
	  {
			$email=$_POST['email'];
			$q="select * from agent where email='$email'  ";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['password']!=$row['password'])
				{
					header("Location:agent_login.php?pd=1");
					
					
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
                    $_SESSION['agent_id']=$row['agent_id'];
					header("Location:agent_dashboard.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:agent_login.php?usr=1");
	      }
	  }	  
?>	  