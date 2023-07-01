<?php

namespace App;

class Invoice_test3 { // implements \Stringable {
    
    private float $amount;
    private int $id = 1 ;
    private string $accountNumber = '012456789';


    #toString implicity implements the stringable interface
    public function __toString(): string {
        return "Hello!!!";
    }

    public function __invoke() {
        var_dump('invoked');
    }

    public function __debugInfo() : ?array {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4 ),
        ];
    }
}
