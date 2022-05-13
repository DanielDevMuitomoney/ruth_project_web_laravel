<?php

use App\Http\Controllers\materias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [home::class,'index']);




Route::get('/atividades',function(){
    return view('atividades');
});


#$_GET[]
Route::get('/atividade/{id}', function($id){

    
return view('atividade',['id' => $id]);
});




Route::get('/materias', [materias::class,'index']);
Route::get('/matematica', [materias::class,'matematica']);
Route::get('/portugues', [materias::class,'portugues']);


