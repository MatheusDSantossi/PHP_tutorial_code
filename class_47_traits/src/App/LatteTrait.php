<?php

namespace App;

trait LatteTrait {
    
    protected string $milkType = 'whole-milk';

    public static string $foo;
    public static int $x = 1;

    // public function makeLatte() {
    //     echo static::class . ' is making latte with ' . $this->milkType .PHP_EOL;
    // }

    final public function makeLatte() {
        // echo static::class . ' is making latte with ' . $this->getMilkType() .PHP_EOL;
        // echo static::class . ' is making latte with ' . $this->milkType .PHP_EOL;
        echo __CLASS__ . ' is making latte with ' . $this->milkType .PHP_EOL;
    }

    public static function foo() {
        echo 'Foo Bar';
    }

    public function setMilkType(string $milkType): static {
        $this->milkType = $milkType;
        return $this;
    }

    // public function getMilkType(): string {
    //     if(property_exists($this, 'milkType')) {
    //         return 'whole-milk';
    //     }

    //     return '';
    // }
    // abstract public function getMilkType(): string;

}
