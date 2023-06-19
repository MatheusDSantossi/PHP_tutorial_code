<?php

declare(strict_types = 1);

class Transaction
{
    // public float $amount = 15;
    // public ?float $amount;
    private float $amount;
    private string $description;    

    public function __construct(float $amount, string $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate) : Transaction {
        $this-> amount += $this -> amount * $rate / 100;
        
        return $this; // it's a method to chain these methods to 
        // clean the code and not put all the time $transaction
    }

    public function applyDiscount(float $rate) : Transaction {
        $this -> amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount() : float {
        return $this -> amount;
    }

    public function __destruct(){
        echo 'Destruct ' . $this -> description . '<br/ >';
    }

}
