<?php

namespace App\PaymentMethods;

use App\Interfaces\IBillet;
use App\Interfaces\IPaymentMethod;

class Billet implements IPaymentMethod, IBillet
{
    public function getBank()
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