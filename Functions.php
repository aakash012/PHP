<?php
function temp()
{
echo "Welcome to PHP functions";
}
temp(); //calling function
echo "<br><br>";

function add($num1,$num2)
{
    $sum=$num1+$num2;
    echo "Sum of the two numbers $num1 and $num2 is: $sum";
}
add(10,20);
echo "<br><br>";

function num($num)
{
    if($num>0)
    {
        echo "$num is positive";
    }
    elseif($num==0)
    {
        echo "$num is neither positive nor negative";
    }
    else
    {
        echo "$num is negative";
    }
}
num(0);
echo "<br><br>";

function temp1($font,$size=1.5)
{
    echo $font." ";
    echo $size."<br>";
}
temp1("Arial",2);
temp1("Times",4);
temp1("Courier");
echo "<br>";

function add1($num1,$num2)
{
    $total=$num1+$num2;
    return $total;
}
echo add1(5,10);
echo "<br>";

function add2($num1,$num2,$num3=2)
{
    $total=$num1+$num2+$num3;
    return $total;
}
echo add2(5,10);
echo "<br>";

function add3($num1,$num2)
{
    $total=$num1+$num2;
    return $total;
}
echo add3(5,10,20);
echo "<br><br>";

function add4($num)
{
    $num++;
    echo $num."<br>";
}
$temp=5;
add4($temp);
echo $temp;
?>
