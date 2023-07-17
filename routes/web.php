<?php

use App\Payment\PaymentService;
use App\PaymentExtended\PaymentServiceExtended;
use App\PaymentExtended\Stripe;
use App\PaymentFinal\PaymentServiceFinal;
use App\PaymentFinal\StripeFinal;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return (new PaymentService)->pay('paypal');
});



// Route::get('/', function () {
//     return (new PaymentServiceExtended)->pay(new Stripe);
// });


// Route::get('/', function () {
//     return (new PaymentServiceFinal)->pay(new StripeFinal);
// });
