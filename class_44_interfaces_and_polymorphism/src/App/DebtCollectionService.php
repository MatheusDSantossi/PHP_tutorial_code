<?php

namespace App;

class DebtCollectionService {

    #change the structure of the method like this is polimorphism
    public function collectDebt(DebtCollector $collector) {
    // public function collectDebt(CollectionAgency $collector) {
        
        var_dump($collector instanceof Rocky);
        
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}
