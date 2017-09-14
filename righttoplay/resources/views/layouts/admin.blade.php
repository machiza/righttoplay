<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
    {!! Html::style('vendor/metisMenu/metisMenu.min.css') !!}
    {!! Html::style('vendor/datatables-plugins/dataTables.bootstrap.css') !!}
    {!! Html::style('vendor/datatables-responsive/dataTables.responsive.css') !!}
    {!! Html::style('dist/css/sb-admin-2.css') !!}
    {!! Html::style('css/admin.css') !!}
    {!! Html::style('vendor/morrisjs/morris.css') !!}
    {!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!} 

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="titulo" class="navbar-brand" href="{!! URL::to('/www.righttoplay.com') !!}">{{ Html::image('images/RTP_tricolour_horizontal_170.png') }}</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{!! URL::to('/admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/user/create') !!}"><i class='fa fa-plus fa-fw'></i> Adicionar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/user') !!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shield fa-fw"></i> Local<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/local/create') !!}"><i class='fa fa-plus fa-fw'></i> Adicionar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/local') !!}"><i class='fa fa-list-ol fa-fw'></i> Locais</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Escola<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/escola/create') !!}"><i class='fa fa-plus fa-fw'></i> Adicionar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/escola') !!}"><i class='fa fa-list-ol fa-fw'></i> Escolas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-mortar-board fa-fw"></i> Professor<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/professor/create') !!}"><i class='fa fa-plus fa-fw'></i> Adicionar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/professor') !!}"><i class='fa fa-list-ol fa-fw'></i> professores</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-trophy fa-fw"></i> Competição<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('/competicao/create') !!}"><i class='fa fa-plus fa-fw'></i> Adicionar</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('/competicoes') !!}"><i class='fa fa-list-ol fa-fw'></i> Competições</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>
    

    
    {!! Html::script('vendor/jquery/jquery.min.js') !!}
    {!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('vendor/metisMenu/metisMenu.min.js') !!}
    {!! Html::script('vendor/datatables/js/jquery.dataTables.min.js') !!}
    {!! Html::script('vendor/datatables-plugins/dataTables.bootstrap.min.js') !!}
    {!! Html::script('vendor/datatables-responsive/dataTables.responsive.js') !!}
    {!! Html::script('vendor/raphael/raphael.min.js') !!}
    {!! Html::script('vendor/morrisjs/morris.min.js') !!}
    {!! Html::script('data/morris-data.js') !!}
    {!! Html::script('dist/js/sb-admin-2.js') !!}

    @section('scripts')

    @show

</body>

</html>
