<?php

namespace App\Ship\Providers\MacroProviders;

use App\Ship\Abstracts\Providers\MainServiceProvider as AbstractMainServiceProvider;
use App\Ship\Macros\Response\Accepted;
use App\Ship\Macros\Response\Created;
use App\Ship\Macros\Response\CreateFrom;
use App\Ship\Macros\Response\GetRequestedIncludes;
use App\Ship\Macros\Response\GetTransformer;
use App\Ship\Macros\Response\NoContent;
use App\Ship\Macros\Response\Ok;
use App\Ship\Services\Response;
use Illuminate\Support\Collection;

final class ResponseMacroServiceProvider extends AbstractMainServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        Collection::make($this->macros())
            ->reject(static fn ($class, $macro) => Response::hasMacro($macro))
            ->each(static fn ($class, $macro) => Response::macro($macro, app($class)()));
    }

    private function macros(): array
    {
        return [
            'ok' => Ok::class,
            'created' => Created::class,
            'noContent' => NoContent::class,
            'accepted' => Accepted::class,
            'createFrom' => CreateFrom::class,
            'getTransformer' => GetTransformer::class,
            'getRequestedIncludes' => GetRequestedIncludes::class,
        ];
    }
}
