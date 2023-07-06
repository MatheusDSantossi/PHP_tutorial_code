<?php

namespace App;

// class Invoice extends Customer {
// class Invoice extends Mail{
class Invoice {

    use Mail;
    public function process () {
        echo 'Processed invoice' . PHP_EOL;

        //send email
        $this->sendEmail();
        
        # this is not a good solution because invoice isn't a customer!
    }
}