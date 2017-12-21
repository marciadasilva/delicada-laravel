@extends('layouts.master')

@section('title', 'Produtos - Delicada Mulher')

@section('content')

    <main class="admin-table">

        <section class="show-cards">

            <div class="container">
                <a class="waves-effect waves-light btn-large"
                   href="/admin/product/create">Novo Produto</a>
            </div>

            <section class="product-cards">
                @foreach($products as $product)
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset($product->image)}}">
                            <span class="card-title">{{$product->name}}</span>
                        </div>
                        <div class="card-content">
                            <p>Descrição: {{$product->description}}</p>
                            <p>Cadastrado por: {{$product->user->name}}</p>
                            <div class="two-columns">
                                <p>Categoria: {{$product->category->name}}</p>
                                <p>Tamanho: {{$product->size}}</p>
                                <p>Cores: {{$product->color}}</p>
                                <p>Compra: {{$product->price_buy}}</p>
                                <p>Venda: {{$product->price_sell}}</p>
                                <p>Estoque: {{$product->amount}}</p>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="/admin/product/sell/{{$product->id}}">Vender</a>
                            <a href="/admin/product/edit/{{$product->id}}">Editar</a>
                            <a onclick="return confirm('Você tem certeza que quer deletar este produto?');"
                               href="/admin/product/delete/{{$product->id}}">Excluir</a>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </main>

@endsection
