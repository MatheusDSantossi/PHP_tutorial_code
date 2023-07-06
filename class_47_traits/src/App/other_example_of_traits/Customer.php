<?php

namespace App;

// class Customer extends Mail{
class Customer {

    use Mail;
    public function updateProfile() {
        echo 'Profile Updated' . PHP_EOL;

        // send email
        $this->sendEmail();
            
    }

    // public function sendEmail() {
    //     echo 'sending Email';
    // }
}
