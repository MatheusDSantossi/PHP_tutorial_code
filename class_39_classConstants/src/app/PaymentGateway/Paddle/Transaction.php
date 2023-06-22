<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction{
    
    private string $status;

    public function __construct(){

        // $this->setStatus('pending');
        // $this->setStatus(self::STATUS_PENDING);
        $this->setStatus(Status::PENDING);

        // var_dump(Transaction::STATUS_PAID);
        // var_dump(self::STATUS_PAID);

    }

    public function setStatus(string $status): self {

        if(!isset(Status::ALL_STATUSES[$status]))
            throw new \InvalidArgumentException('Invalid status');
        $this -> status = $status;

        return $this;

    }
}
