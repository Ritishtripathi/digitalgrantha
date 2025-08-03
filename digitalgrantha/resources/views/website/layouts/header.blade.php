<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <!-- SEO Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Digital Grantha - Website & App Development')</title>
    <meta name="description"
        content="@yield('meta_description', 'We offer Website Development, App Development, SEO, Email Marketing, IT Solutions & more.')">
    <meta name="keywords"
        content="@yield('meta_keywords', 'Website Development, App Development, SEO, Email Marketing, IT Services, Digital Marketing')">
    <meta name="author" content="Digital Grantha">

    <!-- Open Graph for Social Media -->
    <meta property="og:title" content="@yield('og_title', 'Digital Grantha')" />
    <meta property="og:description"
        content="@yield('og_description', 'Leading agency for digital transformation and IT services')" />
    <meta property="og:image" content="@yield('og_image', asset('assets/img/logo/black-logo.svg'))" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="robots" content="index, follow">

    <!-- ======== Page title ============ -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('website/img/favicon.svg') }}">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/main.css') }}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Ho3R3v8EnupU1oU+VimlYz4aOby0MG0xv3zS7RSK6cMa9uDByOPuX0mAW8Rdn1FqddNAdH6xEkQAc7rPCsK+RQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="G" class="letters-loading">
                    G
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
            </div>
            <p class="text-center">Grandha</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- pp Back To Top Start -->
    <button id="pp-back-top" class="pp-back-to-top show">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- pp MouseCursor Start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="">
                                <img src="{{ asset('website/img/dlogo.png') }}" width="100" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">

                        </div>
                        <a href="event-details.html" class="pp-theme-btn">
                            <span class="pp-icon-btn"><i class="icon-icon-1"></i></span>
                            <span class="pp-text-btn">
                                <span class="pp-text-2">UPCOMMING EVENT</span>
                            </span>
                        </a>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main style-1">
                    <div class="logo">
                        <a href="" class="header-logo">
                            <img src="{{ asset('website/img/dlogo.png') }}" alt="logo-img">
                        </a>
                        <a href="" class="header-logo-2">
                            <img src="{{ asset('website/img/dlogo.png') }}" alt="logo-img">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About Us</a>
                                    </li>

                                    <li>
                                        <a href="">
                                            Serivices
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('googlebusiness') }}">Google My Business</a></li>
                                            <li><a href="{{ route('socialmedia') }}">Social Media</a></li>
                                             <li><a href="{{ route('seo') }}">SEO</a></li>
                                            <li><a href="{{ route('webdevelopement') }}">Web Developement</a></li>
                                            <li><a href="{{ route('appdevelopement') }}">App Developement</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('pricing') }}">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <a href="contact.html" class="pp-theme-btn">
                            Get a quote <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <div class="header-bar style-1">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>