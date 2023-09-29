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
        $decoracaos = Decoracao::orderBy('nome')->get();
       return view('decoracao.decoracao_index', ['decoracaos' => $decoracaos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('decoracao.decoracao_create');
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

        $decoracao = new Decoracao();
        $decoracao->nome          = $request->nome;
        $decoracao->valor         = $request->valor;
        $decoracao->save();

        return redirect()->route('decoracao.index')->with('status', 'Decoracao criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $decoracao = Decoracao::find($id);
            return view('decoracao.decoracao_show', ['decoracao' => $decoracao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $decoracao = Decoracao::find($id);
        //dd($decoracao);
        return view('decoracao.decoracao_edit', ['decoracao' => $decoracao]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $decoracao = Decoracao::find($id);
        $decoracao->nome         = $request->nome;
        $decoracao->valor         = $request->valor;
        $decoracao->save();

        return redirect('/decoracao')->with('status','Decoracao atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decoracao = Decoracao::find($id);
        $decoracao->delete();
        return redirect('/decoracao')->with('status','Decoracao excluída com sucesso!');
    }
}