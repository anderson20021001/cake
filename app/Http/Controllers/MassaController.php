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
        $massa = Massa::orderBy('nome')->get();
       return view('massa.massa_create', ['massas' => $massas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'nome.required' => 'O :attribute é obrigatório!',
            'quantidade.required' => 'O :attribute é obrigatório!',
            'preco.required' => 'O :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'nome'          => 'required|min:5',
            'quantidade'    => 'required',
            'preco'         => 'required',
            
        ], $messages);

        $massas = new Massa();
        $massas->nome          = $request->nome;
        $massas->quantidade    = $request->quantidade;
        $massas->preco         = $request->preco;
        $massas->save();

        return redirect()->route('massa.index')->with('status', 'Massa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    { 
    
            $massas = Massa::orderBy('nome')->get();
            return view('massa.massa_show', ['massas' => $massas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $massa = massa::orderBy('nome')->get();
        return view('massa.edit', ['massa' => $massa]);
    }
    


    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome'         => 'required|min:5',
           
           ]);

        $massa = Categoria::find($id);
        $massa->nome         = $request->massa;
  
        $massa->save();

        return redirect('/massa')->with('status','Categoria atualizado com sucesso!');

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $massa = Massa::orderBy('nome')->get();
        return view('massa.massa_destroy', ['massas' => $massas]);
    }
}