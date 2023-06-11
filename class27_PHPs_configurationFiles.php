<?php

/** php.ini & configuraiton */


// ini_get();

    // ini_set();


// error_reporting, error_log, display_erros

var_dump(ini_get('error_reporting'));

var_dump(E_ALL);

// ini_set('error_reporting', E_ALL & ~E_WARNING); // take off the warning errors

echo '<br/>';

var_dump(ini_get('display_errors'));

// ini_set('display_errors', 0);

ini_set('max_execution_time', 3);

// sleep(5);

$array = [1];

// echo$array[3];

echo '<br/>';

var_dump(ini_get('memory_limit'));

$string = 'X';

for ($i = 0; $i < 1000; $i++) {
    $string .= $string;
}

echo $string;
