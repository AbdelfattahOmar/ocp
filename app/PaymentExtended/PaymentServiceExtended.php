<?php 

NameSpace App\PaymentExtended;

class PaymentServiceExtended
{

    public function pay($paymentMethod){
     return $paymentMethod->makePayment();
    }
}

