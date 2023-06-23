<?php

namespace App\Enums;

class Status {
    // private const STATUS_PAID = 'paid';
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';

    // private string $status = 'pending';

    //this is a lookup table
    public const ALL_STATUSES = [
        self::PAID => 'Paid',
        self::PENDING=> 'Pending',
        self::DECLINED => 'Declined',
    ];
}
