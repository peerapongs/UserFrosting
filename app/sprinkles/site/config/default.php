<?php

    /**
     * Sample site configuration file for UserFrosting.  You should definitely set these values!
     *
     */
    return [
        'address_book' => [
            'admin' => [
                'name'  => 'Squawkbot'
            ]
        ],    
        'debug' => [
            'auth' => false
        ],
        'site' => [
            'title'     =>      'Owl Fancy',
            'author'    =>      'David Attenborough',
            'debug' => [
                'ajax' => true
            ],
            'locales' => 'en_US',
            // URLs
            'uri' => [
                'author' => 'https://attenboroughsreef.com'
            ]
        ],   
        'timezone' => 'Europe/London'
    ];
    