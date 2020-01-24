
        <!-- Slider
            ============================================= -->
            <section id="slider" class="slider-element slider-parallax clearfix" style="height: 550px;">

            <!-- HTML5 Video Wrap
                ============================================= -->
                <div class="video-wrap">
                    <video id="slide-video" poster="{{ asset('assets/demos/course/images/video/poster.jpg') }}" preload="auto" loop autoplay muted>
                        <source src='{{ asset('assets/demos/course/images/video/1.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.5); z-index: 1"></div>
                </div>

                <div class="vertical-middle center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <div class="slider-title mb-5 dark clearfix">
                                    <h2 class="text-white text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">Learn More About <span class="t-rotate text-white">Development,Photography,Teacher Training,Business,Lifestyle,Language,Health,Fitness,Music</span>.</h2>
                                    <p class="lead mb-0 uppercase ls2" style="color: #CCC; font-size: 110%">What Do You Want To Learn?</p>
                                </div>
                                <div class="clear"></div>
                                <div class="input-group input-group-lg mt-1">
                                    <input class="form-control rounded noborder" type="search" placeholder="Search Your Courses.." aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="icon-line-search t700"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        <!-- Content
            ============================================= -->
            <section id="content" style="overflow: visible;">

                <div class="content-wrap">

                <!-- Wave Shape Divider
                    ============================================= -->
                    <div class="wave-bottom" style="position: absolute; top: -12px; left: 0; width: 100%; background-image: url('{{asset('assets/demos/course/images/wave-3.svg')}}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

                    <div class="container">

                        <div class="heading-block nobottomborder my-4 center">
                            <h3>Popular Categories</h3>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
                        </div>

                    <!-- Categories
                        ============================================= -->
                        <div class="row course-categories clearfix mb-4">
                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{asset('assets/demos/course/images/categories/music.jpg')}}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(251,51,100,0.8);">
                                        <span><i class="icon-music1"></i>Music</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/development.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(29,74,103,0.8);">
                                        <span><i class="icon-code1"></i>Development</span>
                                    </a>
                                </div>
                            </div>


                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/teacher.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(50,71,66,0.8);">
                                        <span><i class="icon-line2-user"></i>Teacher</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/food.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(70,58,69,0.8);">
                                        <span><i class="icon-food"></i>Food</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/business.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(252,108,52,0.8);">
                                        <span><i class="icon-chart-bar1"></i>Business</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/health.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(158,108,87,0.8);">
                                        <span><i class="icon-heartbeat"></i>Health Fitness</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/lifestyle.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(164,108,119,0.85);">
                                        <span><i class="icon-line2-game-controller"></i>Lifestyle</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/language.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(80,167,159,0.8);">
                                        <span><i class="icon-line2-globe"></i>Language</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/paint.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(23,116,234,0.8);">
                                        <span><i class="icon-paint-brush"></i>Paint</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/photography.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(108,156,148,0.85);">
                                        <span><i class="icon-line2-camera"></i>Photography</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/marketing.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(227,141,66,0.8);">
                                        <span><i class="icon-line-share"></i>Digital Marketing</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-2 col-sm-3 col-6 mt-4">
                                <div class="card hover-effect">
                                    <img class="card-img" src="{{ asset('assets/demos/course/images/categories/academics.jpg') }}" alt="Card image">
                                    <a href="#" class="card-img-overlay rounded p-0" style="background-color: rgba(39,103,240,0.8);">
                                        <span><i class="icon-line-book"></i>Academics</span>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                <!-- Section Courses
                    ============================================= -->
                    <div class="section topmargin-lg parallax" style="padding: 80px 0 60px; background-image: url('{{asset('assets/demos/course/images/icon-pattern.jpg')}}'); background-size: auto; background-repeat: repeat"  data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -500px;">

                    <!-- Wave Shape Divider
                        ============================================= -->
                        <div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('{{asset('assets/demos/course/images/wave-3.svg')}}'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

                        <div class="container">

                            <div class="heading-block nobottomborder mb-5 center">
                                <h3>Most Popular Courses</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
                            </div>

                            <div class="clear"></div>

                            <div class="row mt-2">

                            <!-- Course 1
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/1.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Spanish Language Learning For Absolute Beginners</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Language</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i> <span>4.7</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-primary">$19.99</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- Course 2
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/2.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Music Theory for Electronic Producers - The Complete Course!</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Music</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i> <span>4.9</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-warning">Free</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- Course 3
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/3.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Ultimate Photoshop Training: From Beginner to Pro</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Design Tools</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-warning">Free</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- Course 4
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/4.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Blockchain Advanced Level: Uses Beyond Bitcoin 2018</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Business</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i><i class="icon-star-empty"></i> <span>3.7</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-primary">$19.99</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- Course 5
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/5.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Cognitive Behavioural Therapy (CBT) Practitioner Certificate</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Health & Fitness</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-empty"></i> <span>4.1</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-primary">$23.99</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>

                            <!-- Course 6
                                ============================================= -->
                                <div class="col-md-4 mb-5">
                                    <div class="card course-card hover-effect noborder">
                                        <a href="#"><img class="card-img-top" src="{{ asset('assets/demos/course/images/courses/6.jpg') }}" alt="Card image cap"></a>
                                        <div class="card-body">
                                            <h4 class="card-title t700 mb-2"><a href="#">Masterclass: Start Your Food Business 7 courses in 1</a></h4>
                                            <p class="mb-2 card-title-sub uppercase t400 ls1"><a href="#" class="text-black-50">Food Recipes</a></p>
                                            <div class="rating-stars mb-2"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half"></i> <span>4.4</span></div>
                                            <p class="card-text text-black-50 mb-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                        <div class="card-footer py-3 d-flex justify-content-between align-items-center bg-white text-muted">
                                            <div class="badge alert-primary">$21.99</div>
                                            <a href="#" class="text-dark position-relative"><i class="icon-line2-user"></i> <span class="author-number">1</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Wave Shape Divider - Bottom
                        ============================================= -->
                        <div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{asset('assets/demos/course/images/wave-3.svg')}}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>
                    </div>

                <!-- Instructors Section
                    ============================================= -->
                    <div class="section nobg" style="padding: 60px 0 40px;">
                        <div class="container">

                            <div class="heading-block nobottomborder mb-5 center">
                                <h3>Most Popular Instructors</h3>
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla natus mollitia ipsum. Voluptatibus, perspiciatis placeat.</span>
                            </div>

                            <div class="clear"></div>

                            <div class="row">

                            <!-- Instructors 1
                                ============================================= -->
                                <div class="col-lg-3 col-sm-6 mb-4">
                                    <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                        <div class="fbox-icon">
                                            <i><img src="{{ asset('assets/demos/course/images/instructor/1.jpg') }}" class="noborder nobg shadow-sm" style="z-index: 2;" alt=""></i>
                                        </div>
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Dylan Meringue</a><br><small class="subtitle nott color">Digital Marketing</small></h3>
                                        <p class="text-dark"><strong>2342</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>23</strong> Courses</p>
                                    </div>
                                </div>

                            <!-- Instructors 2
                                ============================================= -->
                                <div class="col-lg-3 col-sm-6 mb-4">
                                    <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                        <div class="fbox-icon">
                                            <i><img src="{{ asset('assets/demos/course/images/instructor/2.jpg') }}" class="noborder nobg shadow-sm" style="z-index: 2;" alt=""></i>
                                        </div>
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Alan Fresco</a><br><small class="subtitle nott color">Health &amp; Fitness</small></h3>
                                        <p class="text-dark"><strong>7563</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>29</strong> Courses</p>
                                    </div>
                                </div>

                            <!-- Instructors 3
                                ============================================= -->
                                <div class="col-lg-3 col-sm-6 mb-4">
                                    <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                        <div class="fbox-icon">
                                            <i><img src="{{ asset('assets/demos/course/images/instructor/3.jpg') }}" class="noborder nobg shadow-sm" style="z-index: 2;" alt=""></i>
                                        </div>
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Gunther Beard</a><br><small class="subtitle nott color">Photography</small></h3>
                                        <p class="text-dark"><strong>1131</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>11</strong> Courses</p>
                                    </div>
                                </div>

                            <!-- Instructors 4
                                ============================================= -->
                                <div class="col-lg-3 col-sm-6 mb-4">
                                    <div class="feature-box hover-effect shadow-sm fbox-center fbox-bg fbox-light fbox-effect">
                                        <div class="fbox-icon">
                                            <i><img src="{{ asset('assets/demos/course/images/instructor/4.jpg') }}" class="noborder nobg shadow-sm" style="z-index: 2;" alt=""></i>
                                        </div>
                                        <h3 class="mb-4 nott ls0"><a href="#" class="text-dark">Desmond Eagle</a><br><small class="subtitle nott color">Lifestyle</small></h3>
                                        <p class="text-dark"><strong>1232</strong> Students</p>
                                        <p class="text-dark mt-0"><strong>12</strong> Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Featues Section
                    ============================================= -->
                    <div class="section mt-5 mb-0" style="padding: 120px 0; background-image: url('{{asset('assets/demos/course/images/icon-pattern-bg.jpg')}}'); background-size: auto; background-repeat: repeat">

                    <!-- Wave Shape
                        ============================================= -->
                        <div class="wave-top" style="position: absolute; top: 0; left: 0; width: 100%; background-image: url('{{asset('assets/demos/course/images/wave-3.svg')}}'); height: 12px; z-index: 2; background-repeat: repeat-x;"></div>

                        <div class="container">
                            <div class="row">

                                <div class="col-lg-8">
                                    <div class="row dark clearfix">

                                    <!-- Feature - 1
                                        ============================================= -->
                                        <div class="col-md-6">
                                            <div class="feature-box media-box bottommargin">
                                                <div class="fbox-icon">
                                                    <a href="#">
                                                        <i class="icon-line2-book-open noradius nobg tleft"></i>
                                                    </a>
                                                </div>
                                                <div class="fbox-desc">
                                                    <h3 class="text-white">21,000 Online Courses</h3>
                                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                                                </div>
                                            </div>
                                        </div>

                                    <!-- Feature - 2
                                        ============================================= -->
                                        <div class="col-md-6">
                                            <div class="feature-box media-box bottommargin">
                                                <div class="fbox-icon">
                                                    <a href="#">
                                                        <i class="icon-line2-note noradius nobg tleft"></i>
                                                    </a>
                                                </div>
                                                <div class="fbox-desc">
                                                    <h3 class="text-white">Lifetime Access</h3>
                                                    <p class="text-white">Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
                                                </div>
                                            </div>
                                        </div>

                                    <!-- Feature - 3
                                        ============================================= -->
                                        <div class="col-md-6">
                                            <div class="feature-box media-box bottommargin">
                                                <div class="fbox-icon">
                                                    <a href="#">
                                                        <i class="icon-line2-user noradius nobg tleft"></i>
                                                    </a>
                                                </div>
                                                <div class="fbox-desc">
                                                    <h3 class="text-white">Expert Instructors</h3>
                                                    <p class="text-white">Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p>
                                                </div>
                                            </div>
                                        </div>

                                    <!-- Feature - 4
                                        ============================================= -->
                                        <div class="col-md-6">
                                            <div class="feature-box media-box bottommargin">
                                                <div class="fbox-icon">
                                                    <a href="#">
                                                        <i class="icon-line2-globe noradius nobg tleft"></i>
                                                    </a>
                                                </div>
                                                <div class="fbox-desc">
                                                    <h3 class="text-white">Different Languages</h3>
                                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <!-- Registration Foem
                                ============================================= -->
                                <div class="col-lg-4">

                                    <div class="card shadow" data-animate="shake" style="opacity: 1 !important">
                                        <div class="card-body">

                                            <div class="badge registration-badge shadow-sm alert-primary">FREE</div>
                                            <h4 class="card-title ls-1 mt-4 t700 h5">Get Your Free Online Courses!</h4>
                                            <h6 class="card-subtitle mb-4 t400 uppercase ls2 text-black-50">Free Registration here.</h6>

                                            <div class="form-widget">
                                                <div class="form-result"></div>

                                                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                                    <div class="form-process"></div>

                                                    <div class="col_full">
                                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Your Full Name:" />
                                                    </div>
                                                    <div class="col_full">
                                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Your Email Address:" />
                                                    </div>

                                                    <div class="col_full">
                                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control required" placeholder="Your Phone Number:" />
                                                    </div>

                                                    <div class="col_full">
                                                        <button class="button button-rounded btn-block button-large bgcolor text-white nott ls0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Apply It Now</button>
                                                        <br>
                                                        <small style="display: block; font-size: 12px; margin-top: 15px; color: #AAA;"><em>We'll do our best to get back to you within 6-8 working hours.</em></small>
                                                    </div>

                                                    <div class="clear"></div>

                                                    <div class="col_full hidden">
                                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                                    </div>

                                                    <input type="hidden" name="prefix" value="template-contactform-">

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    <!-- Wave Shape
                        ============================================= -->
                        <div class="wave-bottom" style="position: absolute; top: auto; bottom: 0; left: 0; width: 100%; background-image: url('{{asset('assets/demos/course/images/wave-3.svg')}}'); height: 12px; z-index: 2; background-repeat: repeat-x; transform: rotate(180deg);"></div>

                    </div>

                <!-- Promo Section
                    ============================================= -->
                    <div class="section m-0" style="padding: 120px 0; background: #FFF url('{{asset('assets/demos/course/images/instructor.jpg')}}') no-repeat left top / cover">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-7"></div>

                                <div class="col-md-5">
                                    <div class="heading-block nobottomborder mb-4 mt-5">
                                        <h3>Become an Instructor!</h3>
                                        <span>Teach What You Love.</span>
                                    </div>
                                    <p class="mb-2">Monotonectally conceptualize covalent strategic theme areas and cross-unit deliverables.</p>
                                    <p>Consectetur adipisicing elit. Voluptate incidunt dolorum perferendis accusamus nesciunt et est consequuntur placeat, dolor quia.</p>
                                    <a href="#" class="button button-rounded button-xlarge ls0 ls0 nott t400 nomargin">Start Teaching</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="promo promo-light promo-full footer-stick" style="padding: 60px 0 !important;">
                        <div class="container clearfix">
                            <h3 class="ls-1">Call us today at <span>+91.22.57412541</span> or Email us at <span>support@canvas.com</span></h3>
                            <span class="text-black-50">We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful.</span>
                            <a href="#" class="button button-xlarge button-rounded nott ls0 t400">Start Now</a>
                        </div>
                    </div>

                </div>

            </section><!-- #content end -->