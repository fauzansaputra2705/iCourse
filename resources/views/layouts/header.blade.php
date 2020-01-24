<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    {{-- <meta name="author" content="SemiColonWeb" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets
        ============================================= -->
        @include('layouts.link.css')
        <!-- / -->

    <!-- Document Title
        ============================================= -->
        <title>{{$title}}</title>

    </head>

    <body class="stretched">

    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

        <!-- Top Bar
            ============================================= -->
            <div id="top-bar" class="bgcolor dark">

                <div class="container clearfix">

                    <div class="row justify-content-between">
                        <div class="col-md-2">

                        <!-- Top Links
                            ============================================= -->
                            {{-- <div class="top-links">
                                <ul>
                                    <li><a href="#">All Cities</a>
                                        <ul>
                                            <li><a href="#">New York</a></li>
                                            <li><a href="#">Los Angeles</a></li>
                                            <li><a href="#">California</a></li>
                                            <li><a href="#">Miami</a></li>
                                            <li><a href="#">Las Vegas</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}<!-- .top-links end -->

                        </div>

                        <div class="col-md-10 d-flex justify-content-center justify-content-md-end">

                        <!-- Top Links
                            ============================================= -->
                            {{-- <div class="top-links">
                                <ul>
                                    <li><a href="#">Free Courses</a></li>
                                    <li class="d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i> Download App</a></li>
                                </ul>
                            </div> --}}<!-- .top-links end -->

                            <div id="top-social">
                                <ul>
                                    <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                                    <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                                    <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                                    <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
                                    <li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
                                </ul>
                            </div><!-- #top-social end -->

                        </div>
                    </div>

                </div>

            </div>

        <!-- Header
            ============================================= -->
            <header id="header" class="sticky-style-2">

                <div class="container clearfix">

                    <nav class="navbar navbar-expand-lg p-0 m-0">
                        <div id="logo">
                            <a href="" class="standard-logo"><img src="{{asset('assets/logo-iCourse.png')}}" alt="Canvas Logo"></a>
                            <a href="" class="retina-logo"><img src="{{ asset('assets/demos/course/images/logo@2x.png') }}" alt="Canvas Logo"></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-line-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse align-items-end" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                

                            {{-- navbar --}}
                            @include('layouts.navbar')

                            </ul>
                        </div>
                    </nav>

                </div>

                <div id="header-wrap" class="bg-light">

                <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu" class="with-arrows style-2">

                        <div class="container clearfix">

                            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                            <ul>
                                <li><a href="#" class="pl-0"><div><i class="icon-line-grid"></i>All Categories</div></a>
                                    <ul>
                                        <li><a href="#"><div><i class="icon-line2-user"></i>Teacher Training</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Teacher Training</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Educational Training</div></a></li>
                                                <li><a href="#"><div>Teaching Tools</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-chart-bar1"></i>Business</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Business Classes</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Finance</div></a></li>
                                                <li><a href="#"><div>Sales</div></a></li>
                                                <li><a href="#"><div>Marketing</div></a></li>
                                                <li><a href="#"><div>Industry</div></a></li>
                                                <li><a href="#"><div>Real Estates</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-code1"></i>Development</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Development Training</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Software Training</div></a></li>
                                                <li><a href="#"><div>Graphics Tools</div></a></li>
                                                <li><a href="#"><div>Development Skills</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-line2-screen-smartphone"></i>IT & Software</div></a>
                                            <ul>
                                                <li><a href="#"><div>All IT & Software Training</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Software Training</div></a></li>
                                                <li><a href="#"><div>Application Tools</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-music1"></i>Music</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Music Classes</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Instrumental</div></a></li>
                                                <li><a href="#"><div>Vocals</div></a></li>
                                                <li><a href="#"><div>Lyrics</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-line2-game-controller"></i>Lifestyle</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Lifestyle Training</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Art &amp; Crafts</div></a></li>
                                                <li><a href="#"><div>Foods & Beverages</div></a></li>
                                                <li><a href="#"><div>Gaming</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-line2-globe"></i>Language</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Languages</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>English</div></a></li>
                                                <li><a href="#"><div>Spanish</div></a></li>
                                                <li><a href="#"><div>Germans</div></a></li>
                                                <li><a href="#"><div>Hindi</div></a></li>
                                                <li><a href="#"><div>Russian</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-health"></i>Health &amp; Fitness</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Health &amp; Fitness</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Yoga</div></a></li>
                                                <li><a href="#"><div>Gym</div></a></li>
                                                <li><a href="#"><div>Sports</div></a></li>
                                                <li><a href="#"><div>Nutrition</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><div><i class="icon-line2-crop"></i>Design</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Designs</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Game Design</div></a></li>
                                                <li><a href="#"><div>Graphic Design</div></a></li>
                                                <li><a href="#"><div>Web Design</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#"><div><i class="icon-food"></i>Food</div></a>
                                            <ul>
                                                <li><a href="#"><div>All Food Recipes</div></a>
                                                    <ul>
                                                        <li><a href="#"><div>Level 3</div></a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#"><div>Heathy Foods</div></a></li>
                                                <li><a href="#"><div>Fast Foods</div></a></li>
                                                <li><a href="#"><div>Others</div></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        <!-- Top Cart
                            ============================================= -->
                            {{-- <div id="top-cart">
                                <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="{{ asset('assets/demos/course/images/cart-1.jpg') }}" alt="Photography" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">A Complete Guide to Photography</a>
                                                <span class="top-cart-item-price">$19.99</span>
                                                <span class="top-cart-item-quantity">x 2</span>
                                            </div>
                                        </div>
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="{{ asset('assets/demos/course/images/cart-2.jpg') }}" alt="CSS & SASS" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#">Advanced CSS and Sass: Flexbox, Grid, Animations and More!</a>
                                                <span class="top-cart-item-price">$24.99</span>
                                                <span class="top-cart-item-quantity">x 3</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action clearfix">
                                        <span class="fleft top-checkout-price">$114.95</span>
                                        <a href="#" class="button button-rounded button-small nomargin fright">View Cart</a>
                                    </div>
                                </div>
                            </div> --}}<!-- #top-cart end -->

                        <!-- Top Search
                            ============================================= -->
                            <div id="top-search" class="ml-3">
                                <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                                <form action="search.html" method="get">
                                    <input type="text" name="q" class="form-control" value="" placeholder="Find Your Courses Here..">
                                </form>
                            </div><!-- #top-search end -->

                            <div class="header-buttons">
                                {{-- <a href="{{ route('login') }}" class="button button-rounded button-border button-small">Log In</a> --}}
                                @if (!Auth::check())
                                <a href="{{ route('login') }}" class="button button-rounded button-small ml-2 ">Log In</a>
                                @endif
                            </div>

                        </div>

                    </nav><!-- #primary-menu end -->

                </div>

        </header><!-- #header end -->