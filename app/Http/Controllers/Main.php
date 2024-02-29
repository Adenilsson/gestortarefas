<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index(){
       $data=[
        'title'=>'Gestor de Tarefas'
       ];
       return view('main',$data);
    }
    public function login(){
        $data =[
            'title'=>'Login'
        ];
        return view('login_frm',$data);
    }
    public function login_submit(){
        session()->put('username','admin');
        echo "Você está logado.";
    }
    public function main(){
        $data =[
            'title'=>'Main'
        ];
        return  view('main',$data);
    }
    public function logout(){
        session()->forget('username');
        return redirect()->route('login');
        
    }
}
