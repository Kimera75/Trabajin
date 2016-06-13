<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Catalago</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-default app-nav" role="navigation">
      <div class="container">
        <a class="navbar-brand" href="/">Laboratorio de Telematica</a>
        <div class="pull-right">
            <ul class="nav nav-pills">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"></span>
                  @Cristofer
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu app-dropdown">
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-cog"></span>
                       Configuraciones 
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-home"></span>
                       Mi perfil
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-remove"></span>
                       Salir
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
        </div>
      </div>
    </nav>

    <div class="container app-container">
      <div class="col-md-2 all-height">
        <ul class="nav nav-pills nav-stacked txt-center">
          <li class="item-menu-left bord-bot">
            <a class="a-menu-left" href="#user" data-toggle="collapse">Usuarios <span class="caret"></span></a>
            <div class="collapse" id="user">
              <ul class="nav nav pills nav-stacked">
                <li class="item-menu-left">
                  <a href="/add_user" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Agregar</a>
                </li>
                <li class="item-menu-left">
                  <a href="" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Usuarios</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="item-menu-left bord-bot">
            <a class="a-menu-left" href="#article" data-toggle="collapse">Articulos <span class="caret"></span></a>
            <div class="collapse" id="article">
              <ul class="nav nav pills nav-stacked">
                <li class="item-menu-left">
                  <a href="#add-article" data-toggle="collapse" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Agregar<span class="caret"></span></a>
                  <div class="collapse" id="add-article">
                    <ul class="nav nav-pilss nav-stacked">
                      <li class="item-menu-left">
                        <a href="/add_cat" class="a-menu-left letter-black">
                          <span class="glyphicon glyphicon-asterisk"></span>&nbsp;Categorias
                        </a>
                      </li>
                      <li class="item-menu-left">
                        <a href="/add_art" class="a-menu-left letter-black">
                          <span class="glyphicon glyphicon-asterisk"></span>&nbsp;Articulos
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="item-menu-left">
                  <a href="" class="a-menu-left letter-black">&nbsp;&nbsp; <span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Articulos</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="item-menu-left bord-bot">
            <a class="a-menu-left" href="#prestamos" data-toggle="collapse">Préstamos <span class="caret"></span></a>
            <div class="collapse" id="prestamos">
              <ul class="nav nav pills nav-stacked">
                <li class="item-menu-left">
                  <a href="/entrega" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;Entrega</a>
                </li>
                <li class="item-menu-left">
                  <a href="#tipo-prestamo" data-toggle="collapse" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Préstamo <span class="caret"></span></a>
                  <div class="collapse" id="tipo-prestamo">
                    <ul class="nav nav-pilss nav-stacked">
                      <li class="item-menu-left">
                        <a href="/interno" class="a-menu-left letter-black">
                          <span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;Interno
                        </a>
                      </li>
                      <li class="item-menu-left">
                        <a href="/externo" class="a-menu-left letter-black">
                          <span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;Externo
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="item-menu-left bord-bot">
            <a class="a-menu-left" href="#config" data-toggle="collapse">Configuraciones&nbsp;&nbsp;<span class="caret"></span></a>
            <div class="collapse" id="config">
              <ul class="nav nav pills nav-stacked">
                <li class="item-menu-left">
                  <a href="/sanciones" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sanciones</a>
                </li>
                <li class="item-menu-left">
                  <a href="" class="a-menu-left letter-black">&nbsp;&nbsp;<span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Reportes</a>
                </li>
              </ul>
            </div>
          </li>             
        </ul>
      </div>
      <!-- content -->
        @yield('content')

    </div>


      <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

      <script src="js/vendor/bootstrap.min.js"></script>

      <script src="js/main.js"></script>
    </body>
</html>
