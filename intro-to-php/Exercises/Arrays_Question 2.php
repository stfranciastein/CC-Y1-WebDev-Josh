<?php
$numberArray = array();
$sum = 0;
    for ($i = 1; $i <= 10; $i++){
        $n = rand(1,10);
        $numberArray[] = $n;
        $sum = $sum + $n;
    }

    //.implode basic
    echo "The Random Numbers are: " . implode(", ", $numberArray);
    echo "<br>";
    echo "The sum of the numbers is: " . $sum;
?>