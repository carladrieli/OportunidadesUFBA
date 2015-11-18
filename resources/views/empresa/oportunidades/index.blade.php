@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:10px;">
 <div class="titulo">
	<div class="pull-left">
	  <h1>Gerenciar Oportunidades</h1>
  </div>
  <div>
    <a class="btn btn-success initialized" style="margin-left: 450px" href="{{action('Empresa\OportunidadesController@create')}}">Nova</a>
  </div>
 </div>
</div>
<div class="col-md-10">
<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title"><b>Estágio em Web Designer</b></h1>
</div>
<div class="panel-body">
<div class="row">  
  <div class="col-md-3">
    <h4>Cursos</h4>
    <p>Sistemas de Informação</p>
  </div>
  <div class="col-md-3">
    <h4>Valor</h4>
    <p>R$ 1.000,00</p>
  </div>
  <div class="col-md-3">
    <h4>Carga Horária</h4>
    <p>20h semanais</p>
  </div>
  <div class="col-md-10">
    <h4>Descrição</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend enim id tortor congue posuere. Sed dignissim nunc ac facilisis porttitor. Suspendisse potenti. Curabitur neque mi, mollis ac dignissim non, lacinia sit amet magna. Integer vitae molestie justo, eget ultricies tortor. Nam nec libero eget lectus dictum rhoncus. Vestibulum dapibus est eget mollis faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eleifend enim id tortor congue posuere. Sed dignissim nunc ac facilisis porttitor. Suspendisse potenti. Curabitur neque mi, mollis ac dignissim non, lacinia sit amet magna. Integer vitae molestie justo, eget ultricies tortor. Nam nec libero eget lectus dictum rhoncus. Vestibulum dapibus est eget mollis faucibus.
    </p>
  </div>
</div>
</div>
<div class="panel-footer">
<div class="row">    
      <a class="btn btn-success initialized" style="margin-left: 10px" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Editar Oportunidade</a>  
      <a class="btn btn-success initialized" style="margin-left: 10px" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Excluir Oportunidade</a>
      <a class="btn btn-success initialized" style="margin-left: 10px" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Ver Candidatos</a>
</div>
</div>
</div>
</div>
@endsection
