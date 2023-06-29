<?php

namespace App;

class CollectionAgency implements DebtCollector {

    // public const MY_CONSTANT = 2;

    // public function __construct() {

    // }

    public function collect(float $owedAmount): float {
        
        $guaranteed = $owedAmount  * 0.5;
        
        return mt_rand($guaranteed, $owedAmount);
        # if we add strict types the return bellow won't work because
        # mt_rand only acceptes integer and here we're send float.
    }
}
