@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
    <style>
        .gallery-title {
            font-size: 36px;
            color: #fac832;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }

        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }

        .filter-button {
            font-size: 18px;
            border: 1px solid #fac832;
            border-radius: 5px;
            text-align: center;
            color: #fac832;
            margin-bottom: 30px;

        }

        .filter-button:hover {
            font-size: 18px;
            border: 1px solid #fac832;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #fac832;

        }

        .btn-default:active .filter-button:active {
            background-color: #fac832;
            color: white;
        }

        .port-image {
            width: 100%;
        }

        .gallery_product {
            margin-bottom: 30px;
        }

    </style>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="container"><!--Content Section-->
        <div class="content">
            <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="gallery-title">GOT Evolution</h1>
                </div>

                <div align="center">
                    <ul id="filters" class="clearfix">
                        <li><span class="active filter-b" id="all" data-filter="all">All</span></li>
                        <li><span class="filter-b" data-filter="s6">Season 6</span></li>
                        <li><span class="filter-b" data-filter="s5">Season 5</span></li>
                        <li><span class="filter-b" data-filter="s4">Season 4</span></li>
                        <li><span class="filter-b" data-filter="s3">Season 3</span></li>
                        <li><span class="filter-b" data-filter="s2">Season 2</span></li>
                        <li><span class="filter-b" data-filter="s1">Season 1</span></li>
                    </ul>
                </div>
                <br/>


                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s6">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/pVG5MP0b-xk" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s6">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/yKWoRPerORY" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s6">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/DzrLtBC7wXc" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/e2WbfBwezb8" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/GuISH0Lr3mU" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/NB-PhDmRXUI" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/pFm4gBZATWU" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/Nb1Zxej3FfQ" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/_tn4Ge0xlyw" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/5u7jCXxy_AE" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/38hnsgqf8O0" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/m42an5GZzCI" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/i9_yyyQhMmI" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/U2d-etfU8YU" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/1Mlhnt0jMlg" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/Egy5A070cbA" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/0m3C03Q7pXs" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <iframe width="365" height="365" src="https://www.youtube.com/embed/4bv-b8MbCuc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    <script>
        $(document).ready(function(){
            $(".filter-b").click(function(){
                var value = $(this).attr('data-filter');
                $('.filter-b').removeClass('active');
                 $(this).addClass('active');

                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
            });
//            I manually commented this code.
//            if ($(".filter-b").removeClass("active")) {
//                $(this).removeClass("active");
//            }
//            $(this).addClass("active");

        });
    </script>
@stop