<?php

namespace App\Ship\Macros\Response;

use App\Ship\Abstracts\Transformers\Transformer;
use App\Ship\Services\Response;
use Illuminate\Http\JsonResponse;

class Ok
{
    public function __invoke(): callable
    {
        return
            /**
             * Returns a 200 OK response.
             */
            function (): JsonResponse {
                /** @var Response $this */
                if (is_null($this->getTransformer())) {
                    $this->transformWith(Transformer::empty());
                }

                return $this->respond(200);
            };
    }
}
