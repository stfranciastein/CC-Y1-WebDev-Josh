<?php
$sum = 0;
    for ($i = 1; $i <= 10; $i++){
        $n = rand(10,20);
        echo "$n <br>";
        $sum = $sum+$n;
    }

    echo "The sum of all the numbers is $sum";
?>