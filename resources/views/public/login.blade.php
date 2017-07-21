@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content"><!--Content Section-->
        <div class="sign-section"><!--King Of The North Section-->
            <div class="container">
                <div class="col-lg-6">
                    <img src="images/pic1.gif">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="team-content">
                        <p>i'm the bastard son of Eddard Stark, by a mother whose identity is a source of speculation. Raised by his father alongside his true-born half-siblings, but joins the Night's Watch when i nears adulthood. i'm constantly accompanied by my albino direwolf Ghost. At the beginning of A Game of Thrones, i fourteen years old. i'm one of the major POV characters in the books.</p>
                        {{--<form method="POST">--}}
                            {{--<input type="email" name="email" placeholder="Email Id" required><br><br>--}}
                            {{--<input type="password" name="password" placeholder="Password" required>--}}
                            {{--<button>Login</button>--}}
                            {{--<abbr>--}}
                                {{--<a href="#">Register |</a>--}}
                                {{--<a href="#">Forgot Password</a>--}}
                            {{--</abbr>--}}
                        {{--</form>--}}
{{--                        <h1 class="col-lg-12"><img src="{{ @asset('images/icon7.png') }}"> Sign In</h1>--}}
                        <div class="social-login">
                            <a href="/login/facebook" class="face-book-btn"> Login with Facebook</a>
                            <a href="/login/twitter" class="twitter-btn"> Login with Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End King Of The North Section-->
@stop

@section('extra-js')

@stop