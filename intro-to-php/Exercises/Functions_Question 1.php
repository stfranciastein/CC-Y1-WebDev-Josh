<?php
$x = 20;
$n = 5;
$result = isDivisible($x, $n);

function isDivisible($x, $n) {
    return ($x % $n == 0);
}

echo "Hello, this is testing the 'isDivisible' function with the numbers x = $x and n = $n <br><br>";
    if ($result) {
        echo "$x is divisible by $n";
    } else {
        echo "$x is not divisible by $n";
    }
?>