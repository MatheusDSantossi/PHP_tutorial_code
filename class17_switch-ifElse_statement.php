<?php

// $paymentStatus = 'paid';
// $paymentStatus = 'declined';
$paymentStatus = '1';
// $paymentStatus = '12';

$paymentStatuses = [1, 'declined', 0];

foreach($paymentStatuses as $paymentStatus) {

    switch($paymentStatus) {
        case 1:
            echo 'Paid';
            // break;
            // continue 'rejected'; don't accept
            continue 2;
        
        case 2://case 'rejected':
        case 'declined':
            echo 'Payment Declined';
            break;

        case 'pending':
            echo 'Pending Payment';
            break;

        default:
            echo 'Unknown Payment Status';
    }
}

echo '<br/>';

function x() {
    sleep(3);

    echo 'Done <br/>';

    return 4;
}

// if (x() === 1) {
//     echo 1;
// } 
// elseif (x() === 2) {
//     echo 2;    
// }
// elseif (x() === 3) {
//     echo 3;    
// }
// elseif (x() === 4) {
//     echo 4;    
// }

// A better way

// $x = x();

// if ($x === 1) {
//     echo 1;
// } 
// elseif ($x === 2) {
//     echo 2;    
// }
// elseif ($x === 3) {
//     echo 3;    
// }
// elseif ($x === 4) {
//     echo 4;    
// }

// another way

switch (x()) {
    case 1:
        echo 1;
        break;
        
    case 2:
        echo 2;
        break;
        
    case 3:
        echo 3;
        break;
        
    default:
        echo 4;
        // break;
        
}
