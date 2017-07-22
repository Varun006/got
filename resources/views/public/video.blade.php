@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{@asset('got-css/video.css')}}" rel="stylesheet" type="text/css"/>
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
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/pVG5MP0b-xk" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s6">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/yKWoRPerORY" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s6">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/DzrLtBC7wXc" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/e2WbfBwezb8" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/GuISH0Lr3mU" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s5">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/NB-PhDmRXUI" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <div class="responsive-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pFm4gBZATWU"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <div class="responsive-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Nb1Zxej3FfQ"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s4">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/_tn4Ge0xlyw" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/5u7jCXxy_AE" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <div class="responsive-video">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/38hnsgqf8O0"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s3">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/m42an5GZzCI" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/i9_yyyQhMmI" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/U2d-etfU8YU" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s2">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/1Mlhnt0jMlg" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/Egy5A070cbA" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/0m3C03Q7pXs" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter s1">
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/4bv-b8MbCuc" class="embed-responsive-item"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    <script>
        $(document).ready(function () {
            $('.detect').removeClass('active');
            $('#videos').addClass('active');
            $(".filter-b").click(function () {
                var value = $(this).attr('data-filter');
                $('.filter-b').removeClass('active');
                $(this).addClass('active');

                if (value == "all") {
                    $('.filter').show('1000');
                }
                else {
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });
        });
    </script>
@stop