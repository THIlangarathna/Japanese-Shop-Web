<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GojukaiController;
use App\Http\Controllers\GohonzonController;
use App\Http\Controllers\TozanController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('Gojukai', GojukaiController::class);

Route::resource('Gohonzon', GohonzonController::class);

Route::resource('Tozan', TozanController::class);

Route::get('Excel/Gojukai', [GojukaiController::class, 'export']);

Route::get('Excel/Gohonzon', [GohonzonController::class, 'export']);

Route::get('Excel/Tozan', [TozanController::class, 'export']);