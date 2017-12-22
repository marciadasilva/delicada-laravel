@extends('layouts.master')

@section('title', 'Produtos - Delicada Mulher')

@section('content')

    <div class="products">
        <main class="grid-products">
            <section class="sidebar">
                <form action="/products" method="post">
                    {{ csrf_field() }}
                    @if(isset($category))
                        <p>
                            <input name="all" type="checkbox" id="all" value="all"/>
                            <label for="all">Todas as Categorias</label>
                        </p>
                        @foreach($categories as $cat)
                            @if($category->id == $cat->id)
                            <p>
                                <input name="test[]" type="checkbox" id="{{$cat->name}}" value="{{$cat->id}}"
                                       checked="checked" />
                                <label for="{{$cat->name}}">{{$cat->name}}</label>
                            </p>
                            @else
                                <p>
                                    <input name="test[]"
                                           type="checkbox"
                                           id="{{$cat->name}}"
                                           value="{{$cat->id}}"/>
                                    <label for="{{$cat->name}}">{{$cat->name}}</label>
                                </p>
                            @endif
                        @endforeach
                    @elseif(isset($category_mult))
                        <p>
                            <input name="all" type="checkbox" id="all" value="all"/>
                            <label for="all">Todas as Categorias</label>
                        </p>

                        @foreach($categories as $cat)
                            <span style="display: none">{{$cont = 0}}</span>

                            @foreach($category_mult as $cm)
                                @if($cat->id == $cm->id)
                                    <span style="display: none">{{$cont = 1}}</span>
                                    @break
                                @endif
                            @endforeach

                            @if($cont == 1)
                                <p>
                                    <input name="test[]" type="checkbox" id="{{$cat->name}}" value="{{$cat->id}}"
                                           checked="checked" />
                                    <label for="{{$cat->name}}">{{$cat->name}}</label>
                                </p>
                            @else
                                <p>
                                    <input name="test[]"
                                           type="checkbox"
                                           id="{{$cat->name}}"
                                           value="{{$cat->id}}"/>
                                    <label for="{{$cat->name}}">{{$cat->name}}</label>
                                </p>
                            @endif
                        @endforeach

                    @else
                        <p>
                            <input name="all" type="checkbox" id="all" checked="checked" value="all" />
                            <label for="all">Todas as Categorias</label>
                        </p>
                        @foreach($categories as $cat)
                            <p>
                                <input name="test[]"
                                       type="checkbox"
                                       id="{{$cat->name}}"
                                       value="{{$cat->id}}" />
                                <label for="{{$cat->name}}">{{$cat->name}}</label>
                            </p>
                        @endforeach
                    @endif
                        <button type="submit"
                                class="waves-effect waves-light btn"> Filtrar
                        </button>
                </form>

                <hr>
            </section>

            <section id="product-index">
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
                                <span class="card-title">{{ $product->name  }}</span>
                            </div>
                            <div class="card-content">
                                <p>Descrição: {{ $product->description  }}</p>
                                <p>Tamanho: {{ $product->size  }}</p>
                                <p>Estoque: {{ $product->amount  }}</p>
                            </div>
                            <div class="card-action">
                                <p>Preço: <strong>R$ {{number_format($product->price_sell, 2, ',', ' ')}}</strong>
                                ou 3 x {{number_format($product->price_sell/3, 2, ',', ' ')}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    {{ $products->links() }}
                </div>
            </section>


        </main>
    </div>

@endsection