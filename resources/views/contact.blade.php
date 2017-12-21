@extends('layouts.master')

@section('title', 'Contato - Delicada Mulher')

@section('content')

    <section class="company-info">
        <div class="row grid-company">
            <form class="col s12" action="/contact" method="post">
                {{csrf_field()}}

                @if ($errors->any())
                    <div class="row first">
                        <div class="input-field col s6">
                            <input
                                    name="name"
                                    id="name"
                                    type="text"
                                    class="validate"
                                    @if($errors->first('name'))
                                    value=" {{$errors->first('name')}}"
                                    @else
                                    value=" {{Session::get('name-contact')}}"
                                    @endif
                            >
                            <label for="name">Nome</label>
                        </div>

                        <div class="input-field col s6">
                            <input
                                    name="email"
                                    id="email"
                                    type="email"
                                    class="validate"
                                    @if($errors->first('email'))
                                    value=" {{$errors->first('email')}}"
                                    @else
                                    value=" {{Session::get('email-contact')}}"
                                    @endif
                            >
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                    name="subject"
                                    id="subject"
                                    type="text"
                                    class="validate"
                                    @if($errors->first('subject'))
                                    value=" {{$errors->first('subject')}}"
                                    @else
                                    value=" {{Session::get('subject-contact')}}"
                                    @endif
                            >
                            <label for="subject">Assunto</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea
                                    id="message"
                                    name="message"
                                    class="materialize-textarea">
                                @if($errors->first('message'))
                                    {{$errors->first('message')}}
                                @else
                                    {{Session::get('message-contact')}}
                                @endif
                            </textarea>
                            <label for="message">Mensagem</label>
                        </div>
                    </div>

                @else
                    <div class="row first">
                        <div class="input-field col s6">
                            <input
                                    name="name"
                                    id="name"
                                    type="text"
                                    class="validate"
                                    required
                            >
                            <label for="name">Nome</label>
                        </div>

                        <div class="input-field col s6">
                            <input
                                    name="email"
                                    id="email"
                                    type="email"
                                    class="validate"
                                    required
                            >
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input
                                    name="subject"
                                    id="subject"
                                    type="text"
                                    class="validate"
                                    required
                            >
                            <label for="subject">Assunto</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea
                                    id="message"
                                    name="message"
                                    required
                                    class="materialize-textarea">
                            </textarea>
                            <label for="message">Mensagem</label>
                        </div>
                    </div>
                @endif

                <button type="submit"
                        class="waves-effect waves-light btn-large"> Enviar
                </button>
            </form>
        </div>
    </section>

@endsection