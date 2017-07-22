<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="{{ @asset('images/logo.png') }}"></a><!--Put your logo here-->
        </div>
        <div class="top-menu">
            <span class="menu mobileMenu">Menu</span>
            <!--Menu-->

            <ul>
                <li><a href="/" class="active detect" class="scroll">home</a></li>
                <li><a href="/deadParty" class="detect" id="dead">Dead Party</a></li>
                <li><a href="/shop" class="detect" id="shop">Shop</a></li>
                <li><a href="/videos" class="detect" id="videos">Videos</a></li>
                <li><a href="/predictions" class="detect" id="predictions">Predictions</a></li>
                <li><a href="/news-articles" class="detect" id="news-article">News & Articles</a></li>
                <li><a href="/twist" class="detect" id="twist">Guess the twist</a></li>
                {{--<li><a href="http://www.google.com">Google</a></li>--}}
            </ul>
            <!--End Menu-->
        </div>
        <!--script-nav-->
        <script>
            $("span.menu").click(function () {
                $(".top-menu ul").slideToggle("slow", function () {
                });
            });
        </script>
        <div class="clearfix"></div>
    </div>
</div>