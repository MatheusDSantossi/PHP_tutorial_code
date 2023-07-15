<?php

namespace App;
class Customer_exception {
    public function __construct(private array $billingInfo = []) {

    }

    public function getBillingInfo(): array {
        return $this->billingInfo;
    }
}
