@extends('layouts.master')

@section('title', 'Novo Produto')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <form method="post" action="/products" enctype="multipart/form-data">

                @include('layouts.form-products')

                <div class="form-group">
                    <br>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

@endsection