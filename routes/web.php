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
use App\Http\Controllers\EmailController;

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
})->name('/');



Route::get('/cliente',[ClienteController::class, 'index'])->name('cliente.index')->middleware('can:is_admin');
Route::get('/cliente/create',[ClienteController::class, 'create'])->name('cliente.create')->middleware('can:is_admin');
Route::post('/cliente/create',[ClienteController::class, 'store'])->name('cliente.store')->middleware('can:is_admin');
Route::get('/cliente/{id}/edit',[ClienteController::class, 'edit'])->name('cliente.edit')->middleware('can:is_admin');
Route::put('/cliente/{id}/edit',[ClienteController::class, 'update'])->name('cliente.update')->middleware('can:is_admin');
Route::get('/cliente/{id}',[ClienteController::class, 'show'])->name('cliente.show')->middleware('can:is_admin');
Route::delete('/cliente/{id}',[ClienteController::class, 'destroy'])->name('cliente.destroy')->middleware('can:is_admin');



Route::get('/massa',[MassaController::class, 'index'])->name('massa.index')->middleware('can:is_admin');
Route::get('/massa/create',[MassaController::class, 'create'])->name('massa.create')->middleware('can:is_admin');
Route::post('/massa/create',[MassaController::class, 'store'])->name('massa.store')->middleware('can:is_admin');
Route::get('/massa/{id}/edit',[MassaController::class, 'edit'])->name('massa.edit')->middleware('can:is_admin');
Route::put('/massa/{id}/edit',[MassaController::class, 'update'])->name('massa.update')->middleware('can:is_admin');
Route::get('/massa/{id}',[MassaController::class, 'show'])->name('massa.show')->middleware('can:is_admin');
Route::delete('/massa/{id}',[MassaController::class, 'destroy'])->name('massa.destroy')->middleware('can:is_admin');



Route::get('/cobertura',[CoberturaController::class, 'index'])->name('cobertura.index')->middleware('can:is_admin');
Route::get('/cobertura/create',[CoberturaController::class, 'create'])->name('cobertura.create')->middleware('can:is_admin');
Route::post('/cobertura/create',[CoberturaController::class, 'store'])->name('cobertura.store')->middleware('can:is_admin');
Route::get('/cobertura/{id}/edit',[CoberturaController::class, 'edit'])->name('cobertura.edit')->middleware('can:is_admin');
Route::put('/cobertura/{id}/edit',[CoberturaController::class, 'update'])->name('cobertura.update')->middleware('can:is_admin');
Route::get('/cobertura/{id}',[CoberturaController::class, 'show'])->name('cobertura.show')->middleware('can:is_admin');
Route::delete('/cobertura/{id}',[CoberturaController::class, 'destroy'])->name('cobertura.destroy')->middleware('can:is_admin');


Route::get('/tamanho',[TamanhoController::class, 'index'])->name('tamanho.index')->middleware('can:is_admin');
Route::get('/tamanho/create',[TamanhoController::class, 'create'])->name('tamanho.create')->middleware('can:is_admin');
Route::post('/tamanho/create',[TamanhoController::class, 'store'])->name('tamanho.store')->middleware('can:is_admin');
Route::get('/tamanho/{id}/edit',[TamanhoController::class, 'edit'])->name('tamanho.edit')->middleware('can:is_admin');
Route::put('/tamanho/{id}/edit',[TamanhoController::class, 'update'])->name('tamanho.update')->middleware('can:is_admin');
Route::get('/tamanho/{id}',[TamanhoController::class, 'show'])->name('tamanho.show')->middleware('can:is_admin');
Route::delete('/tamanho/{id}',[TamanhoController::class, 'destroy'])->name('tamanho.destroy')->middleware('can:is_admin');


