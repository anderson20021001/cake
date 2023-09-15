<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Itens_vendasController;

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
    return view('welcome');
});

Route::get('/cliente',[ClienteController::class, 'index'])->name('cliente.index');
Route::get('/itens_vendas',[Itens_vendasController::class, 'index'])->name('Intes_vendas.index');

Route::get('/clientes/{id}',[ClienteController::class, 'show'])->name('cliente.show');

Route::get('/cliente/create', [ClienteController::class, 'create']);
Route::post('/produto/create', [ClienteController::class, 'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
