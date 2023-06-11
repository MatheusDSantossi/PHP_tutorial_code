<?php

// Error Handling

/**
 * https://www.php.net/manual/en/functio...
 *https://www.php.net/manual/en/errorfu...
 */

// error_reporting(0);
// error_reporting(E_ALL & ~E_WARNING);

// trigger_error('Example error', E_WARNING);

echo 1;

// display_errors();

// error_log();

function errorHandler(int $type, 
string $msg, 
?string $file = null, 
?int $line = null
) {

    echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;

    return;
}

// error_reporting(E_ALL);// & ~E_WARNING);
error_reporting(E_ALL & ~E_WARNING);

set_error_handler('errorHandler', E_ALL);

echo $x;
