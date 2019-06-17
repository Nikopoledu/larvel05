<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'ettuser' => [
            'driver' => 'session',
            'provider' => 'ettusers',
        ],

        'entity' => [
            'driver' => 'session',
            'provider' => 'entities',
        ],

        'company' => [
            'driver' => 'session',
            'provider' => 'companies',
        ],

        'tech' => [
            'driver' => 'session',
            'provider' => 'teches',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'ettusers' => [
            'driver' => 'eloquent',
            'model' => App\Ettuser::class,
        ],

        'entities' => [
            'driver' => 'eloquent',
            'model' => App\Entity::class,
        ],

        'companies' => [
            'driver' => 'eloquent',
            'model' => App\Company::class,
        ],

        'teches' => [
            'driver' => 'eloquent',
            'model' => App\Tech::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'ettusers' => [
            'provider' => 'ettusers',
            'table' => 'ettuser_password_resets',
            'expire' => 60,
        ],

        'entities' => [
            'provider' => 'entities',
            'table' => 'entity_password_resets',
            'expire' => 60,
        ],

        'companies' => [
            'provider' => 'companies',
            'table' => 'company_password_resets',
            'expire' => 60,
        ],

        'teches' => [
            'provider' => 'teches',
            'table' => 'tech_password_resets',
            'expire' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'admin_password_resets',
            'expire' => 60,
        ],

        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];