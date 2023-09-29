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


    <form method="POST" action="{{url('/venda/create')}}">
        @csrf

        
  <label for="fname">ID</label><br>
  <input type="text" id="fname" name="nome"><br>

  <label for="fname">CLIENTE_ID</label><br>
  <input type="text" id="fname" name="valor"><br>

  <label for="fname">DATA</label><br>
  <input type="date" id="fname" name="data"><br>

  <input type="submit" value="Enviar">

</form>

</div>
@endsection