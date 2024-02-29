<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index(){
        $data =[
            'title'=> 'Ola Laravel 10!',
            'descriptions' => 'Aprendendo Laravel'
        ];

        return view('main', $data);
    }
    public function users(){
        //get users with row sql
        //$users=DB::select('select * from users');
        //dd($users);
        //with query build
        //$users = db::table('users')->get();
        //dd($users);

        //with query builder - return in array
        //$users =  DB::table('users')->get()->toArray();
        //dd($users);
        //echo '<pre>';
        //print_r($users);
        //echo '</pre>';

        //using Eloquent ORM - Using Model
        $model = new UserModel();
        $users = $model->all();
        //dd($users);
        foreach($users as $user){
           echo $user->username .'<br>'; 
        }

    }
    public function view(){
        $data =[
            'title'=>'Titulo da Pagina'
        ];
        return  view('home', $data);
    }
}
