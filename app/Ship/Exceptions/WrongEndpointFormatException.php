<?php

namespace App\Ship\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class WrongEndpointFormatException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = 'tests ($this->endpoint) property must be formatted as "verb@url".';
}
