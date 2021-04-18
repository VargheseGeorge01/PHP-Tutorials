<html>
<head>
<title>Refrence argument</title>
</head>
<body>
<?php
function addSix(&$num)
{
 $num+=6;
}
$orignum=10;
echo "Value before function call is $orignum <br>";
addSix($orignum);
echo "Value after the function call is $orignum<br>";
?>
</body>
</html>
 