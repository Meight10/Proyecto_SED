@extends('layouts.app')

@section('content')

    <body class="login-page sidebar-collapse">
        <div class="page-header header-filter" style="background-image: url('./assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <div class="card card-login">
                            <form class="form" method="" action="">
                                <div class="card-header card-header-primary text-center">
                                    <h4 class="card-title">Login</h4>
                                    <div class="social-line">
                                        <a href="#" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-just-icon btn-link">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="description text-center">Or Be Classical</p>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">face</i>
                        </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="Email...">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Password...">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="">
                                    Dream Team
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made by Dream Team.
                    </div>
                </div>
            </footer>
        </div>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
        <script src="./assets/js/plugins/moment.min.js"></script>
        <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
        <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--	Plugin for Sharrre btn -->
        <script src="./assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
        <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
    </body>

@endsection
