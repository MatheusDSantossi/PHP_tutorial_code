<?php

namespace App;

class Invoice2 {
    public ?Invoice $linkedInvoice = null;

    public function __construct(public Customer $customer, public float $amout, public string $description) {
        
    }
}
