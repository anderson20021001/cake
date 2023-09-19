<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoberturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.index' , ['cliente' => $cobertura]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
          return view ('cobertura.create' , ['cliente' => $cobertura]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.store' , ['cobertura' => $cobertura]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('ccobertura.show' , ['cobertura' => $cobertura]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.edit' , ['cobertura' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.update' , ['cliente' => $cliente]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cobertura = cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.destroy' , ['cliente' => $cliente]);
    }
}
