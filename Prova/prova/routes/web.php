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
    return view('index');
});




Route::get('/tabelapessoas', function () {
    return view('tabelaPessoas');
});


Route::get('/tabelavacinas', function () {
    return view('tabelaVacinas');
});


Route::get('/tabelaunidades', function () {
    return view('tabelaUnidades');
});


Route::get('/tabelaregistros', function () {
    return view('tabelaRegistros');
});





Route::get('/cadastropessoas', function () {
    return view('cadastroPessoas');
});

Route::get('/cadastrovacinas', function () {
    return view('cadastroVacinas');
});

Route::get('/cadastrounicades', function () {
    return view('cadastroUnidades');
});

Route::get('/cadastroregistros', function () {
    return view('cadastroRegistros');
});





Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});




Route::get('/', function () {
    return view('index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/pessoas/todos', function(){

    $pessoas = Pessoa::all();

    return view('index', [ 'dados' => $pessoas]); 
 
});

Route::get('/pessoas/{id}',function($id){

    $pessoa = Pessoa::findOrFail($id);

    if($pessoa == null){
        return 'ID Invalido';
    }

    return view('index', ['dados' => $pessoa]);
});