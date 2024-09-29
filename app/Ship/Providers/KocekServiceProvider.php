<?php

namespace App\Ship\Providers;

use App\Ship\Abstracts\Providers\MainServiceProvider as AbstractMainServiceProvider;
use App\Ship\Foundation\Kocek;
use App\Ship\Loaders\AutoLoaderTrait;
use App\Ship\Providers\MacroProviders\CollectionMacroServiceProvider;
use App\Ship\Providers\MacroProviders\ConfigMacroServiceProvider;
use App\Ship\Providers\MacroProviders\ResponseMacroServiceProvider;
use App\Ship\Traits\ValidationTrait;
use Illuminate\Support\Facades\Schema;

class KocekServiceProvider extends AbstractMainServiceProvider
{
    use AutoLoaderTrait;
    use ValidationTrait;

    public array $serviceProviders = [
        CollectionMacroServiceProvider::class,
        ConfigMacroServiceProvider::class,
        ResponseMacroServiceProvider::class,
    ];

    public function register(): void
    {
        // NOTE: function order of this calls bellow are important. Do not change it.

        $this->app->bind('Kocek', Kocek::class);
        // Register Core Facade Classes, should not be registered in the $aliases property, since they are used
        // by the auto-loading scripts, before the $aliases property is executed.
        $this->app->alias(Kocek::class, 'Kocek');

        // parent::register() should be called AFTER we bind 'Kocek'
        parent::register();

        $this->runLoaderRegister();
    }

    public function boot(): void
    {
        parent::boot();

        // Autoload most of the Containers and Ship Components
        $this->runLoadersBoot();

        // Solves the "specified key was too long" error, introduced in L5.4
        Schema::defaultStringLength(191);

        // Registering custom validation rules
        $this->extendValidationRules();
    }
}
