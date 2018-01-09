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

<body class="theme-red">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{Route('home')}}">LARAVEL BLOG</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="Admin" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">info@codemetech.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">NAVIGATION</li>
                    <li>
                        <a href="">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{  url('posts')  }}">
                            <i class="material-icons">list</i>
                            <span>List</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{  url('admin/post')  }}">
                            <i class="material-icons">list</i>
                            <span>Posts</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{  url('admin/tag')  }}">
                            <i class="material-icons">list</i>
                            <span>Tags</span>
                        </a>
                    </li>    
                    <li>
                        <a href="{{  url('admin/category')  }}">
                            <i class="material-icons">list</i>
                            <span>Category</span>
                        </a>
                    </li>  
                    <li>
                        <a href="{{  url('admin/user')  }}">
                            <i class="material-icons">list</i>
                            <span>Users</span>
                        </a>
                    </li>               
                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Sher Muhammad (Laravel developer)</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>


{{-- ======================== END HEADER SECTION ============================ --}}


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                
                @include('flash::message')
                @yield('contents')

            </div>
        </div>
    </section>







{{-- ===================== FOOTER SECTION ================================ --}}


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
    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ URL::asset('public/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{ URL::asset('public/assets/js/demo.js')}}"></script>
   
    <script src="{{ URL::asset('public/assets/js/demo.js')}}"></script>

 script>

    <script>
        $('input').bootstrapMaterialDatePicker();
    </script>

    @section('page_level_footer_section')
    @show

<script>
    $('#flash-overlay-modal').modal();
</script>
</body>

</html>
