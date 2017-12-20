@extends('layouts.master')

@section('title', 'Criar Categoria - Delicada Mulher')

@section('content')

    <main class="admin-create">

        <section class="card-create container">
            <form class="container" action="/admin/category/create" method="post" enctype="multipart/form-data">
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
                                            value=" {{Session::get('name-category')}}"
                                       @endif
                                       required>
                                <label for="name">Nome da Categoria</label>
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
                                            value=" {{Session::get('description-category')}}"
                                        @endif
                                        required
                                >
                                <label for="description">Descrição da Categoria</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagem</span>
                                <input type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate"
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

                    @else
                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                        id="name"
                                        name="name"
                                        type="text">
                                <label for="name">Nome da Categoria</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input
                                       type="text"
                                       name="description"
                                       id="description">
                                <label for="description">Descrição da Categoria</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagem</span>
                                <input type="file"
                                       name="image" id="image"
                                       multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path"
                                       type="text"
                                       placeholder="Selecionar Imagem">
                            </div>
                        </div>

                    @endif

                        <button type="submit"
                                class="waves-effect waves-light btn-large"> Criar Categoria
                        </button>
                </div>
            </form>
        </section>
    </main>

@endsection