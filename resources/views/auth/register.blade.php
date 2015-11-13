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
    
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
    
    <div class="container">
      <div class="row">
      <form class="formulario" id="formCadastro" method="post" action="{{action('Auth\AuthController@postRegister')}}">
        {!! csrf_field() !!}
        <h2 class="topo-formulario-login">Cadastro</h2>
        <div class="conteudo-login">
        <div class="form-group">
          <input type="text" required class="form-control" id="titulo-oportunidade" name="nome" placeholder="Nome Completo" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" value="">
        </div>
        <div class="form-group">
          <label>Tipo de Acesso</label>
          <select required class="form-control" name="tipoAcesso" required>
            <option value="">Selecione</option>
            <option value="A">Aluno</option>
            <option value="P">Professor</option>
            <option value="E">Empresa</option>
          </select>
        </div>
        <div class="form-group box aluno">
          <input type="text"  class="form-control" id="titulo-oportunidade" name="matricula" placeholder="Matrícula" value="{{ old('matricula') }}">
        </div>
        <div class="form-group box professor">
          <input type="text"  class="form-control" id="titulo-oportunidade" name="siape" placeholder="SIAPE" value="{{ old('siape') }}">
        </div>
        <div class="form-group box empresa">
          <input type="text"  class="form-control" id="titulo-oportunidade" name="cnpj" placeholder="CNPJ" value="{{ old('cnpj') }}">
        </div>
        <button type="submit" class="btn">Cadastrar</button>
        </div>
    </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#formCadastro").validate(); //sets up the validator
        
          $("select").change(function(){
              $(this).find("option:selected").each(function(){
                  if($(this).attr("value")=="A"){
                      $(".box").not(".aluno").hide();
                      $(".aluno").show();
                      $("input[name*=matricula]").rules("add", "required");
                      $("input[name*=siape]").rules("remove", "required");
                      $("input[name*=cnpj]").rules("remove", "required");
                  }
                  else if($(this).attr("value")=="P"){
                      $(".box").not(".professor").hide();
                      $(".professor").show();
                      $("input[name*=matricula]").rules("remove", "required");
                      $("input[name*=siape]").rules("add", "required");
                      $("input[name*=cnpj]").rules("remove", "required");
                  }
                  else if($(this).attr("value")=="E"){
                      $(".box").not(".empresa").hide();
                      $(".empresa").show();
                      $("input[name*=matricula]").rules("remove", "required");
                      $("input[name*=siape]").rules("remove", "required");
                      $("input[name*=cnpj]").rules("add", "required");
                  }
                  else{
                      $(".box").hide();
                  }
              });
          }).change();
      });
    </script>
  </body>
</html>