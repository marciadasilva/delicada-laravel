@extends('layouts.login-template')

@section('title', 'Cadastrar')

@section('content')

    <section class="login">
        <div class="card-form">
            <h3 class="cyan-text"><i class="fa fa-lock cyan-text"></i> Registrar </h3>
            <form method="post" action="/register">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

{{--                @include('layouts.errors')--}}

            </form>
        </div>
    </section>
@endsection
