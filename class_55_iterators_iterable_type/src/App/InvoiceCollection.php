<?php

namespace App;

class InvoiceCollection extends Collection  { #\Iterator {
    // private int $key;

    // public function __construct(public array $invoices) {

    // }

    // public function getIterator(): \ArrayIterator {
    //     return new \ArrayIterator($this->invoices);
    // }



    # ITERATOR INTERFACE CODE EXAMPLE
    // public function current() {
    //     echo __METHOD__ . PHP_EOL;
    //     // return current($this->invoices);
    //     return $this->invoices[$this->key];
    // }

    // public function next(): void {
    //     echo __METHOD__ . PHP_EOL;
    //     // next($this->invoices);
    //     ++$this->key;
    // }
    
    // public function key() {
    //     echo __METHOD__ . PHP_EOL;
    //     // return key($this->invoices);
    //     return $this->key;
    // }

    // public function valid(): bool {
    //     echo __METHOD__ . PHP_EOL;
    //     // return current($this->invoices) !== false;
    //     return isset($this->invoices[$this->key]);
    // }

    // public function rewind(): void {
    //     echo __METHOD__ . PHP_EOL;
    //     // reset($this->invoices);
    //     $this->key = 0;
    // }
}
