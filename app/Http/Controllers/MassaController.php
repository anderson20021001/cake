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
        $massa = cliente::orderBy('nome')->get();
       return view('cliente.index', ['cliente' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = cliente::orderBy('nome')->get();
       return view('cliente.create', ['cliente' => $cliente]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $cliente = cliente::orderBy('nome')->get();
       return view('cliente.', ['cliente' => $cliente]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    { $cliente = cliente::orderBy('nome')->get();
        return view('cliente.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = cliente::orderBy('nome')->get();
        return view('cliente.edit', ['cliente' => $cliente]);
    }
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
        $cliente = cliente::orderBy('nome')->get();
        return view('cliente.destroy', ['cliente' => $cliente]);
    }
    
