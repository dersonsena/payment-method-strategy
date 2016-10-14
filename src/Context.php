<?php

namespace App;

class Context
{
	private $payment;

	public function __construct(IPaymentStrategy $payment){

	}
}