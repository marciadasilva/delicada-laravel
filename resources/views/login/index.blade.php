@extends('layout.login')

@section('titulo', 'Login')

@section('conteudo')


<div class="row">

		<div class="col s5 lado">
					<img src="../img/pexels-photo-417074.jpeg" class="img-background-position responsive-img" alt="Delicada-Mulher">
		</div>
		<div class="col s1"></div>
		<div class="col s5 center-div">
			<div class="container center-div-child">
				<p class="right-align ">Não possui uma conta? <a href="{{route('site.login.cadastro')}}" class="teal-text">Cadastre-se</a></p>
				<h3 class="center teal-text">Entrar no sistema</h3>
				<p class="center">Digite seus dados abaixo:</p>
				<div class="row">
					<form class="" action="{{route('user.orders')}}" method="post">
						{{csrf_field()}}

						<div class="input-field">
							<input type="text" name="email">
							<label>E-mail</label>
						</div>

						<div class="input-field">
							<input type="password" name="senha">
							<label>Senha</label>
						</div>

						<button class="btn teal pulse">Entrar</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col s1"></div>

</div>



@endsection
