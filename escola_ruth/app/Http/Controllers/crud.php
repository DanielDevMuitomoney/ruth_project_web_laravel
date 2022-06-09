<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Http\Controllers\home;
use App\Models\student;

class crud extends Controller
{
    public function form_view(){
        return view('form');
    }

    public function register(Request $request)
    {
    $crud = new student;
    $crud->nm_name = $request->nome_cadastro;
    $crud->nm_email = $request->email_cadastro;
    $crud->password = $request->senha_cadastro;
    $crud->save();

    return redirect('/login2');

    }

    public function logar_usuario(Request $request)
    {
       
        $data=student::all();
        $dado=student::where('nm_email',$request->email_login)->get()->toArray();
        
       
       if($dado!=null){
        if($request->email_login ==$dado[0]['nm_email'] )
        {
            return view('area_do_usuario',['data'=>$data,'dado'=>'logado','credencias'=>$dado]);
        }
        }
    
        return view('area_do_usuario',['data'=>$data,'dado'=>$dado]);

    }
}
