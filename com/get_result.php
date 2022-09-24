<?php
$response = array();

	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		$response['error'] = true;
		$response['message'] = "Error";

		echo json_encode($response);
		exit();
	}

	require_once (dirname(dirname(__FILE__)) . "/db/Database.php");
	include_once(dirname(dirname(__FILE__)) . "/operations/Select.php");

	$db = new Database();
	$dbcon=$db->db_connect();

	if(!$dbcon){
		$response['error'] = true;
		$response['message'] = "Database Connection Error";

		echo json_encode($response);
		exit();
	}

	// begin

	if(!isset($_POST['semester']) || !isset($_POST['id'])){
		$response['error'] = true;
		$response['message'] = "Data Missing!";

		echo json_encode($response);
		exit();
	}

	// get data from url

	//$orderno = $dbcon->real_escape_string($_POST['orderno']);
	$semester = trim(strip_tags($_POST['semester']));
  $id= trim(strip_tags($_POST['id']));
	$select= new Select($dbcon);
	$result = $select->get_results($semester,$id);
  $success = sizeof($result)>0;

	$response['error'] = !$success;
	$response['message'] = $success?"Found!":"Not Found!";

	if($success){
		$response['myorderinfo'] = $result;
	}

	echo json_encode($response);

?>
