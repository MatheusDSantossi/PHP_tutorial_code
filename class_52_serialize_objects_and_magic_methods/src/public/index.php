<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Invoice_serialize;

// $invoice = new \App\Invoice_serialize();

// $str = serialize($invoice);
// # it's differents operators
// $invoice2 = unserialize($str);

// echo serialize(true). PHP_EOL;
// echo '<br/>';
// echo serialize(1). PHP_EOL;
// echo '<br/>';
// echo serialize(2.5). PHP_EOL;
// echo '<br/>';
// echo serialize('Hello World'). PHP_EOL;
// echo '<br/>';
// echo serialize([1, 2, 3]). PHP_EOL;
// echo '<br/>';
// var_dump(unserialize(serialize(['a' => 1, 'b' => 2, 'c' => 3]))) . PHP_EOL;

// echo '<br/>';

// // echo serialize($invoice) . PHP_EOL;

// var_dump($invoice, $invoice2, $invoice === $invoice2);

// // var_dump(unserialize('O:11:"App\Invoice":1:{s:5:"*id";s:21:"invoice_64af0e84590e8";}'));

// $str = serialize(false);

// echo '<br/>';

// var_dump(unserialize($str));

// $invoice3 = new Invoice_serialize(25, 'Invoice 1', '123456789-10');

// echo '<br/>';

$invoice = new Invoice_serialize(25, 'amount', '1234566');

$str3 = serialize($invoice);

$invoice2 = unserialize($str3); 

// echo $str3 . PHP_EOL;

var_dump($invoice2);
