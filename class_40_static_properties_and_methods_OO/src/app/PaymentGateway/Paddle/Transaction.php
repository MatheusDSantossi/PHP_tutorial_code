<?php

declare(strict_types=1);

// singleton basic example

namespace App\PaymentGateway\Paddle;

class Transaction{
    
    // public static $count = 0;
    private static $count = 0;

    public function __construct(
        public float $amount,
        public string $description
    ){
        self::$count++;
    }

    public static function getCount(): int {
        // echo $this->amount;
        echo self::$amount;
        return self::$count;
    }

    public function process() {

        // array_map(static function(){
        //     var_dump($this->amount);
        //     $this->amount = 35;
        //     // the static key makes sure that the developer
        //     // don't make this kind of error
        // }, [1]);
        
        array_map(function(){
            var_dump($this->amount);
            $this->amount = 35;
        }, [1]);
        echo 'Processing paddle transaction...';

    }
}
