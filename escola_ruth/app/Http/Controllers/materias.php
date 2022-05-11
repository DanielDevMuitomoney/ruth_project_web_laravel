<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materias extends Controller
{
    public function index()
    {
        $nome="Daniel Alvarez";
        return view('materias',['nome'=> $nome]);
    }
    public function matematica()
    {
        return view('matematica');
    }
    public function portugues()
    {

    }
}
