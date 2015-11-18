@extends('layout.principal')

@section('conteudo')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
              <div class="titulo">
                <div class="pull-left">
                  <h1>Alunos Interessados</h1>
                </div>
              </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pagina">
                  <div class="col-md-8 col-sm-9 col-xs-10">
                    <form>
                      <div class="form-group">
                        <label>Oportunidade</label>
                        <select required class="form-control">
                          <option>Oportunidade 1</option>
                          <option>Oportunidade 2</option>
                          <option>Oportunidade 3</option>
                        </select>
                      </div>

                      <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Alunos</h1>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3">
                <h4>Nome</h4>
                <p>Carla Fagundes</p>
              </div>
              <div class="col-md-3">
                <h4>Cursos</h4>
                <p>Sistemas de Informação</p>
              </div>
              <div class="col-md-3">
                <h4>Semestre</h4>
                <p>7°</p>
              </div>
              <div class="col-md-3">
                <h4>Previsão de conclusão</h4>
                <p>20h semanais</p>
              </div>
              <div class="col-md-10">
                <h4>Descrição dos Interesses</h4>
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
                  <a class="btn btn-success initialized" data-component="eventSubscribe" data-event-template="opportunityApply" data-target="#modal-inscreva-se" data-toggle="modal" href="#">Gostei de Você</a>
                </div>
              </div>              
            </div>
          </div>
            </div>
                    </form>
                  </div>
                </div>
              </div>
              
            
@endsection
