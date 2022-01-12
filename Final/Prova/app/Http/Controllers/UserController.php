<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
            $user = User::orderBy('name') -> get();
            return view('adm.listarDocente', ['docente' => $user]);
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
            return view('adm.incluirDocente');
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
            if($request->password == $request->csenha){
                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->type = 1;
                $user->remember_token = Str::random(10);
                $user->save();
                session()->flash('mensagem','Docente cadastrado com sucesso!');
            
            }else{
                session()->flash('mensagem','As senhas não são iguais!');;
            }
            return view('adm.incluirDocente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if( Auth::user()->type == 1){
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }else{
            return view('adm.editDocente', ['user' => $user]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($request->all());
        if( Auth::user()->type == 1){
            session()->flash('mensagem','Você não tem permissão para acessar essa pagina!');
            return redirect()->route('home');
        }else{
            if($request->password == $request->csenha){
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();
                session()->flash('mensagem','Docente atualizado com sucesso!');
                
            }else{
                session()->flash('mensagem','As senhas não são iguais!');;
            }
            $user = User::orderBy('name') -> get();
            return view('adm.listarDocente', ['docente' => $user]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
