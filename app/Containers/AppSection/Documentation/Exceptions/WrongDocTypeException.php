<?php

namespace App\Containers\AppSection\Documentation\Exceptions;

use App\Ship\Abstracts\Exceptions\Exception as AbstractException;
use Symfony\Component\HttpFoundation\Response;

class WrongDocTypeException extends AbstractException
{
    protected $code = Response::HTTP_MISDIRECTED_REQUEST;
    protected $message = 'Unsupported Documentation Type.';
}
