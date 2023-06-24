<?php

namespace App;

class ToasterPro extends Toaster {
    // public array $slices = [];
    // public int $size = 4;

    # thes signature rules doesn't apply for the constructor method
    public function __construct() {
        parent::__construct();
        $this-> size = 4;
    }
    // public function __construct(string $x) {
    //     parent::__construct();
    //     $this-> size = 4;
    // }
 
    // public function addSlice(int $slice): void {
    public function addSlice(string $slice): void {
        // if(count($this->slices) < $this->size){
        //     $this->slices[] = $slice;
        // }
        # It's necessary to call the parent method too 
        # otherwise it won't run anything
        parent::addSlice($slice);
        # you did this with you don't want to overwrite the method
    }

    // public function toast() {
    //     foreach($this->slices as $i => $slice) {
    //         echo($i + 1) . ': Tostring ' . $slice . PHP_EOL;
    //     }
    // }

    public function toastBagel() {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . 'with bagels option';
        }
    }

    # When you don't want to use some method from the Super class (toaster)
    #one way to fix that is throwing an error but this is not the best way to
    #do this it's better using inheritance 
    public function foo() {
        throw new \ErrorException('Not supported');
    }
}
