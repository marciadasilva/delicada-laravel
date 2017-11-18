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

<div class="container">
    <div class="row">
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
