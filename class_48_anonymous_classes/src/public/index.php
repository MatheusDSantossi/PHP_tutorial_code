<?php

use App\ClassA;
use App\MyInterface;

require_once __DIR__ . '/../vendor/autoload.php';

// $obj = new class {

// };

$obj = new class(1, 2, 3) implements MyInterface {
    // use MyTrait;

    public function __construct(public int $x, public int $y, public int $z) {

    }
 
};

// var_dump($obj);
// var_dump(get_class($obj));

foo($obj);

function foo(MyInterface $obj) {
    var_dump($obj);
}

/* new classes test */

$obj_2 = new ClassA(1, 2);

var_dump($obj_2->bar());
