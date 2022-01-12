<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IncluirTema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/icon/logo.png">
    <link href="{{ asset('srtdash/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/metisMenu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('srtdash/assets/css/themify-icons.css') }}">
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
                            <li><a href="{{route('tema.create')}}"><i class="ti-plus"></i><span>Incluir Tema</span></a></li>
                            <li><a href="{{route('user.create')}}"><i class="ti-plus"></i><span>Incluir Docente</span></a></li>
                            <li><a href="{{route('user.index')}}"><i class="ti-layout"></i><span>Listar Docente</span></a></li>
                            <li><a href="{{route('tema.index')}}"><i class="ti-layout"></i><span>Listar Tema</span></a></li>
                            <li><a href="{{route('voto.index')}}"><i class="ti-layout"></i><span>Listar Voto</span></a></li>
                            <li><a href="{{route('voto.index')}}"><i class="ti-server"></i><span>Totalizar Voto</span></a></li>
                            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                                <li>
                                    <a class="nav-link" href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
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
                                        <h4 class="header-title">Cadastro de Tema</h4>
                                        <form action="{{ route('tema.store')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <small id="emailHelp" class="form-text text-muted">Digite a descrição do tema:</small>
                                                <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" required="required" aria-describedby="emailHelp" placeholder="Nome">
                                            </div>
                                            <div>
                                                <small id="emailHelp" class="form-text text-muted">Qual a importancia para a ordem de votação:</small>
                                                <select name="selectOpcao" class="form-control">
                                                        <option value="1">Muito Importante</option>
                                                        <option value="2">Importante</option>
                                                        <option value="3">Indiferente</option>
                                                        <option value="4">Pouco Importante</option>
                                                        <option value="5">Desnecessário</option>
                                                </select> 
                                            </div>                                         
                                            
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Cadastrar Tema</button>
                                        </form>

                                        @if(session('mensagem'))

                                            <div class="alert alert-success">
                                                {{ session('mensagem') }}
                                            </div>

                                        @endif
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
