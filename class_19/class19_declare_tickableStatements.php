<?php

/** return / declure / gota */

function sum(int $x, int $y) {
    $z = $x + $y;
    
    return $z;
}

$x = sum(5, 10);

echo $x;

echo '<br/>';

// return;

echo 'Hello World';

// declare - ticks

$x = 3;
$y = 5;
$z = $x*$y;

function onTick() {
    echo 'Tick <br/>';
}

register_tick_function('onTick');

declare(ticks=1);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br/>';
}

// declare - encoding

// declare - strict_types

declare(strict_types=1);

function sum2(int $x, int $y) {
    return '<br/>SUM: '. $x + $y;
}

// echo sum('6', 19);
// echo sum(6, 19);

