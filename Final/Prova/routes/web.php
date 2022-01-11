<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemaController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\UserController;

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
    return view('principal');
})->name('principal');


Route::resource('/tema', TemaController::class);
Route::resource('/voto', VotoController::class);
Route::resource('/user', UserController::class);
