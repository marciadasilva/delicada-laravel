<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('favicon.ico')}}">


<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/delicada.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/login.css')}}" type="text/css">


</head>

<body class="login-corpo">


    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="margin-top: 17vh;">
          <form class="borda-form" action="" method="post">
          <div>
              <!--Header-->
              <div class="text-center">
                <h3><i class="fa fa-lock"></i> Login</h3>
                  <hr>
              </div>

              <!--Body-->
              <div class="form-group">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control">

              </div>

              <div class="form-group">
                <i class="fa fa-lock prefix"></i>
                <label for="pass">Senha</label>
                <input type="password" id="pass" class="form-control">

              </div>

              <div class="text-center">
                <button class="margin-bottom-15 btn btn-lg btn-info waves-effect waves-light">Entrar</button>
              </div>
            </div>

              <!--Footer-->
              <div class="modal-footer">
                <div class="">
                  <p>Não possui uma conta?
                    <a href="#">Entre em contato</a>
                  </p>
                </div>
              </div>

          </div>
      </div>
    </form>
      <div class="col-md-3"></div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>
