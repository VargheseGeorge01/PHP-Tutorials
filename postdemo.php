<?php
if(isset($_POST["name"])||isset($_POST["age"]))
{
 echo "Welcome ".$_POST["name"]."<br>";
 echo "You are ".$_POST["age"]."years old";
 exit();
}
?>
<html>
<body>
<form action='<?php $_SERVER["PHP_SELF"]?>' method="post">
Name:<input type="text" name="name">
Age:<input type="text" name="age">
<input type="submit">
</form>
</body>
</html>