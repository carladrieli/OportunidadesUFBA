<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nova Oportunidade | Oportunidades UFBA</title>

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
      <form class="formulario" id="formCadastro" method="post" action="{{action('Empresa\OportunidadesController@store')}}">
        {!! csrf_field() !!}
        <h2 class="topo-formulario-login">Nova Oportunidade</h2>
        <div class="conteudo-login">
        <div class="form-group">
          <input type="text" required class="form-control" id="titulo-oportunidade" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
           <textarea required class="form-control" rows="5" id="descricao-oportunidade" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}"></textarea>
        </div>
        <div class="form-group">
          <input type="number" required class="form-control" id="cargaHoraria-oportunidade" name="cargaHoraria" placeholder="Carga Horária" value="{{ old('cargaHoraria') }}">                        
        </div>  
        <div class="form-group">
          <input type="number" required class="form-control" id="remuneracao-oportunidade" name="valor" placeholder="Remuneração" value="{{ old('valor') }}">                        
        </div>
        <div class="form-group">
          <input type="date" required class="form-control" id="data_inicio_selecao-oportunidade" name="data_inicio_selecao" placeholder="Início" value="{{ old('data_inicio_selecao') }}">                        
        </div>
        <div class="form-group">
          <input type="date" required class="form-control" id="data_fim_selecao-oportunidade" name="data_fim_selecao" placeholder="Final" value="{{ old('data_fim_selecao') }}">                        
        </div>
        <button type="submit" class="btn">Cadastrar</button>
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
      });
    </script>
  </body>
</html>