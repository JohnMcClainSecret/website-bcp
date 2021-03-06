<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PanelController;
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
Route::post('newsletter', [ContactController::class,'newsletter']);
Route::get('loi',function(){
    return view('panel.loi');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('index',[UserController::class,'index']);
    Route::get('home',[UserController::class,'index'])->name('home');
    Route::get('loisection',[PanelController::class,'view']);
    Route::get('downloadLOI',[PanelController::class,'downloadLOI']);
    Route::post('submitLOI',[PanelController::class,'submitLOI']);
    Route::post('uploadSignature',[PanelController::class, 'uploadSignature']);
    Route::post('signatureDrawn',[PanelController::class, 'signatureDrawn']);
    Route::post('previewLOI',[PanelController::class,'previewLOI']);
    Route::get('downloadTNL',[PanelController::class,'downloadTNL']);
    Route::post('submitTNL',[PanelController::class,'submitTNL']);
    Route::post('uploadSignatureTNL',[PanelController::class, 'uploadSignatureTNL']);
    Route::post('signatureDrawnTNL',[PanelController::class, 'signatureDrawnTNL']);
    Route::get('previewTNL',[PanelController::class,'previewTNL']);
    Route::get('downloadContract',[PanelController::class,'downloadContract']);
    Route::post('submitContract',[PanelController::class,'submitContract']);
    Route::post('uploadSignatureContract',[PanelController::class, 'uploadSignatureContract']);
    Route::post('signatureDrawnContract',[PanelController::class, 'signatureDrawnContract']);
    Route::get('previewContract',[PanelController::class,'previewContract']);
    Route::post('uploadDocuments',[PanelController::class,'uploadDocuments']);
});
