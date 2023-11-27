<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nesting/{i}', \App\Http\Controllers\Api\Nesting\NestingController::class)
    ->where('id', '[0-9]+');

Route::get('/fibonacci/{index}', \App\Http\Controllers\Api\Fibonacci\FibonacciController::class)
    ->where('index', '[0-9]+');

Route::get('/apples/{pattern}/{index}', \App\Http\Controllers\Api\Apples\ApplesController::class)
    ->where(['pattern' => '[ryg]+', 'index' => '[0-9]+']);


Route::get('/authenticate/{login}/{password}', \App\Http\Controllers\Api\Auth\AuthenticateController::class)
    ->middleware(\App\Http\Middleware\EnsureTokenIsValid::class);
