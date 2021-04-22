<?php
if(isset($_GET["name"])||isset($_GET["age"]))
{
 echo "Welcome".$_GET["name"]."<br>";
 echo "You are".$_GET["age"]."years old"; 
 exit();
}
?>
<html>
<body>
<form action='<?php $_SERVER["PHP_SELF"] ?>' method="get">
NAME :<input type="text" name="name">
AGE  :<input type="text" name="age">
<input type="submit">
</form>
</body>
</html>

