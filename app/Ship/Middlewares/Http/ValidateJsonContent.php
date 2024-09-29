<?php

namespace App\Ship\Middlewares\Http;

use App\Ship\Abstracts\Middlewares\Middleware;
use App\Ship\Exceptions\MissingJSONHeaderException;
use Illuminate\Http\Request;

class ValidateJsonContent extends Middleware
{
    /**
     * @throws MissingJSONHeaderException
     */
    public function handle(Request $request, \Closure $next)
    {
        if (!$request->expectsJson() && config('kocek.requests.force-accept-header')) {
            throw new MissingJSONHeaderException();
        }

        return $next($request);
    }
}
