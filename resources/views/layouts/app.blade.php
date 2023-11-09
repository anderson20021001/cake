<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                    <a class="nav-link" href="#carouselExampleIndicators" style="color: #ffffff;">Início</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#irParaCard" style="color: #ffffff;">Produto</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('/cadastroCliente') }}" style="color: #ffffff;">Fazer Pedido</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="https://api.whatsapp.com/send?phone=21985423502&text=Olá,%20você%20poderia%20me%20ajudar?" style="color: #ffffff;">Contato</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#AlterarFonteH1" style="color: #ffffff;">Quem Somos</a>
                </li>
            </ul>
        </div>
    <div id="app">
       
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   {{-- config('app.name', 'Laravel') --}} 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                        <!--
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- Auth::user()->name --}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{-- __('Logout') --}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        </nav>
      @yield('content')

</body>
</html>
