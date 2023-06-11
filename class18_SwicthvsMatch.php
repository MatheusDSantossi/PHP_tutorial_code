<?php

// switch makes ==
// and match makes ===

$paymentStatus = '1';

switch ($paymentStatus) {
    case 1:
        echo 'Paid';
        break;

    case 2:
    case 3:
        echo 'Payment Declined';
        break;

    case 0:
        echo 'Pending Paymeny';
        break;

    default:
        echo 'Unkown payment status';

}

echo '<br/>';

// match($paymentStatus) {
//     1 => print 'Paid',
//     2 => 'Payjment Declined',
//     0 => 'Pending Payment',
// };

// $paymentStatusDisplay = match($paymentStatus) {
//     1 => print 'Paid',
//     2 => print 'Payjment Declined',
//     0 => print 'Pending Payment',
// };

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Paid',
    2,3 => 'Payjment Declined', // 2 and 3 return Payment Decliened
    0 => 'Pending Payment',
    default => 'Unkown Payment Status'
};

echo $paymentStatusDisplay;
