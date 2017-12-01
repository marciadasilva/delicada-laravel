@extends('layouts.master')

@section('title', 'Produtos')

@section('content')

    <div class="user-grid">

        <div class="user-sidebar">
            @include('layouts.side-menu')
        </div>

        <div class="main-info">

            <div class="product-card">
                @foreach($products as $product)
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($product->image)}}">
                        <span class="card-title">{{$product->name}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$product->description}}</p>
                        <p>Tamanho: {{$product->size}}</p>
                        <p>Cores: {{$product->color}}</p>
                        <p>Preço: {{$product->price}}</p>
                        <p>Quantidade: {{$product->amount}}</p>
                    </div>
                    <div class="card-action">
                        <a href="/products/{{$product->id}}">Editar</a>
                        <a onclick="return confirm('Você tem certeza que quer deletar este produto?');"
                           href="/products/delete/{{$product->id}}">Excluir</a>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <button type="submit" class="btn btn-primary"><a href='/product/create'>
                    <i class="material-icons">open_in_new</i> Novo Produto</a></button>

        </div>
    </div>

@endsection
