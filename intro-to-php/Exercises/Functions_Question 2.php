<?php
$b = array(1, 2, 3, 4, 5);
$x = 5;
$result = isInInterger($b, $x);

 function isInInterger ($b, $x){
  return in_array($x, $b);  
 }

echo "This code tests if the interger stored in 'x' is inside 'b' <br>";
if ($result) {
    echo "Yes, it is.";
} else {
    echo "No, it is not";
}
?>