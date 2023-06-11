<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php

$name = "Matheus";

echo "Hello World!!!!";
print "Hello World!!!!";

echo $name;

$x = 1;
$y = $x;
// $y = &$x;

$x = 3;

echo $y;


echo 'Hello $name';

echo "Hello $name";
echo "Hello {$name}";
echo "Hello " . $name;
/*
*/
?>

<h1>
    <?= 'Hello World!' ?>
</h1>
</body>


<h1>Constants - Aula 4</h1>

<?php

//Constants

$firstName = 'Matheus';

$firstName = 'Maria';

echo $firstName;

define('STATUS_PAID', 'paid');

echo STATUS_PAID;

echo defined('STATUS_PAID');

const STATUS_PAID2 = '   paid2';

echo STATUS_PAID2;

// if(true) {
//     const FOO = 'bar';
//     define('STATUS_PAID', 9)
// }

$paid = 'PAIDD';

define('STATUS_' . $paid, $paid);

// echo STATUS_PAIDD;

echo __FILE__;

// Variable Variables

$foo = 'bar';

$$foo = 'baz';
// above is equal to $bar = 'baz';

echo $foo, $$foo;
echo $foo, $bar;

?>

</html>