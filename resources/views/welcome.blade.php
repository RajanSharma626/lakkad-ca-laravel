<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
    <title>Home | Lakkad Consultancy</title>
</head>

<body>

    <!--=====Header start=======-->
    <x-navbar />
    <!--=====Header end=======-->

    <!--=====Mobile header start=======-->
    <x-mobile-navbar />
    <!--=====Mobile header end=======-->

    <!--=====Welcome start=======-->
    {{-- <div class="welcome-area welcome-2 bg5 position-relative" id="home"> --}}
    <div class="row align-items-center pt-5">
        <div class="col-12">
            <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Slides -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <!-- Background Image with Overlay -->
                        <div class="background-wrapper">
                            <img src="{{ asset('assets/img/image/home-1.jpg') }}" class="d-block w-100" alt="Slide 1">
                            <div class="overlay"></div>
                        </div>
                        <!-- Content -->
                        <div class="carousel-caption">
                            <div class="title title2 ">
                                <h1 class="text-white">Welcome to Lakkad Consultancy</h1>
                            </div>
                            <div class="btn-group" data-aos="fade-right" data-aos-duration="1200">

                                <a class="theme-btn-3" href="contact-us">Get a Quote <span><svg
                                            class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                            </path>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <!-- Background Image with Overlay -->
                        <div class="background-wrapper">
                            <img src="{{ asset('assets/img/image/home-2.jpg') }}" class="d-block w-100" alt="Slide 2">
                            <div class="overlay"></div>
                        </div>
                        <!-- Content -->
                        <div class="carousel-caption">
                            <div class="title title2 ">
                            <h1 class="text-white">Unlock Government Schemes, Fuel Your Business</h1>
                            </div>
                            <div class="btn-group" data-aos="fade-right" data-aos-duration="1200">

                                <a class="theme-btn-3" href="contact-us">Get a Quote <span><svg
                                            class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                            </path>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <!-- Background Image with Overlay -->
                        <div class="background-wrapper">
                            <img src="{{ asset('assets/img/image/home-3.jpg') }}" class="d-block w-100" alt="Slide 3">
                            <div class="overlay"></div>
                        </div>
                        <!-- Content -->
                        <div class="carousel-caption">
                            <div class="title title2 ">
                            <h1 class="text-white">Your Trusted Partner in Project Finance</h1>
                            </div>
                            <div class="btn-group" data-aos="fade-right" data-aos-duration="1200">

                                <a class="theme-btn-3" href="contact-us">Get a Quote <span><svg
                                            class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="arrow-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z">
                                            </path>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
    {{-- </div> --}}
    <!--=====Welcome end=======-->

    <!--=====Tax business start=======-->
    <div class="tax-business section-padding2 theme-bg" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="heading2 white-heading text-center">
                        <small data-aos="fade-up" data-aos-duration="600" class="heading-top">Expertise</small>
                        <h2 data-aos="fade-up" data-aos-duration="800"><span class="heilight-left">Lakkad</span>
                            consultancy is
                            built for
                            all business.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="600">
                    <div class="single-business trans-1 h-100">
                        <div class="business-icon">
                            <img src="assets/img/icons/tax-business1.png" alt="">
                        </div>
                        <h3>Exceptional Services</h3>
                        <p>Extraordinary, reliable, and friendly solutions tailored to exceed your expectations. </p>

                    </div>
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="800">
                    <div class="single-business trans-1 h-100">
                        <div class="business-icon">
                            <img src="assets/img/icons/tax-business2.png" alt="">
                        </div>
                        <h3>Expert Guidance</h3>
                        <p>Providing valuable insights and innovative ideas for your growth.</p>
                        <!-- <a href="single-service-1.html" class="theme-btn-7">Learn More <span><i
                  class="fa-solid fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="single-business trans-1 h-100">
                        <div class="business-icon">
                            <img src="assets/img/icons/tax-business3.png" alt="">
                        </div>
                        <h3>Unwavering Commitment</h3>
                        <p>Dedicated to helping you achieve your goals with precision and care.</p>
                    </div>
                </div>
                <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="1200">
                    <div class="single-business trans-1 h-100">
                        <div class="business-icon">
                            <img src="assets/img/icons/tax-business4.png" alt="">
                        </div>
                        <h3>End-to-End Assistance </h3>
                        <p>Supporting you throughout the entire process, every step of the way. </p>
                    </div>
                </div>
                <div class="space20"></div>
                <!-- <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="1400">
          <a class="theme-btn-3" href="service-1.html">Explore More Services <span><i
                class="fa-solid fa-arrow-right"></i></span></a>
        </div> -->
            </div>
        </div>
    </div>
    <!--=====Tax business end=======-->

    <!--=====About start=======-->
    <div class="about-area section-padding bg5-left">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-bg-21 mr50" data-aos="zoom-out" data-aos-duration="800">
                        <div class="about-bg-main-img position-relative top-left-polygon-1">
                            <img src="assets/img/about/about-us.jpg" class="img-fluid rounded" alt="">
                            <div class="corner-right-bottom-shape2 position-absolute">
                                <img src="assets/img/shapes/shape-right-bottom2.png" alt="">
                            </div>
                            <div class="corner-shape2-left position-absolute">
                                <img src="assets/img/shapes/tax-shape2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading2 no-margin-heading ml50">
                        <small data-aos="fade-left" data-aos-duration="600" class="heading-top"><img
                                src="assets/img/icons/hands.svg" alt="">About Us</small>
                        <!-- <h2 data-aos="fade-left" data-aos-duration="800">We Handle The Most Tedious Bookkeeping Tasks of Your
              Business Operations.</h2> -->
                        <p data-aos="fade-left" data-aos-duration="1000"><b>Lakkad Consultancy</b> is a leading
                            subsidy and project
                            finance loan consultancy in India, offering decades of expertise in navigating government
                            benefits and
                            project financing. Operating PAN-India, we specialize in providing guidance and support to
                            businesses
                            seeking:

                        </p>
                        <div class="space50"></div>
                        <ul>
                            <li>
                                <b>• Government Benefits (Subsidies)</b>: Interest subsidies, capital subsidies, and
                                more.
                            </li>
                            <div class="space20"></div>
                            <li>
                                <b>• Registrations & Approvals</b>: Assistance with Udhyog Aadhar, LSI registration, and
                                similar
                                processes.
                            </li>
                        </ul>
                        <div class="space50"></div>
                        <div class="button-group" data-aos="fade-left" data-aos-duration="1200">
                            <a class="theme-btn-2" href="/about">More About Us <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>

                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="space50"></div>
                    <h1>Leading the Way in Subsidy and Project Finance Solutions Across India.</h1>
                </div>

                <div class="col-12">
                    <div class="space50"></div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-4 text-center mb-5">
                            <img src="assets/img/case-study/itta.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 text-center mb-5">
                            <img src="assets/img/case-study/sgcci.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-4 text-center mb-5">
                            <img src="assets/img/case-study/the_Confederation_of_Indian_Industry.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====About end=======-->

    <!--=====About start=======-->
    <div class="about-area section-padding bg5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mr50">
                        <div class="heading2 no-margin-heading">
                            <small data-aos="fade-right" data-aos-duration="600" class="heading-top"><img
                                    src="assets/img/icons/hands.svg" alt="">Who we are?</small>
                            <h2 data-aos="fade-right" data-aos-duration="800">Our Mission </h2>
                            <p data-aos="fade-right" data-aos-duration="1000">At <b>Lakkad Consultancy</b>, we are
                                driven by a mission
                                to
                                empower businesses with exceptional financial guidance and support. We aim to deliver
                                “Excellence Beyond
                                Expectations” by providing tailored solutions under one roof, ensuring seamless access
                                to government
                                benefits and project finance.
                                Our core values include:
                            </p>
                            <div class="space20"></div>

                            <ul>
                                <li><b>• Client-Centric Approach</b>: Prioritizing your goals and success. </li>
                                <li><b>• Timely Execution</b>: Delivering results within deadlines with utmost
                                    efficiency.</li>
                                <li><b>• Transparency and Trust</b>: Building lasting relationships through honesty and
                                    reliability.
                                </li>
                            </ul>

                            <p data-aos="fade-right" data-aos-duration="1000">
                                We are dedicated to fostering growth and helping businesses achieve financial milestones
                                with speed,
                                accuracy, and professionalism.
                            </p>

                            <div class="space20"></div>
                            <b>Prashant lakkad</b> <br>
                            <span>Founder & CEO</span>
                            <!-- <div class="space50"></div>
              <div class="button-group" data-aos="fade-right" data-aos-duration="1200">
                <a class="theme-btn-2" href="about-1.html">More About Us <span><i
                      class="fa-solid fa-arrow-right"></i></span></a>
              </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="counter2 ml50 position-relative">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-counter" data-aos="zoom-out" data-aos-duration="600">
                                    <div class="conter-icon">
                                        <img src="assets/img/icons/counter21.png" alt="">
                                    </div>
                                    <h2><span class="up-counter">800</span>+</h2>
                                    <p>Projects Completed</p>
                                </div>
                                <div class="single-counter" data-aos="zoom-out" data-aos-duration="800">
                                    <div class="conter-icon">
                                        <img src="assets/img/icons/counter22.png" alt="">
                                    </div>
                                    <h2><span class="up-counter">10</span>+</h2>
                                    <p>Cities Covered in India</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-counter mt-5" data-aos="zoom-out" data-aos-duration="1000">
                                    <div class="conter-icon">
                                        <img src="assets/img/icons/counter23.png" alt="">
                                    </div>
                                    <h2><span class="up-counter">20</span>+</h2>
                                    <p>Employees</p>
                                </div>
                                <div class="single-counter" data-aos="zoom-out" data-aos-duration="1200">
                                    <div class="conter-icon">
                                        <img src="assets/img/icons/counter24.png" alt="">
                                    </div>
                                    <h2><span class="up-counter">99</span>%</h2>
                                    <p>Client Satifaction</p>
                                </div>
                            </div>
                        </div>
                        <div class="corner-right-bottom-shape2 position-absolute">
                            <img src="assets/img/shapes/shape-right-bottom2.png" alt="">
                        </div>
                        <div class="corner-shape2-left position-absolute">
                            <img src="assets/img/shapes/tax-shape2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====About end=======-->


    <div class="section-padding bg5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading2 no-margin-heading">
                        <small data-aos="fade-right" data-aos-duration="600" class="heading-top"><img
                                src="assets/img/icons/hands.svg" alt="">Our Services</small>
                        <h2 data-aos="fade-right" data-aos-duration="800">What We Bring to You </h2>
                        <p data-aos="fade-right" data-aos-duration="1000">With over 10 years of rich experience,
                            <b>Lakkad
                                Consultancy</b> has been a trusted partner in <b>Project Financing</b> and <b>Government
                                Benefits
                                (Subsidies)</b>.
                            Our extensive expertise allows us to offer exceptional guidance and tailored services to
                            help
                            you achieve your financial goals. <br>
                        <div class="space20"></div>
                        Our Key Services Include:
                        </p>
                    </div>
                </div>
                <div class="space20"></div>
                <div class="col-md-6">
                    <div class="single-inner-service single-inner-service-2 trans-1">
                        <div class="service-icon bg-24">
                            <img src="assets/img/icons/finance.svg" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="font-f-3">Project Finance Consultation</h3>
                            <p class="font-f-3">At Lakkad Consultancy, we are dedicated to turning your dreams into
                                reality through structured funding solutions. </p>
                            <a href="project-finance" class="theme-btn-16">Learn More </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="single-inner-service single-inner-service-2 trans-1">
                        <div class="service-icon bg-24">
                            <img src="assets/img/icons/benefits.svg" alt="">
                        </div>
                        <div class="service-content">
                            <h3 class="font-f-3">Government Benefits (Subsidies)</h3>
                            <p class="font-f-3">At Lakkad Consultancy, we assist businesses in accessing both Central
                                and State Government Benefit schemes...
                            </p>
                            <a href="/government-benefits-&-subsidy" class="theme-btn-16">Learn More </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="logo-area2" data-aos="fade-right" data-aos-duration="1400">
                        <div class="logos logos2 owl-carousel company">
                            <div class="single-logo">
                                <img src="assets/img/company/1.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/2.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/3.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/4.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/5.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/6.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/7.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/8.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/9.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/10.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/11.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/12.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/13.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/14.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/15.svg" alt="">
                            </div>
                            <div class="single-logo">
                                <img src="assets/img/company/16.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--=====Testimonial start=======-->
    <div class="testimonial-3 bg-19 section-padding2 _relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="heading2 text-center">
                        <small data-aos="fade-up" data-aos-duration="600" class="overline aos-init">Our
                            testimonial</small>
                        <h2 data-aos="fade-up" data-aos-duration="800" class="aos-init">We love our clients, and they
                            love us.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 aos-init" data-aos="zoom-out" data-aos-duration="600">
                    <div class="testimonials-3 owl-carousel owl-loaded owl-drag">

                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1528px, 0px, 0px); transition: 0.25s; width: 2674px;">
                                <div class="owl-item cloned" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 352px; margin-right: 30px;">
                                    <div class="single-testimonial">
                                        <div class="testimonial-icon">
                                            <img src="assets/img/icons/quote-1.png" alt="">
                                        </div>
                                        <p>“Consultia law firm is wonderful. I have had the chance to work with three of
                                            the lawyers and they all
                                            have been wonderful. They will tell you when you need a lawyer and when you
                                            don't. They actually try to
                                            save you money. They
                                            respond very fast to questions and try to help you understand what is going
                                            on.”</p>
                                        <div class="author-reviews">
                                            <div class="author">
                                                <a href="#">Jason Behrendorff</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation"
                                class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
                                role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-007">
            <img src="assets/img/shapes/shape007.svg" alt="">
        </div>
    </div>
    <!--=====Testimonial end=======-->

    <!--=====Subscribe start=======-->
    <div class="subscribe2 bg7 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading2 white-heading no-margin-heading">
                        <small class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here
                            For Your Tax
                            Relief.</small>
                        <h2>Join Us today and let us help <span class="heilight-right">you</span> <br> to grow your
                            business.</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="sunscribe-form">
                        <div class="subscribe-from-wrap">
                            <form action="#">
                                <input type="email" placeholder="Email Address">
                                <button type="submit" name="button">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Subscribe end=======-->

    <!--=====Footer start=======-->
    <x-footer />
    <!--=====Footer end=======-->

    <!--=====Up arrow start=======-->
    <!-- <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div> -->
    <!--=====Up arrow end=======-->

    <x-foot />

    <script>
        $("#rev_slider_1").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            delay: 5000,
            navigation: {
                arrows: {
                    enable: true,
                    style: "", // Keep empty for default to use custom styles
                },
            },
        });
    </script>

</body>


</html>
