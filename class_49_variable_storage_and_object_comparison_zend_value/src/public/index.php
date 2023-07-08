<?php

// use App\Customer;
use App\CustomInvoice;
use App\Invoice2;

require_once __DIR__ . '/../vendor/autoload.php';

$invoice1 = new Invoice2(new \App\Customer('Customer 1'),25, 'My Invoice 1');
// $invoice2 = new Invoice2(25, 'My Invoice 1');
$invoice2 = new CustomInvoice(new \App\Customer('Customer 2'), 25, 'My Invoice 1');

$invoice1->linkedInvoice = $invoice2;
$invoice2->linkedInvoice = $invoice1;

$invoice3 = $invoice1;

1 == true;

echo 'invoice1 == invoice2' . PHP_EOL;
var_dump($invoice1 == $invoice2);
// var_dump($invoice1 == $invoice3);

echo 'invoice1 === invoice2' . PHP_EOL;
var_dump($invoice1 === $invoice2);
// var_dump($invoice1 === $invoice3);

var_dump($invoice1, $invoice2);

echo '</br>';

$invoice3->amout = 250;

var_dump($invoice1, $invoice3);
