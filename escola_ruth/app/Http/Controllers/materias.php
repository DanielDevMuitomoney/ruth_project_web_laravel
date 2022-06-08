<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\materia;

class materias extends Controller
{
    public function index()
    {
        $materias=materia::all();
        return view('materias',['materias'=>$materias]);
    }
    public function matematica()
    {
        return view('matematica');
    }
    public function portugues()
    {

    }
}
