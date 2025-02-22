<?php

// user component
use App\Livewire\User\Home;
use App\Livewire\User\SellForex;
use App\Livewire\User\ReloadCard;
use App\Livewire\User\StudyAboard;
use App\Livewire\User\SendMoney;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\HistoricalData;

// start the admin component route
use App\Http\Controllers\AuthController;


use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\ForexRequest;
use App\Livewire\Admin\SellRequest;






// start the user route

Route::get('/', Home::class)->name('layouts.app');

Route::get('/historical', HistoricalData::class)->name('historical');
Route::get('sell-forex',SellForex::class)->name('sell-forex');
Route::get('reload-card',ReloadCard::class)->name('reload-card');
Route::get('study-aboard',StudyAboard::class)->name('study-aboard');
Route::get('send-money',SendMoney::class)->name('send-money');

Route::post('/quote/mail',[UserController::class,'submitForm'] )->name('quote.mail');


Route::get('/optimize' ,[UserController::class,'clearCache']);
Route::get('/migrate' ,[UserController::class,'migrate']);

Route::get('/login',[AuthController::class,'adminLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');



// start the  Admin route
Route::middleware(['auth:admins'])->group(function () {
    Route::get('/admins', Dashboard::class)->name('admin.dashboard');
    Route::get('/admins/forex-request', ForexRequest::class)->name('admins.forex-request');
    Route::get('/admins/sell-requets',SellRequest::class)->name('admins.sell-request');
    Route::post('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');
});

Route::get('/run-seeder', function() {
    \Artisan::call('db:seed', ['--force' => true]);
    return "Seeder executed successfully!";
});



