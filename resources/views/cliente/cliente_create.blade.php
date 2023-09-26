@extends('adminlte::page')

@section('content')
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


    <form method="POST" action="{{url('/cliente/create')}}">
        @csrf

        <label for="cliente">Escolha uma categoria:</label>

        <select name="cliente_id" id="cliente">
             @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>
        <br>
        
  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome"><br>

  <label for="fname">Quantidade:</label><br>
  <input type="text" id="fname" name="quantidade"><br>

  <label for="fname">Preço:</label><br>
  <input type="text" id="fname" name="preco"><br>

  <input type="submit" value="Enviar">

</form>

</div>