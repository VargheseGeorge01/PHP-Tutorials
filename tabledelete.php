<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='XYZ';
//creating connection 
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
//connection checking 
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected";
echo "<br>";
//Deleting data from the table
$sql="DELETE FROM employee WHERE emp_id=2";
if(mysqli_query($conn,$sql)){
echo "deleted successfully";
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
?>
