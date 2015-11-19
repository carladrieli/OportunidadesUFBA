@extends('layout.principal')

@section('conteudo')

    
    @if (count($errors) > 0)
        <div class="alert alert-danger" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif      
      <form  id="formCadastro" method="post" action="{{action('CursoController@update', $curso->id)}}">

        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
          <div class="titulo">
            <div class="pull-left">
              <h1>Editar Curso</h1>
            </div>
          </div>
        </div>

        <div class="conteudo-login">
        <div class="form-group">
          <label>Título</label>
          <input type="text" required class="form-control" id="titulo-curso" name="titulo" placeholder="Título" value="{{ $curso->titulo }}">
        </div>
        
        <button type="submit" class="btn">Salvar</button>
      </form>
      
    

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
  
@endsection