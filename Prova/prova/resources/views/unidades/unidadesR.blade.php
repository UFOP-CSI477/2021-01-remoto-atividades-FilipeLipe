<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Datatable - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/icon/logo.png">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/slicknav.min.css') }}">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('srtdash/assets/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('srtdash/assets/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('srtdash/assets/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('srtdash/assets/css/responsive.jqueryui.min.css') }}">
    <!-- style css -->
    <link href="{{ asset('srtdash/assets/css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/default-css.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- modernizr css -->
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                    <ul class="metismenu" id="menu">
                            <li>
                                <a href="{{' / '}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Menu Principal</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i>
                                    <span>Cadastros</span></a>
                                <ul class="collapse">
                                    <li class=""><a href="{{route('pessoas.create')}}">Pessoas</a></li>
                                    <li class=""><a href="{{route('vacinas.create')}}">Vacinas</a></li>
                                    <li class=""><a href="{{route('unidades.create')}}">Unidades</a></li>
                                    <li class=""><a href="{{route('registros.create')}}">Registros</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Relatorios</span></a>
                                <ul class="collapse">
                                    <li><a href="{{route('pessoas.index')}}">Pessoas</a></li>
                                    <li><a href="{{route('vacinas.index')}}">Vacinas</a></li>
                                    <li><a href="{{route('unidades.index')}}">Unidades</a></li>
                                    <li><a href="{{route('registros.index')}}">Registros</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layers-alt"></i> <span>Login / Cadastro</span></a>
                                <ul class="collapse">
                                    <li><a href="{{' /login '}}">Login</a></li>
                                    <li><a href="{{' /cadastro '}}">Cadastro</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Table Dark</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Bairro</th>
                                                <th>Cidade</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($unidades as $e)
                                                <tr>
                                                    <td>{{ $e->nome }}</td>
                                                    <td>{{ $e->bairro }}</td>
                                                    <td>{{ $e->cidade }}</td>
                                                    <td>{{ $e->estados }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/metisMenu.min.js"></script>
    <script src="../js/jquery.slimscroll.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="../js/plugins.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>
