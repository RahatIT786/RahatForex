<?php


use App\Livewire\User\Home;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\HistoricalData;

// start the admin component route
use App\Http\Controllers\AuthController;


use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\ForexRequest;





// start the user route

Route::get('/', Home::class)->name('layouts.app');
Route::get('/historical', HistoricalData::class)->name('historical');

Route::post('/quote/mail',[UserController::class,'submitForm'] )->name('quote.mail');


Route::get('/optimize' ,[UserController::class,'clearCache']);
Route::get('/migrate' ,[UserController::class,'migrate']);

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

// start the  Admin route
Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
    Route::get('/admins/forex-request', ForexRequest::class)->name('admins.forex-request');
});

