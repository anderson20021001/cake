<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itens_vendas;

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
        
        $itens_venda_count = Itens_vendas::count();

        
        return view('home', ['produto_count' => $produto_count]);
    }
}
