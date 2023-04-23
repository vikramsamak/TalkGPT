<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TalkGPT | Sign Up</title>
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
                    <li><a class="nav-link scrollto" href="/">Home</a></li>
                    <li><a class="nav-link scrollto active" href="signup">Sign Up</a></li>
                    <li><a class="nav-link scrollto " href="signin">Sign In</a></li>
                    <li><a class="nav-link scrollto" href="aboutus">About Us</a></li>
                    <li><a class="nav-link scrollto " href="contactus">Contact Us</a></li>
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
                    <h1>Sign Up</h1>
                    <h2>Get started with the ultimate conversational AI tool - Sign up now with TalkGPT!</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <!-- <img src="assets/img/ai-removebg.png" class="img-fluid animated" alt=""> -->
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sign Up</h2>
                    <p>Experience the power of AI with TalkGPT - Sign up now and join the next generation conversational AI!.</p>
                </div>

                <div class="row">
                    <form action="index.php" method="post" role="form" class="php-email-form" return="true">
                        <div class="row">
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Email Id</label>
                                    <input type="email" name="email" class="form-control" id="email" oninput="validate_email()" required>
                                    <script>
                                    function validate_email()
                                    {
                                        var email_to_validate = document.getElementById('email');
                                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                        if (emailRegex.test(email_to_validate.value)) 
                                        {
                                            email_to_validate.classList.remove('is-invalid');
                                            email_to_validate.classList.add('is-valid');

                                        } else 
                                        {
                                            email_to_validate.classList.remove('is-valid');
                                            email_to_validate.classList.add('is-invalid');
                                        }
                                    }
                                </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input class="form-control" id="username" name="username">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" aria-describedby="password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit" onclick="sign_up()">Sign Up</button></div>
                        <div class="m-4">
                            <p class="text-center">
                                Already have account? <a href="signin" class="text-underline">Click here to sign
                                    in.</a>
                            </p>
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