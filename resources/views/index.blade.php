@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

    {{-- CAROUSEL --}}
    <section class="carousel-custom">
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
            <div class="slide slide1">
                <div class="slide-content">
                    <h1>Delicada Mulher Moda Feminina</h1>
                    <span>Novidades todo Mês</span>
                    <a href="#" role="button">Confira o Estoque</a>
                </div>
            </div>

            <div class="slide slide2">
                <div class="slide-content">
                    <h1>Entregas a Domicilio</h1>
                    <span>Entre em contato para agendar uma visita</span>
                    <a href="#" role="button">Veja Mais</a>
                </div>
            </div>

            <div class="slide slide3">
                <div class="slide-content">
                    <h1>Delicada Mulher</h1>
                    <a href="#" role="button">Agente uma Visita</a>
                </div>
            </div>
        </div>
        <div id="arrow-right" class="arrow"></div>
    </section>

    {{-- DESCRIPTION SECTION --}}

    <section id="description-index">
        <h3>Delicada Mulher Moda Feminina</h3>
        <p>
            @foreach($companies as $company)
                @if(isset($company->description))
                    {{$company->description}}
                @else
                    Descrição da empresa.
                @endif
            @endforeach
        </p>
    </section>

    {{-- CATEGORY SECTION --}}

    <section id="category-index">
        @if(sizeof($categories) == 1)
        <div class="category-1">
        @elseif(sizeof($categories) == 2)
        <div class="category-2">
        @elseif(sizeof($categories) == 3 ||(sizeof($categories) % 3) == 0 )
        <div class="category-3">
        @elseif(sizeof($categories)== 4 || (sizeof($categories) % 4) == 0)
        <div class="category-4">
        @elseif(sizeof($categories)== 5 || (sizeof($categories) % 5) == 0)
        <div class="category-5">
        @else
        <div class="category-4">
        @endif
        @foreach($categories as $category)
            <div class="card">
                <div class="card-image">
                    <img src="{{ $category->image  }}">
                    <span class="card-title">{{ $category->name  }}</span>
                </div>
                <div class="card-content">
                    <p>{{ $category->description  }}</p>
                </div>
                <div class="card-action">
                    <a href="/products/{{ $category->id}}">Ver mais</a>
                </div>
            </div>
        @endforeach
        </div>
    </section>

    {{-- THUMBNAIL SECTION --}}

    <section id="thumbnail-index">
        <h2>Confira as novidades para o Verão</h2>
        <img class="img-responsive" src="{{ asset('img/site/thumbnail.jpeg') }}"
             alt="Novidades">
    </section>
@endsection