@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>decoracao</h1>
    <strong>ID:</strong> {{ $decoracao->id }}<br>
    <strong>Nome:</strong> {{ $decoracao->nome }}<br>
    <strong>Preço:</strong> {{ $decoracao->valor }}<br>
    <strong>Criação:</strong> {{ $decoracao->create_at }}<br>

</div>
@endsection