@extends('layouts.master')

@section('title', 'Clientes - Delicada Mulher')

@section('content')

    <main id="clients">

        <section class="show-cards">

            <div class="container">
                <a class="waves-effect waves-light btn-large"
                   href="/admin/client/create">Novo Cliente</a>
            </div>

            <section class="client-cards">
                @foreach($clients as $client)
                    <div class="card">
                        <div class="card-content">
                            <p>Nome: {{$client->name}}</p>
                            <p>CPF: {{$client->cpf}}</p>
                            <p>Endereço: {{$client->address}}</p>
                            <p>Telefone: {{$client->phone}}</p>
                            <p>Email: {{$client->email}}</p>
                            <p>Local de Trabalho: {{$client->workplace}}</p>
                        </div>
                        <div class="card-action">
                            <a href="/admin/client/edit/{{$client->id}}">Editar</a>
                            <a onclick="return confirm('Você tem certeza que quer deletar este cliente?');"
                               href="/admin/client/delete/{{$client->id}}">Excluir</a>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </main>

@endsection
