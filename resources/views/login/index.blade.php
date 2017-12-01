@extends('layouts.login')

@section('titulo', 'Login')

@section('conteudo')


<div class="row">

    <div class="col s5 lado">
        <img src="../img/pexels-photo-417074.jpeg" class="img-background-position responsive-img" alt="Delicada-Mulher">
    </div>
    <div class="col s1"></div>
    <div class="col s5 center-div">
        <div class="container center-div-child">
            <p class="right-align ">Não possui uma conta? <a href="" class="teal-text">Cadastre-se</a></p>
            <h3 class="center teal-text">Entrar no sistema</h3>
            <p class="center">Digite seus dados abaixo:</p>
            <div class="row">
                <form class="" action="" method="post">
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


<div class="row">
  <div class="col-md-5 img-login"></div>
  <div class="col-md-7 formulario">

    <div class="col-md-2"></div>
      <div class="col-md-8 sign-up">
        <!--Grid column-->
               <div class="col-md-6 mb-r">

                   <!--Form without header-->
                   <div class="card">
                       <div class="card-body">

                           <!--Header-->
                           <div class="text-center cyan-text">
                               <h3>
                                   <i class="fa fa-lock cyan-text"></i> Login:</h3>
                               <hr class="my-4">
                           </div>

                           <!--Body-->
                           <div class="md-form">
                               <i class="fa fa-envelope prefix grey-text"></i>
                               <input type="text" id="cyanForm-email" class="form-control">
                               <label for="cyanForm-email">Your email</label>
                           </div>

                           <div class="md-form">
                               <i class="fa fa-lock prefix grey-text"></i>
                               <input type="password" id="cyanForm-pass" class="form-control">
                               <label for="cyanForm-pass">Your password</label>
                           </div>

                           <div class="text-center">
                               <button class="btn btn-info">Login</button>
                           </div>

                       </div>

                       <!--Footer-->
                       <div class="modal-footer">
                           <div class="options">
                               <p>Not a member?
                                   <a href="#">Sign Up</a>
                               </p>
                               <p>Forgot
                                   <a href="#">Password?</a>
                               </p>
                           </div>
                       </div>

                   </div>
                   <!--/Form without header-->

               </div>
    </div>
  <div class="col-md-2"></div>

  </div>
</div>
