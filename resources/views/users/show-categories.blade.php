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

            <form action="/category/create" method="get">
                <button type="submit" class="btn waves-effect white grey-text darken-text-2">
                        Adicionar Categoria
                </button>
            </form>
        </div>
    </section>

@endsection
