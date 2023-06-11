<?php

// Operator Procedence & Associativity


// $x = 5 + 4 * 5;
$x = (5 + 3) * 5;

echo $x;

$x = 5;
$y = 2;
$z = 10;

// $result = $x / $y * $z;
// $result = $x < $y > $z;
$result = $x < $y == $z;

$x = true;
$y = false;
$z = true;

var_dump($x && $y || $z);

$z = $x and $y; //true
$z = ($x and $y);// false

var_dump($z);

