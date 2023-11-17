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
        
        border-radius: 0; /* Remove cantos arredondados (caso haja) */
        padding: 10px; /* Adiciona espaço interno para melhor aparência */
        width: 700px;
        max-width: 700px; /* Largura máxima para o fieldset */
        margin: 0 auto; /* Centraliza horizontalmente */
        border: 1px solid brown;
        
      }
      legend {
        text-align: center;
        border: 1px solid black;
        border-radius:10px ;
        width: 200px;
        background-color:#FFC0CB;
      }
      input, select {
        border: none; /* Remove a borda padrão */
        border-bottom: 1px solid #000; /* Adiciona uma borda na parte inferior */
        border-radius: 0; /* Remove cantos arredondados (caso haja) */
        padding: 5px;
        width: 100%;
      }
      label{
        color: #6a201f;
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

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Cabeçalho -->
    <div class="cabecalho">
    </div>

    <!-- Formulário -->
    <div class="borda">
    <form id="form" method="post" action="{{ url('/fazerPedido')}}">
      @csrf
      <fieldset>
        <legend>Formulário do Cliente</legend>

        <!-- Nome completo -->
        <div class="form-input">
          <label for="nome-completo">Nome Completo</label>
          <input type="text" name="nomeCompleto" id="nomeCompleto" placeholder="Digite o seu nome completo..." />
          <small></small>
        </div>

        <!-- Endereço -->
        <div class="form-input">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" id="endereco" placeholder="Digite o seu endereço..." />
          <small></small>
        </div>

           <!-- Número -->
           <div class="form-input">
          <label for="numero">Número</label>
          <input type="text" name="numero" id="numero" placeholder="Digite o número de sua residência..." />
          <small></small>
        </div>

          <!-- Bairro -->
          <div class="form-input">
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro" id="bairro" placeholder="Digite o seu bairro..." />
          <small></small>
        </div>

         <!-- Cidade -->
         <div class="form-input">
          <label for="cidade">Cidade</label>
          <input type="text" name="cidade" id="cidade" placeholder="Digite a sua cidade..." />
          <small></small>
        </div>

        
        <!-- Estado -->
        <div class="form-input">
          <label for="estado">Estado</label>
          <select id="estado" name="estado">
            <option value="RJ">Rio de Janeiro</option>
          </select>
          <small></small>
        </div>

        <!-- Telefone -->
        <div class="form-input">
          <label for="telefone">Telefone</label>
          <input type="text" name="telefone" id="telefone" placeholder="Digite o seu Telefone..." />
          <small></small>
        </div>

        <!-- E-mail -->
        <div class="form-input">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" placeholder="Digite o seu E-mail..." />
          <small></small>
        </div>
        <div class="posicionamento">
          
         
          <input type="submit" value="Voltar" id="esquerda" onclick="history.back()" style="color:#6a201f; background-color:#FFC0CB;">
          <input type="submit" value="Avançar" id="direita" style="color:#6a201f; background-color:#FFC0CB;">
        </div>
      
      </fieldset>
      
    </form>
   

   
    
  </div>
  
  
    </div>
    <script>
  document.getElementById("backBtn").addEventListener("click", function(){
    history.back();
  });
</script>


   

   
@endsection