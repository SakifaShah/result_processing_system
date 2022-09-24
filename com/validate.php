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
		exit();
	}
$r=array();
$myArray=array();
include_once(dirname(dirname(__FILE__)) . "/operations/Insert.php");
foreach ($_POST as $post_var) {
  $r['k']=strtoupper($post_var);
}
$myArray= explode(',', $r['k']);
$l=sizeof($myArray);
$insert = new Insert($dbcon);
$name="Sakifa";
$id="16701078";
$semester=$myArray[0];
echo $semester;
$t=1;
while($t<$l)
{
  $course_name=$myArray[$t];
  $course_code=$myArray[$t+1];
  $credit=$myArray[$t+2];
  $obtained_marks=$myArray[$t+3];
  $grade=$insert->grade($obtained_marks);
  $gradepoint=$insert->gradepoint($obtained_marks);
  $gradepoint=(float)$gradepoint;
  $t+=4;
  echo $course_name;
  echo $course_code;
  echo $credit;
	echo $grade;
  echo $obtained_marks;
	$cakeno = $insert->insert_student($name,$id,$semester,$course_name,$course_code,$credit,
	$grade,$gradepoint,$obtained_marks);
	$result = $cakeno>0;
	$response['error'] = !$result;
	$response['message'] = $result?"Inserted":"Failed";
  echo json_encode($response);
}
?>
