<html>
<head>
<title>associative array</title>
</head>
<body>
<?php
echo "first method :<br>";
$salary=array("sam"=>"1500","ram"=>"1000","aju"=>"500");
echo "sam's salary : ".$salary["sam"]."<br>";
echo "ram's salary : ".$salary["ram"]."<br>";
echo "aju's salary : ".$salary["aju"]."<br>";
echo "second method :<br>";
$salary["sam"]="1500";
$salary["ram"]="1000";
$salary["aju"]="500";
echo "sam's salary : ".$salary["sam"]."<br>";
echo "ram's salary : ".$salary["ram"]."<br>";
echo "aju's salary : ".$salary["aju"]."<br>";
?>
</body>
</html>
