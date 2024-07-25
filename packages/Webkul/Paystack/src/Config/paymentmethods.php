<?php

return [
    'Paystack'  => [
        'code'        => 'Paystack',
        'title'       => 'Paystack',
        'info'       => 'Paystack',
        'description' => 'Paystack',
        'class'       => 'Webkul\Paystack\payment\Paystack',
        'active'      => true,
        'sort'        => 1,
        'sandbox' => true,
        'public_key' => env('PAYSTACK_PUBLIC_KEY'),
        'secret_key' => env('PAYSTACK_SECRET_KEY'),
        'image' => 'hhhh'
    ],
];
