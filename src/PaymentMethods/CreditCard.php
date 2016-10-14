<?php

namespace App\PaymentMethods;

use App\Interfaces\ICard;
use App\Interfaces\IPaymentMethod;

class CreditCard implements IPaymentMethod, ICard
{
    public function getFlag()
    {
    }

    public function getPaymentType()
    {
    }

    public function getPaymentCondition()
    {
    }

    public function getPaymentMethod()
    {
    }
}