<?php

namespace App\Interfaces;

use App\Models\PaymentType;

interface IPaymentStrategy
{
    public function pay();
}