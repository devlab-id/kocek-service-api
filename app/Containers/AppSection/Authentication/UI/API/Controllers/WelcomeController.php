<?php

namespace App\Containers\AppSection\Authentication\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class WelcomeController extends ApiController
{
    public function unversioned(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Welcome to Kocek (API V1)',
            'data' => null,
        ]);
    }

    public function versioned(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Welcome to Kocek (API V1)',
            'data' => null,
        ]);
    }
}
