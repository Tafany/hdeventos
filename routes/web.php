<?php

use App\Models\User;
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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\ProdutosController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', [ContatosController::class, 'contato']);
Route::get('/produtos', [ProdutosController::class, 'produto']);


Route::get('/produtos', function () {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});
// criando parametros
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
