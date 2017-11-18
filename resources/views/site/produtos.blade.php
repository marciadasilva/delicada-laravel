@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

<nav aria-label="breadcrumb" role="navigation" class="margin-top">
  <ol class="breadcrumb breadcrumbs">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Produtos</a></li>
    <li class="breadcrumb-item active"><a href="#">Blusas</a></li>
  </ol>
</nav>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>Filtros</h4>
  </div>
  <div class="sidebar-module">
    <h4>Roupas</h4>
    <ol class="list-unstyled">
      <li><a href="#">Blusas</a></li>
      <li><a href="#">Calças</a></li>
      <li><a href="#">Saias</a></li>
      <li><a href="#">Vestidos</a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Tamanhos</h4>
    <ol class="list-unstyled">
      <li><input type="checkbox"><a href="#"> P </a></li>
      <li><input type="checkbox"><a href="#"> M </a></li>
      <li><input type="checkbox"><a href="#"> G </a></li>
      <li><input type="checkbox"><a href="#"> GG </a></li>
      <li><input type="checkbox"><a href="#"> XG </a></li>
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Preço</h4>
    <ol class="list-unstyled">
      <li><input type="range"><a href="#">Preço</a></li>
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->



<div class="container">
    <div class="row">

      <div class="pull-right">
        <strong>Ordenar por:</strong> <a href="#">Maior Preço</a> | <a href="#">Menor Preço</a> | <a href="#">Mais vendidos</a>
      </div>
      <hr>

      <div class="col-md-3 col-sm-4">
        <div class="single-product">

          <div class="size-card">
            <img class="size-img" src="/img/summer.jpeg" alt="Card image cap">

          </div>

          <h2><a href="#">Nome do Produto</a></h2>

          <div class="shop-card">
            <span class="price-card">R$ 3535</span>
          </div>

          <div class="shop-card">
            <a class="" href="#"><button class="btn btn-primary">Comprar</button></a>
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
</div>







@endsection
