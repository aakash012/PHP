<?php
$emp=array
    (
        array(1,"sonoo",40000),
        array(2,"john",50000),
        array(1,"smith",60000)
    );
for($row=0;$row<3;$row++)
{
    for($col=0;$col<3;$col++)
    {
        echo $emp[$row][$col]." ";
    }
    echo "<br>";
}
?>
