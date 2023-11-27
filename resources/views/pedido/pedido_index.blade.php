<!--Colocar no clienteBlade-->
<!--olhar a documentação no blade na parte de loops-->


@extends('adminlte::page')

@section('content')
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