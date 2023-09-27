<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
public function index()
{
    
    $clientes = Cliente::orderBy('nome')->get();
    //dd($clientes);
    return view('cliente.cliente_index', ['clientes' => $clientes]);
}

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        $clientes = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        //dd($Cliente);
        return view ('cliente.cliente_create' , ['clientes' => $clientes]);

    

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = Cliente::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        //dd($Cliente);
        return view ('cliente.cliente_store' , ['clientes' => $clientes]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::find($id); //pluck('nome', 'id' );
        //dd($Cliente);
        return view ('cliente.cliente_show' , ['cliente' => $cliente]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id); //pluck('nome', 'id' );
        //dd($cliente);
        return view ('cliente.cliente_edit' , ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório!',
             ];


        $Validated = $request->validate([
            'nome'          => 'required|min:5',
        ], $messages);

        $cliente = Cliente::find($id);
        $cliente->nome                = $request->nome;
        $cliente->save();    
        
        return redirect()->route('cliente.index')->with('status', 'Cliente alterado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id); //pluck('nome', 'id' );
        $cliente->delete();
        //dd($Cliente);
        return redirect()->route('cliente.index')->with('status', 'Cliente excluido com sucesso');

}
}