<?php

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

use App\Models\Pessoa;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function(){
    return 'Olá Mundo!!';
});

Route::get('/pessoas', function(){
    return Pessoa::all();
});