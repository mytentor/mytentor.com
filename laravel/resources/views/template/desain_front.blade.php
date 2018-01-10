<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/assets/css/style.css') }}" rel="stylesheet">
        <!-- link href="{{ asset('assets/assets/css/animate.css') }}" rel="stylesheet" -->

        <script src="{{ asset('assets/assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/assets/js/bootstrap.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/assets/img/logo.png') }}"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('help') }}">Bantuan</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Login Now</p>
                                            <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div>
                                            atau
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                                
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> keep me logged-in
                                                    </label>
                                                </div> 
                                            </form>
                                        </div>
                                        <div class="bottom text-center">
                                            Belum punya akun? <a href="register.html"><b>Daftar Sekarang</b></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        

        @yield('content')


        <footer>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="footer-ui">
                    <li class="ul-title">Follow Us</li>
                    <li class="ul-item"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="ul-item"><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="ul-item"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="ul-item"><a target="_blank" href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <!-- /col-4 -->
            <div class="clearfix"></div>
        </div>
        <!-- row -->
        </div>
        <div class="copyright">
            <p>Copyright &copy; 2017 Mytentor</p>
        </div>

    </footer>
    </body>
</html>