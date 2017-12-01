@extends('layouts.master')

@section('title', 'Usuário')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">
            <h4>Nome: {{ $user->name }}</h4>
            <h4>Data de Criação: {{ $user->created_at->toFormattedDateString() }}</h4>
        </div>
    </div>

@endsection
