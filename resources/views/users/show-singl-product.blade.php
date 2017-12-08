@extends('layouts.master')

@section('title', 'Produto')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <h3>{{ $product->name }}</h3>
            <button type="submit" class="btn btn-primary edit"><i class="material-icons">autorenew</i></button>
            <button type="submit" class="btn btn-primary"><i class="material-icons">
                    <a href="/products/delete/{{$product->id}}"> delete </a></i></button>

            <form class="show-form" method="post" action="/products/{{$product->id}}">
                {{csrf_field()}}
                <div class="form-group">
                    <br>
                    <label for="name">Nome do Produto</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary edit">Editar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </section>

@endsection