@extends('website.layouts.app')

@section('title', 'Best Website & App Development Services - Digital Grantha')
@section('meta_description', 'We build high-performance websites and mobile apps, and offer SEO, email marketing & IT solutions to grow your business.')
@section('meta_keywords', 'web development, app development, email marketing, seo, digital marketing, digital grantha')

@section('content')

    <!-- pp Hero Section Start -->
    <section class="pp-hero-section pp-hero-1 fix">
        <div class="top-shape">
            <img src="assets/img/home-1/hero/hero-bg.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="pp-hero-content">
                        <h1 class="wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">
                            We're working for <br> your business not for you.
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                            From innovative websites to powerful digital marketing, we build solutions that drive real
                            results. With expertise in IT services and development, we're the backbone for your
                            business—empowering you to grow, scale, and succeed in the digital world.
                        </p>

                        <div class="pp-hero-button">
                            <a href="contact.html" class="pp-theme-btn wow fadeInUp" data-wow-delay=".3s">Get Started Now <i
                                    class="fa-solid fa-arrow-right-long"></i></a>
                            <a href="about.html" class="pp-theme-btn pp-style-2 wow fadeInUp" data-wow-delay=".3s">Learn
                                More <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="pp-hero-image wow img-custom-anim-bottom" data-wow-duration="1.3s" data-wow-delay="0.3s">
                        <img src="https://plus.unsplash.com/premium_photo-1681487769650-a0c3fbaed85a?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c3RvY2slMjBtYXJrZXR8ZW58MHx8MHx8fDA%3D"
                            alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pp-Brand Section Start -->
    <div class="pp-brand-section section-padding pb-0 fix">
        <div class="container custom-container-3">
            <div class="brand-wrapper style-2">
                <div class="brand-title wow fadeInUp" data-wow-delay=".3s">
                    <h3>Millions of clients trust us.</h3>
                </div>
                <div class="swiper pp-brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('website/img/home-1/brand/01.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('website/img/home-1/brand/02.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('website/img/home-1/brand/03.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('website/img/home-1/brand/04.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image text-center">
                                <img src="{{ asset('website/img/home-1/brand/05.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Pp-About Section Start -->
    <section class="pp-about-section section-padding fix">
        <div class="container">
            <div class="pp-about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="{{ asset('website/img/home-1/about/about-1.jpg') }}" alt="img"
                                class="wow img-custom-anim-left" data-wow-duration="1.3s" data-wow-delay="0.3s">

                            <div class="about-image-2">
                                <img src="{{ asset('website/img/home-1/about/about-2.jpg') }}" alt="img">
                            </div>

                            <div class="about-shape">
                                <img src="{{ asset('website/img/home-1/about/shape-1.png') }}" alt="img">
                            </div>

                            <div class="circle-shape">
                                <img src="{{ asset('website/img/home-1/about/shape-2.png') }}" alt="img">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="pp-section-title mb-0">
                                <span class="pp-sub-title wow fadeInUp">ABOUT US</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Where Marketing Gets Easier for Everyone
                                </h2>
                            </div>
                            <p class="pp-text wow fadeInUp" data-wow-delay=".5s">
                                At <strong>Digital Grantha</strong>, we empower startups and enterprises with smart,
                                scalable digital solutions.
                                Our intuitive tools and expert services make it easy to plan, launch, and track marketing
                                campaigns.
                                Collaborate in real time, automate workflows, and grow with confidence — all with no steep
                                learning curve.
                            </p>
                            <div class="about-count-item wow fadeInUp" data-wow-delay=".3s">
                                <div class="count-text">
                                    <h2><span class="pp-count">200</span>k+</h2>
                                    <p>Businesses worldwide</p>
                                </div>
                                <div class="count-text">
                                    <h2><span class="pp-count">205</span>x</h2>
                                    <p>More ROI</p>
                                </div>
                                <div class="count-text">
                                    <h2><span class="pp-count">2.5</span>k</h2>
                                    <p>Generated on average</p>
                                </div>
                            </div>
                            <a href="{{ url('/about') }}" class="pp-theme-btn wow fadeInUp" data-wow-delay=".5s">
                                Discover More <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Pp-Offer Section Start -->
    <section class="pp-offer-section section-padding fix section-bg">
        <div class="container">
            <div class="pp-section-title text-center">
                <span class="pp-sub-title wow fadeInUp">
                    WHAT WE OFFER
                    <span class="pp-style-2"></span>
                </span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Our Marketing Solutions
                </h2>
            </div>
            <div class="row">
                <!-- Digital Marketing -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-bullhorn fa-3x text-white"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>Digital Marketing</h3>
                            <p>Boost your brand visibility and reach with result-driven digital strategies tailored for your
                                business.</p>
                        </div>
                    </div>
                </div>

                <!-- Email Marketing -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-envelope-open-text fa-3x text-white"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>Email Marketing</h3>
                            <p>Create, schedule, and automate email campaigns to engage and convert your audience
                                effectively.</p>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-code fa-3x text-white"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>Web Development</h3>
                            <p>Custom websites built with performance, SEO, and user experience in mind — from static to
                                dynamic solutions.</p>
                        </div>
                    </div>
                </div>

                <!-- App Development -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-mobile-alt fa-3x text-warning"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>App Development</h3>
                            <p>Robust Android & iOS mobile apps designed to scale and solve real user problems seamlessly.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Graphic Design -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-paint-brush fa-3x text-warning"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>Graphic Design</h3>
                            <p>Creative and brand-aligned designs — logos, brochures, banners, and social creatives that
                                speak visually.</p>
                        </div>
                    </div>
                </div>

                <!-- SEO Services -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="pp-offer-box-item">
                        <div class="pp-offer-icon">
                            <i class="fas fa-search fa-3x text-warning"></i>
                        </div>
                        <div class="pp-offer-content">
                            <h3>SEO Services</h3>
                            <p>Enhance your search engine visibility with on-page, off-page, and local SEO strategies that
                                drive traffic.</p>
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
                        <h3>Plan with Strategy</h3>
                        <p>
                            We begin by understanding your business goals and crafting a result-driven strategy tailored for
                            your digital presence.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="pp-how-work-items pp-style-2">
                        <h6>STEP-02</h6>
                        <h3>Execute with Precision</h3>
                        <p>
                            Our team implements powerful marketing, development, and design solutions to build your brand
                            and reach the right audience.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="pp-how-work-items">
                        <h6>STEP-03</h6>
                        <h3>Analyze & Improve</h3>
                        <p>
                            We monitor performance, analyze data, and refine strategies to ensure continuous growth and ROI
                            for your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Pp-key-feature Section Start -->
    <section class="pp-key-feature-section section-padding pb-0 fix">
        <div class="container">
            <div class="pp-key-feature-wrapper">
                <div class="row g-4">
                    <!-- Left Side: Images -->
                    <div class="col-lg-6">
                        <div class="pp-key-feature-image">
                            <img src="{{ asset('website/img/home-1/feature/02.jpg') }}" alt="feature image">
                            <div class="pp-key-feature-image-2 float-bob-y">
                                <img src="{{ asset('website/img/home-1/feature/01.jpg') }}" alt="feature image 2">
                            </div>
                            <div class="pp-key-feature-image-3 float-bob-y">
                                <img src="{{ asset('website/img/home-1/feature/03.jpg') }}" alt="feature image 3">
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Content -->
                    <div class="col-lg-6">
                        <div class="pp-key-feature-content">
                            <div class="pp-section-title mb-0">
                                <span class="pp-sub-title wow fadeInUp">KEY FEATURES</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Powerful Tools for Digital Growth
                                </h2>
                            </div>
                            <p class="pp-text wow fadeInUp" data-wow-delay=".5s">
                                At <strong>Digital Grantha</strong>, we empower businesses with streamlined workflows, smart
                                automation, and seamless integration to boost marketing and development productivity.
                            </p>
                            <ul class="pp-feature-list wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    Drag-and-Drop Campaign Builder
                                </li>
                                <li>
                                    Fully Responsive Design & Development
                                </li>
                                <li>
                                    Real-time Analytics and Performance Insights
                                </li>
                            </ul>
                            <a href="" class="pp-theme-btn wow fadeInUp" data-wow-delay=".5s">
                                Read More <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pp-key-feature Section Start -->
    <section class="pp-key-feature-section section-padding fix">
        <div class="container">
            <div class="pp-key-feature-wrapper pp-style-2">
                <div class="row g-4">
                    <!-- Content Section -->
                    <div class="col-lg-6">
                        <div class="pp-key-feature-content">
                            <div class="pp-section-title mb-0">
                                <span class="pp-sub-title wow fadeInUp">KEY FEATURES</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                    Data-Driven AI for Smarter Decisions
                                </h2>
                            </div>
                            <p class="pp-text wow fadeInUp" data-wow-delay=".5s">
                                At <strong>Digital Grantha</strong>, we integrate AI-powered analytics to provide deep
                                business insights, automate decision-making, and optimize marketing campaigns for better ROI
                                and customer engagement.
                            </p>
                            <ul class="pp-feature-list wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    Predictive Performance Analytics
                                </li>
                                <li>
                                    Real-Time User Behavior Tracking
                                </li>
                                <li>
                                    Automated Campaign Optimization
                                </li>
                            </ul>
                            <a href="" class="pp-theme-btn wow fadeInUp" data-wow-delay=".5s">
                                Read More <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="pp-key-feature-image">
                            <img src="{{ asset('website/img/home-1/feature/06.jpg') }}" alt="feature img">
                            <div class="pp-key-feature-image-2 float-bob-y">
                                <img src="{{ asset('website/img/home-1/feature/04.jpg') }}" alt="feature img 2">
                            </div>
                            <div class="pp-key-feature-image-3 float-bob-y">
                                <img src="{{ asset('website/img/home-1/feature/05.jpg') }}" alt="feature img 3">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pp-pricing Section Start -->
    <section class="pp-pricing-section section-padding fix section-bg-2">
        <div class="top-shape">
            <img src="{{ asset('website/img/home-1/feature/bg-shape.png') }}" alt="img">
        </div>

        <div class="container">
            <div class="pp-section-title text-center">
                <span class="pp-sub-title wow fadeInUp">
                    PRICING
                    <span class="pp-style-2"></span>
                </span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Pricing That Fits Your Needs
                </h2>
            </div>
            <div class="pricing-two__tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="pt-1-tab" data-bs-toggle="tab" data-bs-target="#pt-1"
                            type="button" role="tab" aria-controls="pt-1" aria-selected="true">Monthly</button>
                        <button class="nav-link" id="pt-2-tab" data-bs-toggle="tab" data-bs-target="#pt-2" type="button"
                            role="tab" aria-controls="pt-2" aria-selected="false">Yearly</button>
                    </div>
                </nav>
            </div>
            <div class="pricing__tab-content">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="pt-1" role="tabpanel" aria-labelledby="pt-1-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Starter</h5>
                                            <h2>₹10999<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Basic campaign builder
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                1 user account
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Up to 500 contacts
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Basic analytics
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Email support
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Professional</h5>
                                            <h2>₹15999<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                All Starter features
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Unlimited contacts
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                A/B testing tools
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Automation workflows
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Social media scheduling
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Priority email support
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Basic Plan</h5>
                                            <h2>₹14999<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                All Professional features
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                AI-powered recommendations
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li>
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li>
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pt-2" role="tabpanel" aria-labelledby="pt-2-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Starter</h5>
                                            <h2>₹14000.9<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Basic campaign builder
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                1 user account
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Up to 500 contacts
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Basic analytics
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Email support
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Professional</h5>
                                            <h2>₹2999<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                All Starter features
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Unlimited contacts
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                A/B testing tools
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Automation workflows
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Social media scheduling
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Priority email support
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="pp-pricing-main-item">
                                    <div class="pp-pricing-card-item">
                                        <div class="pp-pricing-header">
                                            <h5>Basic Plan</h5>
                                            <h2>$14.9<span>/ Per Month</span></h2>
                                        </div>
                                        <ul class="pp-pricing-list">
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                All Professional features
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                AI-powered recommendations
                                            </li>
                                            <li>
                                                <i class="fas fa-check-circle text-success me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li>
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li>
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                            <li class="pp-style-2">
                                                <i class="fas fa-check text-secondary me-2"></i>
                                                Maximum of 5 collaborators
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="pricing-button">
                                        <a href="contact.html" class="pp-theme-btn">Get You Free plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pp-Projects Section Start -->
    <section class="pp-project-section section-padding fix">
        <div class="container-fluid custom-container">
              <div class="pp-section-title text-center">
                <span class="pp-sub-title wow fadeInUp">
                    PROJECTS
                    <span class="pp-style-2"></span>
                </span>
                <h2 class="text-black wow fadeInUp" data-wow-delay=".3s">
                    Projects That we develope for clients
                </h2>
            </div>
            <div class="row g-4">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/01.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/02.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/03.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/04.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/05.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/06.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/07.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="pp-project-card-item">
                        <div class="pp-project-image">
                            <img src="{{ asset('website/img/inner-page/project/08.jpg') }}" alt="img">
                            <div class="pp-project-content">
                                <h3><a href="team-details.html">Working Laptop</a></h3>
                                <a href="project-details.html" class="pp-link-btn">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Pp-testimonial Section Start -->
    <section class="pp-testimonial-section section-padding fix">
        <div class="container">
            <div class="pp-section-title-area">
                <div class="pp-section-title">
                    <span class="pp-sub-title wow fadeInUp">TESTIMONIALS</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Success Stories from Our Users
                    </h2>
                </div>
                <div class="pp-array-buttons wow fadeInUp" data-wow-delay=".5s">
                    <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
            <div class="swiper pp-testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="pp-testimonial-card">
                            <p>
                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum, turpis id
                                bibendum efficitur, arcu nunc pellentesque arcu, nec condimentum eros erat nec orci.
                                Maecenas pretium.”
                            </p>
                            <div class="pp-client-info-item">
                                <div class="pp-client-image">
                                    <img src="assets/img/home-1/testimonial/client-1.png" alt="img">
                                </div>
                                <div class="pp-content">
                                    <h5>Kristin Watson</h5>
                                    <span>Digital Strategist at Nova Agency</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pp-testimonial-card">
                            <p>
                                “Mauris vehicula iaculis turpis, vel luctus lacus dapibus rhoncus. Nullam dignissim eros ut
                                elit luctus, a ullamcorper risus tristique. Donec imperdiet elit at mi commodo, id consequat
                                diam venenatis.”
                            </p>
                            <div class="pp-client-info-item">
                                <div class="pp-client-image">
                                    <img src="assets/img/home-1/testimonial/client-2.png" alt="img">
                                </div>
                                <div class="pp-testimonial-content">
                                    <h5>Guy Hawkins</h5>
                                    <span>Marketing Manager at GrowFast Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pp-cta Section Start -->
    <section class="pp-cta-section section-padding fix theme-bg">
        <div class="top-shape">
            <img src="assets/img/home-1/cta/bg.png" alt="img">
        </div>
        <div class="container">
            <div class="pp-cta-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="pp-cta-image">
                            <img src="{{ asset('website/img/home-1/cta/cta-1.jpg') }}" alt="img"
                                class="wow img-custom-anim-top" data-wow-duration="1.3s" data-wow-delay="0.3s">
                            <div class="pp-cta-image-2">
                                <img src="{{ asset('website/img/home-1/cta/cta-2.jpg') }}" alt="img"
                                    class="wow img-custom-anim-right" data-wow-duration="1.3s" data-wow-delay="0.3s">
                            </div>
                            <div class="pp-shape float-bob-y">
                                <img src="{{ asset('website/img/home-1/cta/shape-1.jpg') }}" alt="img">
                            </div>
                            <div class="pp-shape-2 float-bob-y">
                                <img src="{{ asset('website/img/home-1/cta/shape-2.jpg') }}" alt="img">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="pp-cta-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Ready to Market Your App the Smart Way?
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Whether you're launching a startup or scaling your app, Digital Grantha gives you the tools
                                to succeed. From performance-driven marketing to automation that saves you time — we help
                                your app reach the right audience, faster and smarter.
                            </p>
                            <div class="pp-cta-button">
                                <a href="contact.html" class="pp-theme-btn wow fadeInUp" data-wow-delay=".3s">Get Started <i
                                        class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection