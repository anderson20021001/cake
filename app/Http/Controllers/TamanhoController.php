<?php

namespace App\Http\Controllers;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class TamanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tamanhos = Tamanho::orderBy('nome')->get();
       return view('tamanho.tamanho_index', ['tamanhos' => $tamanhos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('tamanho.tamanho_create');
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

        $tamanhos = new Tamanho();
        $tamanhos->nome          = $request->nome;
        $tamanhos->valor         = $request->valor;
        $tamanhos->save();

        return redirect()->route('tamanho.index')->with('status', 'Tamanho criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $tamanho = Tamanho::find($id);
            return view('tamanho.tamanho_show', ['tamanho' => $tamanho]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tamanho = Tamanho::find($id);
        //dd($tamanho);
        return view('tamanho.tamanho_edit', ['tamanho' => $tamanho]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $tamanho = Tamanho::find($id);
        $tamanho->nome         = $request->nome;
        $tamanho->valor         = $request->valor;
        $tamanho->save();

        return redirect('/tamanho')->with('status','Tamanho atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tamanho = Tamanho::find($id);
        $tamanho->delete();
        return redirect('/tamanho')->with('status','Tamanho excluída com sucesso!');
    }
}