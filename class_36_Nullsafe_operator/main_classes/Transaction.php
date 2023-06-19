<?php

declare(strict_types=1);

class Transaction{ 

    // public ?Customer $customer;
    private ?Customer $customer;
    
    private float $amount;
    // private string $description;

    public function __construct(
        float $amount,
        private ?string $description = null // promote property (I think)
        // The ? makes this property nulleable type

    ){ 
        $this->$amount = $amount;
        // $this->$description = $description;
        echo $this -> amount;
    }

    public function getCustomer(): ?Customer {
        return $this -> customer;
    }

}
