<?php

declare(strict_types=1);

namespace App\Controllers;
use App\View;

class HomeController {
    public function index(): View {
        // <input type = 'file' name='receipt'/>
        // <input type = 'file' name='myImage'/>
        // return (new View('index'))->render();
        return View::make('index', ['foo'=> 'bar']);
        // return View::make('index', $_GET);
    }

    public function download() {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="myfile.pdf');

        readfile(STORAGE_PATH . '/balao_enemy.png');
    } 

    public function upload() {
        $filePath = STORAGE_PATH . '/'  .$_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /home');

        exit;

        // unlink(STORAGE_PATH . '/receipt 6-20-2021.pdf');
    }
}
