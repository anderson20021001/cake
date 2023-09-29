<?php

namespace App\Http\Controllers;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venda = Venda::orderBy('data')->get();
        return view('venda.venda_index', ['venda' => $venda]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('venda.venda_create');
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

        $vendas = new Venda();
        $vendas->nome          = $request->nome;
        $vendas->valor         = $request->valor;
        $vendas->save();

        return redirect()->route('venda.index')->with('status', 'Venda criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $venda = Venda::find($id);
            return view('venda.venda_show', ['venda' => $venda]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venda = Venda::find($id);
        //dd($venda);
        return view('venda.venda_edit', ['venda' => $venda]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $venda = Venda::find($id);
        $venda->nome         = $request->nome;
        $venda->valor         = $request->valor;
        $venda->save();

        return redirect('/venda')->with('status','Venda atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venda = Venda::find($id);
        $venda->delete();
        return redirect('/venda')->with('status','Venda excluída com sucesso!');
    }
}