<?php

declare(strict_types=1);    

/* Data type & Type Casting */

# 4 Scalar types
    # bool true / false
    $completed = true;
    # int - 1, 2, 3, 0, -5 (no decimal)
    $score = 75;
    # float - 1.5, 0.1, 0.005, -15.8
    $price = 0.99;
    # string - "Matheus", "Hello World."
    $greeting = 'Hello World!';

    echo $completed . '<br/>';
    echo $score . '<br/>';
    echo $price . '<br/>';
    echo $greeting . '<br/>';

    // echo gettype($completed);

    var_dump($greeting . "<br/>");

# 4 Compound types
    # array
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    print_r($companies) . '<br/>'; 
    # object

    # callable
    
    # iterable

# 2 Special types
    # resource
    # null
    # callable




function sum(float $x, $y) {
    $x = 5.5;
    var_dump($x, $y);
    echo '<br/>';
    return $x + $y;
}

// $sum = sum(2, 3);
$sum = sum(2.2, 3);

echo $sum . '<br/>';

echo var_dump($sum);

$x = (int)'5';

var_dump($x);
