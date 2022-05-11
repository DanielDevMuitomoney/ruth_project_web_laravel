<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
    {$nome="Daniel Alvarez";
        return view('home',['nome'=> $nome]);}
}
