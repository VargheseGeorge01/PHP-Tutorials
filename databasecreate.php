<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
//create connection
$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
//check connection
if($conn->connect_error)
{
 die("connection failed: ".$conn->connect_error);
}
echo "connected successfully";
echo "<br>";
//create database
$sql='CREATE DATABASE B';
if($conn->query($sql)===TRUE){
echo "Database created succesfully";
}else{
echo "Error creating database: ".$conn->error;
}
?>