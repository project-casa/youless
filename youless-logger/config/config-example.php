<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Devices
    |--------------------------------------------------------------------------
    |
    | It's possible to use different settings with each device. Simply add a
    | key (which is used as name) and array with device specific settings
    | to the below 'devices' array.
    |
    | - ip (string)
    |   IP address
    |
    | - password (string)
    |   The password needed to access the device's API. Omit or leave empty
    |   when no password is required.
    |
    | - services (array<string,bool>)
    |   Indicate which data services of the device should be updated. Valid
    |   keys are 'power', 'gas' and 's0'. Values should be booleans where
    |   'true' means enabled and 'false' disabled.
    |
    | - classic_api
    |   Override classic API settings for this device only. See config section
    |   below for more details.
    |
    | - classic_api.port (int)
    |   Port to access the classic API similar to that of the YouLess device.
    */
    'devices' => [
        'default' => [
            'ip' => '*.*.*.*',
            'password' => 'secret',
            'services' => [
                'power' => true,
                'gas' => true,
                's0' => false,
            ],

            'classic_api' => [
                'port' => 80,
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    |
    | Here you can give each category (which is a device and data service
    | combination) a unique alias.
    */
    'categories' => [
        'power' => 'default.power',
        'gas' => 'default.gas',
        'pv' => 'default.s0',
    ],

    /*
    |--------------------------------------------------------------------------
    | Classic API
    |--------------------------------------------------------------------------
    |
    | By default the classic API settings are applied to each device. It is
    | possible to override any of these settings per device.
    |
    | - enabled (bool)
    |   Indicates if the classic API should be enabled or not.
    |
    | - password (string)
    |   Password needed to access the classic API.
    |
    | - whitelist (string[])
    |   An array with whitelisted IP address. Access to other IP addresses are
    |   denied. The whitelist is ignored when empty.
    */
    'classic_api' => [
        'enabled' => false,
        'password' => 'secret',
        'whitelist' => [],
    ],
];
