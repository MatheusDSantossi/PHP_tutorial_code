<?php

namespace App;


class CappuccinoMaker extends CoffeeMaker {
    
    // use CappuccinoTrait;
    use CappuccinoTrait {
        CappuccinoTrait::makeCappuccino as public;
    }
    
    // public function makeCappuccino() {
    //     echo static ::class . ' is making cappuccino' .PHP_EOL;
    // }

    # the allinone class won't identify this functio and it will still echo the trait version one
    // public function makeCappuccino()
    // {
    //     echo 'Making Cappucinno (UPDATED)' . PHP_EOL;
    // }

}
