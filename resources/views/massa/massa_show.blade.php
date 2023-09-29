@extends('adminlte::page')

@section('content')


<div class="container">
    <h1>massa</h1>
    <strong>ID:</strong> {{ $massa->id }}<br>
    <strong>Nome:</strong> {{ $massa->nome }}<br>
    <strong>Preço:</strong> {{ $massa->valor }}<br>
    <strong>Criação:</strong> {{ $massa->create_at }}<br>

</div>
@endsection