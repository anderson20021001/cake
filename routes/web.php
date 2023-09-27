<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Itens_vendasController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\MassaController;
use App\Http\Controllers\TamanhoController;
use App\Http\Controllers\DecoracaoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\CoberturaController;

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
Route::get('/cliente/{id}',[ClienteController::class, 'show'])->name('cliente.show')->middleware('can:is_admin');
Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit')->middleware('can:is_admin');
Route::put('/cliente/{id}/edit', [ClienteController::class, 'update'])->name('cliente.update')->middleware('can:is_admin');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy')->middleware('can:is_admin');




Route::get('/item',[Itens_vendasController::class, 'index'])->name('Intes_vendas.index')->middleware('can:is_admin');
//Route::get('/itens_vendas',[Itens_vendasController::class, 'store'])->name('Intes_vendas.store')->middleware('can:is_admin');
//Route::get('/itens_vendas',[Itens_vendasController::class, 'update'])->name('Intes_vendas.update')->middleware('can:is_admin');
//Route::get('/itens_vendas',[Itens_vendasController::class, 'destroy'])->name('Intes_vendas.destroy')->middleware('can:is_admin');
//Route::get('/itens_vendas',[Itens_vendasController::class, 'edit'])->name('Intes_vendas.edit')->middleware('can:is_admin');
//Route::get('/itens_vendas',[Itens_vendasController::class, 'show'])->name('Intes_vendas.show')->middleware('can:is_admin');


Route::get('/massa',[MassaController::class, 'index'])->name('massa.index')->middleware('can:is_admin');
//Route::get('/massa',[MassaController::class, 'store'])->name('massa.store')->middleware('can:is_admin');
//Route::get('/massa',[MassaController::class, 'update'])->name('masssa.update')->middleware('can:is_admin');
Route::delete('/massa',[MassaController::class, 'destroy'])->name('massa.destroy')->middleware('can:is_admin');
Route::put('/massa',[MassaController::class, 'edit'])->name('massa.edit')->middleware('can:is_admin');
//Route::get('/massa',[MassaController::class, 'show'])->name('massa.show')->middleware('can:is_admin');

Route::get('/recheio',[RecheioController::class, 'index'])->name('recheio.index')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'store'])->name('recheio.store')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'update'])->name('recheio.update')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'destroy'])->name('recheio.destroy')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'edit'])->name('recheio.edit')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'show'])->name('recheio.show')->middleware('can:is_admin');

Route::get('/cobertura',[CoberturaController::class, 'index'])->name('cobertura.index')->middleware('can:is_admin');
//Route::get('/cobertura',[CoberturaController::class, 'store'])->name('cobertura.store')->middleware('can:is_admin');
//Route::get('/cobertura',[CoberturaController::class, 'update'])->name('cobertura.update')->middleware('can:is_admin');
//Route::get('/cobertura',[CoberturaController::class, 'destroy'])->name('cobertura.destroy')->middleware('can:is_admin');
//Route::get('/cobertura',[CoberturaController::class, 'edit'])->name('cobertura.edit')->middleware('can:is_admin');
//Route::get('/cobertura',[CoberturaController::class, 'show'])->name('cobertura.show')->middleware('can:is_admin');

Route::get('/tamanho',[TamanhoController::class, 'index'])->name('tamanho.index')->middleware('can:is_admin');
//Route::get('/tamanho',[TamanhoController::class, 'store'])->name('tamanho.store')->middleware('can:is_admin');
//Route::get('/tamanho',[TamanhoController::class, 'update'])->name('tamanho.update')->middleware('can:is_admin');
//Route::get('/tamanho',[TamanhoController::class, 'destroy'])->name('tamanho.destroy')->middleware('can:is_admin');
//Route::get('/tamanho',[TamanhoController::class, 'edit'])->name('tamanho.edit')->middleware('can:is_admin');
//Route::get('/tamanho',[TamanhoController::class, 'show'])->name('tamanho.show')->middleware('can:is_admin');

Route::get('/decoracao',[DecoracaoController::class, 'index'])->name('decoracao.index')->middleware('can:is_admin');
//Route::get('/decoracao',[DecoracaoController::class, 'store'])->name('decoracao.store')->middleware('can:is_admin');
//Route::get('/decoracao',[DecoracaoController::class, 'update'])->name('decoracao.update')->middleware('can:is_admin');
//Route::get('/decoracao',[DecoracaoController::class, 'destroy'])->name('decoracao.destroy')->middleware('can:is_admin');
//Route::get('/decoracao',[DecoracaoController::class, 'edit'])->name('decoracao.edit')->middleware('can:is_admin');
//Route::get('/decoracao',[DecoracaoController::class, 'show'])->name('decoracao.show')->middleware('can:is_admin');

Route::get('/venda',[DecoracaoController::class, 'index'])->name('venda.index')->middleware('can:is_admin');
//Route::get('/venda',[DecoracaoController::class, 'store'])->name('venda.store')->middleware('can:is_admin');
//Route::get('/venda',[VendaController::class, 'update'])->name('venda.update')->middleware('can:is_admin');
//Route::get('/venda',[VendaController::class, 'destroy'])->name('venda.destroy')->middleware('can:is_admin');
//Route::get('/venda',[VendaController::class, 'edit'])->name('venda.edit')->middleware('can:is_admin');
//Route::get('/venda',[VendaController::class, 'show'])->name('venda.show')->middleware('can:is_admin');


Route::post('/produto/create', [ClienteController::class, 'store'])->middleware('can:is_admin');
Route::get('/pedido',[PedidoController::class, 'index'])->name('pedido.index')->middleware('can:is_admin');
Route::get('/pedido/create',[PedidoController::class, 'create'])->name('pedido.index')->middleware('can:is_admin');
Route::post('/pedido/create',[PedidoController::class, 'store'])->name('pedido.index')->middleware('can:is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('can:is_admin');



