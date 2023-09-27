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


    <form method="POST" action="{{ url('/cliente/' . $cliente->id . '/edit') }}">
        @method('PUT')
        @csrf
        <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value="{{$cliente->nome}}"><br>

  <input type="submit" value="Enviar">


</form>

</div>