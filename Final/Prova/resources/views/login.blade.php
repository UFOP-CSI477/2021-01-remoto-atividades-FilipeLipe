<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../images/icon/logo.png">
    <link href="{{ asset('srtdash/assets/css/typography.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('srtdash/assets/css/themify-icons.css') }}" rel="stylesheet">
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
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="user.Entrar">
                    <div class="login-form-head">
                        <h4>LOGIN</h4>
                        <p>Vamos entrar em sua conta ?</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Entrar <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

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