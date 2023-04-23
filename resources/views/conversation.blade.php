<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TalkGPT | Conversation</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{url('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="home">TalkGPT</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="home" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto " href="signup">Sign Up</a></li>
                    <li><a class="nav-link scrollto " href="signin">Sign In</a></li>
                    <li><a class="nav-link scrollto" href="aboutus">About Us</a></li> -->
                    <li><a class="nav-link scrollto " href="contactus">Contact Us</a></li>
                    <li><a class="nav-link scrollto " href="logout">Log Out</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Conversation</h1>
                    <h2>Say hello to the next generation of conversational AI...</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <!-- <img src="assets/img/ai-removebg.png" class="img-fluid animated" alt=""> -->
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Conversation</h2>
                    <p>Talk to our AI and unlock endless possibilities...</p>
                </div>

                <div class="row">
                    <form role="form" class="php-email-form">
                        <div class="row">
                            <div class="row">
                                <div class="form-group d-flex align-items-center justify-content-center">
                                    <textarea cols="5" rows="10" class="form-control text-center" placeholder="Response from TalKGPT" id="response_talkgpt"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-center" id="query" placeholder="Your Query" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center"><button type="submit" onclick="start_conversation()">Start Conversation</button></div>
                            </div>
                            <div class="col">
                            <div class="text-center"><button type="submit" onclick="stop_conversation()">Stop Conversation</button></div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>TalkGPT</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('vendor/aos/aos.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{url('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{url('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('js/main.js')}}"></script>

    <!-- Main Script -->
    <script src="{{url('js/main-script.js')}}"></script>


</body>

</html>