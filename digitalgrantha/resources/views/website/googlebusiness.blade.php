@extends('website.layouts.app')

@section('title', 'Google My Business Services - Local SEO & Visibility | Digital Grantha')
@section('meta_description', 'Enhance your local presence with Google My Business setup, reputation management, and optimized listings to drive more foot traffic and leads.')
@section('meta_keywords', 'Google My Business, local SEO, GMB optimization, reputation management, local listing services')

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
                <li>Google My Business</li>
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
                        <img src="assets/img/inner-page/service-details/details-1.jpg" alt="Google My Business">
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
                                    <li class="active"><a href="{{ route('googlebusiness') }}">Google My Business</a><span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('appdevelopement') }}">App Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('webdevelopement') }}">Web Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pp-service-details-content">
                        <h3>Google My Business Optimization</h3>
                        <p class="mb-4">
                            Your business deserves to be found easily by nearby customers. Our Google My Business services ensure your profile is complete, optimized, and ranks well in local searches. We help you establish trust, drive foot traffic, and generate more calls.
                        </p>
                        <p class="mb-4">
                            From creating and verifying your GMB listing to managing reviews and updates — we take care of every aspect to keep your local presence strong and competitive.
                        </p>

                        <h3>What We Provide</h3>
                        <p class="mb-5">
                            We provide end-to-end GMB management: listing setup, keyword optimization, Q&A handling, review response, and regular posting to keep your profile active and engaging.
                        </p>

                        <div class="pp-thumb">
                            <img src="assets/img/inner-page/service-details/details-2.jpg" alt="GMB Services">
                        </div>

                        <h3>The Challenge</h3>
                        <p>
                            With increasing competition, many businesses struggle to appear on Google Maps or in the local 3-pack. An incomplete or inactive listing often results in missed opportunities and lost local traffic.
                        </p>

                        <div class="pp-details-list-items">
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Complete profile creation & optimization</li>
                                <li><i class="fa-solid fa-circle-check"></i>Location-based keyword strategy</li>
                            </ul>
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Reputation & review management</li>
                                <li><i class="fa-solid fa-circle-check"></i>Posts, updates & engagement optimization</li>
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
                                                Why is Google My Business important?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                GMB helps customers find your business on Google Search and Maps. It enhances visibility, improves trust, and generates leads from local users actively searching for services.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                How often should we update the GMB profile?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Weekly updates, new posts, event announcements, and responding to reviews regularly help maintain visibility and engagement.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                What if my business already has a listing?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We’ll audit, optimize, and manage your existing listing to maximize its performance, fix any issues, and boost its local ranking.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                Do you respond to reviews on our behalf?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we can professionally manage and respond to both positive and negative reviews to maintain your brand’s reputation and customer trust.
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
