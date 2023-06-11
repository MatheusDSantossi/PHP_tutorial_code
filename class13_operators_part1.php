<?php

/* OPERATORS */

// Arithmetic Operators (+ - * / % **)

// $x = 10.5;
// $x = +'10';
// $y = 2.9;
// $y = 0;

use LDAP\Result;

$x = -10;
$y = 3;

// var_dump(fdiv($x, $y));
// var_dump($x);
// var_dump(fmod($x , $y));
var_dump($x % $y);

$x = ($y = 10) + 5;

var_dump($x, $y);

$x *= 3;

echo '<br/>'. $x . '<br/>';

// String Operators (. .=)

$x = 'Hello';

// $x = $x . ' World!';
$x .= ' World!';

echo $x;

echo '<br/>';

// Comparison Operatos (== === != <> !== < > <= >= <=> ?? ?:)

$x = 5;
$y = '5';

var_dump($x == $y);
var_dump($x === $y);

echo '<br/>';

var_dump($x != $y); // <> it's basically the same thing
var_dump($x !== $y);

echo '<br/>';
var_dump($x < $y);
echo '<br/>';
var_dump($x > $y);
echo '<br/>';
var_dump($x <= $y);
echo '<br/>';
var_dump($x >= $y);
echo '<br/>';
var_dump($x <=> $y); // if the number is bigger than return 1 if it's less return -1 if it's equals return 0
echo '<br/>';

$x = 'Hello World!';
$y = strpos($x, 'H');

$result = $y === false ? 'H not Found' : 'H Found at index ' . $y;

echo $result;

echo '<br/>';

// if ($y == false) {
if ($y === false) {
    echo 'H Not Found';
} else {
    echo 'H Found at index '. $y;
}


echo '<br/>';

var_dump(0 == '0');
echo '<br/>';
// $xFinal = null;
// $x = false;
$y = $xFinal ?? 'hello'; // $y will be equalt to 'hello' only if $x is null

var_dump($y);

// Error Control Operators (@)

$x = @file('foo.txt'); // silences the error

// Increment / Decrement Operators (++, --)

$x = 5;
$y = null;
$z2 = 'abc';

echo $x++;
echo ++$x;
// $x--;

echo ++$y; // 1

echo ++$z2; // abd

// Logical Operators (&& | ^ ~ << >>)


echo '<br/>';
$x = false;
$y = 0;

var_dump($x || $y);

$x = false;
$y = false;

$z = $x && $y;
$z = $x and $y;

echo '<br/>';

var_dump($z);

function hello() {
    echo 'Hello World';

    return false;
}

var_dump($x && hello() || true);

// Sitwise Operators (& | ^ ~ << >>)

$x = 6;
$y = 3;

var_dump($x & $y);

// 110
//&
// 011
// 010 = 2

$x = 6;
$y = 3;

var_dump($x | $y);


// 110
// |
// 011
// 111 = 7

var_dump($x ^ $y);


// 110
// ^
// 011
// 101 = 5

var_dump(~$x & $y);


// 110
// ~
// 011
// &
// 011
// 101 = 1

var_dump($x << $y);


// 110
// <<<
// 110000
// 101 = 48

var_dump($x >> $y);


// 110
// >>>
// 
// 101 = 0

// Array Operators (+ == === != !== <>)

// $x = ['a', 'b', 'c'];
// $y = ['c', 'f', 'g'];
$x = ['a' => 1, 'b' => 2, 'c' => 3];
// $y = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 1, 'c' => 3, 'b' => 2];

$z = $x + $y;

$z = $x === $y;

echo '<br/>';

var_dump($z);

// Exxecution Operators (``)

