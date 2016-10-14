<?php

namespace App\PaymentMethods;

use App\Interfaces\ICard;
use App\Interfaces\IPaymentMethod;

class CreditCard implements IPaymentMethod
{
    private $card;

    public function setCard(Card $card){
        //..
    }
    public function pay(){
        //..
    }
}