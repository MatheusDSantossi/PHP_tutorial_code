<?php

namespace App;

/**
 * Summary of Invoice_serialize
 */
class Invoice_serialize { // implements \Serializable { # this interface is deprecated
    // protected string $id;
    /**
     * Summary of id
     * @var string
     */
    public string $id;

    /**
     * Summary of __construct
     * @param float $amount
     * @param string $description
     * @param string $creditCardNumber
     */
    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber) {
        $this->id = uniqid('invoice_');

    }

    /**
     * Summary of __sleep
     * @return array
     */
    public function __sleep(): array {
        return ['id', 'amount'];
    }

    /**
     * Summary of __wakeup
     * @return void
     */
    public function __wakeup(): void {
        
    }
    # the serialize gets preference to the sleep method the same happens to the wake up and unserialize functions
    public function __serialize(): array {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'description' => $this->description,
            'creditCardNumber' => base64_encode($this->creditCardNumber), # to really enprity asomething is recommended use others functions
            'foo' => 'bar',
        ];
    }

    public function __unserialize(array $data): void {
        $this -> id = $data['id'];
        $this -> amount = $data['amount'];
        $this -> description = $data['description'];
        $this -> creditCardNumber = base64_decode($data['creditCardNumber']);
        var_dump($data); 
    }
}
