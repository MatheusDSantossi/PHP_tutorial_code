<?php 

namespace App;

/**
 * @property-read int $x
 * @property-write float $y
 * @property float $y
 */

 /**
  * @method static int foo(string $x)
  * @method int foo(string $x)
  */
class Transaction {

    public function __call(string $name, array $arguments){

    }

    public static function __callStatic($name, $arguments) {
        
    }

    public function __get(string $name) {

    }

    public function __set(string $name, $value):void {

    }

    // others tests 
    /** @var Customer */
    private $customer;
    /** @var float */
    private $amount;

    /**
     *  @param Customer[] $arr
     */
    public function foo(array $arr) {
        /** @var Customer $obj */

        foreach ($arr as $obj => $value) {
            // $obj->myMethod();
            $obj->name;
        }
    }

    // testin some comments
    
    /**
     * Some description
     * @param Customer $customer
     * @param float $amount
     * 
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * 
     * @return bool
     */
    public function process(Customer $customer, float $amount): bool {
        // process transaction

        // if failed, return false

        // otherwise return true
        return true;
    }
}
