<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The abovcategorymeta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>GOT Admin Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{@asset('admin/assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{@asset('admin/assets/dist/img/ico/apple-touch-icon-57-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{@asset('admin/assets/dist/img/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{@asset('admin/assets/dist/img/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{@asset('admin/assets/dist/img/ico/apple-touch-icon-144-precomposed.png')}}">

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link href="{{@asset('admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap -->
        <link href="{{@asset('admin/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Lobipanel css -->
        <link href="{{@asset('admin/assets/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Pace css -->
        <link href="{{@asset('admin/assets/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="{{@asset('admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Pe-icon -->
        <link href="{{@asset('admin/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Themify icons -->
        <link href="{{@asset('admin/assets/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{@asset('admin/assets/plugins/toastr/toastr.css')}}" rel="stylesheet" type="text/css" />
        <!-- End Global Mandatory Style
        =====================================================================-->
        
        <!-- Start page Label Plugins 
        =====================================================================-->
       @yield('page-level-css')
       <!-- End page label Plugins ==========================================-->
        
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="{{@asset('admin/assets/dist/css/styleBD.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            @include('admin.layout.header')
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            @include('admin.layout.sideNav')
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="pe-7s-world"></i>
                    </div>
                    <div class="header-title">
                        <h1>GOT Admin Panel</h1>
                        <small>Manage products, news, articles, characters etc from here.</small>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </section>
                @include('admin.errors')
                <!-- Main content -->
               @yield('content')
                <!-- /.content -->
               @include('admin.errors')
            </div> <!-- /.content-wrapper -->
            @include('admin.layout.footer')
        </div>
        <!-- ./wrapper -->
        <!-- Start Core Plugins
        =====================================================================-->
        @include('admin.layout.coreScripts')
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Level Plugins
        =====================================================================-->
        @yield('page-level-scripts')
        <!-- End Page Level Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="{{@asset('admin/assets/dist/js/dashboard.js')}}" type="text/javascript"></script>

        <!-- End Theme label Script
        =====================================================================-->
        @yield('page-level-js')
    </body>
</html>