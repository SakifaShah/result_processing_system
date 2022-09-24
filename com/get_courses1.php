<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>

  <form  method="post">
    <label for="sel1">Select list:</label>
    <select class="form-control" id="sel1" name="semester">
        <option value="1-1">1-1</option>
        <option value="1-2">1-2</option>
        <option value="2-1">2-1</option>
        <option value="2-2">2-2</option>
        <option value="3-1">3-1</option>
        <option value="3-2">3-2</option>
        <option value="4-1">4-1</option>
        <option value="4-2">4-2</option>
    </select>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Show Courses</button>
      </div>
</form>
</div>
</div>

<div class="container">
  <h2>Related courses</h2>
<div class="table-responsive col-md-6">
  <table class="table table-striped" id="table">
    <thead>
      <tr>
        <th>Coursename</th>
        <th>Coursecode</th>
        <th>Credit</th>
     </tr>
    </thead>
    <tbody>


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

	if(!isset($_POST['semester'])){
		$response['error'] = true;
		$response['message'] = "Data Missing!";
		echo json_encode($response);
		exit();
	}

	// get data from url

	$semester = $dbcon->real_escape_string($_POST['semester']);


	$select = new Select($dbcon);

	$result = $select->courses($semester);

  if($result->num_rows>0){
    $t=0;
  while($row = $result->fetch_assoc())
  {
    echo '<tr><td>'.$row["course_name"].'</td><td>'.$row["course_code"].'</td><td>'.$row["credit"].'</td></tr>';
    $t++;
  }
  }
?>
</tbody>
</table>
</div>
<div class="form-group">
<?php
while($t>0)
{
if($t==3) echo '<h4>OBTAINED MARKS</h4></br>';
$t--;
echo '<textarea type="text" rows="1" id='.$t.'></textarea></br>';
}
?>
</div>
</div>
<input type="button" onclick="myFunction();"/>
<p id="server"></p>
  <script>
  function myFunction(){
 var table = document.getElementById('table');
 var a=[];
 var r;

 for(var i = 0; i < table.rows.length; i++)
  {
  r=document.getElementById(i).value;
  var name=(table.rows[i].cells[0].innerText);
  var code=(table.rows[i].cells[1].innerText);
  var credit=(table.rows[i].cells[2].innerText);
a.push(name);
a.push(code);
a.push(credit);
a.push(r);
document.write("11");
var myJSON = JSON.stringify(a);

 }
 const xhr= new XMLHttpRequest();
 xhr.onload = function()
 {
   const server = document.getElementById("server");
   server.innerHTML=this.responseText;
 };
 xhr.open("POST","validate.php");
 xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xhr.send("name="+a);
}
</script>
<!-- <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">View Result</button>
  </div>
</div> -->
</body>
</html>
