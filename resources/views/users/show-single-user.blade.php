@extends('layouts.master')

@section('title', 'Usuário')

@section('content')

    <section class="admin-content">

        <div class="admin-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="admin-main">
            <h4>Nome: {{ $user->name }}</h4>
            <h4>Data de Criação: {{ $user->created_at->toFormattedDateString() }}</h4>
        </div>
    </section>

@endsection
