<?php

// NULL

// null constant
$x = null;

echo $x;

// var_dump($x);
var_dump(is_null($x));
var_dump($x === null);

unset($x);

var_dump($x);

$y = null; 

var_dump((bool) $y);
