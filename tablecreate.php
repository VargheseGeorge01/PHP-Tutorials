<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='XYZ';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){
die("connection failed : ".$conn->connect_error);
}
echo "connected successfully";
echo "<br>";
$sql="CREATE TABLE employee(emp_id INT NOT NULL AUTO_INCREMENT,emp_name VARCHAR(20) NOT NULL,emp_add VARCHAR(15) NOT NULL,emp_salary INT NOT NULL,primary key(emp_id))";
if(mysqli_query($conn,$sql)){
echo "Table created successfully";
}
else{
echo "Error creating table:".mysqli_error($conn);
}
?>
