@extends('layouts.master')

@section('title', 'Categorias')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <ul class="collection">
                <!-- quando clicar chamar outra tela só com a categoria selecionada -->
                @foreach($categories as $category)
                    <li class="collection-item"><a href='/categories/{{$category->id}}'> {{$category->name }}</a> </li>
                @endforeach
            </ul>

            <button type="submit" class="btn waves-effect white grey-text darken-text-2"><a href='/category/create'>
                    <i class="material-icons">open_in_new</i> Nova Categoria</a></button>
        </div>
    </section>

@endsection
