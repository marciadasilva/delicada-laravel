@extends('layouts.master')

@section('title', 'Informações da Empresa - Delicada Mulher')

@section('content')

    <section class="company-info">
        <div class="row grid-company">
            <form class="col s12">
                <div class="row first">
                    <div class="input-field col s12">
                        <textarea id="about" class="materialize-textarea"></textarea>
                        <label for="about">Sobre</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="facebook" type="text" class="validate">
                        <label for="facebook">Facebook</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="twitter" type="text" class="validate">
                        <label for="twitter">Twitter</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="phone" type="text" class="validate">
                        <label for="phone">Telefone</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate">
                        <label for="address">Endereço</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="info" class="materialize-textarea"></textarea>
                        <label for="info">Texto Página Inicial</label>
                    </div>
                </div>

                <button type="submit"
                        class="waves-effect waves-light btn-large"> Salvar
                </button>
            </form>
        </div>
    </section>
@endsection