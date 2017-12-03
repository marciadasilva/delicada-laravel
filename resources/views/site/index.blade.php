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
      </div>

      <div class="description-index">
        <h3>Delicada Mulher Moda Feminina</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dolorem doloribus ex, porro quibusdam quisquam sit suscipit vel veritatis vero? Aut consequatur consequuntur facilis omnis, sit tenetur! Architecto at, autem consequuntur illum iste laboriosam maiores officia perferendis perspiciatis qui, ratione, similique. Atque ea eos eum labore minima minus nam quam quibusdam, quo! Adipisci consequuntur cum debitis dolor dolore ea, error eveniet fuga hic illo magnam odio praesentium quam quasi ut vitae voluptates? Ab, consequatur corporis cupiditate deserunt dolore doloribus earum, eligendi error iusto molestias nihil nisi quam quis, sed sunt unde vero vitae voluptatem. Assumenda ex facere mollitia nisi perspiciatis.</p>
      </div>

      <div class="category-index">

        <div class="card blusas">
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

        <div class="card saias">
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

        <div class="card calcas">
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

    <script>
        // Slider
        var sliderImages = document.querySelectorAll(".slide"),
            arrowLeft = document.querySelector("#arrow-left"),
            arrowRight = document.querySelector("#arrow-right"),
            current = 0;

        // Clear all images
        function reset() {
            for (var i = 0; i < sliderImages.length; i++) {
                sliderImages[i].style.display = "none";
            }
        }

        // Init slider
        function startSlide() {
            reset();
            sliderImages[0].style.display = "block";
        }

        // Show prev
        function slideLeft() {
            reset();
            sliderImages[current - 1].style.display = "block";
            current--;
        }

        // Show next
        function slideRight() {
            reset();
            sliderImages[current + 1].style.display = "block";
            current++;
        }

        // Left arrow click
        arrowLeft.addEventListener("click", function() {
            if (current === 0) {
                current = sliderImages.length;
            }
            slideLeft();
        });

        // Right arrow click
        arrowRight.addEventListener("click", function() {
            if (current === sliderImages.length - 1) {
                current = -1;
            }
            slideRight();
        });

        startSlide();

    </script>

@endsection
