<html>
<head>
<title>recursive function</title>
</head>
<body>
<?php
function factorial($n)
{
 if($n<0)
 return -1;
 if($n==0)
 return 1;
 return($n*factorial($n-1));
}
echo "the factorial of 5 is : ",factorial(5);
?>
</body>
</html>
 