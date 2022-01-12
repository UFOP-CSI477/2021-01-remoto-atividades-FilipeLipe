<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use App\Models\User;
use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voto = Voto::orderBy('tema_id') -> get();
        $tema = Tema::orderBy('id') -> get();
        if( Auth::user()->type == 1){
            return view('docente.listarVoto', ['voto' => $voto], ['tema' => $tema]);
        }elseif(Auth::user()->type == 2){
            return view('adm.listarVoto', ['voto' => $voto], ['tema' => $tema]);
        }else{
            session()->flash('mensagem','Tipo do usuário não correspondente!');
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        if( Auth::user()->type == 1){
            $tema = Tema::orderBy('id') -> get();
            return view('docente.lancarVoto', ['tema' => $tema]);
        }else{
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if( Auth::user()->type == 1){
            $voto = new Voto;
            $voto->users_id = 1;
            $voto->temas_id = $request->selectTema;
            $voto->opcao = $request->selectOpcao;
            $voto->data = date("d-m-Y H:i:s");
            $voto->save();
            session()->flash('mensagem','Voto Registrado!');
            
            $users = User::orderBy('name') -> get();
            $voto = Voto::orderBy('tema_id') -> get();
            return view('docente.listarVoto', ['voto' => $voto], ['users' => $users]);
        }else{
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function show(Voto $voto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function edit(Voto $voto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voto $voto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voto  $voto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voto $voto)
    {
        //
    }
}
