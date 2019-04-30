<?php
function display($number)
{
    if($number<=5)
    {
        echo "$number<br/>";
        display($number+1);
    }
}
display(1);

echo "<br>";
function fact($num)
{
    if($num<=1)
    {
        return (1);
    }
    elseif($num==0)
    {
        return (1);
    }
    else
    {
        return ($num*fact($num-1));
    }
}
$a=fact(4);
echo "Factorial is: ".$a;
?>