<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use App\Models\User;
use App\Models\Tema;
use Illuminate\Http\Request;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('name') -> get();
        $voto = Voto::orderBy('tema_id') -> get();
        $tema = Tema::orderBy('id') -> get();
        return view('docente.listarVoto', ['docente' => $voto], ['user' => $user], ['tema' => $tema]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tema = Tema::orderBy('id') -> get();
        return view('docente.lancarVoto', ['tema' => $tema]);
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
