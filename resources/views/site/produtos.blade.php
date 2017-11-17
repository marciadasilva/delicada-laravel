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
    <div class="row" style="width: 50rem;">
      <div class="card cards">
        <img class="card-img-top" src="/img/golden.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
</div>







@endsection
