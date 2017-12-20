@extends('layouts.master')

@section('title', 'Editar Categoria - Delicada Mulher')

@section('content')

    <main class="admin-edit">

        <section class="card-edit container">
            <form class="container center"
                  action="/admin/category/edit/{{$category->id}}"
                  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

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
                                   value=" {{Session::get('name-category-edit')}}"
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
                                    class="validate"
                                    @if($errors->first('description'))
                                    value=" {{$errors->first('description')}}"
                                    @else
                                    value=" {{Session::get('description-category-edit')}}"
                                    @endif
                                    required
                            >
                            <label for="name">Descrição da Categoria</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s2">
                            <img src="{{asset($category->image)}}">
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
                                    value="{{$category->name}}"
                            >
                            <label for="name">Nome da Categoria</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                      type="text"
                                      name="description"
                                      id="description"
                                      value="{{$category->description}}"
                            >
                            <label for="name">Descrição da Categoria</label>
                        </div>
                    </div>

                    <div class="row valign-wrapper">
                        <div class="input-field col m4">
                            <img id="imagem-edit" src="{{asset($category->image)}}">
                        </div>

                        <div class="col m8">
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

                <br>
                <button type="submit"
                        class="waves-effect waves-light btn-large"> Editar Categoria
                </button>
            </form>
        </section>
    </main>

@endsection