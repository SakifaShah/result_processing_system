<?php
$response = array();

	if($_SERVER['REQUEST_METHOD'] != 'POST'){
		$response['error'] = true;
		$response['message'] = "Error";

		echo json_encode($response);
		exit();
	}

	require_once (dirname(dirname(__FILE__)) . "/db/Database.php");
	include_once(dirname(dirname(__FILE__)) . "/operations/Insert.php");

	$db = new Database();
	$dbcon=$db->db_connect();

	if(!$dbcon){
		$response['error'] = true;
		$response['message'] = "Database Connection Error";

		//echo json_encode($response);
		exit();
	}

	// begina


	if(!isset($_POST['name']) || !isset($_POST['id']) || !isset($_POST['semester'])
|| !isset($_POST['course_name']) || !isset($_POST['course_code'])|| !isset($_POST['credit'])
|| !isset($_POST['grade'])|| !isset($_POST['gradepoint']) || !isset($_POST['obtained_marks']) ){
		$response['error'] = true;
		$response['message'] = "Data Missing!";

		echo json_encode($response);
		exit();
	}

	// get data from url

	$name = $dbcon->real_escape_string($_POST['name']);
	$id = $dbcon->real_escape_string($_POST['id']);
  $semester = $dbcon->real_escape_string($_POST['semester']);
  $course_name = $dbcon->real_escape_string($_POST['course_name']);
	$course_code = $dbcon->real_escape_string($_POST['course_code']);
	$credit = $dbcon->real_escape_string($_POST['credit']);
	$grade = $dbcon->real_escape_string($_POST['grade']);
	$gradepoint = $dbcon->real_escape_string($_POST['gradepoint']);
	$obtained_marks = $dbcon->real_escape_string($_POST['obtained_marks']);


	$insert = new Insert($dbcon);

	$cakeno = $insert->insert_student($name,$id,$semester,$course_name,$course_code,$credit,
	$grade,$gradepoint,$obtained_marks);
  echo $cakeno;
	$result = $cakeno>0;
	$response['error'] = !$result;
	$response['message'] = $result?"Inserted":"Failed";



	echo json_encode($response);

?>
