<?php

namespace App\Http\Controllers;
use App\Models\Cobertura;
use Illuminate\Http\Request;

class CoberturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coberturas = Cobertura::orderBy('nome')->get();
       return view('cobertura.cobertura_index', ['coberturas' => $coberturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('cobertura.cobertura_create');
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

        $coberturas = new Cobertura();
        $coberturas->nome          = $request->nome;
        $coberturas->valor         = $request->valor;
        $coberturas->save();

        return redirect()->route('cobertura.index')->with('status', 'Cobertura criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $cobertura = Cobertura::find($id);
            return view('cobertura.cobertura_show', ['cobertura' => $cobertura]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cobertura = Cobertura::find($id);
        //dd($cobertura);
        return view('cobertura.cobertura_edit', ['cobertura' => $cobertura]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $cobertura = Cobertura::find($id);
        $cobertura->nome         = $request->nome;
        $cobertura->valor         = $request->valor;
        $cobertura->save();

        return redirect('/cobertura')->with('status','Cobertura atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cobertura = Cobertura::find($id);
        $cobertura->delete();
        return redirect('/cobertura')->with('status','Cobertura excluída com sucesso!');
    }
}