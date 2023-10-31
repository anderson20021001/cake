<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Tipo;
use App\Models\Tamanho;
use App\Models\Massa;
use App\Models\Recheio;
use App\Models\Decoracao;
use App\Models\Cobertura;
use App\Models\Cliente;



class PedidoController extends Controller
{

    public function cadastroCliente(){

        return view('cadastroCliente');
    }

    public function fazerPedido(Request $request)
    {
        $messages = [
            'nomeCompleto.required' => 'O :attribute é obrigatório!',
            'endereco.required' => 'O :attribute é obrigatório!',
            'numero.required' => 'O :attribute é obrigatório!',
            'bairro.required' => 'O :attribute é obrigatório!',
            'cidade.required' => 'O :attribute é obrigatório!',
            'estado.required' => 'O :attribute é obrigatório!',
            'bairro.required' => 'O :attribute é obrigatório!',
            'telefone.required' => 'O :attribute é obrigatório!',
            'email.required' => 'O :attribute é obrigatório!',
        ];


        $validated = $request->validate([
            'nomeCompleto'          => 'required|min:5',
            'endereco'    => 'required',
            'numero'         => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'bairro' => 'required',
            'telefone' => 'required',
            'email' => 'required',
        ], $messages);

            //dd($request->all());
            $cliente = new Cliente;
            $cliente->nomeCompleto = $request->nomeCompleto;
            $cliente->endereco = $request->endereco; 
            $cliente->numero = $request->numero;
            $cliente->bairro = $request->bairro;  
            $cliente->cidade = $request->cidade; 
            $cliente->estado = $request->estado; 
            $cliente->telefone = $request->telefone; 
            $cliente->email = $request->email; 
            $cliente->save();

            $tipos = Tipo::get();
            $tamanhos = Tamanho::orderBy('nome','ASC')->get();
            $massas = Massa::get();
            $recheios = Recheio::get();
            $decoracoes = Decoracao::get();
            $coberturas = Cobertura::get();
            return view('cadastroPedido', ['tamanhos' => $tamanhos,
                                            'tipos' => $tipos,
                                        'massas' => $massas,
                                        'recheios' => $recheios,
                                        'decoracoes' => $decoracoes,
                                        'coberturas' => $coberturas
                                        ]);
    

    }

    public function cliente_store(Request $request)
    {
        //dd($request->all());
        $messages = [
            'nomeCompleto.required' => 'O :attribute é obrigatório!',
            'endereco.required' => 'O :attribute é obrigatório!',
            'numero.required' => 'O :attribute é obrigatório!',
            'bairro.required' => 'O :attribute é obrigatório!',
            'cidade.required' => 'O :attribute é obrigatório!',
            'estado.required' => 'O :attribute é obrigatório!',
            'bairro.required' => 'O :attribute é obrigatório!',
            'telefone.required' => 'O :attribute é obrigatório!',
            'email.required' => 'O :attribute é obrigatório!',
        ];

        $validated = $request->validate([
            'nomeCompleto'          => 'required|min:5',
            'endereco'    => 'required',
            'numero'         => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'bairro' => 'required',
            'telefone' => 'required',
            'email' => 'required',
        ], $messages);

        $cliente = new Cliente();
        $cliente->nomeCompleto          = $request->nomeCompleto;
        $cliente->endereco    = $request->endereco;
        $cliente->bairro         = $request->bairro;
        $cliente->cidade  = $request->cidade;
        $cliente->estado  = $request->estado;
        $cliente->bairro  = $request->bairro;
        $cliente->telefone  = $request->telefone;
        $cliente->email  = $request->email;
        $cliente->save();

        return redirect()->route('cliente.index')->with('status', 'Produto criado com sucesso!');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::get();
        return view('pedido.pedido_index', ['pedidos' => $pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pedido.pedido_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_store' , ['recheios' => $recheios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_show' , ['recheios' => $recheios]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_edit' , ['recheios' => $recheios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_update' , ['recheios' => $recheios]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $recheio = Recheio::OrderBy('nome','ASC')->get(); //pluck('nome', 'id' );
        return view ('recheio.recheio_destroy' , ['recheios' => $recheios]);
    }
}
