@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
 <div class="titulo">
	<div class="pull-left">
	  <h1>Cursos</h1>
  </div>
  <div>
    <a class="btn btn-success initialized" style="margin-left: 450px" href="{{action('CursoController@create')}}">Novo</a>
  </div>
 </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>        
      </tr>
    </thead>
    <tbody>
      @foreach($cursos as $curso)
      <tr>
        <td>{{ $curso->titulo }}</td>
        
        <td>
          <a href="{{ route('sistema::curso.editarcurso', $curso->id) }}" class="btn btn-default"> Editar </a>
        </td>
        <td>
          <a href="{{ route('sistema::curso.excluircurso', $curso->id) }}" class="btn btn-default"> Excluir </a>
        </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
</div>



@endsection
