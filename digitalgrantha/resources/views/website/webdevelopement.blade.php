@extends('website.layouts.app')

@section('title', 'Professional Web Development Services | Digital Grantha')
@section('meta_description', 'We build responsive, high-performance websites tailored to your brand—eCommerce, CMS, and business solutions.')
@section('meta_keywords', 'web development, responsive website, ecommerce, CMS development, website design, digital grantha')

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
                <li>Web Development</li>
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
                        <img src="assets/img/inner-page/service-details/details-1.jpg" alt="Web Development Image">
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
                                    <li><a href="{{ route('appdevelopement') }}">App Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                    <li  class="active"><a href="{{ route('webdevelopement') }}">Web Development</a> <span><i class="fa-regular fa-arrow-right-long"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="pp-service-details-content">
                        <h3>Web Development</h3>
                        <p class="mb-4">
                            Your website is your digital identity. We specialize in building modern, responsive, and high-performing websites tailored to your business needs. Whether it's an eCommerce store, a CMS-driven blog, or a company portfolio, we deliver scalable and secure web solutions.
                        </p>
                        <p class="mb-4">
                            Our team combines cutting-edge design with functional development—ensuring your website not only looks amazing but also converts visitors into customers. Every website is optimized for mobile, SEO, and speed from day one.
                        </p>

                        <h3>What We Provide</h3>
                        <p class="mb-5">
                            We handle everything from UI/UX wireframing and content integration to full-stack development, CMS customization (like WordPress, Laravel, etc.), and performance optimization. Our process is transparent, efficient, and focused on results.
                        </p>

                        <div class="pp-thumb">
                            <img src="assets/img/inner-page/service-details/details-2.jpg" alt="Web Dev Thumb">
                        </div>

                        <h3>The Challenge</h3>
                        <p>
                            In a competitive online space, just having a website is not enough. It must load fast, be responsive, user-centric, and SEO-friendly. We solve these challenges by crafting websites that are beautiful, functional, and result-oriented.
                        </p>

                        <div class="pp-details-list-items">
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>Responsive, mobile-first design</li>
                                <li><i class="fa-solid fa-circle-check"></i>SEO-optimized structure</li>
                            </ul>
                            <ul class="pp-details-list">
                                <li><i class="fa-solid fa-circle-check"></i>eCommerce and CMS integration</li>
                                <li><i class="fa-solid fa-circle-check"></i>Secure & scalable coding standards</li>
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
                                                Do you provide eCommerce website development?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we specialize in building online stores using platforms like WooCommerce, Shopify, and custom PHP-based solutions with payment gateway integration.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                                Can I manage the website myself after launch?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Absolutely. We build websites with user-friendly CMS systems (like WordPress) so you can update content, images, and pages without technical help.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                                How long does it take to develop a website?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                A basic website takes 2–3 weeks. More complex sites like eCommerce platforms may require 4–8 weeks based on features and design.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                                Will my site be SEO-optimized?
                                            </button>
                                        </h5>
                                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we build SEO-friendly websites with proper HTML structure, meta tags, schema, and fast loading speeds to help you rank better.
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
