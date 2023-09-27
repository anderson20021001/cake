<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_index' , ['vendas' => $vendas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
          return view ('venda.venda_create' , ['vendas' => $vendas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_store' , ['vendas' => $vendas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_show' , ['vendas' => $vendas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_edit' , ['vendas' => $vendas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_update' , ['vendas' => $vendas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $venda = Venda::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('venda.venda_destroy' , ['vendas' => $vendas]);
    }
}
