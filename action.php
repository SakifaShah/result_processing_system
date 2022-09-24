<?php
$conn=mysqli_connect("localhost","root","anything","result");
if($conn->connect_error)
{
  echo "failed";
}
else echo "jjj";
$sql="SELECT course_name FROM course";
$result= $conn->query($sql);
if($result->num_rows>0){
while($row = $result->fetch_assoc())
{
  echo "<tr><td>".$row["course_name"]."</td></tr>";
}
}
?>
