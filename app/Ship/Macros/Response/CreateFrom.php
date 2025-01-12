<?php

namespace App\Ship\Macros\Response;

use App\Ship\Services\Response;
use League\Fractal\Serializer\SerializerAbstract;
use League\Fractal\TransformerAbstract;

class CreateFrom
{
    public function __invoke(): callable
    {
        return
            /**
             * Create a new Response instance.
             */
            function (mixed $data = null, callable|TransformerAbstract|null $transformer = null, SerializerAbstract|null $serializer = null): Response {
                return Response::create($data, $transformer, $serializer);
            };
    }
}
