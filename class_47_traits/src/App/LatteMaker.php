<?php 

namespace App;

class LatteMaker extends CoffeeMaker {

    use LatteTrait;

    # if exists another variable $milkType on LatteTrait it must be equals otherwise an error will ocourr
    // private string $milkType = 'whole-milke';

    # the extends doesn't allowed the child class to override the method or anyhting that is final
    # in the other hand trait allows that which is not a good thing 
    public function makeLatte() {
        echo static::class . ' is making latte (final function erro) ' . PHP_EOL;
    }

    // private string $milkType = 'cow-milk';

    // public function getMilkType(): string {
    //     return $this->milkType;
    // }
}
