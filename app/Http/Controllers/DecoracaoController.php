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
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_index' , ['decoracao' => $decoracao]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_create' , ['decoracoes' => $decoracoes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_request' , ['decoracao' => $decoracao]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_show' , ['decoracao' => $decoracao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('dliente.decoracao_id' , ['decoracao' => $decoracao]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_update' , ['decoracoes' => $decoracoes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $decoracao = Decoracao::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('decoracao.decoracao_destroy' , ['decoracoes' => $decoracoes]);
    }
}
