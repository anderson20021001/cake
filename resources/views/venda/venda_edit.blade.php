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


    <form method="POST" action="{{ url('/venda/' . $venda->id . '/edit')  }}">
        @method('PUT')
        @csrf
        
  <label for="fname">ID</label><br>
  <input type="text" id="fname" name="nome" value="{{ $venda->id }}"><br>

  <label for="fname">CLIENTE_ID</label><br>
  <input type="text" id="fname" name="valor" value="{{ $venda->cliente_id }}"><br>

  <label for="fname">DATA</label><br>
  <input type="text" id="fname" name="valor" value="{{ $venda->data }}"><br>

  <input type="submit" value="Enviar">

</form>




</div>
@endsection