<?php 

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker {
    // use LatteTrait, CappuccinoTrait;

    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    use LatteTrait;

    // private string $milkType = 'AllInOne-milk';

    // public function getMilkType(): string {
    //     return $this->milkType;
    // }

    // public function foo() {
    //     $this->makeCappuccino();
    // }

    // use CappuccinoTrait;
    // use LatteTrait {
    //     LatteTrait::makeLatte insteadof CappuccinoTrait;
    // }
    
    // use CappuccinoTrait {
    //     CappuccinoTrait::makeLatte insteadof LatteTrait;
    // }
    // use LatteTrait;

    // use CappuccinoTrait {
    //     CappuccinoTrait::makeLatte insteadof LatteTrait;
    // }
    // use LatteTrait {
    //     LatteTrait::makeLatte as makeOriginalLatte;
    // }

}
