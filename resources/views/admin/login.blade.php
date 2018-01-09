<!DOCTYPE html>
<html>

<head>

    @section('headSection')
     @show

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ URL::asset('public/assets/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ URL::asset('public/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{ URL::asset('public/assets/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::asset('public/assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::asset('public/assets/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ URL::asset('public/assets/css/themes/all-themes.css')}}" rel="stylesheet" />

    @section('page_level_header_section')
    @show

</head>

<body class="login-page">
<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Laravel<b>Blog</b></a>
            <small>Login with your email and password which provided to you</small>
        </div>
        <div class="card">
            <div class="body">
                
                @include('layouts.messages')
                
                <form method="POST" action="{{ route('admin.login') }}">
                    {{ csrf_field() }}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>	

 <!-- Jquery Core Js -->
    <script src="{{ URL::asset('public/assets/plugins/jquery/jquery.min.js')}}"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('public/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ URL::asset('public/assets/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ URL::asset('public/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::asset('public/assets/plugins/node-waves/waves.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('public/assets/js/admin.js')}}"></script>

    <script src="{{ URL::asset('public/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{ URL::asset('public/assets/js/demo.js')}}"></script>
   
    <script src="{{ URL::asset('public/assets/js/demo.js')}}"></script>

</body>

</html>
       
