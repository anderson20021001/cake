@extends('adminlte::page')

@section('content')
<div class="container">

Formulário de Criação:<br>

<form method="POST" action="/profile">
    @csrf

    <form method="POST" action="{{url('/produto/create')}}">
        @csrf

  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="Nome"><br>

  <label for="fname">Quantidade:</label><br>
  <input type="text" id="fname" name="Email"><br>

  <label for="fname">Preço:</label><br>
  <input type="text" id="fname" name="Endereço"><br>

  <input type="submit" value="Enviar">


</form>

    

</form>

</div>
@endsection
