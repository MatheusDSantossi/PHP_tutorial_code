<?php

// require_once '../app/PaymentGateway/Stripe/Transaction.php';
// require_once '../app/Notification/Email.php';
// require_once '../app/PaymentGateway/Paddle/Transaction.php';
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';

// spl_autoload_register(function ($class) {
//     // var_dump($class);

//     // $class = str_replace('\\', '/', $class)  . '.php';
//     // $class = lcfirst(str_replace('\\', '/', $class))  . '.php';
//     // require $class;
//     // var_dump('Autoloader 1!');


//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class))  . '.php';
//     if(file_exists($path)){
//         require $path;
//     }
//     var_dump($path);
//     // these lines here replace the code above of requires
// });

// spl_autoload_register(function($class) {
//     var_dump('Autolaoder 2');
// }, prepend: true);
// prepend: true (it will print the secocnd autoload first than the other one)


// composer
require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$paddleTransaction = new Transaction();

$id = new \Ramsey\Uuid\UuidFactory;

echo $id -> uuid4();

var_dump($paddleTransaction);
