@extends('layouts.master')

@section('title', 'Produtos - Delicada Mulher')

@section('content')

    <div class="products">
        <main class="grid-products">
            <section class="sidebar">
                <form action="/products" method="post">
                    {{ csrf_field() }}
                    <hr>
                    <h5>Categorias</h5>
                    <hr>
                    @if(isset($category))
                        <p>
                            <input name="all" type="checkbox" id="all" value="all"/>
                            <label for="all">Todas as Categorias</label>
                        </p>
                        @foreach($categories as $cat)
                            @if($category->id == $cat->id)
                            <p>
                                <input name="category[]" type="checkbox" id="{{$cat->name}}" value="{{$cat->id}}"
                                       checked="checked" />
                                <label for="{{$cat->name}}">{{$cat->name}}</label>
                            </p>
                            @else
                                <p>
                                    <input name="category[]"
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
                                    <input name="category[]" type="checkbox" id="{{$cat->name}}" value="{{$cat->id}}"
                                           checked="checked" />
                                    <label for="{{$cat->name}}">{{$cat->name}}</label>
                                </p>
                            @else
                                <p>
                                    <input name="category[]"
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
                                <input name="category[]"
                                       type="checkbox"
                                       id="{{$cat->name}}"
                                       value="{{$cat->id}}" />
                                <label for="{{$cat->name}}">{{$cat->name}}</label>
                            </p>
                        @endforeach
                    @endif


                    <hr>
                    <h5>Preço</h5>
                    <hr>

                    {{-- Se foi passado uma variável lá no controller com este nome --}}
                    @if(isset($prices))
                        {{-- Percorrer o vetor prices --}}
                        @for($i = 0; $i < count($prices); $i++)
                            {{-- Cada novo preço é transformado em um <p> para exibir os checkbox --}}
                            <p>
                                {{-- Os novos items criados tem algumas particularidades --}}

                                {{-- Se for a primeira execução, o value dele vai ser de: --}}
                                {{-- 0 (i) até o vetor na posição [i] --}}
                                @if ($i == 0)
                                    <?php $atual = $i . ' ' . $prices->get($i) ?>
                                @elseif ($i == count($prices)-1)
                                    {{-- Se for a ultima execução, o value dele vai ser de: --}}
                                    {{-- do último até o valor da variável highest (vem do controller) --}}
                                    <?php $atual = $prices->get($i) . ' ' . $highest ?>
                                @else
                                    {{-- Se outra execução, o value dele vai ser de: --}}
                                    {{-- vetor na posição [i] até vetor na posição [i+1] --}}
                                    <?php $atual = $prices->get($i) . ' ' . $prices->get($i+1) ?>
                                @endif

                                <input name="price"
                                       type="checkbox"
                                       id="price_{{$i}}"
                                       value="{{$atual}}"
                                       class="filled-in"
                                        @if(Session::get('price'))
                                            @if(Session::get('price') == $atual)
                                                checked
                                            @endif
                                        @endif
                                />

                                @if ($i == 0)
                                    <label for="price_{{$i}}">
                                        R$ {{$i}} a
                                        R$ {{$prices->get($i+1)}}
                                    </label>
                                @elseif ($i == count($prices)-1)
                                    <label for="price_{{$i}}">
                                        R$ {{$prices->get($i)}} a
                                        R$ {{$highest}}
                                    </label>
                                @else
                                    <label for="price_{{$i}}">
                                        R$ {{$prices->get($i)}} a
                                        R$ {{$prices->get($i+1)}}
                                    </label>
                                @endif
                            </p>
                        @endfor
                    @endif


                    <hr>
                    <h5>Tamanho</h5>
                    <hr>


                    @if(isset($sizes))
                        @for($i = 0; $i < count($sizes); $i++)
                            <p>
                                <input
                                        name="size"
                                        type="checkbox"
                                        id="size_{{$i}}"
                                        value="{{$sizes[$i]}}"
                                        @if(Session::get('size'))
                                            @if(Session::get('size') == $sizes[$i])
                                                checked
                                            @endif
                                        @endif
                                />
                                <label for="size_{{$i}}">{{$sizes[$i]}}</label>
                            </p>
                        @endfor
                    @endif


                    <hr>
                    <button type="submit"
                            class="waves-effect waves-light btn"> Filtrar
                    </button>


                </form>

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
                                <p>Categoria: {{ $product->category->name  }}</p>
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

    <script>
        const categories = Array.from(document.querySelectorAll('.sidebar p input'));
        const prices = Array.from(document.querySelectorAll('.sidebar p input'));
        const sizes = Array.from(document.querySelectorAll('.sidebar p input'));

        function filterCategory(e) {
            if (e.target.value === 'all') {
                // if 'All' checked == true, the others == false
                for (var i = 0, len = categories.length; i < len; i++) {
                    if (e.target.value === 'all' && categories[i].value != 'all'
                        && categories[i].checked == true && categories[i].type == 'checkbox'
                        && categories[i].name != 'price' && categories[i].name != 'size') {
                        categories[i].checked = false;
                    }
                }
            } else{

                for (var i = 0, len = categories.length; i < len; i++) {
                    if(categories[i].value == 'all' && e.target.type == 'checkbox'
                        && e.target.name != 'price' && e.target.name != 'size'
                    ){
                        categories[i].checked = false;
                    }
                }
            }
        }

        function uncheckPrice(e) {
            for (var i = 0, len = prices.length; i < len; i++) {
                if(prices[i].value != e.target.value &&  prices[i].name == 'price'){
                    prices[i].checked = false;
                }
            }
        }

        function uncheckSize(e) {
            for (var i = 0, len = sizes.length; i < len; i++) {
                if(sizes[i].value != e.target.value &&  sizes[i].name == 'size' ){
                    sizes[i].checked = false;
                }
            }
        }

        categories.forEach(category =>
            category.type == 'checkbox' && category.name != 'price'
                ? category.addEventListener('click', filterCategory)
                : console.log('category')
        );

        prices.forEach(price =>
            price.name == 'price'
                ? price.addEventListener('click', uncheckPrice)
                : console.log('price')
        );

        sizes.forEach(size =>
            size.name == 'size'
                ? size.addEventListener('click', uncheckSize)
                : console.log('size')
        );
    </script>

@endsection