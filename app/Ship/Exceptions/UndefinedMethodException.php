<?php

namespace App\Ship\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class UndefinedMethodException extends Exception
{
    protected $code = Response::HTTP_FORBIDDEN;
    protected $message = 'Undefined HTTP Verb!';
}
