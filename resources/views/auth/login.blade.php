{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}




<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
        ============================================= -->
        @include('layouts.link.css')
        <!-- / -->

    <!-- Document Title
        ============================================= -->
        <title>iCourse | LOGIN</title>

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
                            <div class="top-links">
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
                            </div><!-- .top-links end -->

                        </div>

                        <div class="col-md-10 d-flex justify-content-center justify-content-md-end">

                        <!-- Top Links
                            ============================================= -->
                            <div class="top-links">
                                <ul>
                                    <li><a href="#">Free Courses</a></li>
                                    <li class="d-none d-sm-inline-block"><a href="#"><i class="icon-download-alt"></i> Download App</a></li>
                                </ul>
                            </div><!-- .top-links end -->

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
                            <a href="{{ url('/') }}" class="standard-logo"><img src="{{asset('assets/logo-iCourse.png')}}" alt="Canvas Logo"></a>
                            <a href="{{ url('/') }}" class="retina-logo"><img src="{{ asset('assets/demos/course/images/logo@2x.png') }}" alt="Canvas Logo"></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-line-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse align-items-end" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Members
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Siswa</a>
                                        <a class="dropdown-item" href="#">Guru</a>
                                        <a class="dropdown-item" href="#">Sekolah</a>
                                    {{-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another Dropdown Item</a> --}}
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Instructors</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
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
                                <a href="{{ route('login') }}" class="button button-rounded button-small ml-2 ">Log In</a>
                            </div>

                        </div>

                    </nav><!-- #primary-menu end -->

                </div>

            </header><!-- #header end -->





        <!-- Page Title
            ============================================= -->
            <section id="page-title" style="margin-top: 1%;">

                <div class="container clearfix" >
                    <h1>My Account</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div>

            </section><!-- #page-title end -->

        <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap">

                    <div class="container clearfix">

                        <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                            <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>

                            <div class="acc_content clearfix">
                                <form id="login-form" name="login-form" class="nobottommargin" action="{{ route('login') }}" method="post">
                                    @csrf

                                    <div class="col_full">
                                        <label for="login-form-username">Email :</label>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col_full">
                                        <label for="login-form-password">Password :</label>
                                        <input type="password" id="login-form-password" value="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button type="submit" class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                        
                                        @if (Route::has('password.request'))
                                        <a class="fright" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </form>
                            </div>

                            <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
                            <div class="acc_content clearfix">
                                <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">
                                    <div class="col_full">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-email">Email Address:</label>
                                        <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-username">Choose a Username:</label>
                                        <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-phone">Phone:</label>
                                        <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-password">Choose Password:</label>
                                        <input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-repassword">Re-enter Password:</label>
                                        <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>

            </section><!-- #content end -->

        

    </div><!-- #wrapper end -->
@include('layouts.footer')
