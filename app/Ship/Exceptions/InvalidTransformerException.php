<?php

namespace App\Ship\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception;
use App\Ship\Abstracts\Transformers\Transformer;
use Symfony\Component\HttpFoundation\Response;

class InvalidTransformerException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = 'Transformers must extended the ' . Transformer::class . ' class.';
}
