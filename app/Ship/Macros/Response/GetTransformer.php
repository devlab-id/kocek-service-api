<?php

namespace App\Ship\Macros\Response;

use App\Ship\Services\Response;
use League\Fractal\TransformerAbstract;

class GetTransformer
{
    public function __invoke(): callable
    {
        return function (): string|callable|TransformerAbstract|null {
            /* @var Response $this */
            // The warning is false positive. We will be in the context of Fractal class when this is called.
            return $this->transformer;
        };
    }
}
