@extends('layouts.app')

@section('content')

  <style>
    body{
      background-color:#FFE4E1;
    }
.card {
        margin: 30px;
        max-width: 100%;
        height: 350px;
      }
      /* Reduz o tamanho das imagens nos cards */
      .card-img-top {
        max-width: 100%;
        margin: 0 auto;
      }
      /* Faz o botão ocupar a largura total */
      .btn-primary {
        width: 100%;
      }
      .container2 {
    background-color: #e0e0e0; /* Cor de fundo da div */
    width: 100%; /* Ocupa toda a largura da página */
    height: 600px; /* Altura da div (ajuste conforme necessário) */
    display: inline-flex;
    align-items: center;
  }

    .background1 {
      flex-grow: 1; /* Ocupa todo o espaço disponível na div */
    }

    .image {
      width: 50%; /* A imagem ocupa metade da largura da div */
      height: 100%; /* Mantém a proporção da imagem */
    }
    #image3{
      background-attachment:fixed;
      background-position:absolute;
      margin-left:1800px;
    }
    #whatsapp-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
        cursor: pointer;
      }

      #whatsapp-icon img {
        width: 100px;
        height: 100px;
        background-attachment: fixed;
        background-position: absolute;
      }
      .container33{
    background-color:#FFF0F5; /* Cor de fundo da div */
    FFF0F5, FFE4E1
    max-width: 100%; /* Ocupa toda a largura da página */
    display: flex;
    align-items: flex-start; /* Alinha os elementos no topo da div */
  }

  .image1 {
 /* A imagem ocupa metade da largura da div */
    max-width:80%;
    height:400px;
  }

  .content1 {
    flex: 1; /* Ocupa o espaço restante da div */
    padding: 20px; /* Adiciona um espaçamento interno */
  }

  #AlterarFonteH1 {
    color: #7c3e12;
    font-style: italic;
    font-weight: bolder;
    text-align:center;
  }

  .fonte{
    font-family: Verdana;
    font-style: italic;
    color:#7c3e12;
    text-align:center;
    max-width:100%;
    margin-bottom:60px;
  }
  .width{
    margin: auto;
  display: block;
  max-width:100%;
  height:900px;
    
  }
  .card-text{
    font-size:15px;
  }
  .card-img-top{
    max-width:100%;
    height:250px;
  }
#expandir{
  max-width:100%;
}
.card-body{
  display:block
  
}
.card{
  
  display:flex;
  width:400px;
  height:200px;
}
.display{
  justify-content:center;
  display:flex;
  max-width:100%;
}
h5{
  text-align:center;
  font-size:25px;
  font-style:italic;
}
.card-footer{
  max-width:100%;
}
#navbarNav{
  color:brown;
}
.card-text{
  text-align:center;
  font-family:tahoma;
  font-size:20px;
  font-weight:bolder;
  color:brown;

}
      </style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="{{ url('/imagens/cake1.jpg')}}" class="width">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/imagens/boloDeFrutas.jpg')}}" class="width" alt="Slide 2">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/imagens/cake3.jpg')}}" class="width" alt="Slide 3">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/imagens/boloBrigadeiro.jpg')}}" class="width" alt="Slide 4">
            <div class="carousel-caption">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>

<div class="container33">
    <div class="content1">
      <h1 id="AlterarFonteH1">Nado Cake's</h1> <br><br>,<br>
      <p class="fonte">
        Reginaldo é um entusiasta da culinária desde a adolescência, e sua mãe foi sua grande inspiração.
        Resolveu investir na ideia e se especializar em fazer bolos para festas, eventos e aprimorou-se em decoração.
        Criou novos sabores de recheios para atender às preferências dos seus clientes.
        A marca Nado Cake’s é reconhecida pela qualidade, sabor, criatividade, bolos personalizados e por fazer com que cada celebração seja única e especial.
        Deixo aqui meu convite a todos vocês para degustarem verdadeiras obras de arte preparadas com muito amor e carinho!!!
      </p>
    </div>
    <img src="{{ url('/imagens/cake3.jpg')}}" alt="Sua Imagem" class="image1">
  </div>



<div class="display">
  <div class=" row-cols-1 row-cols-md-3 " class="card-img-top" style="display:flex; justify-content:Center;">
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/kitkat.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo kit kat</h5>
        <p class="card-text">Massa: baunilha <br> Recheio: brigadeiro <br> Decoração: Personalizada
      </p>
     
       </div>
      
      <div class="card-footer">
        <span>
          <a href="#" class="btn btn-primary" style=" background-color:#FFC0CB;">Comprar</a>
      </span>
      
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/frutasbolo.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Simples</h5>
        <p class="card-text">Massa: Banilha<br> Cobertura: Chatininho e frutas.</p>
        
      </div>
      
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary"  style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/morangobolo.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo chantininho</h5>
        <p class="card-text">Massa: Chocolate <br> Recheio: Chocolate Branco com Morango</p>
        
      </div>
      
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
        
      </div>
    </div>
  </div>
</div>
</div>

