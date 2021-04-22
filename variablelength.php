<html>
<head>
<title>variable length</title>
</head>
<body>
<?php
function add(...$numbers)
{
 $sum=0;
 foreach($numbers as $n)
 { $sum+=$n; }
 return $sum;
}
$s=add(1,2,3,4);
echo "sum of 1,2,3,4 is: $s <br>";
$s=add(10,19);
echo "sum of 10,19 is: $s <br>";
?>
</body>
</html>
