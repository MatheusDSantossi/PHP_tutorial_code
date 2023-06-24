<?php

use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25);

// $transaction->amount = 125;
// $transaction->setAmount(135);

//this will throw an error because amount is private
// $transaction->amount;

// so to acess the private key withou the getters and setters we use
// reflectionProperty like this...

$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');

$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 135);
var_dump($reflectionProperty->getValue($transaction));

$transaction->copyFrom(new Transaction(100));

$transaction -> process();
