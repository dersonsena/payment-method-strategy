<?php

namespace App\Interfaces;

use App\Models\PaymentType;

interface IPaymentMethod
{
    public function getPaymentType(): PaymentType;
    public function getPaymentCondition(): PaymentCondition;
    public function getPaymentMethod(): PaymentMethod;
}