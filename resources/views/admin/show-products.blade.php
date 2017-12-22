@extends('layouts.master')

@section('title', 'Produtos - Delicada Mulher')

@section('content')

    <main id="products">

        <section class="show-cards">

            <div class="container">
                <a class="waves-effect waves-light btn-large"
                   href="/admin/product/create">Novo Produto</a>
            </div>

            <section class="product-cards">
                @if(sizeof($products) == 1)
                <div class="products-1">
                @elseif(sizeof($products) == 2)
                <div class="products-2">
                @elseif(sizeof($products) == 3)
                <div class="products-3">
                @elseif(sizeof($products)== 4 || (sizeof($products) % 4) == 0)
                <div class="products-4">
                @elseif(sizeof($products)== 5 || (sizeof($products) % 5) == 0)
                <div class="products-5">
                @elseif((sizeof($products) % 3) == 0)
                <div class="products-6">
                @else
                <div class="products-4">
                @endif
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
