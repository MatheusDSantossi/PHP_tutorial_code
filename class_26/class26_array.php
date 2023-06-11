<?php

require 'helpers.php';

// array_chunk(array, $array, int %length, bool $preserveKeys = false): false

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

// prettyPrintArray(array_chunk($items, 2, true));

$array1 = ['a', 'b', 'c']; // but if it has one more it'll give a error
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));


// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = [1, 2, 3, [], 5, 6, 7, false, 9, 10];

// $even = array_filter($array, fn($number) => $number % 2 ===0);

// $even = array_filter($array, fn($number, $key) => $number % 2 ===0, ARRAY_FILTER_USE_BOTH);

$even = array_filter($array);

$even = array_values($even);

prettyPrintArray($even);

$array = ['a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10];

// $keys = array_keys($array, '15');
$keys = array_keys($array, '15', true);

prettyPrintArray($keys);

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$array = array_map(fn($number) => $number * 3, $array);

prettyPrintArray($array);

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array);

$array1 = [1, 2, 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];
$array3 = [7, 8, 9, 'b' => 10];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);

$invoiceItems = [
    ['price' => 9.99, 'qty' => 4, 'desc' => 'Item 1'],
    ['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
    ['price' => 149, 'qty' => 2, 'desc' => 'Item 3'],
    ['price' => 19.99, 'qty' => 1, 'desc' => 'Item 4'],
    ['price' => 4.99, 'qty' => 5, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['qty'] * $item['price']
);

echo $total;

$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];

$key = array_search('b', $array);

var_dump($key);

if ($key === false) {
    echo 'Letter not found';
}

if (in_array('a', $array)) {
    echo 'Letter found';
}

$array1 = ['a' => 1, 'b' => 2, 'd' => 4];
$array2 = ['d' => 4, 'g' => 5, 'f' => 6];
$array3 = ['l' => 1, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($array1, $array2, $array3));

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));

$array10 = ['a' => 1, 'b' => 2, 'd' => 4, 'e' => 5];

prettyPrintArray($array10);

// asort($array10);
// ksort($array10);
usort($array10, fn($a, $b) => $a <=> $b);

prettyPrintArray($array10);

$arrayD = [1, 2, 3, 4];

[$a, $b, [$c, $d]] = $arrayD;

echo $a . ',' . $c . ', ' . $d . '<br/ >';
