<?php

namespace Webkul\Paystack\payment;

use Webkul\Payment\Payment\Payment;
use Illuminate\Support\Facades\Storage;

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

   


    /**
     * Returns payment method image
     *
     * @return array
     */
    public function getImage()
    {
        $url = $this->getConfigData('image');

        return $url ? Storage::url($url) : bagisto_asset('images/paypal.png', 'shop');
    }
}
