<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiLoginController;
use App\Http\Controllers\Api\ApiRegisterController;
use App\Http\Controllers\ProgramController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [ApiLoginController::class, 'Login']);
Route::post('/register', [ApiRegisterController::class, 'create']);

// Display all programs
Route::get('/programs', [ProgramController::class, 'apiIndex']);

// Display a specific program
Route::get('/programs/{id}', [ProgramController::class, 'apiShow']);

// Add a new program
Route::post('/programs', [ProgramController::class, 'apiStore']);

// Update a program
Route::put('/programs/{id}', [ProgramController::class, 'apiUpdate']);

// Delete a program
Route::delete('/programs/{id}', [ProgramController::class, 'apiDestroy']);
