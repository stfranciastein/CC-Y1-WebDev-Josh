<?php
$numberArray = array();
    for ($i = 1; $i <= 10; $i++){
        $n = rand(1,10);
        $numberArray[] = $n;
    }

    //.implode basic
    echo "The Random Numbers are: " . implode(", ", $numberArray);
?>