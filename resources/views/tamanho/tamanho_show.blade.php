@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>tamanho</h1>
    <strong>ID:</strong> {{ $tamanho->id }}<br>
    <strong>Nome:</strong> {{ $tamanho->nome }}<br>
    <strong>Preço:</strong> {{ $tamanho->valor }}<br>
    <strong>Criação:</strong> {{ $tamanho->create_at }}<br>

</div>
@endsection