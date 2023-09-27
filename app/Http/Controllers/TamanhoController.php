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
          
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_index' , ['tamanho' => $tamanho]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
          return view ('tamanho.tamanho_create' , ['tamanhos' => $tamanhos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_store' , ['tamanhos' => $tamanhos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_show' , ['tamanhos' => $tamanhos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_edit' , ['tamanhos' => $tamanhos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_update' , ['tamanhos' => $tamanhos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tamanho = Tamanho::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('tamanho.tamanho_destroy' , ['tamanhos' => $tamanhos]);
    }
}
