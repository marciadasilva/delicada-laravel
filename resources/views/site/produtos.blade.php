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
      <div class="col-md-3 col-sm-6">
        <div class="card">

          <div class="size-card">
            <img class="size-img" src="/img/summer.jpeg" alt="Card image cap">

          </div>

          <h2><a href="#">Nome do Produto</a></h2>

          <div class="price-card">
            <ins>R$ 3535</ins>
          </div>

          <div class="shop-card">
            <a class="" data-quantity="1" data-product_sku=""
               data-product_id="70" rel="nofollow" href="#">Comprar</a>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">
        <div class="card">

          <div class="size-card">
            <img class="size-img" src="/img/meme.png" alt="Card image cap">
          </div>

          <h2><a href="#">Nome do Produto</a></h2>

          <div class="price-card">
            <ins>R$ 3535</ins>
          </div>

          <div class="shop-card">
            <a class="" data-quantity="1" data-product_sku=""
               data-product_id="70" rel="nofollow" href="#">Comprar</a>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">
        <div class="card">

          <div class="size-card">
            <img class="size-img" src="/img/summer.jpeg" alt="Card image cap">
          </div>

          <h2><a href="#">Nome do Produto</a></h2>

          <div class="price-card">
            <ins>R$ 3535</ins>
          </div>

          <div class="shop-card">
            <a class="" data-quantity="1" data-product_sku=""
               data-product_id="70" rel="nofollow" href="#">Comprar</a>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6">
        <div class="card">

          <div class="size-card">
            <img class="size-img" src="/img/meme.png" alt="Card image cap">
          </div>

          <h2><a href="#">Nome do Produto</a></h2>

          <div class="price-card">
            <ins>R$ 3535</ins>
          </div>

          <div class="shop-card">
            <a class="" data-quantity="1" data-product_sku=""
               data-product_id="70" rel="nofollow" href="#">Comprar</a>
          </div>

        </div>

      </div>

    </div>
</div>







@endsection
