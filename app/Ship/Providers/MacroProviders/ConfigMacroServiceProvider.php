<?php

namespace App\Ship\Providers\MacroProviders;

use App\Ship\Abstracts\Providers\MainServiceProvider as AbstractMainServiceProvider;
use App\Ship\Macros\Config\UnsetKey;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;

final class ConfigMacroServiceProvider extends AbstractMainServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        Collection::make($this->macros())
            ->reject(static fn ($class, $macro) => Config::hasMacro($macro))
            ->each(static fn ($class, $macro) => Config::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            'unset' => UnsetKey::class,
        ];
    }
}
