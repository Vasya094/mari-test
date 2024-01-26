<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class FallbackController
{
    public function index(): JsonResponse
    {
        return response()->json([
            'name' => 'Test Marina Api v1',
            'health' => 'ok',
        ]);
    }
}