@extends('layouts.login')

@section('title', 'Entrar')

@section('content')

    <section class="login">

        <div class="card-form">
            <h3><i class="fa fa-lock"></i> Login </h3>

            <form action="/login" method="post">
                {{csrf_field()}}

                <div class="input-field">
                    <input id="email" type="email" name="email">
                    <label for="email">Digite seu email</label>
                </div>

                <div class="input-field">
                    <input id="password" type="password" name="password">
                    <label for="password">Digite sua senha</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Login</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </section>
@endsection