<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
       
    
    
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
                    <a class="nav-link" href="{{ url('/cadastroCliente') }}" style="color: #ffffff;">Fazer Pedido</a>
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