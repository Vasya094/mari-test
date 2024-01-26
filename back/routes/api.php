<?php

use App\Http\Controllers\FeedBackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('feedbacks')->name('feedbacks.')->group(function () {
    Route::get('', [FeedBackController::class, 'index'])->name('index');
    Route::post('', [FeedBackController::class, 'store'])->name('store');
    Route::get('{id}', [FeedBackController::class, 'show'])->name('show');
});