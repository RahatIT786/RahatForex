<?php


use App\Livewire\User\Home;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\HistoricalData;

// start the admin component route

use App\livewire\Admin\Dashboard;
use App\livewire\Admin\ForexRequest;





// start the user route

Route::get('/', Home::class)->name('layouts.app');
Route::get('/historical', HistoricalData::class)->name('historical');

Route::post('/quote/mail',[UserController::class,'submitForm'] )->name('quote.mail');


Route::get('/optimize' ,[UserController::class,'clearCache']);
Route::get('/migrate' ,[UserController::class,'migrate']);



// start the  Admin route
Route::get('/admins',Dashboard::class)->name('admins');
Route::get('/admins/forex-request',ForexRequest::class)->name('admins.forex-request');


