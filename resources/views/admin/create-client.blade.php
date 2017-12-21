@extends('layouts.master')

@section('title', 'Criar Cliente - Delicada Mulher')

@section('content')

    <main class="admin-create">

        <section class="card-create container-fluid">
            <form class="container"
                  action="/admin/client/create"
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
                                        @if (Session::get('name-client'))
                                            value="{{Session::get('name-client')}}"
                                        @endif
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
                                        @if (Session::get('cpf-client'))
                                            value="{{Session::get('cpf-client')}}"
                                        @endif
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
                                        @if (Session::get('address-client'))
                                            value="{{Session::get('address-client')}}"
                                        @endif
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
                                        @if (Session::get('phone-client'))
                                            value="{{Session::get('phone-client')}}"
                                        @endif
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
                                        @if (Session::get('email-client'))
                                            value="{{Session::get('email-client')}}"
                                        @endif
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
                                        @if (Session::get('workplace-client'))
                                            value="{{Session::get('workplace-client')}}"
                                        @endif
                                    @endif
                            >
                            <label for="workplace">Local de Trabalho</label>
                        </div>
                    </div>

                    <button type="submit"
                            class="waves-effect waves-light btn-large"> Adicionar Cliente
                    </button>
                </div>
            </form>
        </section>
    </main>

@endsection