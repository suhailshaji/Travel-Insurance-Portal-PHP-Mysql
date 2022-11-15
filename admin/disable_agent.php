<?php
	include '../includes/config.php';
	$agent_id = $_REQUEST['agent_id'];
   
  

	$query = "UPDATE agent SET status = 'Disable'   WHERE agent_id = '$agent_id'";
	
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Status Updated\");
												window.location = (\"view_agent.php\")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<!-- <?php
	
	}
	?> -->