<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ContactController::class,'welcome'] );
Route::get('error',[ContactController::class,'errorpage'] );
Route::post('submitContact',[ContactController::class,'submit']);
Route::get('getanoffer',[OfferController::class,'getanoffer']);
Route::get('terms',[OfferController::class,'terms']);
Route::post('sendOffer',[OfferController::class,'sendOffer']);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('index',[UserController::class,'index'])->name('home');
    Route::get('home',[UserController::class,'index']);
    // Route::get('loginSubmit',[LoginController::class,'loginSubmit']);
});
