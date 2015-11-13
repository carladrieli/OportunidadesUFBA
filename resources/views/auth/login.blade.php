<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | Oportunidades UFBA</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row">
      <form class="formulario" method="post" action="{{action('Auth\AuthController@postLogin')}}">
      {!! csrf_field() !!}
      @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
        <h2 class="topo-formulario-login">Login</h2>
        <div class="conteudo-login">
          <div  class="cadastro"><a href="{{action('Auth\AuthController@getRegister')}}">Ainda não tenho cadastro.</a></div>
          <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name='email'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name='senha'>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember"> Lembrar-me
          </label>
            <div class="pull-right">
              <a href="#">Esqueceu a Senha?</a>
            </div>
        </div>
        <button type="submit" class="btn">Entrar</button>
        </div>
    </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  </body>
</html>
