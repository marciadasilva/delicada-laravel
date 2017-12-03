@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

    <div class="products-grid">
        <nav>
            <div class="nav-wrapper">
                <a href="/" class="breadcrumb">Home</a>
                <a href="/produtos" class="breadcrumb">Produtos</a>
                <a href="/1" class="breadcrumb">Blusas</a>
            </div>
        </nav>

        <div class="filter">
            <h3>Filtrar por:</h3>
            <h4>Categorias</h4>
            <ul>
                <li><a href="#">Blusas</a></li>
                <li><a href="#">Calças</a></li>
                <li><a href="#">Saias</a></li>
                <li><a href="#">Vestidos</a></li>
            </ul>
            <h4>Tamanhos</h4>
            <input type="checkbox" id="size-p" />
            <label for="size-p"><a href="#"> P </a></label>
            <input type="checkbox" id="size-m" />
            <label for="size-m"><a href="#"> M </a></label>
            <input type="checkbox" id="size-g" />
            <label for="size-g"><a href="#"> G </a></label>
            <input type="checkbox" id="size-gg" />
            <label for="size-gg"><a href="#"> GG </a></label>
            <input type="checkbox" id="size-xg" />
            <label for="size-xg"><a href="#"> XG </a></label>

            <h4>Preço</h4>
            <input type="range"><a href="#"></a>
        </div>


        <div class="main-products">
            <div>
                <strong>Ordenar por:</strong> <a href="#">Maior Preço</a> | <a href="#">Menor Preço</a> | <a href="#">Mais vendidos</a>
            </div>
            <hr>

            @foreach($products as $product)
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($product->image)}}">
                        <span class="card-title">{{$product->name}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$product->description}}</p>
                        <p>Tamanho: {{$product->size}}</p>
                        <p>Cores: {{$product->color}}</p>
                        <p>Preço: {{$product->price}}</p>
                        <p>Quantidade: {{$product->amount}}</p>
                    </div>
                    <div class="card-action">
                        <a href="/products/{{$product->id}}">Encomendar</a>
                    </div>
                </div>
            @endforeach



                <div class="col-md-3 col-sm-4">
                    <div class="single-product">

                        <div class="size-card">
                            <img class="size-img" src="/img/meme.png" alt="Card image cap">
                        </div>

                        <h2><a href="#">Nome do Produto</a></h2>

                        <div class="shop-card">
                            <span class="price-card">R$ 3535</span>
                            <a class="" href="#"><button class="btn btn-primary pull-right">Comprar</button></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="single-product">

                        <div class="size-card">
                            <img class="size-img" src="/img/summer.jpeg" alt="Card image cap">
                        </div>

                        <h2><a href="#">Nome do Produto</a></h2>

                        <div class="shop-card">
                            <span class="price-card">R$ 3535</span>
                            <a class="" href="#"><button class="btn btn-primary pull-right">Comprar</button></a>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 col-sm-4">
                    <div class="single-product">

                        <div class="size-card">
                            <img class="size-img" src="/img/meme.png" alt="Card image cap">
                        </div>

                        <h2><a href="#">Nome do Produto</a></h2>

                        <div class="shop-card">
                            <span class="price-card">R$ 3535</span>
                            <a class="" href="#"><button class="btn btn-primary pull-right">Comprar</button></a>
                        </div>

                    </div>

                </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-5 col-lg-offset-5 col-sm-offset-5 col-xs-offset-5">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        </div>

    </div>




@endsection
