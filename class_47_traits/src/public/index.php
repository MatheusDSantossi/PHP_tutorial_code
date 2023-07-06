<?php

require_once __DIR__ . '/../vendor/autoload.php';


$coffeeMaker = new \App\CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new \App\LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new \App\CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();


$allInOneCoffeMaker = new \App\AllInOneCoffeeMaker();
$allInOneCoffeMaker->makeCoffee();
$allInOneCoffeMaker->makeLatte();
// $allInOneCoffeMaker->makeOriginalLatte();
$allInOneCoffeMaker->makeCappuccino();

$latteMaker->foo();

// echo \App\LatteMaker::$x;

// \App\CoffeeMaker::$foo = 'foo';
// \App\LatteMaker::$foo = 'bar';

\App\LatteMaker::$foo = 'foo';
\App\AllInOneCoffeeMaker::$foo = 'bar';

// echo \App\CoffeeMaker::$foo . ' '. \App\LatteMaker::$foo . PHP_EOL;
echo \App\AllInOneCoffeeMaker::$foo . ' '. \App\LatteMaker::$foo . PHP_EOL;
