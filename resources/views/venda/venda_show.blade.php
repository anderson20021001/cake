@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>venda</h1>
    <strong>ID:</strong> {{ $venda->id }}<br>
    <strong>Nome:</strong> {{ $venda->cliente_id }}<br>
    <strong>Preço:</strong> {{ $venda->data }}<br>
    <strong>Criação:</strong> {{ $venda->create_at }}<br>

</div>
@endsection