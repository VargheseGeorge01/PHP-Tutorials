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
$query_file='sql_query.txt';
$fp=fopen($query_file,'r');
$sql=fread($fp,filesize($query_file));
fclose($fp);
if(mysqli_query($conn,$sql)){
echo "table created successfully";
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}
?>
