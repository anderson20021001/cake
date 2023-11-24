@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>venda</h1>
    <strong>ID:</strong> {{ $venda->id }}<br>
    <strong>Nome:</strong> {{ $venda->cliente->nomeCompleto }}<br>
    <strong>Preço:</strong> {{ $venda->data }}<br>
    <strong>Criação:</strong> {{ $venda->create_at }}<br>

    <strong>Item:</strong><br>
    <strong>Tipo de bolo: </strong>{{  $venda->item_venda->tipo->nome }}<br>
    <strong>Tamanho: </strong>{{  $venda->item_venda->tamanho->nome }}<br>
    <strong>Massa: </strong>{{$venda->item_venda->massa->nome }}<br>
    <strong>Recheio: </strong>{{$venda->item_venda->recheio->nome }}<br>
    <strong>Cobertura: </strong>{{$venda->item_venda->cobertura->nome }}<br>
    <strong>Decoração: </strong>{{$venda->item_venda->decoracao->nome }}<br>
    <strong>Descrição: </strong>{{$venda->item_venda->descricao }}<br>
    <strong>Data de Entrega </strong>{{$venda->data }}<br>
    <strong>Valor: </strong>{{$venda->valor }}<br>


</div>
@endsection