<?php

/* FLOATS */

// $x = 13.5e3;
// $x = 13_000.5;
// $x = floor((0.1 + 0.7) * 10);
// $x = ceil((0.1 + 0.7) * 10);
$x = ceil((0.1 + 0.2) * 10); // => 4


// var_dump($x);
echo $x;

// echo PHP_FLOAT_MAX;

$x = 0.23;
$y = 1 - 0.77;

var_dump($x, $y);

if($x == $y) {
    echo 'yes';
} else {
    echo 'no';
}


$x_teste = PHP_FLOAT_MAX *2 ;

var_dump(is_finite($x_teste));
var_dump(is_nan($x_teste));

$x_teste2 = 5;

var_dump(floatval($x_teste2));
