@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Cliente</h1>
    <strong>Nome:</strong> {{ $cliente->nome}}<br>
    <strong>Email:</strong> {{ $cliente->email}}<br>
    <strong>Celular:</strong> {{ $cliente->celular}}<br>
    <strong>Endereço:</strong> {{ $cliente->endereco}}<br>
    <strong>:</strong> {{$cliente->create_at}}<br>

</div>

@endsection