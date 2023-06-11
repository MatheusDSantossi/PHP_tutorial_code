<?php

declare(strict_types=1);

/** Functions */

// function foo() {
//     // echo 'Hello World';
//     return 'Hello World!';
// }

// echo foo();

var_dump(foo());

bar();

// if(true) {

    function foo() {
        // echo 'Hello World';
        // return 'Hello World!';
        echo 'Foo';
        function bar() {
            echo 'Bar';
        }
    }
// }

// return



function foo2() {
    echo '<br/>';
    // return '1';
    return 1;
}

// function bar2(): void {
//     return null;
// }

// function bar2(): ?int {
//     return null;
// }

// function bar2(): float|int|array {
//     return [1.5];
// }

function bar2(): mixed { // it's better to use specific
    return "[1.5]";
}

var_dump(foo2());

var_dump(bar2());