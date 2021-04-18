<html>
<head>
<title>Multidimensional array</title>
</head>
<?php 
$emp=array(
 array(1,"Smith",2000),
 array(2,"Sam",2500),
 array(3,"Raju",500),
);
echo $emp[0][0].".Name:".$emp[0][1],".Salary:".$emp[0][2]."<br>";
echo $emp[1][0].".Name:".$emp[1][1],".Salary:".$emp[1][2]."<br>";
echo $emp[2][0].".Name:".$emp[2][1],".Salary:".$emp[2][2]."<br>";
?>
</body>
</html>
