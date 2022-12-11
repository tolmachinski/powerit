<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

// Route::resource('main', MainController::class)->middleware('auth');
Route::resource('country', CountryController::class)->middleware('auth');
Route::resource('region', RegionController::class)->middleware('auth');
Route::resource('location', LocationController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');


