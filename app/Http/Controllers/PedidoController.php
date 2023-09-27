<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::get();
        return view('pedido.pedido_index', ['pedidos' => $pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido.pedido_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_store' , ['recheios' => $recheios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_show' , ['recheios' => $recheios]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_edit' , ['recheios' => $recheios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_update' , ['recheios' => $recheios]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_destroy' , ['recheios' => $recheios]);
    }
}
