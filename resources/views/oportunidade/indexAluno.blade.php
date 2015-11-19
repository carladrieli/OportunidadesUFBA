@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
 <div class="titulo">
	<div class="pull-left">
	  <h1>Visualizar Oportunidades</h1>
  </div>
  
 </div>
</div>



<table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>        
      
        <th>Descrição</th>         
      
        <th>Carga Horária (H)</th>        
     
        <th>Valor (R$)</th>        
      </tr>

    </thead>
    <tbody>
      @foreach($oportunidades as $oportunidade)
      <tr>
      <td>{{ $oportunidade->titulo }}</td>
      <td width="30%">{{ $oportunidade->descricao }}</td>
      
      <td>{{ $oportunidade->cargaHoraria }}</td>
      <td>{{ $oportunidade->valor }}</td>      
                
        <td>
          <a href="{{ route('sistema::oportunidade.candidataroportunidade', $oportunidade->id) }}" class="btn btn-default"> Candidatar-se </a>
        </td>
        
      </tr>
      @endforeach 
    </tbody>
  </table>
@endsection
