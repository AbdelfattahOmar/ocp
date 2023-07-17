<?php

namespace App\PaymentFinal;

class PaymentServiceFinal
{

    public function pay(PaymentInterface $paymentMethod){
     return $paymentMethod->makePayment();
    }
}

