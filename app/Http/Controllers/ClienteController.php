<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
public function index()
{
    
    $clientes = cliente::orderBy('nome')->get();
    //dd($clientes);
    return view('cliente.index', ['cliente' => $cliente]);
}

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        $clientes = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        //dd($Cliente);
        return view ('cliente_create' , ['cliente' => $cliente]);

    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        dd($Cliente);
        //return view ('cliente_store' , ['clientes' => $clientes]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        dd($Cliente);
        return view ('cliente_show' , ['cliente' => $cliente]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        dd($Cliente);
        return view ('cliente_edit' , ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        dd($Cliente);
        return view ('cliente_update' , ['cliente' => $cliente]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        dd($Cliente);
        return view ('cliente_destroy' , ['cliente' => $cliente]);

}
}