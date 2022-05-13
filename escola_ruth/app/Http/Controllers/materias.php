<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materias extends Controller
{
    public function index()
    {
        $materias=
        [
            ['nome'=>'portugues',
            'img'=>'https://i.pinimg.com/originals/1a/20/b9/1a20b98d9037c4a7bc0d0878a11fbb8a.jpg',
            'desc'=>'materia de portugues dahora dahora'],

            ['nome'=>'matematica',
            'img'=>'https://i.pinimg.com/originals/19/6f/34/196f34198c763692c2def70648337280.png',
            'desc'=>'materia de matematica dahora'],
        ];
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
