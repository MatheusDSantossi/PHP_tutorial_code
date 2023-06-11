<?php
/** LOOPS */

// while

$i = 0;

while ($i <= 15) {
    if ($i % 2 === 0) {
        $i++;
        continue;
    }
    echo $i++ . ', ';
}

while (true) {
    if ($i >= 25) {
        break;
    }

    echo '<br/>' . $i++;
}

// do-while

$i = 0;

do {
    echo $i++ . '<br/>';
} while ($i <= 15);

// for

// for (; ; ) { It's the same of a while (true){}
for ($i = 0; print $i, $i < 15; $i++) {
    // echo '<br/>' . $i;
}

// $text = 'Hello World';
$text = ['a', 'b', 'c', 'd'];

// for ($i = 0; $i < strlen($text); $i++) {
for ($i = 0, $length = count($text); $i < $length; $i++) {
    echo $text[$i] . '<br/>';
}

// foreach

$programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

// foreach($programmingLanguages as $language) {
foreach($programmingLanguages as $key => &$language) {
// foreach($programmingLanguages as $key => $language) {
    // the & transform the key in the array by itself
    echo ++$key . ':' . $language . '<br/>';
    // $language = 'php';
}

// print_r($programmingLanguages);

echo $language;

unset($language); // make this to avoid problems like the instance above

$language = 'php';

print_r($programmingLanguages);
echo '<br/>';

$user = [
    'name' => 'Matheus',
    'email' => 'matheus@gmail.com',
    'skills' => ['Java', 'Python', 'Django', 'Design', 'SQL'],
];


foreach($user as $key => $value) {
    // echo $key . ': ' . $value . '<br/>';
    // echo $key . ': ' . json_encode($value) . '<br/>';

    echo $key . ': ';

    if (is_array($value)) {
        // $value = implode('.', $value);
        foreach($value as $skill) {
            echo $skill . ' - ';
        }
    } else {
        echo $value;
    }

    echo '<br/>';
    
    // echo $key . ': ' . $value . '<br/>';

}
// end for each;