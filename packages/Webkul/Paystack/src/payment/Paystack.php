<?php

namespace Webkul\Paystack\Payment;

use Webkul\Payment\Payment\Payment;

class Paystack extends Payment
{
    /**
    * Payment method code
    *
    * @var string
    */
    protected $code  = 'Paystack';

    /**
    * Get redirect url.
    *
    * @var string
    */
    public function getRedirectUrl()
    {
        // Implementation code goes here
    }
}
