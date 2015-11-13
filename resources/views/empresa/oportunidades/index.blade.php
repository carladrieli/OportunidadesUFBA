@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
 <div class="titulo">
	<div class="pull-left">
	  <h1>Gerenciar Oportunidades</h1>
  </div>
 </div>
</div>
<div class="col-md-2">
<div class="panel panel-default">
  <div class="row">
    <div class="col-xs-6 col-md-12">
      <a class="mbf" href="/coobo">
        <span class="square-image panel-cover mbf square" data-component="Logo" style="background-image: url(https://99prod.s3.amazonaws.com/uploads/image/file/305939/regular_marca-vertical.png);">
          <span class="square-container">
            <div class="uploadbox-image-container" width="250" height="250">
              <img width="250" height="250" class="img-responsive" src="https://99prod.s3.amazonaws.com/uploads/image/file/305939/regular_marca-vertical.png" alt="Regular marca vertical">
            </div>
          </span>
        </span>
      </a>
    </div>
    <div class="col-xs-6 col-md-12">
      <div class="panel-body">
        <h1 class="panel-title">Cossobo</h1>
        <address><i class="fa fa-map-marker"></i> Rio de Janeiro, RJ</address>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-10">
<div class="panel panel-default">
<div class="panel-heading">
<h1 class="panel-title">Estágio em Web Designera</h1>
</div>
<div class="panel-body">
<div class="row">
  <div class="col-md-3">
    <h4>Tipo</h4>
    <p>Estágio</p>
  </div>
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
  <div class="col-sm-2">
    <div class="btn-group btn-group-left">
      <a class="btn btn-success initialized" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Editar Oportunidade</a>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="btn-group btn-group-left">
      <a class="btn btn-success initialized" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Excluir Oportunidade</a>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="btn-group btn-group-left">
      <a class="btn btn-success initialized" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Ver Candidatos</a>
    </div>
  </div>

</div>
</div>
</div>
</div>
@endsection
