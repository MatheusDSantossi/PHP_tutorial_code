<?php

/** variable, anonymous & arrow functions */

function (...$numbers): int|float {
    return array_sum($numbers);
};

$x = 'sum';

// echo $x(1, 2, 3, 4);

if (is_callable($x)) {

    echo $x(1, 2, 3, 4);
} else {
    echo 'Not Callable';
}

echo '<br/>';

$x = 1;

$sum = function (...$numbers) use (&$x): int|float {
    $x = 15;
    echo $x;
    return array_sum($numbers);
};

echo $sum(1, 2, 3, 4);

echo '<br/>';

$array = [1, 2, 3, 4, 6];

// $array2 = array_map(function($element) {
//     return $element * 2;
// }, $array);

// $x = function($element) {
//     return $element * 2;
// };

function foo($element) {
    return $element * 2;
}

// $array2 = array_map($x, $array);
// $array2 = array_map('foo', $array);

// $sum = function (callable $callback, int|float ...$numbers): int|float {
//     return $callback(array_sum($numbers));
// };

$sum = function (closure $callback, int|float ...$numbers): int|float {
    return $callback(array_sum($numbers));
};

echo $sum(function($element) {
    return $element * 2;
}, 1, 2, 3, 4);

// echo '<pre>';
// print_r($array);

// print_r($array2);
// echo '</pre>';

echo '<br/>';

$array = [1, 2, 3, 4];

// $array2 = array_map(function($number) {
//     return $number * $number;
// }, $array);

$y = 5;

$array2 = array_map(fn($number) => $number * $number * ++$y, $array);

echo '<pre>';
print_r($array);

print_r($array2);
echo '</pre>';

echo $y;
