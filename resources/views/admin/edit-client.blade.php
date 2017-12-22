@extends('layouts.master')

@section('title', 'Editar Cliente - Delicada Mulher')

@section('content')

    <main class="admin-edit">

        <section class="card-edit container-fluid">
            <form class="container"
                  action="/admin/client/edit/{{$client->id}}"
                  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container center create-client">

                    <div class="row">
                        <div class="input-field col s6">
                            <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    required
                                    @if ($errors->any())
                                        @if (Session::get('name-client-edit'))
                                            value="{{Session::get('name-client-edit')}}"
                                        @else
                                            value="{{$client->name}}"
                                        @endif
                                    @else
                                        value="{{$client->name}}"
                                    @endif
                            >
                            <label for="name">Nome</label>
                        </div>

                        <div class="input-field col s6">
                            <input
                                    name="cpf"
                                    id="cpf"
                                    type="text"
                                    required
                                    @if ($errors->any())
                                        @if (Session::get('cpf-client-edit'))
                                            value="{{Session::get('cpf-client-edit')}}"
                                        @else
                                            value="{{$client->cpf}}"
                                        @endif
                                    @else
                                        value="{{$client->cpf}}"
                                    @endif
                            >
                            <label for="cpf">CPF</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s6">
                                @if($errors->first('name'))
                                    <span>{{$errors->first('name')}}</span>
                                @endif
                            </div>

                            <div class="col s6">
                                @if($errors->first('cpf'))
                                    <span>{{$errors->first('cpf')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif


                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                    id="address"
                                    name="address"
                                    type="text"
                                    @if ($errors->any())
                                        @if (Session::get('address-client-edit'))
                                            value="{{Session::get('address-client-edit')}}"
                                        @else
                                            value="{{$client->address}}"
                                        @endif
                                    @else
                                        value="{{$client->address}}"
                                    @endif
                            >
                            <label for="address">Endereço</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input
                                    id="phone"
                                    name="phone"
                                    type="text"
                                    required
                                    @if ($errors->any())
                                        @if (Session::get('phone-client-edit'))
                                            value="{{Session::get('phone-client-edit')}}"
                                        @else
                                            value="{{$client->phone}}"
                                        @endif
                                    @else
                                        value="{{$client->phone}}"
                                    @endif
                            >
                            <label for="phone">Telefone</label>
                        </div>

                        <div class="input-field col s6">
                            <input
                                    name="email"
                                    id="email"
                                    type="email"
                                    @if ($errors->any())
                                        @if (Session::get('email-client-edit'))
                                            value="{{Session::get('email-client-edit')}}"
                                        @else
                                            value="{{$client->email}}"
                                        @endif
                                    @else
                                        value="{{$client->email}}"
                                    @endif
                            >
                            <label for="email">Email</label>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="row">
                            <div class="col s6">
                                @if($errors->first('phone'))
                                    <span>{{$errors->first('phone')}}</span>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                    id="workplace"
                                    name="workplace"
                                    type="text"
                                    @if ($errors->any())
                                        @if (Session::get('workplace-client-edit'))
                                            value="{{Session::get('workplace-client-edit')}}"
                                        @else
                                            value="{{$client->workplace}}"
                                        @endif
                                    @else
                                        value="{{$client->workplace}}"
                                    @endif
                            >
                            <label for="workplace">Local de Trabalho</label>
                        </div>
                    </div>

                    <button type="submit"
                            class="waves-effect waves-light btn-large"> Salvar
                    </button>
                </div>
            </form>
        </section>
    </main>

@endsection