<?php

namespace App;

use App\Interfaces\IPaymentStrategy;

class Context
{
	private $payment;

	public function __construct(IPaymentStrategy $payment)
    {

	}
}