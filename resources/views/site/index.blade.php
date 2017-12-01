@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

    <div class="index">

      <div class="wrap">
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
          <div class="slide slide1">
            <div class="slide-content">
              <h1>Delicada Mulher Moda Feminina</h1>
              <span>Novidades todo Mês</span>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Confira o estoque</a></p>
            </div>
          </div>

          <div class="slide slide2">
            <div class="slide-content">
              <span>Entre em contato para agendar uma visita</span>
              <h1>Entregas a Domicilio</h1>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Veja Mais</a></p>
            </div>
          </div>

          <div class="slide slide3">
            <div class="slide-content">
              <h1>Delicada Mulher</h1>
              <p><a class="btn btn-lg cor-vermelho" href="#" role="button">Agente uma Visita</a></p>
            </div>
          </div>
        </div>
        <div id="arrow-right" class="arrow"></div>
      </div>

      <div class="category-index">

        <div>
            <img src="{{ asset('img/blouse.jpeg') }}" alt="Generic placeholder image">
            <h2>Blusas</h2>
            <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
          </div>

          <div>
            <img src="{{ asset('img/skirt.jpeg') }}" alt="Generic placeholder image">
            <h2>Saias</h2>
            <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
          </div>

          <div>
            <img src="{{ asset('img/pants.jpeg') }}" alt="Generic placeholder image">
            <h2>Calças</h2>
            <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
          </div>

        <div>
          <img src="{{ asset('img/pants.jpeg') }}" alt="Generic placeholder image">
          <h2>Calças</h2>
          <p><a class="btn btn-default" href="#" role="button">Conferir &raquo;</a></p>
        </div>

      </div>

      <div class="hr-index">
        <hr class="featurette-divider">
      </div>

      <div class="thumbnail-index">
        <div class="thumbnail-text">
          <h2>Confira as novidades para o Verão</h2>
        </div>
        <div class="thumbnail-img">
          <img class="img-responsive" src="{{ asset('img/summer.jpeg') }}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

    </div>

@endsection
