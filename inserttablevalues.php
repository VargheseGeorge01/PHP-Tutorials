<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='XYZ';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";
echo "<br>";
$sql='INSERT INTO employee(emp_name,emp_add,emp_salary)VALUES("George","BCC",3500)';
if(mysqli_query($conn,$sql)){
echo "data inserted successfully";
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
?>