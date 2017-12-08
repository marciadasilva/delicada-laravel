@extends('layouts.master')

@section('title', 'Novo Produto')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <form method="post" action="/products" enctype="multipart/form-data">

                @include('layouts.form-products')

                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </section>

@endsection