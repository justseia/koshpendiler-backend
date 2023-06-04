<?php

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

Route::post('/login', \App\Http\Controllers\API\Auth\LoginController::class);
Route::post('/register', \App\Http\Controllers\API\Auth\RegisterController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/me', \App\Http\Controllers\API\Auth\MeController::class);
    Route::post('/me/edit', \App\Http\Controllers\API\Auth\UpdateController::class);
    Route::post('/logout', \App\Http\Controllers\API\Auth\LogoutController::class);

    Route::post('/coupon', \App\Http\Controllers\API\Coupon\StoreController::class);
    Route::post('/card/save', \App\Http\Controllers\API\Card\StoreController::class);

    Route::get('/places', \App\Http\Controllers\API\Place\IndexController::class);
    Route::get('/places/{place}', \App\Http\Controllers\API\Place\ShowController::class);
    Route::post('/places/{place}/order', \App\Http\Controllers\API\Place\OrderController::class);

    Route::get('/animals', \App\Http\Controllers\API\Animal\IndexController::class);
    Route::get('/animals/{animal}', \App\Http\Controllers\API\Animal\ShowController::class);

    Route::post('/profile/update', \App\Http\Controllers\API\Profile\ProfileUpdateController::class);
    Route::get('/faq', \App\Http\Controllers\API\Profile\FAQController::class);
    Route::get('/terms-conditions', \App\Http\Controllers\API\Profile\TermsConditionsController::class);
    Route::get('/privacy-policy', \App\Http\Controllers\API\Profile\PrivatePolicyController::class);
    Route::get('/app-info', \App\Http\Controllers\API\Profile\AppInfoController::class);
});
