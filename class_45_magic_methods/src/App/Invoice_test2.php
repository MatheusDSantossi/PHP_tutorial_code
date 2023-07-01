<?php

namespace App;

class Invoice_test2 {

    public function process(float $amount, $description) {
        var_dump($amount, $description);
    }

    #this method will get the errors on the class
    public function __call(string $name, array $arguments) {
        if(method_exists($this, $name)){
            call_user_func_array([$this, $name], $arguments);
            $this->$name($arguments);
        }
        var_dump($name, $arguments);
    }
    #this one will get the static erros envolving the class
    public static function __callStatic(string $name, array $arguments) {
        var_dump('static', $name, $arguments);
    }
}

