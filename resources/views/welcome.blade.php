@extends('layouts.app')

@section('content')
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

<div class="container mt-4 ">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="Produto 1">
                <div class="card-body">
<h5 class="card-title">Nome do Produto 1</h5>
                    <p class="card-text">Descrição do Produto 1</p>
                    <p class="card-text">Preço: R$ 50,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto1" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto1"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto1" name="quantidadeProduto1" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto1"><img src="plus-lg.svg" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="Produto 2">
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto 2</h5>
                    <p class="card-text">Descrição do Produto 2</p>
                    <p class="card-text">Preço: R$ 40,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto2" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto2"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto2" name="quantidadeProduto2" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto2"><img src="plus-lg.svg" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="Produto 3">
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto 3</h5>
                    <p class="card-text">Descrição do Produto 3</p>
                    <p class="card-text">Preço: R$ 60,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto3" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto3"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto3" name="quantidadeProduto3" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto3"><img src="plus-lg.svg" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake1.jpg')}}" class="card-img-top" alt="Produto 4">
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto 4</h5>
                    <p class="card-text">Descrição do Produto 4</p>
                    <p class="card-text">Preço: R$ 70,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto4" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto4"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto4" name="quantidadeProduto4" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto4"><img src="plus-lg.svg" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake2.jpg')}}" class="card-img-top" alt="Produto 5">
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto 5</h5>
                    <p class="card-text">Descrição do Produto 5</p>
                    <p class="card-text">Preço: R$ 80,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto5" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto5"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto5" name="quantidadeProduto5" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto5"><img src="plus-lg.svg" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/imagens/cake3.jpg')}}" class="card-img-top" alt="Produto 6">
                <div class="card-body">
                    <h5 class="card-title">Nome do Produto 6</h5>
                    <p class="card-text">Descrição do Produto 6</p>
                    <p class="card-text">Preço: R$ 90,00</p>
                    <!-- Formulário para seleção de quantidade -->
                    <form class="d-flex">
                        <div class="mb-3">
                            <label for="quantidadeProduto6" class="form-label">Quantidade:</label>
                            <div class="input-group">
                                <button type="button" class="btn btn-outline-secondary w-25" id="decrementProduto6"><img src="dash.svg" alt="Decrementar"></button>
                                <input type="number" id="quantidadeProduto6" name="quantidadeProduto6" class="form-control w-50" value="1" min="1">
                                <button type="button" class="btn btn-outline-secondary w-25" id="incrementProduto6"><img src="{{ url('/imagens/mais.jpg')}}" alt="Incrementar"></button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Adicionar ao Carrinho</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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