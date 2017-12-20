@extends('layouts.master')

@section('title', 'Editar Produto - Delicada Mulher')

@section('content')

    <main class="admin-create">

        <section class="card-create container">
            <form class="container"
                  action="/admin/product/edit/{{$product->id}}"
                  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container center">

                    @if ($errors->any())

                        <div class="row">
                            <div class="input-field col s12">
                                <input id="name"
                                       name="name"
                                       type="text"
                                       class="validate"
                                       @if($errors->first('name'))
                                       value=" {{$errors->first('name')}}"
                                       @else
                                       value=" {{Session::get('name-product-edit')}}"
                                       @endif
                                       required>
                                <label for="name">Nome</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                        id="description"
                                        name="description"
                                        type="text"
                                        @if($errors->first('description'))
                                        value=" {{$errors->first('description')}}"
                                        @else
                                        value=" {{Session::get('description-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="description">Descrição</label>
                            </div>
                        </div>

                        <div class="row">

                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="size"
                                        id="size"
                                        @if($errors->first('size'))
                                        value=" {{$errors->first('size')}}"
                                        @else
                                        value=" {{Session::get('size-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="size">Tamanho</label>
                            </div>

                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="color"
                                        id="color"
                                        @if($errors->first('color'))
                                        value=" {{$errors->first('color')}}"
                                        @else
                                        value=" {{Session::get('color-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="color">Cor</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="price_buy"
                                        id="price_buy"
                                        @if($errors->first('price_buy'))
                                        value=" {{$errors->first('price_buy')}}"
                                        @else
                                        value=" {{Session::get('price_buy-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="price_buy">Preço de Compra</label>
                            </div>
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="price_sell"
                                        id="price_sell"
                                        @if($errors->first('price_sell'))
                                        value=" {{$errors->first('price_sell')}}"
                                        @else
                                        value=" {{Session::get('price_sell-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="price_sell">Preço de Venda</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="amount"
                                        id="amount"
                                        @if($errors->first('amount'))
                                        value=" {{$errors->first('amount')}}"
                                        @else
                                        value=" {{Session::get('amount-product-edit')}}"
                                        @endif
                                        required
                                >
                                <label for="amount">Quantidade</label>
                            </div>


                            <div class="input-field col s6">
                                <select name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                        @if(Session::get('category_id-product-edit') == $category->id)
                                            <option name="category_id"
                                                    id="category_id"
                                                    value="{{$category->id}} " selected>
                                                {{$category->name}}
                                            </option>
                                        @else
                                            <option name="category_id"
                                                    id="category_id"
                                                    value="{{$category->id}}">
                                                {{$category->name}}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <label>Selecionar Categoria</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Nova Imagem</span>
                                <input type="file"
                                       name="image"
                                       id="image"
                                       multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate"
                                       type="text"
                                       placeholder="Selecionar">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                @if($errors->first('image'))
                                    {{$errors->first('image')}}
                                @endif
                            </div>
                        </div>

                    @else


                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        value="{{$product->name}}"
                                        required>
                                <label for="name">Nome</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                        type="text"
                                        name="description"
                                        id="description"
                                        value="{{$product->description}}"
                                        required>
                                <label for="description">Descrição</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="size"
                                        id="size"
                                        value="{{$product->size}}"
                                        required>
                                <label for="size">Tamanho</label>
                            </div>
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="color"
                                        id="color"
                                        value="{{$product->color}}"
                                        required>
                                <label for="color">Cor</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="price_buy"
                                        id="price_buy"
                                        value="{{$product->price_buy}}"
                                        required>
                                <label for="price_buy">Preço de Compra</label>
                            </div>
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="price_sell"
                                        id="price_sell"
                                        value="{{$product->price_sell}}"
                                        required>
                                <label for="price_sell">Preço de Venda</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input
                                        type="text"
                                        name="amount"
                                        id="amount"
                                        value="{{$product->amount}}"
                                        required>
                                <label for="amount">Quantidade</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="category_id" id="category_id">
                                    <option value="" disabled selected>Escolher</option>
                                    @foreach($categories as $category)
                                        @if($product->category_id == $category->id)
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
                                </select>
                                <label>Selecionar Categoria</label>
                            </div>

                        </div>

                        <div class="row valign-wrapper">
                            <div class="input-field col s5">
                                <img id="imagem-edit" src="{{asset($product->image)}}">
                            </div>

                            <div class="col s7">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Nova Imagem</span>
                                        <input type="file"
                                               name="image"
                                               id="image"
                                               multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path"
                                               type="text"
                                               placeholder="Selecionar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <button type="submit"
                            class="waves-effect waves-light btn-large"> Editar Produto
                    </button>
                </div>
            </form>
        </section>
    </main>

@endsection