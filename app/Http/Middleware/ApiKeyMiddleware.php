<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Pengguna; // Import the Pengguna model

class ApiKeyMiddleware
{
    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY'); // Retrieve from the header
    
        // Check if the API key exists in the 'Pengguna' table's 'api_key' column
        if (!Pengguna::where('api_key', $apiKey)->exists()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        return $next($request);
    }
}

