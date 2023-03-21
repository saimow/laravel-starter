<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController\Index::class, 'index'])->name('home');

Route::get('/register', [Auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [Auth\RegisterController::class, 'store'])->name('register');

Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Auth\LoginController::class, 'store'])->name('login');

Route::post('/logout', [Auth\LogoutController::class, 'store'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'admin',
    ], function(){
    
        Route::get('/', [DashboardController\Index::class, 'index'])->name('dashboard');
    
    });
});
