<?php

include'connection.php';
		$agent_id       = $_POST["agent_id"];
	    $Name      = $_POST["Name"];
		$client_id      = $_POST["client_id"];
		$Hname          = $_POST["Hname"];
		$Health         = $_POST["Health"];
		$Camount           = $_POST["Camount"];
		$Cdate            = $_POST["Cdate"];
		
		

	$sql = "INSERT INTO claim "."VALUES('$agent_id','$Name', '$client_id', '$Hname', '$Health', '$Camount', '$Cdate')";
	if ($conn->query($sql) === true) {
			echo "Your Claim Has been checking";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	header('location:record.php');
?>