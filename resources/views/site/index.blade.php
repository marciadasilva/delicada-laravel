@extends('layouts.master')

@section('title', 'Delicada Mulher')

@section('content')

    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-item white-text" href="" id="slide1">
            <h2>Delicada Mulher Moda Feminina</h2>
            <p class="white-text">Novidades todo Mês</p>
            <a class="btn waves-effect white grey-text darken-text-2">Confira o Estoque</a>
        </div>
        <div class="carousel-item white-text" href="" id="slide2">
            <h2>Entregas a Domicilio</h2>
            <p class="white-text">Entre em contato para agendar uma visita</p>
            <a class="btn waves-effect white grey-text darken-text-2">Veja Mais</a>
        </div>
        <div class="carousel-item white-text" href="" id="slide3">
            <h2>Delicada Mulher</h2>
            <a class="btn waves-effect white grey-text darken-text-2">Agente uma Visita</a>
        </div>
    </div>

    <section id="description-index">
        <h3>Delicada Mulher Moda Feminina</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Cum dolorem doloribus ex, porro quibusdam quisquam sit suscipit vel veritatis vero?
            Aut consequatur consequuntur facilis omnis, sit tenetur!
            Architecto at, autem consequuntur illum iste laboriosam maiores officia perferendis
            perspiciatis qui, ratione, similique. Atque ea eos eum labore minima minus nam quam
            quibusdam, quo! Adipisci consequuntur cum debitis dolor dolore ea, error eveniet
            fuga hic illo magnam odio praesentium quam quasi ut vitae voluptates? Ab, consequatur
            corporis cupiditate deserunt dolore doloribus earum, eligendi error iusto molestias
            nihil nisi quam quis, sed sunt unde vero vitae voluptatem. Assumenda ex facere
            mollitia nisi perspiciatis.</p>
    </section>

    <section id="category-index">

        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/blouse2.jpeg') }}">
                <span class="card-title">Blusas</span>
            </div>
            <div class="card-content">
                <p>Blusas de viscose e malha, bom para usar no verão.</p>
            </div>
            <div class="card-action">
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/skirt2.jpeg') }}">
                <span class="card-title">Saias</span>
            </div>
            <div class="card-content">
                <p>Saias floridas, leve e bonitas.</p>
            </div>
            <div class="card-action">
                <a href="#">Ver mais</a>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <img src="{{ asset('img/pants.jpeg') }}">
                <span class="card-title">Calças</span>
            </div>
            <div class="card-content">
                <p>Calças jeans coloridas e normais.</p>
            </div>
            <div class="card-action">
                <a href="#">Ver mais</a>
            </div>
        </div>

    </section>

    <section id="thumbnail-index">
        <h2>Confira as novidades para o Verão</h2>
        <img class="img-responsive" src="{{ asset('img/summer.jpeg') }}" alt="Generic placeholder image">
    </section>

@endsection
