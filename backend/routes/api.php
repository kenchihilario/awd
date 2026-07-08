<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Welcome to my backend',
        'data' => [
            'name' => 'Kenchi hilario',
            'framework' => 'Laravel',
            'version' => app()->version(),
            'php' => PHP_VERSION,
            'timestamp' => now()->toDateTimeString(),
        ]
    ]);
});
