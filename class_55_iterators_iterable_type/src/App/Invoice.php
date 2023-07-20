<?php

namespace App;

class Invoice {
    public string $id;
    // protected string $id;
    # using protected or private the foreach won't work anymore.

    public function __construct(public float $amount) {
        $this-> id = random_int(10000, 99999999);
    }
}
