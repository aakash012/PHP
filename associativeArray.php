<?php
$b1=array("one"=>1,"two"=>2,"three"=>3);
foreach($b1 as $k=>$v)
{
    echo "key is : ".$k;
    echo " value is : ".$v;
    echo "<br>";
}
//Flip Function
print_r(array_flip($b1));
echo "<br>";
//Slice
print_r(array_slice($b1,1,2));
echo "<br>";
$orA=array(1,2,3,4,5);
echo 'Original Array: '."<br>";
foreach($orA as $A)
{
    echo $A."<br>";
}
print_r(array_splice($orA,1,0,6));
?>
