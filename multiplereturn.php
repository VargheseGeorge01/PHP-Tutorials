<html>
<head>
<title>Multiple return</title>
</head>
<?php
function addFunction($a,$b)
{
 $sum=$a+$b;
 $diff=$a-$b;
 $prod=$a*$b;
 $quot=$a/$b;
 return array($sum,$diff,$prod,$quot);
}
$result=addFunction(20,9);
echo "sum :$result[0]<br>";
echo "diff:$result[1]<br>";
echo "prod:$result[2]<br>";
echo "quot:$result[3]<br>";
?>
</body>
</html>