<?php

namespace App\PaymentMethods;

use App\Interfaces\ICard;
use App\Interfaces\IPaymentMethod;

class DebitCard implements IPaymentMethod, ICard
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