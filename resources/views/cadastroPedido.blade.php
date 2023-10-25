@extends('layouts.app')

@section('content')

    <!-- Formulário --> 
    <!-- Container principal -->
  <div class="container">

<!-- Cabeçalho -->
<style>
      body{
         background-color:#ffffe0;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .form-input {
        width: 100%;
        margin-bottom: 15px;
        display: flex;
        flex-direction: column;
      }
      fieldset {
        border: 1px solid #000; /* Adiciona uma borda ao fieldset */
        border-radius: 0; /* Remove cantos arredondados (caso haja) */
        padding: 10px; /* Adiciona espaço interno para melhor aparência */
        width: 700px;
        max-width: 700px; /* Largura máxima para o fieldset */
        margin: 0 auto; /* Centraliza horizontalmente */
        border: 1px solid #2E64FE ;
        
      }
      legend {
        text-align: center;
        border: 1px solid black;
        border-radius:10px ;
        width: 200px;
        background-color: #2E64FE;
      }
      input, select {
        border: none; /* Remove a borda padrão */
        border-bottom: 1px solid #000; /* Adiciona uma borda na parte inferior */
        border-radius: 0; /* Remove cantos arredondados (caso haja) */
        padding: 5px;
        width: 100%;
      }
      label{
        color: white;
      }
      .borda{
        background-color:#ffffe0;
        width: 900px;
        border-radius:10px;
        margin-top:30px;   
      }

      input{
         border-radius:10px;
      }
      .posicionamento{
        display:flex;
        padding: 10px;
      }
      #esquerda{
        margin-right: 10px;
      }
    </style>
    <link rel="stylesheet" href="styles.css"/>
    <title>Pedido</title>
  </head>
  <body>
  <!-- Container principal -->
  <div class="container">

    <!-- Cabeçalho -->
    <div class="cabecalho">
    </div>

    <!-- Formulário -->
    <div class="borda">
     <!-- Formulário -->
     <div class="borda">
    <form id="form" method="post" action="{{ url('/cadastroPedido')}}">
    @csrf
      <fieldset>
        <legend>Vamos construir o seu bolo</legend>

        <!-- Nome completo -->
        <div class="form-input">
          <label for="nome-completo">Tipo do bolo</label>
          <select id="Tipo de bolo" name="tipo_id">
            @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->nome }}</option> 
            @endforeach 
          </select> 
        </div>

        <!-- Endereço -->
        <div class="form-input">
          <label for="Tamanho">Tamanho</label>
            <select id="Tamanho" name="Tamanho"> 
          <option value=>Pequeno (15cm) - Serve até 15 fatias e custa R$ 90,00 </option> 
          <option value=>Médio (20cm) - Serve até 28 fatias (R$130,00) </option> 
          <option value=>Grande (25cm) - Serve até 42 fatias (R$180,00) </option> 
          <option value=>Gigante (30 cm) - Serve até 56 fatias (R$215,00) </option> 
          <option value=>Para tamanhos excepcionais,o cliente solicitará um orçamento </option> 
            </select> 
          <small></small>
        </div>

        <!-- Número -->
        <div class="form-input">
          <label> Massa</label> 
            <select id=" Massa" name=" Massa"> 
              <option value=>Sabor Chocolate </option> 
              <option value=>Sabor Cenoura </option> 
              <option value=>Sabor  Red Velvet </option> 
              <option value=>Sabor Baunilha </option> 
              <option value=>Sabor Mista (Com um acréscimo de R$30,00) </option> 
           </select> 
          <small></small>
        </div>

        <!-- Bairro -->
        <div class="form-input">
          <label> Recheio</label> 
            <select id=" Recheio" name=" Recheio"> 
              <option value=>Chocolate Branco </option> 
              <option value=>Chocolate preto, Beijinho	 </option> 
              <option value=>Doce de Leite </option> 
              <option value=> Ninho Trufado, Laka Oreo </option> 
              <option value=> Maracujá </option> 
              <option value=> Frutas(Com um acréscimo de R$30,00) </option> 
              <option value=> Limão </option> 
              <option value=> Gotas de chocolate(Com um acréscimo de R$30,00) </option> 
           </select> 
          <small></small>
        </div>

        <!-- Cidade -->
        <div class="form-input">
          <label> Decoração</label> 
            <select id=" Decoração" name=" Decoração"> 
              <option value=>Bolo com topo personalizado (papelaria)  </option> 
              <option value=>Bolo decorado com frutas  </option> 
           </select> 
          <small></small>
        </div>
        <div class="posicionamento">
          <input type="submit" value="Voltar" id="esquerda">
          <input type="submit" value="Avançar" id="direita">
        </div>
      </fieldset>
    
    </form>
  </div>
    </div>

@endsection