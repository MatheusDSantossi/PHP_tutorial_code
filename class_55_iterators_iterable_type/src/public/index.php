<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Invoice;
use App\InvoiceCollection;

// foreach (['a', 'b', 'c', 'd', 'e'] as $key => $value) {
//     echo $key . ' = ' .$value . PHP_EOL;
// }

// foreach (new App\Invoice(25) as $key => $value) {
//     echo $key . ' = ' .$value . PHP_EOL;
// }

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice) {
    // var_dump($invoice);
    echo '<br/>'; 
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
    echo '<br/>';
}

foo($invoiceCollection);
foo([1, 2 , 3]);
foo(1323);

// function foo(\App\Collection|array $iterable) {
function foo(iterable $iterable) {
    foreach ($iterable as $i => $item) {
        echo $i .PHP_EOL;
        echo '<br/>';
    }
}
