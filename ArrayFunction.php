<?php
$animals=array("lion","tiger","turtle","donkey");
echo count($animals)."<br>";
echo "<br>";

$salary=array("Saurav"=>"550000","Vimal"=>"250000","Rahul"=>"200000");
print_r(array_change_key_case($salary,CASE_UPPER));
echo "<br>";
echo "<br>";

$season=array("summer","winter","spring","autumn");
$reverseSeason=array_reverse($season);
foreach($reverseSeason as $s)
{
    echo $s."<br>";
}
echo "<br>";
$game=array("cricket","football","hockey","tennis");
$key=array_search("football",$game);
echo $key;
echo "<br>";

$name1=array("scott","John","vivek","smith");
$name2=array("Ramesh","Scott","Kartik","Smith");
$name3=array_intersect($name1,$name2);
foreach($name3 as $n)
{
    echo $n."<br>";
}

echo "<br>";
$names=array("John","Joe","harry","Sally","Mona");
echo implode(" and ",$names);

echo "<br>";
$numbers=array(10,20,10,40,35,80,35,80,35,50,55,10,55,10,55,30,40,70,50,10,35,85,40,90,30);
echo join(", ",array_unique($numbers));
echo "<br><br>";

$my_array=array("abcd","abc","de","hjjj","g","wer");
$new_array=array_map('strlen',$my_array);
echo "The shortest array length is: ".min($new_array).". The largest array length is ".max($new_array);
?>
