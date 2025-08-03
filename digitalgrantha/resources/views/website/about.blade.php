@extends('website.layouts.app')

@section('title', 'Best Website & App Development Services - Digital Grantha')
@section('meta_description', 'We build high-performance websites and mobile apps, and offer SEO, email marketing & IT solutions to grow your business.')
@section('meta_keywords', 'web development, app development, email marketing, seo, digital marketing, digital grantha')

@section('content')

    <!-- Pp-Breadcrumb wrapper Start -->
    <div class="pp-breadcrumb-wrapper fix bg-cover" style="background-image: url(website/img/inner-page/breadcrumb.jpg);">
        <div class="container">
            <div class="pp-page-heading">
                <div class="pp-breadcrumb-sub-title">
                    <h1 class="wow fadeInUp" data-wow-delay=".3s">About Us</h1>
                </div>
                <ul class="pp-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Pp-About Section Start -->
    <section class="pp-about-section section-padding fix">
        <div class="container">
            <div class="pp-about-wrapper-2">
                <div class="row g-4 align-items-center">
                    <!-- Left Side Content -->
                    <div class="col-lg-6">
                        <div class="pp-about-content">
                            <div class="pp-section-title mb-0">
                                <span class="pp-sub-title pp-style-border wow fadeInUp">Who We Are</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Transforming Ideas into Digital Excellence
                                </h2>
                            </div>
                            <p class="pp-text wow fadeInUp" data-wow-delay=".5s">
                                At Digital Grantha, we specialize in turning concepts into impactful digital experiences.
                                From automation to marketing and development, we equip businesses with innovative tools to
                                thrive in a fast-moving digital world.
                            </p>
                            <div class="pp-about-item">
                                <div class="pp-about-text wow fadeInUp" data-wow-delay=".3s">
                                    <h6>
                                        <i class="fas fa-robot text-success me-2"></i>
                                        Smart Automation
                                    </h6>
                                    <p>
                                        Streamline your operations by automating repetitive tasks and improving efficiency
                                        across teams.
                                    </p>
                                </div>
                                <div class="pp-about-text wow fadeInUp" data-wow-delay=".5s">
                                    <h6>
                                        <i class="fas fa-bolt text-warning me-2"></i>
                                        Powerful Integration
                                    </h6>
                                    <p>
                                        Seamlessly integrate your workflows with scalable, high-performing digital solutions
                                        built for growth.
                                    </p>
                                </div>
                            </div>
                            <a href="about.html" class="pp-theme-btn wow fadeInUp" data-wow-delay=".3s">
                                Discover More <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Side Image -->
                    <div class="col-lg-6">
                        <div class="pp-about-image">
                            <img src="{{ asset('website/img/home-2/about/01.png') }}" alt="img"
                                class="wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                            <div class="pp-blur-shape">
                                <img src="{{ asset('website/img/home-2/about/blur-shape.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pp-How-Wowk Section Start -->
    <section class="pp-how-work-section section-padding fix section-bg-2">
        <div class="top-shape">
            <img src="{{ asset('website/img/home-1/feature/bg-shape.png') }}" alt="img">
        </div>
        <div class="line-shape">
            <img src="{{ asset('website/img/home-1/feature/line.png') }}" alt="img">
        </div>
        <div class="container">
            <div class="pp-section-title text-center">
                <span class="pp-sub-title wow fadeInUp">
                    HOW IT WORKS
                    <span class="pp-style-2"></span>
                </span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Marketing Made Simple
                </h2>
            </div>
            <div class="row">
                <!-- Step 1 -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="pp-how-work-items">
                        <h6>STEP-01</h6>
                        <h3>Plan & Launch Campaigns</h3>
                        <p>
                            Set your goals, define your audience, and launch campaigns effortlessly with our intuitive
                            tools.
                        </p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pp-how-work-items pp-style-2">
                        <h6>STEP-02</h6>
                        <h3>Track Performance</h3>
                        <p>
                            Monitor campaign metrics in real-time and gain deep insights into engagement and conversion
                            rates.
                        </p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pp-how-work-items">
                        <h6>STEP-03</h6>
                        <h3>Optimize & Grow</h3>
                        <p>
                            Use data-driven decisions to fine-tune strategies, maximize ROI, and scale your business
                            efficiently.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pp-Team Section Start -->
    <section class="pp-team-section section-padding fix">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pp-team-card-item">
                        <div class="pp-team-image">
                            <img src="{{ asset('website/img/inner-page/team/04.png') }}" alt="img">
                        </div>
                        <div class="pp-team-content">
                            <h3><a href="team-details.html">Payal</a></h3>
                            <p>HR manager</p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="pp-team-card-item">
                        <div class="pp-team-image">
                            <img src="{{ asset('website/img/inner-page/team/02.png') }}" alt="img">
                        </div>
                        <div class="pp-team-content">
                            <h3><a href="team-details.html">Payal</a></h3>
                            <p>co-Founder</p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pp-team-card-item">
                        <div class="pp-team-image">
                            <img src="{{ asset('website/img/inner-page/team/01.png') }}" alt="img">
                        </div>
                        <div class="pp-team-content">
                            <h3><a href="team-details.html">Payal</a></h3>
                            <p>co-Founder</p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pp-team-card-item">
                        <div class="pp-team-image">
                            <img src="{{ asset('website/img/inner-page/team/06.png') }}" alt="img">
                        </div>
                        <div class="pp-team-content">
                            <h3><a href="team-details.html">Payal</a></h3>
                            <p>HR manager</p>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


    <!-- Pp-Faq Section Start -->
    <section class="faq-section section-padding pb-0 fix">
        <div class="container">
            <div class="pp-faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="pp-faq-image">
                            <img src="{{ asset('website/img/inner-page/faq.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pp-faq-content">
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">

                                    <!-- FAQ 1 -->
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button pt-0" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                What services do you offer?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We offer digital marketing, web development, SEO, app development, branding,
                                                email marketing, and more — all customized to grow your business online.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 2 -->
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                                aria-controls="faq2">
                                                How long does it take to build a website?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                A standard website usually takes 2–4 weeks, depending on design complexity
                                                and the features required. Custom or eCommerce projects may take longer.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 3 -->
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                Do you provide SEO services?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we offer complete SEO services including on-page optimization, keyword
                                                research, backlink building, and local SEO strategies to improve your
                                                ranking.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 4 -->
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                                aria-controls="faq4">
                                                Can I manage my website after delivery?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Absolutely. We build user-friendly CMS websites (like WordPress or
                                                Laravel-based admin panels) so you can easily update content, images, and
                                                more.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 5 -->
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                                aria-controls="faq5">
                                                What is your pricing model?
                                            </button>
                                        </h5>
                                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Our pricing is flexible based on project scope and service type. We offer
                                                both one-time and monthly packages depending on your business needs.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- FAQ 6 -->
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                                aria-controls="faq6">
                                                Do you offer post-launch support?
                                            </button>
                                        </h5>
                                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we provide maintenance and support services after project delivery to
                                                ensure everything runs smoothly and updates are handled properly.
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- .accordion -->
                            </div> <!-- .faq-accordion -->
                        </div> <!-- .pp-faq-content -->
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection