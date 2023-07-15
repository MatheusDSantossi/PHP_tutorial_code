<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Invoice_exception;
use App\Customer_exception;

// $invoice = new Invoice_exception(new Customer_exception());

// try {
//     $invoice -> process(-25);
// // } catch(\App\Exception\MissingBillingInfoException | \InvalidArgumentException $e) {
// } catch(\Exception $e) {
//     // $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
//     // echo 'Some error' . PHP_EOL;
//     echo $e->getMessage() .PHP_EOL;
// } finally {
//     echo 'Finally block' . PHP_EOL;
// }
//  catch(\InvalidArgumentException) {
//     echo 'Invalid argument exception' . PHP_EOL;
// }

// var_dump(process());

// function foo() {
//     echo 'foo' . PHP_EOL;
//     return false; 
// }

// function process() {
//     try {
//         $invoice = new Invoice_exception(new Customer_exception());

//         $invoice -> process(25);
//         return true;
//     } catch(\Exception $e) {
//         echo $e->getMessage() .PHP_EOL;
//         // return false;
//         return foo();
//     } finally {
//         echo 'Finally block' . PHP_EOL;
//         return -1;
//         #the results only return after the finally block
//     }
// }

// set_exception_handler(function(\Throwable $e) {
//     var_dump($e->getMessage());
// });

// echo array_rand([], 1);

// try {
//     echo array_rand([], 1);
// } catch(\Throwable $e) {
//     echo $e->getMessage() .PHP_EOL;
// }

$invoice = new Invoice_exception(new Customer_exception());

$invoice->process(-25);
