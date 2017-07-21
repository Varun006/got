@extends('public.layout.main')

@section('extra-css')
    <link href="{{@asset('got-css/atul.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('body')
    <div class="header remove-bg" id="head">
        @include('public.layout.header')
    </div>

    <div class="content">
        <!--Content Section-->
        <div class="news-details">
            <!--King Of The North Section-->
            <div class="container">
                <div class="col-lg-9">
                    <h1>{{ $news->title }}</h1>
                    <div class="social-share">
                        <a href ="#" class="face-book-btn"> share with Facebook</a>
                        <a href ="#" class="twitter-btn"> share with Twitter</a>
                    </div>
                    <div class="media-box">
                        @if($news->media_type == 'photo')
                            <img src="{{$news->image_url}}">
                        @else
                            {!! $news->media_url !!}
                        @endif
                    </div>
                    <div class="news-article">
                        {!! $news->short_description !!}
                        {!! $news->long_description !!}
                    </div>
                    <div id="disqus_thread"></div>
                </div>
                <div class="col-lg-3">
                    <div class="right-panelbox">
                        <h2>Latest News</h2>
                        @foreach($latest as $single)
                            <div>
                                <h3>{{ $single->title }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra-js')
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
         var disqus_config = function () {
         this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
         this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
         };
         */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://got-dev.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@stop