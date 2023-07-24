<?php

declare(strict_types=1);

namespace App\Classes;

class Invoice {
    public function index(): string {
        return 'Invoices';
    }

    public function create(): string {
        // return 'Create Invoice';
        return '<form action="/invoices/create" method="post"><label>Amount</label><input type= "text" name="amount" /></form>';
    }

    public function store() {
        $amount = $_POST['amount'];

        var_dump($amount);
    }
}
