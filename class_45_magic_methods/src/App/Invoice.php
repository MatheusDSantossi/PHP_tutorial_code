<?php

namespace App;

class Invoice {

    public array $data = [];
    protected float $amount;

    // public function __construct(float $amount) {
    //     $this->amount = $amount;
    // }
    # isn't recommended to use the method get and setl ike this
    public function __get(string $name) {
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
        // if(property_exists($this, $name)) {
        //     return $this->$name;
        // }
        return null;
            // var_dump($name);
    }

    public function __set(string $name, $value): void {
        if(property_exists($this, $name)){
            $this->name = $value;
        }

     
        var_dump($name, $value);
    }

    public function __isset(string $name) {
        var_dump('isset');
        return array_key_exists($name, $this->data); 
    }
    public function __unset(string $name): void {
        var_dump('unset');
        unset($this->data[$name]);
    }
}
