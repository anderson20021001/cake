<?php

namespace App\Http\Controllers;
use App\Models\Massa;
use Illuminate\Http\Request;

class MassaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $massas = Massa::orderBy('nome')->get();
       return view('massa.massa_index', ['massas' => $massas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('massa.massa_create');
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

        $massas = new Massa();
        $massas->nome          = $request->nome;
        $massas->valor         = $request->valor;
        $massas->save();

        return redirect()->route('massa.index')->with('status', 'Massa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { 
            $massa = Massa::find($id);
            return view('massa.massa_show', ['massa' => $massa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $massa = Massa::find($id);
        //dd($massa);
        return view('massa.massa_edit', ['massa' => $massa]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
            'valor'         => 'required',
           ]);

        $massa = Massa::find($id);
        $massa->nome         = $request->nome;
        $massa->valor         = $request->valor;
        $massa->save();

        return redirect('/massa')->with('status','Massa atualizada com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $massa = Massa::find($id);
        $massa->delete();
        return redirect('/massa')->with('status','Massa excluída com sucesso!');
    }
}