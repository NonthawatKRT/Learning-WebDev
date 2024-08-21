<?php

function area($base,$height){
    $result = $base * $height / 2;
    return $result;
}

$a = 10; $b = 5;
$triangle1 = area($a, $b);
echo "Triangle with base $a and height $b has area of $triangle1 <br>";

echo "<br>";

$c = 7; $d = 3;
$triangle2 = area($c, $d);
echo "Triangle with base $c and height $d has area of $triangle2 <br>";
?>