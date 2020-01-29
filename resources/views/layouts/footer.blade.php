
<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">
        @if (Auth::check() && Auth::user()->level == 'admin')
            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; 2020 All Rights Reserved by IMP.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="{{ url('/') }}">Home</a>/<a href="{{ url('admin/sekolah') }}">Sekolah</a>/<a href="#">Bank Soal</a>/<a href="{{ url('admin/soal') }}">Soal</a>/<a href="#">Materi</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

                @elseif(Auth::check() && Auth::user()->level == 'sekolah')
            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; 2020 All Rights Reserved by IMP.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="{{ url('/') }}">Home</a>/<a href="#">Guru</a>/<a href="#">Sekolah</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

                @elseif(Auth::check() && Auth::user()->level == 'guru')
            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; 2020 All Rights Reserved by IMP.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="{{ url('/') }}">Home</a>/<a href="#">Soal</a>/<a href="#">Bank Soal</a>/<a href="#">Quiz</a>/<a href="#">Nilai</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->


                @elseif(Auth::check() && Auth::user()->level == 'siswa')
                <div class="container">

            <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="row">
                        <div class="col-6 col-md"  style="background: url('{{asset('assets/images/world-map.png')}}') no-repeat center center; background-size: 100%;">
                            <img class="mb-3" src="{{ asset('assets/logo-footer-iCourse.png') }}" alt="" width="160">
                            <small class="d-block mb-4 text-muted">&copy; 2017-2018</small>
                            <p class="text-white-50" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, impedit quam nemo doloremque sed, dolores.</p>
                            <a href="#" class="mb-2 d-block"><i class="icon-line2-call-in mr-2"></i>+91-111-222-333</a>
                            <a href="#"><i class="icon-line2-envelope mr-2"></i>info@canvas.com</a>
                        </div>
                        <div class="col-6 col-md">
                            {{-- <h4 class="uppercase ls2 t400">Best Courses</h4>
                            <ul class="list-unstyled nobottommargin">
                                <li><h5 class="mb-0"><a href="#" class="text-white">Cooking Classes</a></h5><p>Dylan Meringue</p></li>
                                <li><h5 class="mb-0"><a href="#" class="text-white">Learning Spanish</a></h5><p>Gunther Beard</p></li>
                                <li><h5 class="mb-0"><a href="#" class="text-white">Website Development</a></h5><p>Desmond Eagle</p></li>
                            </ul> --}}
                        </div>
                        <div class="col-6 col-md col-sm mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="uppercase ls2 t400">Menu</h4>
                            <ul class="list-unstyled nobottommargin">
                                <li><h5 class="mb-2 t400"><a href="#">Home</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">Quiz</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">Nilai</a></h5></li>
                                {{-- <li><h5 class="mb-2 t400"><a href="#">About Us</a></h5></li> --}}
                                {{-- <li><h5 class="mb-2 t400"><a href="#">Contact Us</a></h5></li> --}}
                            </ul>
                        </div>
                        <div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="uppercase ls2 t400">Worldwide</h4>
                            <a href="#"><img src="{{ asset('assets/demos/course/images/map.png') }}" alt=""></a>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->
            </div>
            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; 2020 All Rights Reserved by IMP.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="{{ url('/') }}">Home</a>/<a href="#">Quiz</a>/<a href="#">Nilai</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->
                @else
                <div class="container">

            <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="row">
                        <div class="col-6 col-md"  style="background: url('{{asset('assets/images/world-map.png')}}') no-repeat center center; background-size: 100%;">
                            <img class="mb-3" src="{{ asset('assets/logo-footer-iCourse.png') }}" alt="" width="160">
                            <small class="d-block mb-4 text-muted">&copy; 2017-2018</small>
                            <p class="text-white-50" style="font-size: 16px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, impedit quam nemo doloremque sed, dolores.</p>
                            <a href="#" class="mb-2 d-block"><i class="icon-line2-call-in mr-2"></i>+91-111-222-333</a>
                            <a href="#"><i class="icon-line2-envelope mr-2"></i>info@canvas.com</a>
                        </div>
                        <div class="col-6 col-md">
                            <h4 class="uppercase ls2 t400">Best Courses</h4>
                            <ul class="list-unstyled nobottommargin">
                                <li><h5 class="mb-0"><a href="#" class="text-white">Cooking Classes</a></h5><p>Dylan Meringue</p></li>
                                <li><h5 class="mb-0"><a href="#" class="text-white">Learning Spanish</a></h5><p>Gunther Beard</p></li>
                                <li><h5 class="mb-0"><a href="#" class="text-white">Website Development</a></h5><p>Desmond Eagle</p></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md col-sm mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="uppercase ls2 t400">Menu</h4>
                            <ul class="list-unstyled nobottommargin">
                                <li><h5 class="mb-2 t400"><a href="#">Home</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">Instructors</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">Events</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">About Us</a></h5></li>
                                <li><h5 class="mb-2 t400"><a href="#">Contact Us</a></h5></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md mt-4 mt-md-0 mt-lg-0 mt-xl-0">
                            <h4 class="uppercase ls2 t400">Worldwide</h4>
                            <a href="#"><img src="{{ asset('assets/demos/course/images/map.png') }}" alt=""></a>
                        </div>
                    </div>

                </div><!-- .footer-widgets-wrap end -->
            </div>
            <!-- Copyrights
                ============================================= -->
                <div id="copyrights">

                    <div class="container clearfix">

                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                Copyrights &copy; 2020 All Rights Reserved by IMP.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links mb-0 clearfix">
                                    <a href="{{ url('/') }}">Home</a>/<a href="#">Instructors</a>/<a href="#">Events</a>/<a href="#">About Us</a>/<a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->
                @endif
            </footer><!-- #footer end -->
        </div><!-- #wrapper end -->

    <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        @include('layouts.link.script')

    </body>
    </html>