<?php

namespace App\Ship\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class CoreInternalErrorException extends Exception
{
    protected $code = Response::HTTP_INTERNAL_SERVER_ERROR;
    protected $message = 'Something went wrong!';
}
