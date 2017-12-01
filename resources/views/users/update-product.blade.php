@extends('layouts.master')

@section('title', 'Editar Produto')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <form method="post" action="/products/{{$product->id}}" enctype="multipart/form-data">

                @include('layouts.form-products')

                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

@endsection