<?php

namespace App\Http\Controllers;
use App\Models\itens_vendas;
use Illuminate\Http\Request;

class itens_vendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens_vendas = itens_vendas::orderBy('nome')->get();
       return view('itens_vendas.itens_vendas_index', ['itens_vendas' => $itens_vendas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('itens_vendas.itens_vendas_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório!',
            'valor.required' => 'O :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'nome'          => 'required|min:5',
            'valor'         => 'required',
            
        ], $messages);

        $itens_vendas = new itens_vendas();
        $itens_vendas->nome          = $request->nome;
        $itens_vendas->valor         = $request->valor;
        $itens_vendas->save();

        return redirect()->route('itens_vendas.index')->with('status', 'itens_vendas criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $itens_vendas = itens_vendas::find($id);
            return view('itens_vendas.itens_vendas_show', ['itens_vendas' => $itens_vendas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $itens_vendas = itens_vendas::find($id);
        //dd($itens_vendas);
        return view('itens_vendas.itens_vendas_edit', ['itens_vendas' => $itens_vendas]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $itens_vendas = itens_vendas::find($id);
        $itens_vendas->nome         = $request->nome;
        $itens_vendas->valor         = $request->valor;
        $itens_vendas->save();

        return redirect('/itens_vendas')->with('status','itens_vendas atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $itens_vendas = itens_vendas::find($id);
        $itens_vendas->delete();
        return redirect('/itens_vendas')->with('status','itens_vendas excluída com sucesso!');
    }
}