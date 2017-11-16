@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ asset('img/bag.jpeg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Delicada Mulher Moda Feminina</h1>
              <p>Novidades todo Mês</p>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Confira o estoque</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="{{ asset('img/entrega.jpeg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Entregas a Domicilio</h1>
              <p>Entre em contato para agendar uma visita</p>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Veja Mais</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="responsive-img" src="{{ asset('img/banner.jpeg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Delicada Mulher</h1>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Agente uma Visita</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('img/blouse.jpeg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Blusas</h2>
          <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('img/skirt.jpeg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Saias</h2>
          <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('img/pants.jpeg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>Calças</h2>
          <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Confira as novidades <span class="text-muted">para o Verão</span></h2>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="{{ asset('img/summer.jpeg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
    </div><!-- /.container -->

@endsection
