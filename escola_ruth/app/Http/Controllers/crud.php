<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    return redirect('/login');

    }
}
