<?php

namespace App\PaymentFinal;

class StripeFinal implements PaymentInterface
{
    public function makePayment(){
       return 'payment done with Stripe';
    }
}


