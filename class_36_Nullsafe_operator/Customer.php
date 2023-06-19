<?php

class Customer{
    // public ?PaymentProfile $paymentProfile = null;
    private ?PaymentProfile $paymentProfile = null;

    public function getPaymentProfile(): ?PaymentProfile {
        return $this->paymentProfile;
    }
}
