<?php

include'connection.php';
		$name       = $_POST["Name"];
	    $id      = $_POST["ID"];
		$against      = $_POST["Against"];
		$comment          = $_POST["Comments"];
		
		

	$sql = "INSERT INTO complaint "."VALUES('$name','$id', '$against', '$comment')";
	if ($conn->query($sql) === true) {
			echo "Your Report Has been checking";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	header('location:record.php');
?>