<?php
 $a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
 ksort($a); //sort by key
foreach($a as $b=>$c)
{
    echo $b." ";
    echo $c."<br>";
}
echo "<br>";
krsort($a); //sort by key in reverse
foreach($a as $b=>$c)
{
    echo $b." ";
    echo $c."<br>";
}
echo "<br>";
asort($a);
foreach($a as $e=>$f)
{
    echo $e." ";
    echo $f."<br>";
}
echo "<br>";
arsort($a);
foreach($a as $e=>$f)
{
    echo $e." ";
    echo $f."<br>";
}

?>