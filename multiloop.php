<html>
<head>
<title>iteration</title>
</head>
<body>
<?php
$emp=array(
 array(1,"Smith",2000),
 array(2,"Root",1500),
 array(3,"Tyrion",500),
);
for($row=0;$row<3;$row++)
{
 echo "<p><b>Row number</b></p>";
 echo "<ol>";
 for($col=0;$col<3;$col++)
 {
  echo "<li>".$emp[$row][$col]."</li>";
 }
 echo "</ol>";
}
?>
</body>
</html>

