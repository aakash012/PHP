<?=
    $temp="Welcome to Lovely Professional University.";
    echo "<br>";
    echo "<br>";
    echo "String Length is ".strlen($temp)."<br>";
    echo "<br>";
    echo "No of words is ".str_word_count($temp)."<br>";
    echo "<br>";
    echo str_replace("Welcome to","Hello",$temp)."<br>";
    echo "<br>";
    echo "Reverse is: ( ".strrev($temp)." )"."<br>";
?>