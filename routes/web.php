<?php


use App\Livewire\User\Home;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\user\HistoricalData;


Route::get('/', Home::class)->name('layouts.app');
Route::get('historical',HistoricalData::class)->name('historical');

Route::post('/quote/mail',[UserController::class,'submitForm'] )->name('quote.mail');


Route::get('/optimize' ,[UserController::class,'clearCache']);
Route::get('/migrate' ,[UserController::class,'migrate']);
