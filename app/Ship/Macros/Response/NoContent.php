<?php

namespace App\Ship\Macros\Response;

use App\Ship\Abstracts\Transformers\Transformer;
use App\Ship\Services\Response;
use Illuminate\Http\JsonResponse;

class NoContent
{
    public function __invoke(): callable
    {
        return
            /**
             * Returns a 204 No Content response.
             */
            function (): JsonResponse {
                /* @var Response $this */
                $this->transformWith(Transformer::empty());

                return $this->respond(204);
            };
    }
}
