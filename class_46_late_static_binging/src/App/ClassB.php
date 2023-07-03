<?php

namespace App;

class ClassB extends ClassA {
    // protected static string $name = 'B';
    protected string $name = 'B';

    # using static function and arguments are necessary
    # to overwrite the function and this is not a good idea
    // public function getName(): string {
    //     // var_dump(get_called_class());
    //     return self::$name;
    // }
    // public static function getName(): string {
    //     // var_dump(get_called_class());
    //     return self::$name;
    // }
}
