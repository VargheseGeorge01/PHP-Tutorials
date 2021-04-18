<html>
<head>
<title>multidimentional array from associated array</title>
</head>
<body>
<?php
$emp=array(
 array("name"=>"jack","dept"=>"sales","salary"=>1500),
 array("name"=>"rony","dept"=>"marketing","salary"=>1000),
 array("name"=>"jebi","dept"=>"finance","salary"=>500),
);
for($row=0;$row<3;$row++)
{
 echo "<p><b>Row Number</b></p>";
 echo "<ol>";
 echo "<li>".$emp[$row]["name"]."</li>";
 echo "<li>".$emp[$row]["dept"]."</li>";
 echo "<li>".$emp[$row]["salary"]."</li>";
 echo "</ol>";
}
?>
</body>
</html>


