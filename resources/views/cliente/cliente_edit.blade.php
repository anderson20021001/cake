@extends('adminlte::page')
<div>
    Formulário de Criação:<br>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form method="POST" action="{{ url('/cliente/' . $cliente ->id) }}">
        @method('PUT')
        @csrf
        <form>
        <label for="Cliente">Escolha uma categoria:</label>

    <select name="cliente_id" id="cliente">
     @foreach($clientes as $cliente)
        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @if($cliente->id == cliente->cliente_id)
            <option value="{{ $cliente->id }}" selected>{{ $cliente->nome}}</option>
            @else
            <option value="{{ $categoria->id }}"> {{ $cliente->nome}}</option>
            @endif
        @endforeach
    </select>

  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value="{{$cliente ->nome}}"><br>

  <label for="fname">Quantidade:</label><br>
  <input type="text" id="fname" name="quantidade" value="{{$cliente ->quantidade}}"><br>

  <label for="fname">Preço:</label><br>
  <input type="text" id="fname" name="preco" value="{{$cliente ->preco}}" ><br>

  <input type="submit" value="Enviar">

</form>

</div>