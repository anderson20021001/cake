@extends('layouts.app')

@section('content')

<!-- Formulário --> 

<form id="form" method="get" action="."> 
<!-- Nome completo --> 
<div class="form-input"> 
  <label>Nome Completo</label> 
  <input type="text" id="nome-completo" placeholder="Digite o seu nome completo..."/> 
  <small></small> 
</div> 

<!-- Endereço --> 

<div class="form-input"> 
    <br> 
  <label>Endereço</label> 
  <input type="text" id="endereco" placeholder="Digite o seu endereço..."/> 
  <small></small> 
</div> 
<!-- Número --> 

<div class="form-input"> 
    <br> 
  <label>Número</label> 
  <input type="text" id="numero" placeholder="Digite o número de sua residência..."/> 
  <small></small> 
</div> 
<!-- Bairro --> 

<div class="form-input"> 
    <br> 
  <label>Bairro</label> 
  <input type="text" id="bairro" placeholder="Digite o seu bairro..."/> 
  <small></small> 
</div> 
<!-- Cidade --> 

<div class="form-input"> 
    <br> 
  <label>Cidade</label> 
  <input type="text" id="cidade" placeholder="Digite a sua cidade..."/> 
  <small></small> 
</div> 
<!-- Estado --> 
<div class="form-input"> 
    <br> 
  <label>Estado</label> 
  <select id="estado" name="estado"> 
    <option value="RJ">Rio de Janeiro</option> 
  </select> 
  <small></small> 
</div> 
<!-- Telefone --> 

<div class="form-input"> 
    <br> 
  <label>Telefone</label> 
  <input type="text" id="Telefone" placeholder="Digite o seu Telefone..."/> 
  <small></small> 
</div> 
<!-- E-mail --> 

<div class="form-input"> 
    <br> 
    <label>E-mail</label> 

          <input type="text" id="E-mail" placeholder="Digite o seu E-mail.../> 

           

          <small></small> 

        </div> 



       

      <div class="form-group> 

       

<h2>Vamos montar o seu Bolo?</h2> 

      </div> 

  

             

         <!-- Tipo do bolo --> 

        <div class=form-input"> 

        <br> 

          <label>Tipo do bolo</label> 

          <select id="Tipo de bolo" name="Tipo de bolo"> 

            <option value=>Bolo Simples </option> 

            <option value=>Bolo Pelado (naked) </option> 

            <option value=>Bolo com cobertura (Chantininho) </option> 

            

          </select> 

          <small></small> 

        </div> 

  

               

                      <!-- Tamanho --> 

        <div class="form-input"> 

            <br> 

          <label>Tamanho</label> 
          <select id="tamanho_id" name="tamanho_id" >
            @foreach($tamanhos as $tamanho)
              <option value="{{ $tamanho->id }}">{{ $tamanho->nome }}</option> 
            @endforeach
              </select> 

          <small></small> 

        </div> 

                          

                          

                         <!-- Massa --> 

        <div class="form-input"> 

            <br> 

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

                           <!-- Recheio --> 

        <div class=form-input> 
            <br> 
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
                               <!-- Decoração --> 
        <div class=form-input> 

            <br> 

          <label> Decoração</label> 

          <select id=" Decoração" name=" Decoração"> 

            <option value=>Bolo com topo personalizado (papelaria)  </option> 

            <option value=>Bolo decorado com frutas  </option> 
         </select> 
          <small></small> 
        </div> 
      </form> 
    </div>

<footer class="bg-dark text-light">
        <div class="container-fluid py-3">
            <div class="row">
                <div class="col-4">
                    <ul class="nav flex-column">
                        <li class="nav-link"><a href="#">Retornar à Loja</a></li>
                        <li class="nav-link"><a href="#">Sobre</a></li>
                        <li class="nav-link"><a href="#">Contato</a></li>
                        <li class="nav-link"><a href="#">Suporte</a></li>
                    </ul>
                </div>
                <div class="col-8">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sed necessitatibus id asperiores iste fugiat, praesentium obcaecati explicabo consequatur voluptatem eos earum blanditiis dolorem eaque veritatis libero? Magni, nam fugiat.
                    </p>
                    <ul class="nav">
                        <li class="nav-link"><i class="fab fa-facebook fa-3x"></i></li>
                        <li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li>
                        <li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
                        <li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center" style="background-color: #333; padding: 20px;">
            &copy 2018 Copyright: <a href="#">Lojas Virtuais</a>
        </div>
    </footer>


@endsection