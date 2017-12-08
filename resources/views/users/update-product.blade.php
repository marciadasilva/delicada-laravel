@extends('layouts.master')

@section('title', 'Editar Produto')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <form method="post" action="/products/{{$product->id}}" enctype="multipart/form-data">

                @include('layouts.form-products')

                <div class="form-group">
                    <br>
                    <button type="submit" class="btn waves-effect white grey-text darken-text-2">
                        Editar
                    </button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </section>

@endsection