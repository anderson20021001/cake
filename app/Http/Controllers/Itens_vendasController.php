<?php

namespace App\Http\Controllers;
use App\Models\Item_venda;
use Illuminate\Http\Request;

class Itens_vendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $itens_vendas = Item_venda::find(1);
        //dd($itens_vendas);
        foreach ($itens_vendas as $key => $value) {
            dd($value);
            echo($value->cobertura->nome);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
