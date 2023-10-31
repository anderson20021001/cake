<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nomeCompleto')->get();
       return view('cliente.cliente_index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('cliente.cliente_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório!',
            'email.required' => 'O :attribute é obrigatório!',
            'celular.required' => 'O :attribute é obrigatório!',
            'endereco.required' => 'O :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'nome'          => 'required|min:5',
            'email'         => 'required',
            'celular'         => 'required',
            'endereco'         => 'required',
            
            
        ], $messages);

        $clientes = new Cliente();
        $clientes->nome          = $request->nome;
        $clientes->email          = $request->email;
        $clientes->celular          = $request->celular;
        $clientes->endereco          = $request->endereco;
        $clientes->save();

        return redirect()->route('cliente.index')->with('status', 'Cliente criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $cliente = Cliente::find($id);
            return view('cliente.cliente_show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::find($id);
        //dd($cliente);
        return view('cliente.cliente_edit', ['cliente' => $cliente]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'email'         => 'required',
            'celular'         => 'required|min:5',
            'endereco'         => 'required',
           ]);

        $cliente = Cliente::find($id);
        $cliente->nome         = $request->nome;
        $cliente->email         = $request->email;
        $cliente->celular         = $request->celular;
        $cliente->endereco         = $request->endereco;

        $cliente->save();

        return redirect('/cliente')->with('status','Cliente atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/cliente')->with('status','Cliente excluída com sucesso!');
    }
}