Route::get('/decoracao',[DecoracaoController::class, 'index'])->name('decoracao.index')->middleware('can:is_admin');
Route::get('/decoracao/create',[DecoracaoController::class, 'create'])->name('decoracao.create')->middleware('can:is_admin');
Route::post('/decoracao/create',[DecoracaoController::class, 'store'])->name('decoracao.store')->middleware('can:is_admin');
Route::get('/decoracao/{id}/edit',[DecoracaoController::class, 'edit'])->name('decoracao.edit')->middleware('can:is_admin');
Route::put('/decoracao/{id}/edit',[DecoracaoController::class, 'update'])->name('decoracao.update')->middleware('can:is_admin');
Route::get('/decoracao/{id}',[DecoracaoController::class, 'show'])->name('decoracao.show')->middleware('can:is_admin');
Route::delete('/decoracao/{id}',[DecoracaoController::class, 'destroy'])->name('decoracao.destroy')->middleware('can:is_admin');


Route::get('/recheio',[RecheioController::class, 'index'])->name('recheio.index')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'store'])->name('recheio.store')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'update'])->name('recheio.update')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'destroy'])->name('recheio.destroy')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'edit'])->name('recheio.edit')->middleware('can:is_admin');
Route::get('/recheio',[RecheioController::class, 'show'])->name('recheio.show')->middleware('can:is_admin');


Route::get('/venda',[VendaController::class, 'index'])->name('venda.index')->middleware('can:is_admin');
Route::get('/venda/create',[VendaController::class, 'create'])->name('venda.create')->middleware('can:is_admin');
Route::post('/venda/create',[VendaController::class, 'store'])->name('venda.store')->middleware('can:is_admin');
Route::get('/venda/{id}/edit',[VendaController::class, 'edit'])->name('venda.edit')->middleware('can:is_admin');
Route::put('/venda/{id}/edit',[VendaController::class, 'update'])->name('venda.update')->middleware('can:is_admin');
Route::get('/venda/{id}',[VendaController::class, 'show'])->name('venda.show')->middleware('can:is_admin');
Route::delete('/venda/{id}',[VendaController::class, 'destroy'])->name('venda.destroy')->middleware('can:is_admin');


Route::get('/itens_vendas',[VendaController::class, 'index'])->name('itens_vendas.index')->middleware('can:is_admin');
Route::get('/itens_itens_vendas/create',[VendaController::class, 'create'])->name('itens_vendas.create')->middleware('can:is_admin');
Route::post('/itens_vendas/create',[VendaController::class, 'store'])->name('itens_vendas.store')->middleware('can:is_admin');
Route::get('/itens_vendas/{id}/edit',[VendaController::class, 'edit'])->name('itens_vendas.edit')->middleware('can:is_admin');
Route::put('/itens_vendas/{id}/edit',[VendaController::class, 'update'])->name('itens_vendas.update')->middleware('can:is_admin');
Route::get('/itens_vendas/{id}',[VendaController::class, 'show'])->name('itens_vendas.show')->middleware('can:is_admin');
Route::delete('/itens_vendas/{id}',[VendaController::class, 'destroy'])->name('itens_vendas.destroy')->middleware('can:is_admin');

Route::post('/pedido/create', [ClienteController::class, 'store'])->middleware('can:is_admin');
Route::get('/pedido',[PedidoController::class, 'index'])->name('pedido.index')->middleware('can:is_admin');
Route::get('/pedido/create',[PedidoController::class, 'create'])->name('pedido.index')->middleware('can:is_admin');
Route::post('/pedido/create',[PedidoController::class, 'store'])->name('pedido.index')->middleware('can:is_admin');

Route::get('/cadastroCliente',[PedidoController::class, 'cadastroCliente'])->name('cadastroCliente');
Route::post('/fazerPedido',[PedidoController::class, 'fazerPedido'])->name('fazerPedido');


Route::get('/cadastroCliente',[PedidoController::class, 'cadastroCliente'])->name('cadastroCliente');
Route::post('/cadastroPedido',[PedidoController::class, 'cadastroPedido'])->name('cadastroPedido');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('can:is_admin');

Route::get('email/create', [EmailController::class,'create'])->name('email.create');
Route::post('email/create', [EmailController::class,'store'])->name('email.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


