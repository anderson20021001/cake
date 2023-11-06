@extends('layouts.app')

@section('content')
<style>
  .cards-wrapper {
    display: flex;
    justify-content: center;
  }
  .card img {
    max-width: 100%;
    max-height: 100%;
  }
  .card {
    width: 30%;
    margin: 0 0.5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
    border-radius: 0;
  }
  .carousel-inner {
    padding: 1em;
  }
  .carousel-control-prev,
  .carousel-control-next {
    background-color: #e1e1e1;
    width: 5vh;
    height: 5vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
  }
  @media (min-width: 768px) {
    .card img {
      height: 11em;
    }
  }
  svg{
    color:green;
  }
</style>
<h1 style="color:Violet;">Nado Cake's</h1>

<p>
Reginaldo é um entusiasta da culinária desde da adolescência, e sua mãe foi sua grande inspiração.
Resolveu investir na ideia e se especializar em fazer bolos para festas, eventos e aprimorou-se em decoração. 
Criou novos sabores de recheios para atender às preferências dos seus clientes. 
A marca Nado Cake’s é reconhecida pela qualidade, sabor, criatividade, bolos personalizados e por fazer com que cada celebração seja única e especial. 
Deixo aqui meu Convite a todos vocês para degustarem verdadeiras obras de arte preparado com muito amor e carinho!!!
</p>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="{{ url('/imagens/cake1.jpg')}}" class="d-block w-100">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/imagens/cake2.jpg')}}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ url('/imagens/cake3.jpg')}}" class="d-block w-100" alt="Slide 3">
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <div class="card">
        <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
          <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
          <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <div class="card">
        <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
          <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
          <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
          <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
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
                     Porque assim como tudo na vida, nossos bolos são gostosos porque são feitos com amor!
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

        <!--CONTATO-->
<div class="contact f-contact scroll-to-block" >
    <div class="container">
        
        
    </div>
    <div class="container">
        
            </div>

            <div class="col-sm-6">
                <div class="contact-info">
                    
                    <h5>Endereço</h5>
                    <p>R. Fernandes Vieira, 666 - Estacio | Rio de Janeiro/RJ</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Telefone e Email</h5>
                            <p><a class="phone" href="tel:2132222046">21 3222.2046</a> (tele-entrega) <br> <a class="mail-us" href="mailto:admelianesagaça@gmail.com">admelianesagaça@gmail.com</a></p>
                        </div>
                        <div class="col-sm-6">
                            <h5>Funcionamento</h5>
                            <p>Segunda - Sábado <br> 09:00 às 18:30</p>
                        </div>
                    </div> 
                </div>                 
                
            </div>            
        </div>

    </div>
    
                </form>
            </div>
        </div>
    </div>            
</div>        
        

        <!-- <div class="wpp-btn">
            <a href="https://web.whatsapp.com/send?phone=555185947960&text= Olá, você poderia me ajudar?" target="_blank">
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
                    <p>Clique no atendimento abaixo que em breve responderemos.</p>
                </div>            
                
                    </a>                                               
                </div>
                <div class="wptwa-people">                       
                    <a href="https://web.whatsapp.com/send?phone=5521985423502&text= Olá, você poderia me ajudar?" target="_blank" class="wptwa-account">
                        <div class="wptwa-face"><img src="img/logo-facebook.jpg" onerror="this.style.display='none'"></div>
                        <div class="wptwa-info">
                            <span class="wptwa-title">Atendimento</span>                                                        
                                                   
                        </div>
                        <div class="wptwa-clearfix"></div>
                    </a>                                               
                </div>
            </div>
        </div>
        <span class="wptwa-handler">
            <svg class="WhatsApp" width="50px" height="50px" viewBox="0 0 90 90"><use xlink:href="#wptwa-logo"></svg>
            
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
    </body>
</html>
    </footer>


@endsection