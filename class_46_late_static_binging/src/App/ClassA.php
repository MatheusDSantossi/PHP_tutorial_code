<?php 

namespace App;

class ClassA {
    protected string $name = 'A';

    public function getName(): string {
        // var_dump(get_class($this));
        var_dump($this::class);
        // return self::$name;
        return $this->name;
        // return $this->name;
    }
    public static function make() {
        // return new static(); #return class A and B
        return new self(); # return only class A
    }
}
