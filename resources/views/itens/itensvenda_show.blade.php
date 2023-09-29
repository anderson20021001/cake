@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>itensvenda</h1>
    <strong>ID:</strong> {{ $itensvenda->id }}<br>
    <strong>Nome:</strong> {{ $itensvenda->nome }}<br>
    <strong>Preço:</strong> {{ $itensvenda->valor }}<br>
    <strong>Criação:</strong> {{ $itensvenda->create_at }}<br>

</div>
@endsection