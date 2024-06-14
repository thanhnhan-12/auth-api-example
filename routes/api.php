<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Register
Route::post('/register', [ApiController::class, 'register']);
// Login
Route::post('/login', [ApiController::class, 'login']);

Route::group(["middleware" => ['auth:sanctum']], function () {
    // Profile
    Route::get('/profile', [ApiController::class, 'profile']);
    // Logout
    Route::get('/logout', [ApiController::class, 'logout']);
});
