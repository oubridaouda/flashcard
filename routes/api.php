<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardController;

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

// Assurez-vous d'avoir un contrôleur pour gérer ces actions
Route::post('/login', [AuthController::class, 'login']);
// Route d'inscription
Route::post('/register', [AuthController::class, 'register']);


// Group all routes that require auth middleware
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);
    // Route pour créer un jeton
    Route::post('/token/create', [AuthController::class, 'createToken']);
    //Verify token
    Route::post('/verify-token', [AuthController::class, 'verifyToken']);

    // Route pour créer une flashcard
    Route::post('/flashcards', [FlashcardController::class, 'store']);
    Route::put('/flashcards/{id}', [FlashcardController::class, 'update']);
    Route::delete('/flashcards/{id}', [FlashcardController::class, 'destroy']);
});
