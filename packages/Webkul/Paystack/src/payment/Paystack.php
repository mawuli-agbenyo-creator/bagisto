<?php

namespace Webkul\Paystack\payment;

use Illuminate\Support\Facades\Log;
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
     * Get payment method code.
     *
     * @return string
     */
    public function getCode()
    {
        if (empty($this->code)) {
            // throw exception
        }

        return $this->code;
    }


   

     /**
     * Retrieve information from payment configuration.
     *
     * @param  string  $field
     * @return mixed
     */
    public function getConfigDataPaystack($field)
    {
        return core()->getConfigData('sales.payment_methods.'.$this->getCode().'.'.$field);
    }



    /**
     * Returns payment method image
     *
     * @return array
     */
    public function getImageData()
    {
        $url = $this->getConfigDataPaystack('image');
        Log::alert($url);
        return $url ? Storage::url($url) : bagisto_asset('images/paystack.png', 'shop');
    }
}
