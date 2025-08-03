@extends('website.layouts.app')

@section('title', 'SEO Services - Boost Your Website Visibility | Digital Grantha')
@section('meta_description', 'Boost your website’s ranking with expert SEO services including keyword research, on-page SEO, link building, and analytics.')
@section('meta_keywords', 'SEO services, keyword research, link building, on-page SEO, search engine optimization, Digital Grantha')

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
                <li>SEO Services</li>
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
                        <img src="assets/img/inner-page/service-details/details-1.jpg" alt="SEO Service">
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
                                    <ul>
                                    <li><a href="{{ route('socialmedia') }}">Social Media Marketing</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li class="active"><a href="{{ route('seo') }}">SEO Services</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('googlebusiness') }}">Google My Business</a><span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('appdevelopement') }}">App Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li><a href="{{ route('webdevelopement') }}">Web Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pp-service-details-content">
                        <h3>Search Engine Optimization (SEO)</h3>
                        <p class="mb-4">
                            Improve your online visibility with our results-driven SEO strategies. From keyword research to link building, our comprehensive SEO services are designed to help your website rank higher on search engines and attract the right audience.
                        </p>
                        <p class="mb-4">
                            We focus on both on-page and off-page SEO techniques, ensuring your site not only gets found but also delivers a seamless experience that converts visitors into customers.
                        </p>

                        <h3>What We Provide</h3>
                        <p class="mb-5">
                            Our team crafts personalized SEO plans that align with your business goals and constantly adapts to search engine algorithm updates for long-term growth.
                        </p>

                        <div class="pp-thumb">
                            <img src="assets/img/inner-page/service-details/details-2.jpg" alt="SEO Image">
                        </div>

                        <h3>The Challenge</h3>
                        <p>
                            The digital landscape is highly competitive. Achieving visibility organically takes more than just adding keywords—it requires technical precision, continuous optimization, and a solid content strategy.
                        </p>

                        <div class="pp-details-list-items">
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>In-depth keyword research & analysis</li>
                                <li><i class="fa-solid fa-circle-check"></i>On-page SEO (titles, meta, speed)</li>
                            </ul>
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Quality backlink creation</li>
                                <li><i class="fa-solid fa-circle-check"></i>Monthly performance tracking & reports</li>
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
                                                How long does it take to see SEO results?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Typically, SEO results start showing within 3 to 6 months. It depends on your website’s current standing, competition, and the keywords targeted.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                What makes your SEO services different?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                We combine deep analytics, proven strategies, and custom plans tailored for each client. Our ethical and adaptive SEO ensures sustainable growth.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                Will SEO help my local business?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Absolutely. Local SEO ensures your business appears in searches for nearby services, helping drive foot traffic and local customer conversions.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                Do you provide monthly SEO reports?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes. We deliver detailed monthly reports that include keyword rankings, traffic analysis, backlinks, and our next-month improvement plan.
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
