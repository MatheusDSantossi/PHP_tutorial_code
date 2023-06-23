<?php

use App\DB;
use App\PaymentGateway\Paddle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');
// $transaction = new Transaction(25, 'Transaction 1');

// var_dump($transaction::$count);
// var_dump(Transaction::$count);

// var_dump(Transaction::getCount());

// var_dump($transaction::process());

// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);
// $db = DB::getInstance([]);

// Format::amount();

// array_map(static function(){

// }, []);

$transaction -> process();
echo $transaction->amount;

var_dump($transaction::getCount());
// this below isn't recommended because it's not clear that this method is static
// and plus you cannot acess this variable within this method
var_dump($transaction->getCount()); 
