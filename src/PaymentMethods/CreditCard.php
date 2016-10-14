<?php

namespace App\PaymentMethods;

use App\Interfaces\IPaymentStrategy;
use App\Models\Card;

class CreditCard implements IPaymentStrategy
{
    private $card;

    public function setCard(Card $card)
    {
        //..
    }

    public function pay()
    {
        //..
    }
}