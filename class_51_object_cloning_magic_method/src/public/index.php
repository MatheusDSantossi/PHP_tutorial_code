<?php

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new \App\Invoice();

$invoice2 = new $invoice();

// $invoice3 = $invoice2; # this doens't make a copy, in short both invoice are pointers to the same memory space

$invoice3 = clone $invoice2;
# doing this the identidy operator will return false but the ids are the same
// var_dump($invoice, $invoice2, \App\Invoice::create());
var_dump($invoice2, $invoice3, $invoice2 === $invoice3);
