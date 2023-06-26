<?php

namespace App;

abstract class Field {
    public function __construct(protected string $name) {

    }

    // public function render(): string{ 
    //     return '';
    // }
    abstract public function render(): string;
     
}
