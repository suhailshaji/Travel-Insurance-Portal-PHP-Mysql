<?php
	include '../includes/config.php';
	$agent_id= $_REQUEST['agent_id'];
		$query = "DELETE FROM agent WHERE agent_id= '$agent_id'";

        
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"view_agent.php\")
				</script>";
	}
?>
