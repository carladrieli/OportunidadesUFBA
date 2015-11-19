@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
 <div class="titulo">
	<div class="pull-left">
	  <h1>Gerenciar Oportunidades</h1>
  </div>
  <div>
    <a class="btn btn-success initialized" style="margin-left: 450px" href="{{action('Oportunidade\OportunidadeController@create')}}">Nova</a>
  </div>
 </div>
</div>



<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>        
      
        <th>Descrição</th>
        <th>Cursos</th>        
      
        <th>Carga Horária (H)</th>        
     
        <th>Valor (R$)</th>        
      </tr>

    </thead>
    <tbody>
      @foreach($oportunidades as $oportunidade)
      <tr>
      <td>{{ $oportunidade->titulo }}</td>
      <td width="30%">{{ $oportunidade->descricao }}</td> 

      <td>@foreach ($oportunidade->cursos as $curso){{ $curso->titulo }}</br>@endforeach</td>
      

      <td>{{ $oportunidade->cargaHoraria }}</td>
      <td>{{ $oportunidade->valor }}</td>
      
              
            
        <td>
          <a href="{{ route('sistema::oportunidade.editaroportunidade', $oportunidade->id) }}" class="btn btn-default"> Editar </a>
        </td>
        <td>
          <a href="{{ route('sistema::oportunidade.excluiroportunidade', $oportunidade->id) }}" class="btn btn-default"> Excluir </a>
        </td>
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection
