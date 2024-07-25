<?php

return [
    [
        'key'    => 'sales.payment_methods.Paystack',
        'name'   => 'Paystack',
        'sort'   => 1,
        "info" => 'paystack',
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'admin::app.admin.system.title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'admin::app.admin.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'active',
                'title'         => 'admin::app.admin.system.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'icon',
                'title'         => 'Icon',
                'type'          => 'file',
                'validation'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            
        ]
    ]
];
