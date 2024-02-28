<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        $data =[
            'title'=> 'Ola Laravel 10!',
            'descriptions' => 'Aprendendo Laravel'
        ];

        return view('main', $data);
    }
}
