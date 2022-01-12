<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::user()->type == 1){
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }else{
            $tema = Tema::orderBy('ordem') -> get();
            return view('adm.listarTema', ['tema' => $tema]);
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
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }else{
            
            return view('adm.incluirTema');
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
        if( Auth::user()->type == 1){
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }else{
            $user = new Tema;
            $user->descricao = $request->descricao;
            $user->ordem = $request->selectOpcao;
            $user->save();
            session()->flash('mensagem','Tema cadastrado com sucess!');
            return view('adm.incluirTema');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(Tema $tema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(Tema $tema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tema $tema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tema  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tema $tema)
    {
        //
    }
}
