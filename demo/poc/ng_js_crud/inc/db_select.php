<?php
	require_once 'db_connect.php';
	$query = $conn->query("SELECT * FROM `member`") or die(mysqli_error($conn));
	$data = array();
	while($row = $query->fetch_array()){
		$data[] = $row;
	}
 
	echo json_encode($data);
	
?>