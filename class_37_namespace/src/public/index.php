<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
// require_once '../PaymentGateway/Paddle/DateTime.php';
// require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

// use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Paddle as PA;
use PaymentGateway\Stripe\Transaction as StripeTransaction;
// use PaymentGateway\Paddle\CustomerProfile;

// var_dump(new PaymentGateway\Stripe\Transaction());
// var_dump(new Transaction());

// $paddleTransaction = new Transaction();
$paddleTransaction = new PA\Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new PA\CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction);

// include('views/layout.php');
