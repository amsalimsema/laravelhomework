@extends ('layout')
@section('content')

<body id="home_page" class="home_page">
    <!-- header -->
    <header class="header">

        <div class="header_top_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="full">
                            <div class="logo">
                                <a href="/"><img src="images/logo.png" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 site_information">
                        <div class="full">
                            <div class="main_menu">
                                <nav class="navbar navbar-inverse navbar-toggleable-md">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="float-left">Menu</span>
                                        <span class="float-right"><i class="fa fa-bars"></i> <i
                                                class="fa fa-close"></i></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.html">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link color-aqua-hover" href="/about">About</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link color-grey-hover" href="/contact">Contact Us</a>
                                            </li>

                                        </ul>
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="/"><img src="images/search_icon.png"
                                                        alt="#" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- end header -->

    <!-- section -->
    <section class="main_full banner_section_top">
        <div class="container-fluid">
            <div class="row">
                <div class="full">
                    <div class="slider_banner">
                        <img class="img-responsive" src="images/slider_img.png" alt="#" />
                        <div class="slide_cont">
                            <div class="slider_cont_inner">
                                <h3>Welcome To Our Web Coaching</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit</p>
                                <a class="blue_bt" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- about section -->
    <section class="layout_padding section about_dottat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text_align_center">
                    <div class="full heading_s1">
                        <h2>About</h2>
                    </div>
                    <div class="full">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="about_img margin_top_30  text_align_center">
                        <img src="images/ab_img.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- section -->
    <section class="layout_padding section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text_align_center">
                    <div class="full heading_s1">
                        <h2>Our Courses</h2>
                    </div>
                    <div class="full">
                        <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 text_align_center">
                    <div class="cours">
                        <img class="img-responsive" src="images/cour1.png" alt="#" />
                    </div>
                    <h3>Design</h3>
                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in re</p>
                </div>

                <div class="col-md-4 text_align_center">
                    <div class="cours">
                        <img class="img-responsive" src="images/cour2.png" alt="#" />
                    </div>
                    <h3>Coding</h3>
                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in re</p>
                </div>

                <div class="col-md-4 text_align_center">
                    <div class="cours">
                        <img class="img-responsive" src="images/cour3.png" alt="#" />
                    </div>
                    <h3>Javascript</h3>
                    <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in re</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <a class="blue_bt" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text_align_center">
                    <div class="full heading_s1">
                        <h2>Our Coaching Time</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 cours_timging_bg">
                    <div class="container">
                        <div class="time_table">
                            <ul>
                                <li>Monday</li>
                                <li>8 Am - 6 Pm</li>
                            </ul>
                            <ul>
                                <li>Tuesday</li>
                                <li>9 Am - 5 Pm</li>
                            </ul>
                            <ul>
                                <li>Wednesday</li>
                                <li>10 Am - 8 Pm</li>
                            </ul>
                            <ul>
                                <li>Thursday</li>
                                <li>8 Am - 6 Pm</li>
                            </ul>
                            <ul>
                                <li>Friday</li>
                                <li>6 Am - 4 Pm</li>
                            </ul>
                            <ul>
                                <li>Saturday</li>
                                <li>9 Am - 5 Pm</li>
                            </ul>
                            <ul>
                                <li>Sunday</li>
                                <li>Holiday</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- section -->
    <section class="layout_padding section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text_align_center">
                    <div class="full heading_s1">
                        <h2>Our Success Stories</h2>
                    </div>
                    <div class="full">
                        <p class="large">In ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo<br>consequat. Duis aute irure dolor in re</p>
                    </div>
                </div>
                <div class="col-md-12 testimonial">
                    <div class="full text_align_center">
                        <img src="images/testimon.png" alt="#" />
                        <h3><span class="theme_color_text">koluda</span><br><small>Student</small></h3>
                    </div>
                    <div class="full margin_top_30 text_align_center">
                        <h4>I have successfully complated</h4>
                        <p>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                            ad minim veniam, quis nostrud<br>exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in re</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- section -->
    <section class="section blue_pattern_bg" style="background-color: #3b3bff;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <h4>Subscribe Now to Our Newsletter !</h4>
                        <p>adipiscing elit, sed do eiusmod tempor incididunt ut<br>labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_subribe">
                        <form>
                            <input type="email" name="email" placeholder="Enter Your Email" />
                            <button>Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- footer -->
    <footer class="footer layout_padding">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <a href="index.html"><img class="img-responsive" src="images/logo_footer.png" alt="#" /></a>
                    <div class="footer_link_heading">
                        <div class="footer_menu margin_top_30">
                            <ul>
                                <li><a href="tel:9876543210">9876 543 210</a></li>
                                <li><a href="#">demo@gmail.com</a></li>
                                <li><a href="#">40 Baria Sreet 133/2 NewYork City, US</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>FEATURED COURSES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Starting Soon</a></li>
                                    <li><a href="#">Just Added</a></li>
                                    <li><a href="#">Most Viewed</a></li>
                                    <li><a href="#">Top Paid</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>CATEGORIES</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Arts & Design</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">Data entery</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="footer_link_heading">
                                <h3>USEFUL LINKS</h3>
                            </div>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Success Stories</a></li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact search</a></li>
                                    <li><a href="#">Jobs and vacancies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <div class="cpy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright 2019. All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <!-- Core JavaScript
         ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/ekko-lightbox.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>



@endsection