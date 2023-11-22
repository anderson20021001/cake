@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>venda</h1>
    <strong>ID:</strong> {{ $venda->id }}<br>
    <strong>Nome:</strong> {{ $venda->cliente->nomeCompleto }}<br>
    <strong>Preço:</strong> {{ $venda->data }}<br>
    <strong>Criação:</strong> {{ $venda->create_at }}<br>

    <strong>Item:</strong><br>
    <strong>Tamanho: </strong>{{ $venda->item_venda->tamanho->nome}}<br>
    <strong>Cobertura: </strong>{{ $venda->item_venda->cobertura->nome}}<br>


</div>
@endsection