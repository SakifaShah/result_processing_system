<?php

class Insert {

	private  $dbcon=null;

	public function __construct($dbcon){
		$this->dbcon=$dbcon;
	}







	public function insert_student($name,$id,$semester,$course_name,$course_code,$credit,$grade,$gradepoint,$obtained_marks){

			$sql = "INSERT INTO student (name,id,semester,course_name,course_code,credit,grade,gradepoint,obtained_marks)
			 VALUES (?,?,?,?,?,?,?,?,?)";

			$stmt = $this->dbcon->prepare($sql);
			$stmt->bind_param("sssssisdi",$name,$id,$semester,$course_name,$course_code,
			$credit,$grade,$gradepoint,$obtained_marks);
			$stmt->execute();


				return $stmt->affected_rows==1;
	}


	public function count($semester)
	{
		$sql="SELECT COUNT(course_name) FROM course WHERE semester=?";
		$stmt = $this->dbcon->prepare($sql);
		$stmt->bind_param("s", $semester);
		$stmt->execute();
		$result=$stmt->get_result;
		return $result;
	}
	public function grade($marks)
{
		if($marks>=80) return "A+";
		else if($marks>=70) return "A";
		else if($marks>=60) return "A-";
		else if($marks>=50) return "B+";
		else if($marks>=40) return "B";
		else if($marks>=30) return "A";
}
public function gradepoint($marks)
{
	if($marks>=80) return "4.00";
	else if($marks>=70) return "3.75";
	else if($marks>=60) return "3.50";
	else if($marks>=50) return "3.25";
	else if($marks>=40) return "3.00";
	else if($marks>=30) return "2.75";
}
}

  ?>
