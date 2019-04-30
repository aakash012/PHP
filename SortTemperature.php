<?php
$num=1;
$temp=array(78,60,62,68,71,68,73,85,66,64,76,63,
           75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73);

sort($temp);
echo "5 Low Temperatures:"."<br>";
for($s=0;$s<5;$s++)
{
    echo $temp[$s]."<br>";
}
rsort($temp);
echo "<br>";
echo "5 High Temperatures:"."<br>";

for($s=0;$s<5;$s++)
{
    echo $temp[$s]."<br>";
}
?>