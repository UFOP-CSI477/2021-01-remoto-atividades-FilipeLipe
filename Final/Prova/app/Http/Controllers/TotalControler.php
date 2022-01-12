<?php

namespace App\Http\Controllers;

use App\Models\Total;
use App\Models\Voto;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TotalControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        $voto = Voto::orderBy('tema_id') -> get();
        $tema = Tema::orderBy('ordem') -> get();
        if( Auth::user()->type == 1){
            return redirect()->route('home');
        }elseif(Auth::user()->type == 2){
            return view('adm.totalizarVoto', ['voto' => $voto], ['tema' => $tema], ['users' => $users]);
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function show(Total $total)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function edit(Total $total)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Total $total)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function destroy(Total $total)
    {
        //
    }
}
