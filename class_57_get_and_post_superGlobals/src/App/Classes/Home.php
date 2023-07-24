<?php

declare(strict_types=1);

namespace App\Classes;

class Home {
    public function index(): string {
        // ECHO '<pre>';
        // var_dump($_REQUEST);
        // # It's recommned avoid to use $_resquest super global
        // ECHO '</pre>';

        // ECHO '<pre>';
        // var_dump($_GET);
        // ECHO '</pre>';

        // ECHO '<pre>';
        // var_dump($_POST);
        // ECHO '</pre>';
        
        return 'Home';
        // return '<form action="/home/?foo=bar&amount=250" method="post"><label>Amount</label><input type= "text" name="amount" /></form>';
    }
}
