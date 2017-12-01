@extends('layouts.master')

@section('title', 'Categorias')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <ul class="collection">
                <!-- quando clicar chamar outra tela só com a categoria selecionada -->
                @foreach($categories as $category)
                    <li class="collection-item"><a href='/categories/{{$category->id}}'> {{$category->name }}</a> </li>
                @endforeach
            </ul>

            <button type="submit" class="btn btn-primary"><a href='/category/create'>
                    <i class="material-icons">open_in_new</i> Nova Categoria</a></button>
        </div>
    </div>

@endsection
