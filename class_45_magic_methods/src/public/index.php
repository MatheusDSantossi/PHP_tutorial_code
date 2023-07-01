<?php

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice(14);

$invoice-> amount = 15;
# without the set method this isn't possible

ECHO $invoice->amount . PHP_EOL;

var_dump(isset($invoice->amount));

unset($invoice->amount);
var_dump(isset($invoice->amount));

echo "TESTING __call and __callStatic <br/>";

// $invoice_test2 = new App\Invoice_test2();

// $invoice_test2->process(1, 2, 3);

$invoice_test2 = new App\Invoice_test2();
$invoice_test2->process(1,2,3);

// App\Invoice_test2::process(1,2,3);


$invoice_test2->process(14, 'TEST');

$invoice_test3 = new App\Invoice_test3();

echo $invoice_test3;

var_dump($invoice instanceof Stringable);
var_dump($invoice_test3 instanceof Stringable);

echo '<br/> testing __invoke now <br/>';

var_dump(is_callable($invoice_test3));

$invoice_test3();

echo '<br/> testing __debugInfo now <br/>';

var_dump($invoice_test3);   
