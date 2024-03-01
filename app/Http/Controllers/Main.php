<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
//=======================================================
//main page
//=======================================================
{
    public function index(){
       $data=[
        'title'=>'Gestor de Tarefas',
        'tasks'=>$this->_get_tasks(),
       ];
       return view('main',$data);
    }
//=======================================================
//login
//=======================================================
    public function login(){
        $data =[
            'title'=>'Login'
        ];
        return view('login_frm',$data);
    }
    public function login_submit(Request $request){
        //form validation
        $request->validate([
            'text_username'=>'required|min:3',
            'text_password'=>'required| min:3',

        ],[
            'text_username.required'=>'O nome é obrigatório!',
            'text_username.min'=>'O nome deve ter pelo menos 3 letras',
            'text_password.required'=>'A password é obrigatória!',
            'text_password.min'=>'A password deve ter pelo menos 3 caracteres',
            
        ]);
        //get form data
        $username = $request->input('text_username');
        $password = $request->input('text_password');

        //check if user exists
        $model = new UserModel();
        $user = $model->where('username','=',$username)
            ->whereNULL('deleted_at')
            ->first();
        if($user){
            //check if password is correct
            if(password_verify($password, $user->password)){
                $session_data =[
                    'id'  => $user->id,
                    'username'   => $user->username, 
                ];
                session()->put($session_data);
                return redirect()->route('index');
            }
        }
        // invalid login
        return redirect()
        ->route('login')
        ->withInput()
        ->with('login_error', 'Login invalido. Tente novamente!');

    }

//=======================================================
//logout
//=======================================================
    public function logout(){
        session()->forget('username');
        return redirect()->route('login');
        
    }
//=======================================================
//new task
//=======================================================
public function new_task(){
    $data=[
        'title' =>'Nova tarefa',
    ];
    return view('new_task_form', $data);
}
public function  new_task_submit(){
    $data =[
        'title' => 'Cadastro de Task',
    ];
    echo " gruardar nova tarefa";
}




//=======================================================
//private methods
//=======================================================
private  function _get_tasks(){
    $model = new TaskModel();
    return $model->where('id_user','=', session()->get('id'))
        ->whereNULL('deleted_at')
        ->get();
}

}
