<?php

use App\Http\Controllers\crud;
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


Route::get('/componensts', [home::class,'components']);

Route::get('/atividades',function(){
    return view('atividades');
});

Route::get('/atividade_ptbr',function(){
    return view('atividade_portugues');
});
#$_GET[]
Route::get('/atividade/{id}', function($id){
return view('atividade',['id' => $id]);
});


Route::get('/contato',[home::class,'contato']);
 
Route::get('/materias', [materias::class,'index']);
Route::get('/matematica', [materias::class,'matematica']);
Route::get('/portugues', [materias::class,'portugues']);


Route::post('/autenticar',[crud::class,'logar_usuario']);

// vw_form
Route::get('/login2',[crud::class,'form_view']);
//register data (data base)
Route::post('/registrar',[crud::class,'register']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
