<?php
    $num=7;
    if ($num<100)
    {
        echo "$num is less than 100<br><br>";
    }

    $num1=9;
    if ($num1%2==0)
    {
        echo "$num1 is Even";
    }
    else
    {
        echo "$num1 is odd <br><br>";
    }
    
    $num2=5;
    if($num>$num1 and $num>$num2)
    {
          echo "$num is greater than $num1 and $num2 <br><br>";
    }
    elseif($num1>$num and $num1>$num2)
    {
        echo "$num1 is greater than $num and $num2 <br><br>";
    }
    else
    {
        echo "$num2 is greater than $num and $num3 <br><br>";
    }
?>
