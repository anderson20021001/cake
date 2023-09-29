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


    <form method="POST" action="{{ url('/tamanho/' . $tamanho->id . '/edit')  }}">
        @method('PUT')
        @csrf
        
  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value="{{ $tamanho->nome }}"><br>

  <label for="fname">Valor:</label><br>
  <input type="text" id="fname" name="valor" value="{{ $tamanho->valor }}"><br>

  <input type="submit" value="Enviar">

</form>




</div>
@endsection