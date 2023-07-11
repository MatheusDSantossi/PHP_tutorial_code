<?php

namespace App;

class Invoice {
    private string $id;

    public function __construct() {
        $this->id = uniqid('invoice_');

        var_dump('__construct');
    }

    // public static function create(): static {
    //     return new static();
    // }

    # when you're clonning an object the construct is not called,
    # instead magic methods are called in this case the __clone method
    public function __clone(): void {
        $this->id = uniqid('invoice_');
        var_dump('__clone');
    }
}
