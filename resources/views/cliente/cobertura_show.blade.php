@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>cobertura</h1>
    <strong>ID:</strong> {{ $cobertura->id }}<br>
    <strong>Nome:</strong> {{ $cobertura->nome }}<br>
    <strong>Preço:</strong> {{ $cobertura->valor }}<br>
    <strong>Criação:</strong> {{ $cobertura->create_at }}<br>

</div>
@endsection