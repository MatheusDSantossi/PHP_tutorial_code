<?php

declare(strict_types=1);

namespace App\Controllers;
use App\View;

class HomeController {
    public function index(): View {
        // <input type = 'file' name='receipt'/>
        // <input type = 'file' name='myImage'/>
        // return (new View('index'))->render();
        // return View::make('index', ['foo'=> 'bar']);
        return View::make('index', $_GET);
    }

    public function upload() {
        $filePath = STORAGE_PATH . '/' .$_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        echo '<pre>';
        var_dump(pathinfo($filePath));

        echo '</pre>';
    }
}
