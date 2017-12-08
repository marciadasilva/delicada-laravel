
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico')}}">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

      @include('layouts.header')

      @yield('content')

      @include('layouts.footer')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.carousel.carousel-slider').carousel();
            autoplay()
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }

            $('select').material_select();
        });

         $(function(){
             $(".button-collapse").sideNav();
//             $('.carousel.carousel-slider').carousel({fullWidth: true});
         });
    </script>

  </body>
</html>