<br>
<div class="display">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/bolobolo.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Pelado</h5>
        <p class="card-text">Massa: Baunilha<Br> Recheio: Limão <br> Decoração: Decorado com frutas</p>
       
      </div>
    
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
      
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/boloArcoiris.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Personalizado</h5>
        <p class="card-text">Massa: Baunilha<br> Recheio:laka com oreo</p>
       
      </div>
      
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/boloHomemAranha.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Personalizado</h5>
        <p class="card-text">Massa Baunilha<br> Recheio: Ninho trufado</p>
       
      </div>
     
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
        
      </div>
    </div>
  </div>
</div>
</div>
<br>
<div class="display">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/redvel.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Naked</h5>
        <p class="card-text">Massa: Vermelha<br> Recheio: Limão</p>
        
      </div>
      
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/morango.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo de chocolate</h5>
        <p class="card-text">Massa: Chocolate<br> Recheio: chocolate <br> Cobertura: chantininho.</p>
       
      </div>
     
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bolo Naked</h5>
        <p class="card-text">Massa: Baunilha <br> Recheio: chocolate branco com morango</p>
        
      </div>
      
      <div class="card-footer">
      <span>
          <a href="#" class="btn btn-primary" style="background-color:#FFC0CB;" class=>Comprar</a>
      </span>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
    

    <div id="whatsapp-icon">
      <a href="javascript:void(0);" onclick="window.open(whatsappURL, '_blank');">
        <img src= "{{ url('/imagens/wpp.png')}}" alt="WhatsApp" width="50px">
      </a>
    </div>

    <script>
      var whatsappURL = "https://api.whatsapp.com/send?phone=21985423502&text=Olá,%20você%20poderia%20me%20ajudar?";
    </script>




    <footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
</svg></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      >
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
</svg></a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://instagram.com/nados_cake?igshid=OGQ5ZDc2ODk2ZA=="
        role="button"
        ><i class="fab fa-instagram"></i
      ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

        <!-- <div class="wpp-btn">
            <a href="https://web.whatsapp.com/send?phone=555185947960&text= Olá, você poderia me ajudar?" target="_blank">
                <img src="img/wpp-icon.png" alt="">
            </a>
        </div> -->

       
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0&appId=2832877280281221&autoLogAppEvents=1" nonce="bK74bsQr"></script>
    </body>
</html>
    

    <!-- <div class="wpp-btn">
            <a href="https://web.whatsapp.com/send?phone=5521985423502&text= Olá, como podemos ajudar?" target="_blank">
                <img src="img/wpp-icon.png" alt="">
            </a>
        </div> -->

        <span class="wptwa-flag"></span>
    <svg xmlns="https://www.w3.org/2000/svg" style="display: none;">
        <symbol id="wptwa-logo">
            <path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522   c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982   c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537   c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938   c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537   c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333   c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882   c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977   c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344   c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223   C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
        </symbol>
    </svg>

    <div class="wptwa-container" data-delay-time="1" data-inactive-time="1" data-scroll-length="50" data-auto-display-on-mobile="off">
        <div class="wptwa-box">
            <div class="wptwa-wrapper">              
                <div class="wptwa-description">
                    <p>Olá! como podemos ajuda? Clique no atendimento abaixo que em breve responderemos.</p>
                </div>            
                <span class="wptwa-close"></span>
                <div class="wptwa-people">                       
                    <a href="https://web.whatsapp.com/send?phone=5521985423502&text= Olá, como podemos ajudar?" target="_blank" class="wptwa-account">
                        <div class="wptwa-face"><img src="img/logo-facebook.jpg" onerror="this.style.display='none'"></div>
                        <div class="wptwa-info">
                            <span class="wptwa-title">Atendimento</span>>                        
                        </div>
                        <div class="wptwa-clearfix"></div>
                    </a>                                               
                </div>
                             
                </div>
            </div>
        </div>
        <span class="wptwa-handler">
            <svg class="WhatsApp" width="15px" height="15px" viewBox="0 0 90 90"><use xlink:href="#wptwa-logo"></svg>
            <span class="text">Fale conosco via WhatsApp</span>          
        </span>
    </div>

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/idangerous.swiper.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/placeholder.min.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/bxslider/jquery.bxslider.min.js"></script>
        <script src="js/InstagramFeed.js"></script>
        <script src="js/global.js"></script>
        <script src="js/wpt-whatsapp.js"></script>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v9.0&appId=2832877280281221&autoLogAppEvents=1" nonce="bK74bsQr"></script>
        <br/><br/>

<!--CONTATO-->
<div class="contact f-contact scroll-to-block" >
    <div class="container">
        <h2 class="block-title r-block-title">                   
            Endereço
        </h2>
      </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-info">
  
                    <p>R. Fernandes Vieira, 666 - Estacio | Rio de Janeiro/RJ</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Telefone e Email</h5>
                            <p><a class="phone" href="tel:21985453502">21 9854.535502</a> (tele-entrega) <br> <a class="mail-us" href="mailto:admelianesagaça@gmail.com">admelianesagaça@gmail.com</a></p>
                        </div>
                        <div class="col-sm-6">
                            <h5>Funcionamento</h5>
                           <p>Segunda - Sábado <br> 09:00 às 19:00</p>
                        </div>
                    </div>                      
                </div>                 
                
            </div>
            


@endsection