@extends('adminlte::page')

@section('content')


<div class="container">
  vendas
  <br><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



@if (session('status'))
  <div class="alert alert-success">
      {{ session('status') }}
</div>
@endif
<script>
  function ConfirmDelete() {
    return confirm('Tem certeza que deseja excluir este registro?');
  }
</script>



<a href="{{url('/venda/create')}}">Criar</a>
<style>
  form {
    display:inline-block;
  }
  table, th, td{
    border-right: 2px solid black;
    border-left: 2px solid black;
    border-bottom: 2px solid black;
    text-decoration:none;
    text-align:center;


  }


</style>
<body>
 
  
  <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Cliente</th>
      <th scope="col">Data</th>
      <th scope="col">WhatsApp</th>
      <th scope="col">Ações</th>

    </tr>
  </thead>
<tbody>
@foreach ($venda as $venda)
  <tr>
   <td>{{$venda->id}}</td>
    <td>{{$venda->cliente->nomeCompleto}}</td>
    <td>{{$venda->data}}</td>
    <td><a href="https://wa.me//55{{$venda->cliente->telefone}}?text=Tenho%20interesse%20em%20comprar%20seu%20bolo%20no%20valor%20de%20{{$venda->valor}}">WhatsApp</a></td>
   

    <td>
      <div id="estilo">
      <a href= "{{ url('/venda/' . $venda->id) }}" class="btn btn-primary">VISUALIZAR</a>
      <a href= "{{ url('/venda/' . $venda->id . '/edit') }}" class="btn btn-warning">EDITAR</a>
      <form method="POST" action="{{ url('/venda/' . $venda->id) }}" onsubmit="return ConfirmDelete()">
        @method('DELETE')
        @csrf
        <input class="btn btn-danger" type="submit" value="EXCLUIR">
        <!--<a href= "{{ url('/venda/' . $venda->id) }}" class="btn btn-danger" >Excluir</a>-->
        </form>
</div>

    </td>
  </tr>
  @endforeach
</tbody>
</table>

  

</div>
</body>

@endsection