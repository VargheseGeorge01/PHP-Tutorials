<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='XYZ';
$emp_salary=3000;
$emp_id=1;
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
echo "<br>";
$sql="UPDATE employee SET emp_salary=$emp_salary WHERE emp_id=$emp_id.";
if(mysqli_query($conn,$sql)){
echo "data updated successfully";
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
?>