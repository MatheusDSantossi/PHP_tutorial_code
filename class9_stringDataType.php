<?php

/* String */

$firstName = 'Will';
// $lastName = "$firstName Smith";
$lastName = " Smith";

$name = $firstName . '' . $lastName;

echo $name . '<br/>';

echo $name[-2];

$name[15] = 'L';

var_dump($name);

echo "<br/>";

$x = 1;
$y = 2;

// Heredoc

$text = <<<TEXT

Line 1 $x
Line 2 $y
Line 3

<div>
    <p>Hello World</p>
</div>
TEXT;

// echo ($text);
echo nl2br($text);

echo "<br/>";

// Nowdoc

$text = <<<'TEXT'

Line 1
Line 2
Line 3
TEXT;

echo '<br/>';

echo nl2br($text);
