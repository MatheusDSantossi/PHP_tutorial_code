<?php

require_once __DIR__ . '/../vendor/autoload.php';

$collector = new \App\CollectionAgency();

echo $collector->collect(100) . PHP_EOL;

$service = new App\DebtCollectionService();

echo '<br/>';

echo $service->collectDebt(new App\CollectionAgency()) . PHP_EOL;

$rocky = new App\Rocky();

echo '<br/>';

echo $service->collectDebt($rocky) . PHP_EOL;
