<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materias extends Controller
{
    public function index()
    {
        $nome="Daniel Alvarez";
        $idade=17;
        $escolaridade="
        3 ano do ensino Médio";
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
