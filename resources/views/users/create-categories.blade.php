@extends('layouts.master')

@section('title', 'Criar Categoria')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <form method="post" action="/categories">
                {{csrf_field()}}
                <div class="form-group">
                    <br>
                    <label for="name">Nome da Categoria</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn waves-effect white grey-text darken-text-2">
                        Registrar
                    </button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </section>

@endsection