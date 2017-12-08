@extends('layouts.master')

@section('title', 'Usuários')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <ul class="collection">
                <!-- quando clicar chamar outra tela só com a categoria selecionada -->
                @foreach($users as $user)
                    <li class="collection-item"><a href='/users/{{$user->id}}'> {{$user->name }} </a></li>
                @endforeach
            </ul>
        </div>
    </section>

@endsection
