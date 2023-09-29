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

        
  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome"><br>

  <label for="fname">Email:</label><br>
  <input type="text" id="fname" name="email"><br>

  <label for="fname">Celular:</label><br>
  <input type="text" id="fname" name="celular"><br>

  <label for="fname">Endereco:</label><br>
  <input type="text" id="fname" name="endereco"><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection