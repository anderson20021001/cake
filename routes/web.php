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

Route::get('/cliente',[ClienteController::class, 'index'])->name('cliente.index')->middleware('can:is_admin');
Route::get('/itens_vendas',[Itens_vendasController::class, 'index'])->name('Intes_vendas.index')->middleware('can:is_admin');

Route::get('/clientes/{id}',[ClienteController::class, 'show'])->name('cliente.show')->middleware('can:is_admin');

Route::get('/cliente/create', [ClienteController::class, 'create'])->middleware('can:is_admin');
Route::post('/produto/create', [ClienteController::class, 'store'])->middleware('can:is_admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('can:is_admin');



