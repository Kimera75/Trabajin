<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cusur Catalogo Web</title>
    <!-- Bootstrap Core CSS -->
    {!!Html::style('css/vendor/bootstrap.min.css')!!}
    {{-- <link href="css/vendor/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- MetisMenu CSS -->
    {!!Html::style('css/vendor/metisMenu.min.css')!!}
    {{-- <link href="css/vendor/metisMenu.min.css" rel="stylesheet"> --}}

    <!-- Custom Fonts -->
    {!!Html::style('css/vendor/font-awesome/css/font-awesome.min.css')!!}
    {{-- <link href="css/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> --}}

    <!-- bootstrap datepicker -->
    {!!Html::style('css/vendor/bootstrap-datepicker.css')!!}
    {{-- <link rel="stylesheet" href="css/vendor/bootstrap-datepicker.css"> --}}

    {{-- Boostrap DataTable --}}
    {!!Html::style('css/vendor/bootstrap-table.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('css/main.css')!!}    
    {{--  <link href="css/main.css" rel="stylesheet"> --}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!!URL::to('/')!!}">Catalogo Web</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw fa-2x"></i><i class="fa fa-caret-down"></i>
                        @Usuario
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li>
                            <a href="#" >
                                <i class="fa fa-info fa-fw pull-left"></i> Mi perfil
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" >
                                <i class="fa fa-wrench fa-fw pull-left"></i>Configuraciones
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" >
                                <i class="fa fa-times fa-fw pull-left"></i> Salir
                            </a>
                        </li>                        
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">                                     
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw fa-2x"></i> Usuarios<span class="fa arrow app-icon"></span></a>
                            <ul class="sub-nav nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/user/create')!!}" >
                                        <i class="fa fa-plus-circle fa-fw"></i> Agregar/Eliminar Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/user')!!}">
                                        <i class="fa fa-users fa-fw"></i>
                                        Ver Usuarios
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-cubes fa-fw fa-2x"></i> Articulos<span class="fa arrow app-icon"></span></a>
                            <ul class="sub-nav nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/article/create')!!}">
                                        <i class="fa fa-plus-circle fa-fw"></i> 
                                        Agregar/Eliminar Articulos
                                    </a>
                                </li>
                                <li>                                    
                                    <a href="{!!URL::to('/article')!!}">
                                        <i class="fa fa-bars fa-fw"></i> 
                                        Ver Articulos
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw fa-2x"></i> Categorias<span class="fa arrow app-icon"></span></a>
                            <ul class="sub-nav nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/category/create')!!}">
                                        <i class="fa fa-plus-circle fa-fw"></i> 
                                        Agregar/Eliminar Categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/category')!!}">
                                         <i class="fa fa-bars fa-fw"></i> 
                                        Ver Categorias
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-university fa-fw fa-2x"></i> Prestamos<span class="fa arrow app-icon"></span></a>
                            <ul class="sub-nav nav nav-second-level">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-exchange fa-fw"></i> 
                                        Entrega
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-share-alt fa-fw"></i>                
                                        Prestamos
                                    </a>                                    
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw fa-2x"></i> Configuraciones<span class="fa arrow app-icon"></span></a>
                            <ul class="sub-nav nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/config/sanciones')!!}">
                                        <i class="fa fa-exclamation-triangle fa-fw"></i>     
                                        Sanciones</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-fw"></i>
                                        Reportes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                                                          
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="padding-top:20px;">
            <div class="app-container">
                @yield('content')
            </div>
            <!-- /.app-container -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    {!!Html::script('js/vendor/jquery.min.js')!!}
    {{-- <script src="js/vendor/jquery.min.js"></script> --}}

    <!-- Bootstrap Core JavaScript -->
    {!!Html::script('js/vendor/bootstrap.min.js')!!}
    {{-- <script src="js/vendor/bootstrap.min.js"></script> --}}

    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('js/vendor/metisMenu.min.js')!!}
    {{-- <script src="js/vendor/metisMenu.min.js"></script> --}}

    <!-- bootstrap datePicker -->
    {!!Html::script('js/vendor/bootstrap-datepicker.js')!!}
    {{-- <script src="js/vendor/bootstrap-datepicker.js"></script> --}}

    {{-- Bootstrap DataTable --}}
    {!!Html::script('js/vendor/bootstrap-table.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('js/main.js')!!}
    {{-- <script src="js/main.js"></script> --}}
</body>
</html>
