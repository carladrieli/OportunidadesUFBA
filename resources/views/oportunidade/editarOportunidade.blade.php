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
      <form  id="formCadastro" method="post" action="{{action('Oportunidade\OportunidadeController@update', $oportunidade->id)}}">

        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
          <div class="titulo">
            <div class="pull-left">
              <h1>Editar Oportunidade</h1>
            </div>
          </div>
        </div>

        <div class="conteudo-login">
        <div class="form-group">
          <label>Título</label>
          <input type="text" required class="form-control" id="titulo-oportunidade" name="titulo" placeholder="Título" value="{{ $oportunidade->titulo }}">
        </div>
        <div class="form-group">
          <label>Descrição</label>
          <textarea required class="form-control" rows="5" id="descricao-oportunidade" name="descricao" placeholder="Descrição" >{{ $oportunidade->descricao }}</textarea>
        </div>
        <div class="form-group">
          <label>Cursos Vinculados</label></br>
          @foreach($oportunidade->cursos as $curso)
          <input  type="checkbox" name="curso[]" id="{$curso}" value="{{ $curso->id }}">{{ $curso->titulo }}</input></br>
           @endforeach  


        </div>
        <div class="form-group">
          <label>Carga Horária (H)</label>
          <input type="number" required class="form-control" id="cargaHoraria-oportunidade" name="cargaHoraria" placeholder="Carga Horária" value="{{ $oportunidade->cargaHoraria }}">                        
        </div>  
        <div class="form-group">
          <label>Remuneração (R$)</label>
          <input type="number" required class="form-control" id="remuneracao-oportunidade" name="valor" placeholder="Remuneração" value="{{ $oportunidade->valor }}">                        
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