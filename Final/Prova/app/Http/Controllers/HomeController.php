<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = Auth::user();
        if(Auth::user()->type == 1){
            return view('docente.menu', ['users' => $users]);
        }elseif(Auth::user()->type == 2){
            return view('adm.menu', ['users' => $users]);
        }else{
            session()->flash('mensagem','Tipo do usuário não correspondente!');
            return view('auth.login');
        }
        
    }
}
