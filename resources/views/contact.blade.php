<!DOCTYPE html>
<html lang="en">

<head>
    <x-head title="Contact Us | Lakkad Consultancy" />
</head>

<body>
    <!--=====Header start=======-->
    <x-navbar />
    <!--=====Header end=======-->

    <!--=====Mobile header start=======-->
    <x-mobile-navbar />
    <!--=====Mobile header end=======-->


    <!--=====Inner hero Start=======-->
    <div class="inner-1 bg-13" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="inner-title text-center">
                        <p>Contact us</p>
                        <h2>Don’t just take our word for it!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Inner hero end=======-->

    <!--=====Contact Boxes Start=======-->
    <div class="contact-boxes">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="single-contact-box">
                        <div class="contact-box-icon">
                            <i class="bi bi-telephone fs-1"></i>
                        </div>
                        <div class="contact-box-content">
                            <p class="font-f-3">CALL US</p>
                            <a class="fs-6" href="tel:+91 7070451851">+91 7070451851</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-contact-box">
                        <div class="contact-box-icon">
                            <i class="bi bi-envelope fs-1"></i>
                        </div>
                        <div class="contact-box-content">
                            <p class="font-f-3">EMAIL US</p>
                            <a class="fs-6" href="mailto:lakkadconsultancy@gmail.com">lakkadconsultancy@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-contact-box">
                        <div class="contact-box-icon">
                            <i class="bi bi-geo-alt fs-1"></i>
                        </div>
                        <div class="contact-box-content">
                            <p class="font-f-3">Address</p>
                            <a class="fs-6" href="#"> 9, 7th Floor,  Surat, Gujarat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Contact Boxes End=======-->

    <!--=====Contact Form Start=======-->
    <div class="main-contact-form section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="heading2 mr50">
                        <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg"
                                alt="" />Our Success in
                            Numbers</small>
                        <h2>Let’s Work Together</h2>
                        <p>
                            Share your vision for your next projects with us now. Please
                            contact us for basic questions. we’re here to help!
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="fname" placeholder="First Name" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="lname" placeholder="Last Name" />
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" placeholder="Email Address" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="service" placeholder="Service Interested In" />
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject" />
                                </div>
                                <div class="col-12">
                                    <textarea name="message" id="" cols="30" rows="5" placeholder="Tell Us About Your Projects"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="full-btn theme-btn-2">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Contact Form End=======-->


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
    <x-foot />

</body>


</html>
