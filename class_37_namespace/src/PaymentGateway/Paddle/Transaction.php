<?php

declare(strict_types=1);

// namespace Matheus;
namespace PaymentGateway\Paddle;

// use CustomerProfile;
// use DateTime;

// use Notification\Email;

use PaymentGateway\Stripe\Transaction as PaddleTransaction;

const FOO = 1;
function foo() {}

class Transaction {

    public function __construct(){ 
        // var_dump(new CustomerProfile());
        // var_dump(new DateTime());
        // var_dump(new \Notification\Email());

        // var_dump(\explode(',', 'hello, world'));// the \ make sute that it's using the global one
        // var_dump(explode(',', 'hello, world'));
    }
    
}
// custom function because PHP already has a explode function in its global class
// function explode($separator, $str) {
//     return 'foo';
// }
