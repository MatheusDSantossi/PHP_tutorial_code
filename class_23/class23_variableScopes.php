<?php

/** Variable scopes */

$x = 5;

include('script1.php');

// function foo() {
//     echo $x;
// }

// function foo() {
    
//     global $x;

//     $x = 10;

//     echo $x;
// }

function foo() {
    
    $GLOBALS['x'] = 10;

    echo $GLOBALS['x'];
}

echo $x;

function getValue() {
    // $value = someVeryExpensiveFunction();
    static $value = null;
    
    if($value === null) {
        $value = someVeryExpensiveFunction();
    }
    // some more processing with $value

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);
    
    echo 'Processing value';

    return 10;
    
}

echo getValue() .'<br/>';
echo getValue() .'<br/>';
echo getValue() .'<br/>';
