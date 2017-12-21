@extends('layouts.master')

@section('title', 'Criar Categoria - Delicada Mulher')

@section('content')

    <main class="admin-create">

        <section class="card-create container-fluid">
            <form class="container"
                  action="/admin/category/create"
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
                                        @if (Session::get('name-category'))
                                            value="{{Session::get('name-category')}}"
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
                                        @if (Session::get('description-category'))
                                           value="{{Session::get('description-category')}}"
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

                    <div class="row">
                        <div class="col s12">
                            @if($errors->first('image'))
                                {{$errors->first('image')}}
                            @endif
                        </div>
                    </div>

                    <button type="submit"
                            class="waves-effect waves-light btn-large"> Adicionar Categoria
                    </button>
                </div>
            </form>
        </section>
    </main>

@endsection