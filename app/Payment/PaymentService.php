<?php

namespace App\Payment;

class PaymentService
{

    public function pay($paymentMethod){
        if($paymentMethod == 'stripe'){
          return 'Payment done with Stripe';
        } elseif($paymentMethod == 'paypal') {
                  return 'Payment done with Paypal';
        }
    }
}

