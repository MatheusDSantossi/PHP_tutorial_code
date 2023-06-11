<?php 

// ARRAYS
$programmingLanguage1 = 'PHP';
$programmingLanguage2 = 'Java';
$programmingLanguage3 = 'Python';

$programmingLanguage = ['PHP', 'Java', 'Python'];
// $programmingLanguage = array('PHP', 'Java', 'Python');

$name = 'Matheus';

echo $name[1] . '<br/>';

echo $programmingLanguage[1];

echo '<br/>';

var_dump(isset($programmingLanguage[3]));

// $programmingLanguage[1] = 'C++';

echo $programmingLanguage[1];

echo '<pre>';
print_r($programmingLanguage);
echo '<pre>';

echo count($programmingLanguage);

// $programmingLanguage[] = 'C++';
array_push($programmingLanguage, 'C++', 'C', 'C#', 'GO');

echo '<pre>';
print_r($programmingLanguage);
echo '<pre>';

echo count($programmingLanguage);

var_dump($programmingLanguage['php']);

$programmingLanguage = [
    'php' => '8.0',
    'python' => '3.9'
];

$newLanguage = 'go';

// $programmingLanguage['go'] = '1.15';
$programmingLanguage[$newLanguage] = '1.15';

echo '<pre>';
print_r($programmingLanguage);
echo '<pre>';

$array = [true => 'a', 1 => 'b', 'c', 1.8 => 'd', null => 'e'];

print_r($array);

// echo array_pop($array);
// echo array_shift($array);

unset($array[50], $array[1]);

print_r($array);


$newArray = [1, 2, 3];

// unset($array[0], $array[1], $array[2]);

echo $newArray;

var_dump(array_key_exists(1, $newArray));
