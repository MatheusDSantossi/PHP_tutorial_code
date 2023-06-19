<?php

require_once '../Transaction.php';

// Classes & Objects

// $class = 'Transaction';

// $transaction = (new $class(100, 'Transaction 1'))
// ->addTax(8)
// ->applyDiscount(10)
// -> getAmount();

// $transaction -> amount = 15;

// var_dump($transaction -> getAmount());
var_dump($transaction);


// $transaction->addTax(8);
// $transaction->applyDiscount(10);
// $transaction->addTax(8)->applyDiscount(10);

var_dump($transaction);

// cHAINED METHODS  ISN'T VERY GOOD


$transaction1 = (new Transaction(100, 'Transaction 1'))
->addTax(8)
->applyDiscount(10);

$transaction2 = (new Transaction(200, 'Transaction 2'))
->addTax(8)
->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());

$amount = (new Transaction(320, 'Transaction 3'))
    ->addTax(9)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);

echo '';

$transaction3 = (new Transaction(320, 'Transaction 3'))
    ->addTax(9)
    ->applyDiscount(10);

$amount3 = $transaction3 -> getAmount();

// unset($transaction3);
$transaction3 = null;

// exit;

var_dump($amount3);


$str = '{"a":1, "b":2, "c":3}';

// $arr = json_decode($str, true);
$arr = json_decode($str);

var_dump($arr -> c); 

echo '<br/>';

$obj = new \stdClass;

$obj -> a = 1;
$obj -> b = 2;

var_dump($obj);

echo '<br/>';

$arr = [1, 2, 3];
$obj = (object) $arr;

// var_dump((object)$arr);
var_dump($obj-> {1});

echo '<br/>';

var_dump((object) 1);

echo '<br/>';

$obj = (object) 1;
var_dump($obj->scalar);

echo '<br/>';

$obj = (object) null;
var_dump($obj);
