@extends('adminlte::page')
<div class="container">
    <h1>Cliente</h1>
    <strong>Nome:</strong> {{ $cliente->nome}}<br>
    <strong>Quantidade:</strong> {{ $cliente->quantidade}}<br>
    <strong>Preço:</strong> {{ $cliente->preco}}<br>
    <strong>Criação:</strong> {{$cliente->create_at}}<br>

</div>