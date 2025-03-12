<?php

namespace App\Services;

use App\Interfaces\PaymentProvider;
use Illuminate\Support\Facades\Log;

class PaypalPaymentProvider implements PaymentProvider
{
    public function processPayment(float $amount)
    {
        Log::info("Transaccion de " . $amount . " pagada correctamente");
    }
}
