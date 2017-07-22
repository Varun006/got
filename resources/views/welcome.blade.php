@extends('public.layout.main')

@section('body')

    <div class="header" id="head">
        <div class="header-top">
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="images/logo.png"></a><!--Put your logo here-->
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

        <div class="slider"> <!--Slider Section-->
            <div class="container">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <h3>“A mind needs books as a sword needs a whetstone, if it is to <span>keep its edge</span>.”
                            </h3>
                            <p>― George R.R. Martin, A Game of Thrones</p>
                        </li>
                        <li>
                            <h3>“<span>Winter</span> is coming.”</h3>
                            <p>― George R.R. Martin, A Game of Thrones</p>
                        </li>
                        <li>
                            <h3>“Some old wounds never truly heal, and bleed again at the <span>slightest word</span>.
                            </h3>
                            <p>― George R.R. Martin, A Game of Thrones</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!--End Slider Section-->


    <div class="content"><!--Content Section-->


        <div class="about-section" id="aboutus"><!--King Of The North Section-->

            <div class="about-grids">

                <div class="col-md-6 left-grid">

                    <div class="right-grid1-icon">
                        <img src="{{ @asset('images/icon.png') }}"> <!--Put your Central Icon HERE-->
                    </div>
                    <img src="{{ @asset('images/pic1.gif') }}"/><!--Put your Right Image HERE-->
                </div>
                <div class="col-md-6 right-grid">
                    <div class="right-top">
                        <h3>King of the <span>North</span></h3>
                        <p>King in the North was the title given to the ruler of the North during its time as an
                            independent kingdom, before the coming of the Targaryens.</p>
                        <p class="lable1">A colloquial title also used for the rulers of the North was the "Kings of
                            Winter". House Stark ruled as Kings in the North for thousands of years.
                        </p>
                        <p class="lable1">The ancient Kings of Winter, House Stark ruled as Kings in the North
                            stretching back into the mists of time, before written history began six thousand years ago,
                            when the Andals invaded all of southern Westeros.
                        </p>
                    </div>
                    <div class="right-bottom">
                        <h4>"There sits the only king I mean to bend my knee to:<br>the King in the North!" <br> ―Lord
                            Greatjon Umber, indicating King Robb Stark<h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End King Of The North Section-->
        <div class="services-section" id="service"><!--Synopsis Section-->
            <div class="container">
                <div class="col-md-6 service-leftgrid">

                    <h3><img src="images/icon1.png">Season <span>5</span></h3>
                    <p>Season 5 of Game of Thrones was commissioned by HBO on 8 April 2014, following a substantial
                        increase in audience figures between the third and fourth seasons. The fifth and sixth seasons
                        were commissioned simultaneously, the first time HBO has commissioned two seasons at once for a
                        major drama series.
                    </p>
                </div>
                <div class="col-md-6 service-rightgrid">
                    <div class="service1">
                        <div class="right-grid1">
                            <img src="images/img1.png">
                        </div>
                        <div class="right-grid2">
                            <br><h4>Khaleesi</h4>
                            <p>Khaleesi is a Dothraki title referring to the wife of the khal. A khaleesi's status
                                varies greatly from khalasar to khalasar. </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="service2">
                        <div class="right-grid1">
                            <img src="images/img2.png">
                        </div>
                        <div class="right-grid2">
                            <h4>Margaery Tyrell</h4>
                            <p>Margaery Tyrell is a major character in the second, third, fourth and fifth seasons. She
                                is played by Natalie Dormer and debuts in "What is Dead May Never Die.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="service3">
                        <div class="right-grid1">
                            <img src="images/img3.png">
                        </div>
                        <div class="right-grid2">
                            <h4>Game of Thrones on HBO</h4>
                            <p>The official website for Game of Thrones on HBO, featuring videos, images, schedule
                                information and episode guides.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div><!--End Synopsis Section-->
        
        <!-- Quotes -->
        <div class="testimonial-section" id="testimonial">
            <div class="container">
                <div class="testimonial-header">

                    <h3><img src="images/icon3.png"> Best <span>Quotes</span></h3>
                    <p>Best quotes in Game of Thrones.</p>
                </div>
                <div class="wmuSlider example1">
                    <div class="container-flueid">
                        <article style="position: absolute;">
                            <div class=" cont span_2_of_3  client-main">
                                <div class="slide-text">
                                    <h4> “Why is it that when one man builds a wall, the next man immediately needs to
                                        know what's on the other side?”</h4>
                                    <img src="images/icon8.png">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute;">
                            <div class=" cont span_2_of_3  client-main">
                                <div class="slide-text">
                                    <h4> “Once you’ve accepted your flaws, no one can use them against you.”</h4>
                                    <img src="images/icon8.png">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute;">
                            <div class="cont span_2_of_3  client-main">
                                <div class="slide-text">
                                    <h4> ‘Tears aren’t a woman’s only weapon. The best one’s between your legs. ’</h4>
                                    <img src="images/icon9.png">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute;">
                            <div class="cont span_2_of_3  client-main">
                                <div class="slide-text">
                                    <h4> ‘I am not questioning your honor, I am denying its existence.’</h4>
                                    <img src="images/icon8.png">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute;">
                            <div class="cont span_2_of_3  client-main">
                                <div class="slide-text">
                                    <h4> ‘You are as big a fool as every other man. That little worm between your legs
                                        does half your thinking.’</h4>
                                    <img src="images/icon9.png">
                                </div>
                            </div>
                        </article>

                        <script src="{{@asset('got-js/jquery.wmuSlider.js')}}"></script>
                        <script>
                            $('.example1').wmuSlider();
                        </script>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-section" id="team"><!-- John Snow -->
            <div class="container">
                <div class="team-grids">
                    <div class="team-grids">
                        <div class="col-md-12 team-grid">
                            <div class="team-content">
                                <p> i'm the bastard son of Eddard Stark, by a mother whose identity is a source of
                                    speculation. Raised by his father alongside his true-born half-siblings, but joins
                                    the Night's Watch when i nears adulthood. i'm constantly accompanied by my albino
                                    direwolf Ghost. At the beginning of A Game of Thrones, i fourteen years old. i'm one
                                    of the major POV characters in the books.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div><!-- End John Snow -->


        <div class="kill-now-section" id="kill-now">
            <div class="container">
                <div class="kill-now-header">

                    <h3><img src="{{ @asset('images/img3.png') }}"> GoT <span>Family</span></h3>
                    <p>The big family in Game Of Thrones</p>
                </div>
                <div class="kill-now-grids"><!-- Columns 1 -->
                    <div class="col-md-4 pric-grid effect">
                        <div class="pric-top">
                            <span>1</span>
                            <h4>Stark</h4>
                        </div>
                        <div class="pric-list">
                            <ul>
                                <li>Edard Stark</li>
                                <li>Catelyn Stark</li>
                                <li>Robb Stark</li>
                                <li>Arya Stark</li>
                                <li>John Snow</li>
                            </ul>
                            <p><a href="">Kill now</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 pric-grid effect"><!-- Columns 2 -->
                        <div class="pric-top">
                            <span>2</span>
                            <h4>Lannister</h4>
                        </div>
                        <div class="pric-list">
                            <ul>
                                <li>Tywin Lannister</li>
                                <li>Jaime Lannister</li>
                                <li>Tyrion Lannister</li>
                                <li>Cersei Lannister</li>
                                <li>Joffrey Lannister</li>
                            </ul>
                            <p><a href="">Kill now</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 pric-grid effect"><!-- Columns 3 -->
                        <div class="pric-top">
                            <span>3</span>
                            <h4>Targaryen</h4>
                        </div>
                        <div class="pric-list">
                            <ul>
                                <li>Khaleesi</li>
                                <li>Jorah Mormont</li>
                                <li>Khal Drogo</li>
                                <li>Viserys Targaryen</li>
                                <li>Jorah Mormont</li>
                            </ul>
                            <p><a href="">Kill now</a></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div> <!--End Contact Section-->

    <div class="footer-section">
        <div class="container">

            <div class="footer-top">
                {{--<p> Designed by <a href="http://w3layouts.com" target="target_blank">Meecreations</a></p>--}}
            </div>

            <a class="scroll" href="#head" id="toTop" style="display: block;"> <span id="toTopHover"
                                                                                     style="opacity: 1;"> </span></a>


        </div>
    </div>

@endsection