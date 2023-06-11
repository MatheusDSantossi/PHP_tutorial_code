<?php

/* BOOLEANS */ 

$isComplete = (string) false;

// integers 0 - 0 =false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

echo $isComplete;

var_dump($isComplete);

if ($isComplete) {
    //do something
    echo 'Sucess';
} else {
    // do something else
    echo 'Fail';
}
