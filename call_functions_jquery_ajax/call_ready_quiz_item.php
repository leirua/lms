<?php
	include("../includes/config.php");
	
	$readyQuizId = $_GET['readyQuizId'];//lesson 
	
	$query = "SELECT * from tbl_ready_quiz_item where ready_quiz_id = '$readyQuizId'";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result)){
		$return[] = array(
		  'json_fld1' => $row[0],
		  'json_fld2' => $row[1],
		  'json_fld3' => $row[2],
		  'json_fld4' => $row[3],
		  'json_fld5' => $row[4],
		  'json_fld6' => $row[5],
		  'json_fld7' => $row[6],
		  'json_fld8' => $row[7],
		  'json_fld9' => $row[8]
	   );
	};
	
	echo json_encode($return);
?>