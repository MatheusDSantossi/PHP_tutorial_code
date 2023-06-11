<?php

/** require / require_once / include / include_once */

// include 'file.php';

$x = 5;

require_once 'file.php';
// require 'file.php';

// $x++;

echo $x . '<br/>';


require_once 'file.php';
// require 'file.php';

// include_path

echo $x . '<br/>';

echo '<br/>';

$x = 5;

$y = include 'file.php';

echo $x . '<br/>';

var_dump($y);   

/** include */

// $nav = include './partials/nav.php';
include './partials/nav.php';

$nav = ob_get_clean();

var_dump($nav);
