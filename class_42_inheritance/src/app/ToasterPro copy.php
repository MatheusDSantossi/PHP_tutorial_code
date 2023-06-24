<?php

namespace App;

# fancy oven is an oven that makes toast as well
class FancyOven {
    // private ToasterPro $toaster;

    public function __construct(private ToasterPro $toaster){

    }
    public function fry() {
        # fry stuff
    }

    public function toast() {
        $this->toaster->toast();
    }

    public function toastBagel() {
        $this->toaster->toastBagel();
    }
}
