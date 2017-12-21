@extends('layouts.master')

@section('title', 'Criar Produto - Delicada Mulher')

@section('content')

    <main class="admin-create">

        <section class="card-create container-fluid">
            <form class="container"
                  action="/admin/product/create"
                  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container center">

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                id="name"
                                name="name"
                                type="text"
                                required
                                @if ($errors->any())
                                    @if (Session::get('name-product'))
                                        value="{{Session::get('name-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="name">Nome</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s12">
                                @if($errors->first('name'))
                                    <span>{{$errors->first('name')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                type="text"
                                name="description"
                                id="description"
                                required
                                @if ($errors->any())
                                    @if (Session::get('description-product'))
                                        value="{{Session::get('description-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="description">Descrição</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s12">
                                @if($errors->first('description'))
                                    <span>{{$errors->first('description')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s6">
                            <input
                                type="text"
                                name="size"
                                id="size"
                                required
                                @if ($errors->any())
                                    @if (Session::get('size-product'))
                                        value="{{Session::get('size-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="size">Tamanho</label>
                        </div>
                        <div class="input-field col s6">
                            <input
                                type="text"
                                name="color"
                                id="color"
                                required
                                @if ($errors->any())
                                    @if (Session::get('color-product'))
                                        value="{{Session::get('color-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="color">Cor</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s6">
                                @if($errors->first('size'))
                                    <span>{{$errors->first('size')}}</span>
                                @endif
                            </div>
                            <div class="col s6">
                                @if($errors->first('color'))
                                    <span>{{$errors->first('color')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s6">
                            <input
                                type="number"
                                name="price_buy"
                                id="price_buy"
                                required
                                @if ($errors->any())
                                    @if (Session::get('price-buy-product'))
                                        value="{{Session::get('price-buy-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="price_buy">Preço de Compra</label>
                        </div>
                        <div class="input-field col s6">
                            <input
                                type="number"
                                name="price_sell"
                                id="price_sell"
                                required
                                @if ($errors->any())
                                    @if (Session::get('price-sell-product'))
                                        value="{{Session::get('price-sell-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="price_sell">Preço de Venda</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s6">
                                @if($errors->first('price_buy'))
                                    <span>{{$errors->first('price_buy')}}</span>
                                @endif
                            </div>
                            <div class="col s6">
                                @if($errors->first('price_sell'))
                                    <span>{{$errors->first('price_sell')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s6">
                            <input
                                type="number"
                                name="amount"
                                id="amount"
                                required
                                @if ($errors->any())
                                    @if (Session::get('amount-product'))
                                        value="{{Session::get('amount-product')}}"
                                    @endif
                                @endif
                            >
                            <label for="amount">Quantidade</label>
                        </div>

                        <div class="input-field col s6">
                            <select name="category_id" id="category_id">
                                @if ($errors->any())
                                    <option value="" disabled selected>Escolher</option>
                                    @foreach($categories as $category)
                                        @if(Session::get('category_id-product') == $category->id)
                                            <option value="{{$category->id}}"
                                                    name="category_id"
                                                    id="category_id"
                                                    selected
                                            >{{$category->name}}
                                            </option>
                                        @else
                                            <option name="category_id" value="{{$category->id}}">
                                                {{$category->name}}
                                            </option>
                                        @endif
                                    @endforeach
                                @else
                                    <option value="" disabled selected>Escolher</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                name="category_id"
                                                id="category_id"
                                        >{{$category->name}}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            <label>Selecionar Categoria</label>
                        </div>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input type="file"
                                   name="image"
                                   id="image"
                                   multiple>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path"
                                   type="text"
                                   placeholder="Selecionar Imagem">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12">
                            @if($errors->first('image'))
                                {{$errors->first('image')}}
                            @endif
                        </div>
                    </div>

                    <button type="submit"
                            class="waves-effect waves-light btn-large"> Adicionar Produto
                    </button>
                </div>
            </form>
        </section>
    </main>

@endsection