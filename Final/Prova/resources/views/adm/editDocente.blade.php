<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/icon/logo.png">
    <link href="{{ asset('srtdash/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/metisMenu.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/slicknav.min.css') }}" rel="stylesheet">

    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->    
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
                    <a href="index.html"><img src="../images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="{{' / '}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Logout</span></a>
                            </li>

                            <li><a href="{{route('tema.create')}}">Incluir Tema</a></li>
                            <li><a href="{{route('user.create')}}">Incluir Docente</a></li>
                            <li><a href="{{route('user.index')}}">Listar Docente</a></li>
                            <li><a href="{{route('tema.index')}}">Listar Tema</a></li>
                            <li><a href="{{route('voto.index')}}">Listar Voto</a></li>
                            <li><a href="{{route('voto.index')}}">Totalizar Voto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Cadastro de Docentes</h4>
                                        <form action="{{ route('user.update', $user->id)}}" method="post">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <small id="emailHelp" class="form-text text-muted">Digite o nome do docente</small>
                                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" required="required" aria-describedby="emailHelp" placeholder="Nome" value="{{ $user->name }}">
                                            </div>
                                            <div class="form-group">
                                                <small id="emailHelp" class="form-text text-muted">Digite o email do docente</small>
                                                <input type="text" name="email" class="form-control" id="exampleInputPassword1" required="required" placeholder="Email" value="{{ $user->email }}">
                                            </div>
                                            <div class="form-group">
                                                <small id="emailHelp" class="form-text text-muted">Cuidado com a senha, crie algo forte e tente não esquecer!</small>
                                                <input type="text" name="password" class="form-control" id="exampleInputPassword1" required="required" placeholder="Senha" value="{{ $user->password }}">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="csenha" class="form-control" id="exampleInputPassword1" required="required" placeholder="Confirmar Senha" value="{{ $user->password }}">
                                            </div>                                            
                                            
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Cadastrar Docente</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- basic form end -->
                        </div>
                    </div>
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

    <!-- others plugins -->
    <script src="../js/plugins.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>
