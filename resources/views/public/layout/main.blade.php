<!DOCTYPE HTML>
<html>
<head>
    <title>Game Of Thrones</title>
    <link href="{{@asset('got-css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{@asset('got-css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{@asset('got-css/responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('share-meta')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{@asset('got-css/swipebox.css')}}">
    <style>
        .mobileMenu {
            display:none;
        }
        @media screen and (max-width: 500px) {
            .mobileMenu {
                display:block; }
        }
    </style>
    @yield('extra-css')
    <script src="{{@asset('got-js/jquery-1.8.3.min.js')}}"></script>
    <!-- Light Box -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- End Light Box -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{@asset('got-js/move-top.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!-- End-smoth-scrolling -->
    <script src="{{@asset('got-js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
</head>

<body>
@yield('fb-share-js')

@yield('body')


@yield('extra-js')

@yield('extra-scripts')

@include('public.layout.footer')

</body>
</html>