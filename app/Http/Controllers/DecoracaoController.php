<?php

namespace App\Http\Controllers;
use App\Models\Decoracao;
use Illuminate\Http\Request;

class DecoracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_index' , ['cliente' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_create' , ['cliente' => $cliente]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_request' , ['cliente' => $cliente]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_show' , ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('dliente.cliente_id' , ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_update' , ['cliente' => $cliente]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cliente.cliente_destroy' , ['cliente' => $cliente]);
    }
}
