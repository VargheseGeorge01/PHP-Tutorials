<?php
$season=array("winter","summer","spring","autumn");
sort($season);
echo "sorted array : <br>";
foreach($season as $s)
{
echo "$s <br>";
}
rsort($season);
echo "decending order: <br>";
foreach($season as $p)
{
echo "$p<br>";
}
?>