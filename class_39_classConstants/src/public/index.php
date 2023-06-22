<?php

use App\PaymentGateway\Paddle\Transaction;
use App\Enums\Status;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

//  :: is equal to scope resolution operator
// echo Transaction::STATUS_PAID;

echo $transaction::class;

#this below is a harder way to make the same thing of

// $transaction->setStatus('paid');

// var_dump($transaction);

#this one

$transaction->setStatus(Status::PAID);
// $transaction->setStatus("Transaction::STATUS_PAID");

var_dump($transaction);
