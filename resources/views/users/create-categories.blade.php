@extends('layouts.master')

@section('title', 'Criar Categoria')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <form method="post" action="/categories">
                {{csrf_field()}}
                <div class="form-group">
                    <br>
                    <label for="name">Nome da Categoria</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>

@endsection