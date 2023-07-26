<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home {
    public function index(): string {
        
        // setcookie(
        //     'userName',
        //     'Matheus',
        //     // time() + 10,
        //     time() + (24 * 60 * 60), //1 day
        //     // [
        //     //     // expires, path, domain, secure, httponly and samesite
        //     // ],
        //     '/home',
        //     );

        // $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
        // return View::make('index', $_GET)->render();
            return 'Home';
    }
}
