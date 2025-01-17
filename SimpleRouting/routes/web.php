<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Define the root route
Route::get('/', function () {
    return 'Hello This is the Root of this app';
});

// First route: Return a simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Second route: Call the GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'index']);