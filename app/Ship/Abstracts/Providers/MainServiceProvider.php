<?php

namespace App\Ship\Abstracts\Providers;

use App\Ship\Loaders\AliasesLoaderTrait;
use App\Ship\Loaders\ProvidersLoaderTrait;
use Illuminate\Support\ServiceProvider as LaravelAppServiceProvider;

abstract class MainServiceProvider extends LaravelAppServiceProvider
{
    use ProvidersLoaderTrait;
    use AliasesLoaderTrait;

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadServiceProviders();
        $this->loadAliases();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
