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


    <form method="POST" action="{{ url('/cliente/' . $cliente->id . '/edit') }}">
        @method('PUT')
        @csrf
        <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value="{{$cliente->nome}}"><br>

  <label for="fname">Email:</label><br>
  <input type="text" id="fname" name="email" value="{{$cliente->email}}"><br>
  
  <label for="fname">Celular:</label><br>
  <input type="text" id="fname" name="celular" value="{{$cliente->celular}}"><br>

  <label for="fname">Endereco:</label><br>
  <input type="text" id="fname" name="endereco" value="{{$cliente->endereco}}"><br>

  <input type="submit" value="Enviar">


</form>

</div>

@endsection