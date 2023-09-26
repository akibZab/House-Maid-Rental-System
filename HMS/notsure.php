<?php 
include "connection.php";
$sql = "SELECT * FROM client";
if (isset($_POST['search'])){
	$st = mysqli_real_escape_string($_POST['box']);
	$sql .= "WHERE name = '{$st}";
	// $sql .= " OR client_id='{$st}'";
}
$query=$conn->query($sql) or die(mysql_error());

 ?>