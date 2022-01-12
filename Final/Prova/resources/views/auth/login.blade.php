@extends('layouts.app')

@section('content')

<div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                
                    <div class="login-form-head">
                        <h4>LOGIN</h4>
                        <p>Vamos entrar em sua conta ?</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Senha</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @if(session('mensagem'))

                    <div class="alert alert-success">
                        {{ session('mensagem') }}
                    </div>

                @endif
            </div>
        </div>
    </div>

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

@endsection
