<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>DINAS SOSIAL</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_URL') }}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_URL') }}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ env('APP_URL') }}/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ env('APP_URL') }}/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ env('APP_URL') }}/assets/pages/css/lock-2.min.css" rel="stylesheet" type="text/css" />
        <style>
        .login-title {
            font-size: 20px;
            color: #fff;
            font-weight: bold;
        }

        .login-title .sub-title {
            font-size: 14px;
        }
        </style>
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ env('app_url') }}/favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="">
        <div class="page-lock">
            <div class="page-logo">
                {{-- <a class="brand" href="index.html">
                    <img src="{{ env('APP_URL') }}/assets/pages/img/logo-big.png" alt="logo" />
                </a> --}}
                <div class="login-title">
                    DINAS SOSIAL KABUPATEN BANDUNG BARAT <br>
                    <div class="sub-title">
                        APLIKASI PENYUSUNAN LAPORAN
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="page-body">
                @if (session('user.image') == '')
                    <img class="page-lock-img" src="{{ env('APP_URL') }}/img/default_picture.jpg" alt="">
                @else
                    <img class="page-lock-img" src="{{ env('APP_URL') }}/{{ Auth::user()->image }}" alt="">
                @endif
                <div class="page-lock-info">
                    <h1>{{ Auth::user()->name }}</h1>
                    <span class="email"> {{ Auth::user()->email }} </span>
                    <span class="locked"> Terkunci </span>
                    <form class="lock-form pull-left" action="{{ env('APP_URL') }}/lockscreen/open" method="post">
                        {{ csrf_field() }}
                        <div class="input-group input-medium">
                            <input class="form-control" type="password" autocomplete="off" placeholder="Input Username to Unlock" name="username" autofocus/>
                            <span class="input-group-btn">
                                <button type="submit" class="btn green icn-only">
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                        <div class="relogin">
                            <a href="{{ env('app_url') }}/logout"> Bukan {{ Auth::user()->name }} ? </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="page-footer-custom"> 2018 &copy; DINSOS KBB </div>
        </div>
        <!--[if lt IE 9]>
<script src="{{ env('APP_URL') }}/assets/global/plugins/respond.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/excanvas.min.js"></script>
<script src="{{ env('APP_URL') }}/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ env('APP_URL') }}/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ env('APP_URL') }}/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ env('APP_URL') }}/assets/pages/scripts/lock-2.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
