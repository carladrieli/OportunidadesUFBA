<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alunos Interessados | Oportunidades UFBA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    @yield('cssExtra')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="page-topbar">
          <div class="logo-area">
            <h4>Oportunidades <strong>UFBA</strong></h4>
          </div>
          <div class="pull-left">
            <div class="info-menu">
              <form class="formulario-search">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Pesquisar">
                </div>
              </form>
            </div>
          </div>
          <div class="pull-right">
            <ul class="info-menu right-links list-inline list-unstyled">
              <li class="profile">
                <a href="#" class="toggle">
                  <span><i class="glyphicon glyphicon-bell"></i> Notificações</span>
                </a>
                <a href="#" class="toggle">
                  <span><i class="glyphicon glyphicon-user"></i> {{Auth::user()->nome}}</span>
                </a>
                 <a href="{{ route('sistema::logout') }}" class="toggle">
                  <span><i class="glyphicon glyphicon-log-out"></i> Sair</span>
                </a>
              </li>
            </ul>     
          </div>
          
        </div>
        <div class="col-sm-3 col-md-2 sidebar">
          <div id="main-menu-wrapper">
            <h5>Navegação</h5>
            <ul class="wraplist"> 
            <li class=""> 
              <a href="painel.html">
                <span class="glyphicon glyphicon-dashboard"></span>
                <span class="title">Painel</span>
              </a>
            </li>
            @if(Auth::user()->isAdmin())
            <li class="open"> 
                <a href="cadastrar_aluno.html">
                    <span class="glyphicon glyphicon-education"></span>
                    <span class="title">Cadastrar Aluno</span>
                </a>
              </li>
              <li class=""> 
                <a href="cadastrar_professor.html">
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="title">Cadastrar Professor</span>
                </a>
              </li>
              <li class=""> 
                <a href="cadastrar_empresa.html">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="title">Cadastrar Empresa</span>
                </a>
              </li>
              <li class=""> 
                <a href="cadastrar_curso.html">
                    <span class="glyphicon glyphicon-book"></span>
                    <span class="title">Cadastrar Curso</span>
                </a>
              </li>
            @endif
            @if(Auth::user()->isEmpresa() || Auth::user()->isAdmin())
            <li class=""> 
                <a href="cadastrar_oportunidade.html">
                    <span class="glyphicon glyphicon-check"></span>
                    <span class="title">Cadastrar Oportunidade</span>
                </a>
              </li>
            @endif
            <li class=""> 
                <a href="oportunidades.html">
                    <span class="glyphicon glyphicon-folder-open"></span>
                    <span class="title">Oportunidades</span>
                </a>
            </li>
            </ul>
          </div>
          
          </div>

        <section id="main-content">
          <section class="wrapper">
          @yield('conteudo')
          </section>
        </section>
        
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    @yield('scriptsExtra')
  </body>
</html>