<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 $nome = "Rodrigo";
 $idade= 38;

 $arr = [10,20,30,40,50];
 $nomes = ["Rodrigo", "Maria", "Fany","Alberto"];

    return view('welcome',
     ['nome'=>$nome,
      'idade' =>$idade, 
      'profissao' => "Programador", 
      'arr' => $arr,
      'nomes' =>$nomes,
    ]);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');

    return view('products',['busca' => $busca]);
});
// criando parametros
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});