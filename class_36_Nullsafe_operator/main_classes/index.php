<?php

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once './Transaction.php';

$transaction = new Transaction(5, 'Test');

// echo $transaction -> customer -> paymentProfile -> id;
// -> is equal to a object operator and ?=> is a nullfase operator

// $transaction -> customer = new Customer();

// echo $transaction -> customer ?-> paymentProfile ?-> id;
// echo $transaction -> customer ?-> paymentProfile ?-> id ?? 'foo';


// echo $transaction -> getCustomer() ?-> getPaymentProfile() ?-> id ?? 'foo';
echo $transaction -> getCustomer() ?-> setPaymentProfile(createProfile()) ?-> id ?? 'foo';
