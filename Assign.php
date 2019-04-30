<?php
$arr1=array("mango","grapes","banana");
krsort($arr1);
foreach($arr1 as $a1)
{
    echo $a1."<br>";
}
echo "<br>";

$arr2=array(1,2,3,4,5);
$arr3=array(6);
print_r(array_splice($arr2,3,0,$arr3));
echo "<br>";

$country=array("India"=>"Delhi","Nepal"=>"katmandu","China"=>"Beijing","England"=>"London","Canada"=>"Toronto");

?>
