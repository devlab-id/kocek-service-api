<?php

namespace App\Ship\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class MissingJSONHeaderException extends Exception
{
    protected $code = Response::HTTP_BAD_REQUEST;
    protected $message = 'Your request must contain [Accept = application/json] header.';
}
