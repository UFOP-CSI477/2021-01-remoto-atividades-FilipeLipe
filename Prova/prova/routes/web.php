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
use App\Http\Controllers\PessoaCon  troller;
use App\Http\Controllers\VacinaController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\RegistroController;


Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::resource('/pessoas', PessoaController::class);
Route::resource('/vacinas', VacinaController::class);
Route::resource('/unidades', UnidadeController::class);
Route::resource('/registros', RegistroController::class);

/*
Route::get('/relatorios/pessoas', function () {
    return view('relatorios.pessoas');
});


Route::get('/relatorios/vacinas', function () {
    return view('relatorios.vacinas');
});


Route::get('/relatorios/unidades', function () {
    return view('relatorios.unidades');
});


Route::get('/relatorios/registros', function () {
    return view('relatorios.registros');
});





Route::get('/cadastros/pessoas', function () {
    return view('cadastros.pessoas');
});

Route::get('/cadastros/vacinas', function () {
    return view('cadastros.vacinas');
});

Route::get('/cadastros/unicades', function () {
    return view('cadastros.unidades');
});

Route::get('/cadastros/registros', function () {
    return view('cadastros.registros');
});





Route::get('/login', function () {
    return view('login');
});

Route::get('/cadastro', function () {
    return view('cadastro');
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
});*/