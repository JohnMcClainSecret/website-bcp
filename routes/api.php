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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('submitContact',[ApiController::class,'submit']);
Route::get('getanoffer',[ApiController::class,'getanoffer']);
Route::get('terms',[ApiController::class,'terms']);
Route::post('sendOffer',[ApiController::class,'sendOffer']);
