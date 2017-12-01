@extends('layouts.master')

@section('title', 'Usuários')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <ul class="collection">
                <!-- quando clicar chamar outra tela só com a categoria selecionada -->
                @foreach($users as $user)
                    <li class="collection-item"><a href='/users/{{$user->id}}'> {{$user->name }} </a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection
