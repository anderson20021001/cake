<!--Colocar no clienteBlade-->
<!--olhar a documentação no blade na parte de loops-->


@extends('adminlte::page')

@section('content')

<div class="container">

  <h2>Pedidos</h2>

 

<table>
  <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Valor</th>
      </tr>
  </thead>
  @foreach ($pedidos as $pedido )
  <tbody>
   
    <tr>
      <td>{{ $pedido->nome}}</td>
      <td>{{ $pedido->email}}</td>
      <td>{{ $pedido->endereco}}</td>
    </tr>

      
</tbody>
  @endforeach
</table>

</div>
@endsection