@extends('website.layouts.app')

@section('title', 'Social Media Marketing Services - Digital Grantha')
@section('meta_description', 'Maximize your brand visibility with our Social Media Marketing services. Engage audiences, grow followers, and drive traffic with tailored strategies.')
@section('meta_keywords', 'social media marketing, audience engagement, digital marketing, brand visibility, Digital Grantha')

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
                <li>Social Media Marketing</li>
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
                        <img src="assets/img/inner-page/service-details/details-1.jpg" alt="Social Media Marketing">
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
                                    <li class="active"><a href="{{ route('socialmedia') }}">Social Media Marketing</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('seo') }}">SEO Services</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('googlebusiness') }}">Google My Business</a><span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('appdevelopement') }}">App Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('webdevelopement') }}">Web Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pp-service-details-content">
                        <h3>Social Media Marketing</h3>
                        <p class="mb-4">
                            Our Social Media Marketing services help your brand connect with your audience, boost engagement, and drive real business results. We focus on creative storytelling, smart targeting, and consistent performance tracking to ensure your brand stands out.
                        </p>
                        <p class="mb-4">
                            From Facebook and Instagram to LinkedIn and Twitter, we manage it all — from content planning and publishing to community management and performance analytics.
                        </p>

                        <h3>What We Provide</h3>
                        <p class="mb-5">
                            We deliver dynamic content strategies, audience growth techniques, and tailored engagement plans that align with your business objectives.
                        </p>

                        <div class="pp-thumb">
                            <img src="assets/img/inner-page/service-details/details-2.jpg" alt="Social Media Strategy">
                        </div>

                        <h3>Challenges We Solve</h3>
                        <p>
                            Lack of brand visibility? Poor engagement? Inconsistent content? We solve these by implementing data-driven social strategies, targeted campaigns, and constant monitoring.
                        </p>

                        <div class="pp-details-list-items">
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Platform-specific content strategies</li>
                                <li><i class="fa-solid fa-circle-check"></i>Advanced analytics & insights</li>
                            </ul>
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Community management & support</li>
                                <li><i class="fa-solid fa-circle-check"></i>Monthly performance reporting</li>
                            </ul>
                        </div>
                    </div>

                    <div class="pp-faq-wrapper mt-5">
                        <div class="faq-accordion-items">
                            <div class="faq-accordion">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false">
                                                Why is social media marketing important?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                It builds brand awareness, engages with customers in real time, and drives website traffic. It’s essential for staying competitive in today's digital world.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true">
                                                Which platforms do you support?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We manage campaigns across Facebook, Instagram, Twitter (X), LinkedIn, Pinterest, and YouTube depending on your target audience.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-3">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                                                How often do you post content?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Based on your package, we post 3–5 times a week. Custom schedules are also available for premium plans.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                                                Will I get performance reports?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we provide monthly performance reports highlighting reach, engagement, followers gained, and campaign insights.
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .accordion -->
                            </div>
                        </div>
                    </div>

                </div> <!-- col-lg-8 -->
            </div>
        </div>
    </div>
</section>
@endsection
