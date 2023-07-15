<?php

namespace App;

use App\Exception\InvoiceException;
use App\Exception\MissingBillingInfoException;

class Invoice_exception {
    public function __construct(public Customer_exception $customer) {

    }

    public function process(float $amount): void {
        
        if($amount <= 0) {
            // log some message
            // return;
            
            // throw new \InvalidArgumentException('Invalid invoice amount.');

            throw InvoiceException::invalidAmount(); 
        }

        if(empty($this->customer->getBillingInfo())) {
            // throw new \App\Exception\MissingBillingInfoException('Missing billing information');
            // throw new MissingBillingInfoException();
            // throw CustomException::missingBillingInfo();

            throw InvoiceException::missingBillingInfo();
        }

        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OK' . PHP_EOL;
    }
}