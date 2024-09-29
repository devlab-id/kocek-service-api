<?php

namespace App\Ship\Parents\Providers;

use App\Ship\Abstracts\Providers\AuthServiceProvider as AbstractAuthServiceProvider;

/**
 * Class ShipAuthServiceProvider.
 * A.K.A. App\Providers\AuthServiceProvider.php.
 */
abstract class AuthServiceProvider extends AbstractAuthServiceProvider
{
    /**
     * The policy mappings for the application.
     */
    protected $policies = [];
}
