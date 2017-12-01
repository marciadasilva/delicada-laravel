@extends('layouts.master')

@section('title', 'Categoria')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <h3>{{ $category->name }}</h3>
            <button type="submit" class="btn btn-primary edit"><i class="material-icons">autorenew</i></button>
            <button type="submit" class="btn btn-primary"><i class="material-icons">
                    <a href="/categories/delete/{{$category->id}}"> delete </a></i></button>

            <form class="show-form" method="post" action="/categories/{{$category->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <br>
                    <label for="name">Nome da Categoria</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary edit">Editar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

@endsection