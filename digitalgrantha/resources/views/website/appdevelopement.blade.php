@extends('website.layouts.app')

@section('title', 'Mobile App Development Services - Android & iOS Apps | Digital Grantha')
@section('meta_description', 'Build powerful and intuitive Android/iOS mobile apps with custom UI/UX, full-stack integration, and performance-driven architecture.')
@section('meta_keywords', 'mobile app development, android apps, iOS apps, UI UX design, app development services')

@section('content')

<!-- Pp-Breadcrumb wrapper Start -->
<div class="pp-breadcrumb-wrapper fix bg-cover" style="background-image: url(assets/img/inner-page/breadcrumb.jpg);">
    <div class="container">
        <div class="pp-page-heading">
            <div class="pp-breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Service Details</h1>
            </div>
            <ul class="pp-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li><a href="index.html">Home</a></li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li>App Development</li>
            </ul>
        </div>
    </div>
</div>

<!-- Pp-Service-Details Section Start -->
<section class="pp-service-details-section section-padding">
    <div class="container">
        <div class="pp-service-details-wrapper">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pp-service-details-image">
                        <img src="assets/img/inner-page/service-details/details-1.jpg" alt="App Development Image">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-lg-4">
                    <div class="pp-main-sidebar sticky-style">
                        <div class="pp-single-sidebar-widget">
                            <div class="wid-title">
                                <h3>All Services</h3>
                            </div>
                            <div class="pp-service-widget-categories">
                                <ul>
                                    <li><a href="{{ route('socialmedia') }}">Social Media Marketing</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('seo') }}">SEO Services</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('googlebusiness') }}">Google My Business</a><span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li  class="active"><a href="{{ route('appdevelopement') }}">App Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('webdevelopement') }}">Web Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pp-service-details-content">
                        <h3>Mobile App Development</h3>
                        <p class="mb-4">
                            We specialize in designing and developing mobile apps that combine functionality with modern design. Whether it’s Android, iOS, or cross-platform, we create scalable, secure, and user-friendly applications tailored to your business goals.
                        </p>
                        <p class="mb-4">
                            From initial concept to final deployment, our team ensures your app is intuitive, efficient, and aligned with the latest tech trends. We focus on seamless user experiences that drive engagement and retention.
                        </p>

                        <h3>What We Provide</h3>
                        <p class="mb-5">
                            Our services include native and hybrid app development, UI/UX design, API integration, testing, and ongoing support. We turn your ideas into fully functional, feature-rich mobile solutions.
                        </p>

                        <div class="pp-thumb">
                            <img src="assets/img/inner-page/service-details/details-2.jpg" alt="App Dev Thumb">
                        </div>

                        <h3>The Challenge</h3>
                        <p>
                            With thousands of apps launched daily, creating one that stands out is the real challenge. We help you overcome this by focusing on performance, design, and real user needs—ensuring your app doesn’t just launch, but leads.
                        </p>

                        <div class="pp-details-list-items">
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Android & iOS development</li>
                                <li><i class="fa-solid fa-circle-check"></i>Custom UI/UX design</li>
                            </ul>
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>API & backend integration</li>
                                <li><i class="fa-solid fa-circle-check"></i>App store deployment & maintenance</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pp-faq-wrapper mt-5">
                        <div class="faq-accordion-items">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                                Do you build apps for both Android and iOS?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes. We offer native development for both Android (Java/Kotlin) and iOS (Swift), as well as hybrid options like Flutter or React Native based on your needs.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                How long does it take to develop an app?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Development time depends on the complexity of features and design. A basic app can take 4–6 weeks, while complex apps may require 2–3 months or more.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Will you assist in publishing the app?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we handle the entire submission process for Google Play Store and Apple App Store, including compliance, asset preparation, and deployment.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                Do you offer post-launch support?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Absolutely. We offer app maintenance plans that include updates, performance monitoring, and bug fixes to ensure your app runs smoothly post-launch.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /faq -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
