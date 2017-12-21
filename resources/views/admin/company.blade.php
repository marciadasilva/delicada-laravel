@extends('layouts.master')

@section('title', 'Informações da Empresa - Delicada Mulher')

@section('content')

    <section class="company-info">
        <div class="row grid-company">
            <form class="col s12" action="/admin/company" method="post" >
                {{csrf_field()}}
                <div class="row first">
                    <div class="input-field col s12">
                        <textarea
                                id="about"
                                name="about"
                                class="materialize-textarea">
                            @foreach($companies as $company)
                                @if(isset($company->about))
                                    {{$company->about}}
                                @endif
                            @endforeach
                        </textarea>
                        <label for="about">Sobre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input
                                id="facebook"
                                name="facebook"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->facebook))
                                        value="{{$company->facebook}}"
                                    @endif
                                @endforeach
                        >
                        <label for="facebook">Facebook</label>
                    </div>

                    <div class="input-field col s6">
                        <input
                                id="twitter"
                                name="twitter"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->twitter))
                                       value="{{$company->twitter}}"
                                    @endif
                                @endforeach
                        >
                        <label for="twitter">Twitter</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input
                                id="linkedin"
                                name="linkedin"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->linkedin))
                                        value="{{$company->linkedin}}"
                                    @endif
                                @endforeach
                        >
                        <label for="facebook">Linkedin</label>
                    </div>

                    <div class="input-field col s6">
                        <input
                                id="instagram"
                                name="instagram"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->instagram))
                                        value="{{$company->instagram}}"
                                    @endif
                                @endforeach
                        >
                        <label for="twitter">Instagram</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input
                                id="phone"
                                name="phone"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->phone))
                                        value="{{$company->phone}}"
                                    @endif
                                @endforeach
                        >
                        <label for="phone">Telefone</label>
                    </div>

                    <div class="input-field col s6">
                        <input
                                id="email"
                                name="email"
                                type="email"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->email))
                                        value="{{$company->email}}"
                                    @endif
                                @endforeach
                        >
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                                id="address"
                                name="address"
                                type="text"
                                class="validate"
                                @foreach($companies as $company)
                                    @if(isset($company->address))
                                        value="{{$company->address}}"
                                    @endif
                                @endforeach
                        >
                        <label for="address">Endereço</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="description" name="description" class="materialize-textarea">
                           @foreach($companies as $company)
                                @if(isset($company->description))
                                    {{$company->description}}
                                @endif
                            @endforeach
                        </textarea>
                        <label for="description">Texto Página Inicial</label>
                    </div>
                </div>

                <button type="submit"
                        class="waves-effect waves-light btn-large"> Salvar
                </button>
            </form>
        </div>
    </section>
@endsection