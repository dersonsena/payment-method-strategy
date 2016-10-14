<?php

namespace App\Interfaces;

interface IPaymentMethod
{
    public function getPaymentType();
    public function getPaymentCondition();
    public function getPaymentMethod();
}