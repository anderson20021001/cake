<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
        /* Estilo para as imagens do carrossel */
        .carousel-inner img {
            width: 100%;
            height: 880px; /* Altura fixa para todas as imagens */
            object-fit: cover; /* Redimensiona a imagem para cobrir o espaço */
        }
            .cards-wrapper {
        display: flex;
        justify-content: center;
    }
    .card img {
        max-width: 100%;
        max-height: 100%;
    }
    .card {
        width: 25%;
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
    </style>
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-danger-subtle" style="padding-bottom: 5px; background-color:#FFC0CB;">
    <div class="container">
        <img src="{{ url('/imagens/logo.png')}}" title="logo da confeitaria" title="Logo da confeitaria de bolo" width="140px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #ffffff;">Início</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #ffffff;">Produto</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/fazerPedido') }}" style="color: #ffffff;">Fazer Pedido</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #ffffff;">Contato</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#" style="color: #ffffff;">Quem Somos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
      @yield('content')
     
    </body>
</html>