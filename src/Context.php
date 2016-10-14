<?php

namespace App;

use App\Interfaces\IPaymentStrategy;

class Context
{
	private $payment;

	public function __construct(IPaymentStrategy $payment)
    {
        $this->payment = $payment;
	}

	public function executeAction1()
    {

    }

    public function executeAction2()
    {

    }
}