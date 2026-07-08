<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => 'Welcome to my backend',
        'data' => [
            'name' => 'Kenchi Hilario',
            'framework' => 'Laravel',
            'version' => app()->version(),
            'php' => PHP_VERSION,
            'host' => $request->getHttpHost(),
            'url' => $request->getSchemeAndHttpHost(),
            'timestamp' => now()->toDateTimeString(),
        ]
    ]);
});
