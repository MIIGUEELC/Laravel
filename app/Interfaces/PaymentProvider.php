<?php

namespace App\Interfaces;

interface PaymentProvider
{
    public function processPayment(float $amount);
}
