<?php

// Working with filesystem

$dir = scandir(__DIR__);

// var_dump($dir);
var_dump(is_file($dir[2]));
var_dump(is_dir($dir[2]));

// mkdir('foo/bar', recursive: true);

// rmdir('foo');

// if(file_exists('foo.txt')) {
//     echo filesize('foo.txt');

//     file_put_contents('foo.txt', 'Hello World!');

//     clearstatcache();

//     echo filesize('foo.txt');

// } else {
//     echo 'File not found!';
// }

if (! file_exists('foo.txt')) {
    echo 'File not found';

    return ;
}

$file = fopen('foo.txt', 'r');

var_dump($file);

echo '<br/>';

// while (($line = fgets($file)) !== false) {
//     echo $line . '<br/>';
// }

while (($line = fgetcsv($file)) !== false) {
    print_r($line);
}

fclose($file);

echo '<br/>';


$content = file_get_contents('foo.txt', offset: 3, length: 2);

echo $content;

file_put_contents('bar.txt', 'Hello World!');

file_put_contents('bar.txt', 'Hi');

file_put_contents('bar.txt', 'there!', FILE_APPEND);

unlink('bar.txt');

copy('foo.txt', 'bar.txt');

rename('foo.txt', 'bar.txt');

