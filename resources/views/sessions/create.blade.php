@extends('layouts.login')

@section('title', 'Entrar')

@section('content')

    <h3 class="cyan-text"><i class="fa fa-lock cyan-text"></i> Login </h3>

    <form action="/login" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <i class="fa fa-envelope prefix grey-text"></i>
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <i class="fa fa-lock prefix grey-text"></i>
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-info">Login</button>
        </div>

        @include('layouts.errors')

    </form>

@endsection