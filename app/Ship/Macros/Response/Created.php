<?php

namespace App\Ship\Macros\Response;

use App\Ship\Abstracts\Transformers\Transformer;
use App\Ship\Services\Response;
use Illuminate\Http\JsonResponse;

class Created
{
    public function __invoke(): callable
    {
        return
            /**
             * Returns a 201 Created response.
             */
            function (): JsonResponse {
                /** @var Response $this */
                if (is_null($this->getTransformer())) {
                    $this->transformWith(Transformer::empty());
                }

                return $this->respond(201);
            };
    }
}
