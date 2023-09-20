<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item_venda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $itens_vendas_count = Item_venda::count();
        $itens_vendas_sum = Item_venda::sum('valor');

        //dd($itens_vendas_sum);
        //dd($itens_vendas_count);
        return view('home', ['itens_vendas_sum' => $itens_vendas_sum ,'itens_vendas_count' => $itens_vendas_count]);
    }
}
