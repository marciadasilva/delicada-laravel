@extends('layout.login')

@section('titulo', 'Cadastro')

@section('conteudo')


<div class="row">

		<div class="col s5 lado">
					<img src="../img/background-login.jpg" class="img-background-position responsive-img" alt="Delicada-Mulher">
		</div>
		<div class="col s1"></div>
		<div class="col s5 center-div">
			<div class="container center-div-child">
				<p class="right-align">Já possui uma conta? <a href="{{route('site.login')}}" class=" teal-text">Faça o seu Login</a></p>
				<h3 class="center teal-text">Crie sua conta</h3>
        <p class="center">Digite seus dados abaixo:</p>
				<div class="row">
					<form class="" action="{{route('site.login.entrar')}}" method="post">
						{{csrf_field()}}

            <div class="input-field">
            	<input type="text" name="nome" >
            	<label>Nome</label>
            </div>

						<div class="input-field">
							<input type="text" name="email">
							<label>E-mail</label>
						</div>

            <div class="input-field">
							<input type="text" name="email_confirmation">
							<label>Confirmação de e-mail</label>
						</div>

            <div class="row">
  						<div class="input-field col s6">
  							<input type="password" name="senha">
  							<label>Senha</label>
  						</div>

              <div class="input-field col s6">
  							<input type="password" name="senha_confirmation">
  							<label>Confirmação de senha</label>
  						</div>
            </div>

						<button class="btn teal pulse">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col s1"></div>

</div>
