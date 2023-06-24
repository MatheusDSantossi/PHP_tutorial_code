<?php

namespace App;

# I can't extend from a final class or final method be overwritting
final class Toaster {
// class Toaster {
    public array $slices;
    // public int $size  = 2;
    protected int $size;
    // if this is private the toasterPro will not increase the size for example
    //but I can make this protected and in the toasterPro I can make it public or protected as well
    
    public function __construct() {
        $this->slices = [];
        $this->size = 2;
    }
    
    public function addSlice(string $slice): void {
        
        // var_dump($this);
        // exit;
        
        if(count($this->slices) < $this->size){
            $this->slices[] = $slice;
        }
    }

    public function toast() {
        foreach($this->slices as $i => $slice) {
            echo($i + 1) . ': Tostring ' . $slice . PHP_EOL;
        }
    }

    public function foo(){ 
        
    }
}
