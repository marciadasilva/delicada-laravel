@extends('layouts.master')

@section('title', 'Administração - Delicada Mulher')

@section('content')

    <section class="admin-content">

        <main class="admin-page">
            <div class="panel">
                <h1>Olá {{Auth::user()->name}} </h1>
                <h2>Bem vindo a área administrativa!</h2>
            </div>
        </main>

    </section>
@endsection