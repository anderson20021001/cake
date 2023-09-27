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
          
        $coberturas = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.cobertura_index' , ['coberturas' => $coberturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
          return view ('cobertura.cobertura_create' , ['coberturas' => $coberturas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('coberturas.cobertura_store' , ['coberturas' => $coberturas]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.cobertura_show' , ['coberturas' => $coberturas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.cobertura_edit' , ['coberturas' => $coberturas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.cobertura_update' , ['coberturas' => $coberturas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cobertura = Cobertura::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('cobertura.cobertura_destroy' , ['coberturas' => $coberturas]);
    }
}
