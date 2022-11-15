<?php
   session_start();
   require('../includes/config.php');
      if (!empty($_POST))
	  {
			$email=$_POST['email'];
			$q="select * from admin where email='$email'  ";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['password']!=$row['password'])
				{
					header("Location:admin_login.php?pd=1");
					
					
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
					header("Location:admin_dashboard.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:admin_login.php?usr=1");
	      }
	  }	  
?>	  