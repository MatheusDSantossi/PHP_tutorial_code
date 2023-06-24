<?php

use App\Toaster;
use App\ToasterPro;

require_once __DIR__ . '/../vendor/autoload.php';

$toaster = new Toaster();

// $toasterPro = new ToasterPro();
$toasterPro = new Toaster();

// $toaster->addSlice('Bread');
// $toaster->toast();

$toasterPro->addSlice('Bread Pro');
$toasterPro->addSlice('Bread Pro');
$toasterPro->addSlice('Bread Pro');
$toasterPro->toast();
// $toasterPro->toastBagel();

foo($toaster);

// function foo(ToasterPro $toasterPro) {
//     $toasterPro->toast();
// }

function foo(Toaster $toaster) {
    $toaster->toastBagel();
}
