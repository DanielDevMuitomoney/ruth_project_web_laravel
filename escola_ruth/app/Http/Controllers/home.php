<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
    
        return view('home');
    }
    public function contato()
    {
        return view('contato');
    }
    public function components()
    {
        return view('components');
    }
}
