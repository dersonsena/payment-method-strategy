<?php

use App\Context;
use App\Models\Card;
use App\Models\CardFlag;
use App\PaymentMethods\CreditCard;

require_once __DIR__ . '/../vendor/autoload.php';

$cardModel = new Card;
$cardModel->setNumber(123456789)
    ->setValidDate('05/2020')
    ->setSecurityCode(468)
    ->setFlag(new CardFlag(CardFlag::VISA));

$creditCard = new CreditCard;
$creditCard->setCard($cardModel);

$context = new Context($creditCard);