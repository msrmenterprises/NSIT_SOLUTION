<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>NS IT Solutions | ISO 27001:2022 & CMMI 5 Level Certified Organization</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo/nsit-logo.png">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .page-wrapper > .header-top-bar {
            color: #fff;
            background: #0f0f11;
            border-bottom-color: #303034;
        }

        .page-wrapper > .header-top-bar p,
        .page-wrapper > .header-top-bar p a,
        .page-wrapper > .header-top-bar .social-icon-wrapper a {
            color: #fff;
        }

        body .nsit-header.header-default {
            min-height: 96px;
            background: #fff !important;
            border-bottom: 1px solid #e5e7e9;
            box-shadow: 0 2px 12px rgba(25, 30, 35, 0.06);
        }

        body .nsit-header.header-default.sticky {
            background: #fff !important;
        }

        .nsit-header .logo a {
            height: 96px;
            line-height: normal;
        }

        .nsit-header .logo a img {
            width: 100%;
            max-width: 238px;
            max-height: 88px;
            object-fit: contain;
        }

        .nsit-header .mainmenu-nav .mainmenu > li > a {
            color: #17191d !important;
        }

        .nsit-header .mainmenu-nav .mainmenu > li > a:hover,
        .nsit-header .mainmenu-nav .mainmenu > li > a.active {
            color: #d9232e !important;
        }

        .popup-mobile-menu .mainmenu li.current > a {
            color: #d9232e !important;
        }

        .nsit-header .hamberger-button {
            color: #17191d;
            background: #f1f2f3;
        }

        .theme-mode-toggle {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-left: 12px;
            padding: 0;
            border: 1px solid #d9dcdf;
            border-radius: 50%;
            color: #17191d;
            background: #fff;
            cursor: pointer;
        }

        .theme-mode-toggle:hover,
        .theme-mode-toggle:focus-visible {
            color: #d9232e;
            border-color: #d9232e;
        }

        .partner-logo-panel {
            min-height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 14px;
            padding: 20px;
            background: #fff;
            border: 1px solid #e5e7e9;
            border-radius: 4px;
        }

        .partner-logo-panel img {
            display: block;
            width: 100%;
            max-width: 300px;
            max-height: 80px;
            object-fit: contain;
        }

        .partner-logo-panel h3 {
            margin: 0;
            color: #17191d;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.45;
            text-align: center;
        }

        .partner-logo-placeholder {
            width: 100%;
            max-width: 300px;
            height: 80px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px dashed #aeb5bc;
            border-radius: 4px;
            color: #40474e;
            background: #f7f7f7;
        }

        .partner-logo-placeholder span {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.06em;
        }

        .partner-logo-placeholder small {
            font-size: 11px;
        }

        .case-study-card {
            height: 100%;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 4px;
            background: #151517;
        }

        .case-study-card img {
            display: block;
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }

        .case-study-card .content {
            padding: 22px 24px 24px;
        }

        .case-study-card .category {
            display: block;
            margin-bottom: 8px;
            color: #d9232e;
            font-size: 12px;
            font-weight: 700;
        }

        body.active-light-mode .case-study-card {
            border-color: #e5e7e9;
            background: #fff;
        }

        @media only screen and (max-width: 767px) {
            body .nsit-header.header-default {
                min-height: 78px;
            }

            .nsit-header .logo a {
                height: 78px;
            }

            .nsit-header .logo a img {
                max-height: 70px;
            }
        }
    </style>
</head>

<body>
    <main class="page-wrapper">
        <!-- Start Header Top Area  -->
        <?php include('utils/notification.php') ?>
        <!-- End Header Top Area  -->
        <!-- Start Header Area  -->
        <header class="rainbow-header header-default header-transparent header-sticky nsit-header">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.php">
                                <img class="logo-light" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions">
                                <img class="logo-dark" src="assets/images/logo/nsit-logo.png" alt="NS IT Solutions">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">

                            <?php include('utils/menu.php') ?>

                            <!-- Start Header Btn  -->
                            <?php include('utils/payNow.php') ?>
                            <!-- End Header Btn  -->

                            <button type="button" class="theme-mode-toggle" data-theme-toggle aria-label="Switch to light mode" title="Switch to light mode">
                                <i class="feather-sun" aria-hidden="true"></i>
                            </button>

                            <!-- Start Mobile-Menu-Bar -->
                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Start Mobile-Menu-Bar -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <?php include('utils/mobileMenu.php') ?>
        </div>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->



        <!-- Start Slider Area  -->
        <div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--3" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-center">
                            <!-- <span class="subtitle">DIGITAL CONSULTING AGENCY</span> -->
                                <h1 class="title display-one">Secure, Scalable, and Smart IT Solutions.</h1>
                                <p class="description">NS IT Solutions is an ISO 27001:2022 &amp; CMMI 5 Level Certified Organization, empanelled with UP Electronics Corporation Ltd, GeM, UPDSCO.</p>
                                <div class="button-group"><a class="btn-default btn-medium round btn-icon" href="contact.php">Contact Us<i class="icon feather-arrow-right"></i></a><a class="btn-default btn-medium btn-border round btn-icon" href="#services">Discover Our Services<i class="icon feather-arrow-right">
                                    </i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area dfd -->

        <section id="credentials" class="rainbow-service-area ptb--50 bg-color-blackest" aria-label="Certifications and empanelments">
            <div class="container">
                <div class="row g-4 align-items-stretch text-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                            <span class="subtitle">CERTIFIED</span>
                            <h3 class="title w-600 mt--10 mb--10">ISO 27001:2022</h3>
                            <p class="b2 mb--0">Information Security Management</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                            <span class="subtitle">PROCESS MATURITY</span>
                            <h3 class="title w-600 mt--10 mb--10">CMMI Level 5</h3>
                            <p class="b2 mb--0">A mature, quality-focused delivery approach</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                            <span class="subtitle">EMPANELLED WITH</span>
                            <h3 class="title w-600 mt--10 mb--10">Public Sector &amp; Procurement</h3>
                            <p class="b2 mb--0">UP Electronics Corporation Ltd · GeM · UPDSCO</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rainbow-brand-area ptb--40 bg-color-blackest" aria-labelledby="client-partners-title">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-12 text-center">
                        <h2 id="client-partners-title" class="title">Our Clients</h2>
                    </div>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/UPSIDA.jpeg" alt="Uttar Pradesh State Industrial Development Authority logo">
                            <h3>Uttar Pradesh State Industrial Development Authority (UPSIDA)</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/uprnn.jpeg" alt="Uttar Pradesh Rajkiya Nirman Nigam Limited logo">
                            <h3>Uttar Pradesh Rajkiya Nirman Nigam Limited</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/upkvib.jpeg" alt="Uttar Pradesh Khadi and Village Industries Board logo">
                            <h3>Uttar Pradesh Khadi and Village Industries Board (UPKVIB)</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/state-bridge-corporation.jpeg" alt="State Bridge Corporation Ltd logo">
                            <h3>State Bridge Corporation Ltd</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/up-electronics.png" alt="U.P. Electronics Corporation Limited logo">
                            <h3>Uttar Pradesh Electronics Corporation Limited</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <div id="about" class="rainbow-service-area rainbow-section-gap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            
                            <h2 class="title w-600 mb--20 mt--20">About NS IT Solutions
                                </h2>
                            <p class="description b1 mb--30">We deliver digital transformation services for enterprises and public sector organizations with strong governance, information security, and delivery excellence.</p>
                            <div class="row g-4 text-start">
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Vision</h3>
                                        <p class="description b1 mb--0">To make secure, dependable technology accessible to organizations and help them deliver better services through digital transformation.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Mission</h3>
                                        <p class="description b1 mb--0">To build and support practical software solutions with a focus on information security, quality, and long-term partnership.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Service-8 Area  -->
        <div id="services" class="rainbow-service-area rainbow-section-gap ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle ">
                                    <span class="theme-gradient">Our Services</span>
                                </h4>
                                <h2 class="title w-600 mb--20">Comprehensive IT Services <br/>for Modern Organizations
                                </h2>
                                <p class="description b1">From software engineering to secure cloud operations, our team supports end-to-end execution.

                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Start Feature Service  -->
                    <div class="row g-5">
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-codepen"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">Web Development</h4>
                                    <p class="description b1 color-gray mb--0">Build responsive, secure, and scalable websites tailored to your business needs using the latest technologies.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-loader"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">Full Stack Development</h4>
                                    <p class="description b1 color-gray mb--0">Comprehensive development solutions covering both front-end and back-end, ensuring seamless integration and performance.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-smartphone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">Mobile App Development</h4>
                                    <p class="description b1 color-gray mb--0">Create intuitive and feature-rich mobile applications for iOS and Android platforms to engage your audience on the go.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-shopping-cart"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">E-commerce App Development</h4>
                                    <p class="description b1 color-gray mb--0">Develop robust e-commerce platforms with secure payment gateways, inventory management, and user-friendly interfaces.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-cpu"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">Artificial Intelligence</h4>
                                    <p class="description b1 color-gray mb--0">Leverage AI and machine learning to automate processes, gain insights, and enhance decision-making for your business.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                        <!-- Start Single Service  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                            <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                                <div class="icon">
                                    <i class="feather-globe"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title w-600">Digital Marketing</h4>
                                    <p class="description b1 color-gray mb--0">Boost your online presence with targeted digital marketing strategies, SEO, social media, and analytics to drive growth.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service  -->
                       
                    </div>
                    <!-- End Feature Service  -->
                </div>
            </div>
            <!-- End Service-8 Area  -->

        <section id="case-studies" class="rainbow-portfolio-area rainbow-section-gap" aria-labelledby="case-studies-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subtitle"><span class="theme-gradient">Selected Work</span></h4>
                            <h2 id="case-studies-title" class="title w-600 mb--20">Business Case Studies</h2>
                            <p class="description b1">Project details and final imagery will be added in the next update.</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt--10">
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-01.jpg" alt="Temporary image for case study 1">
                            <div class="content">
                                <span class="category">CASE STUDY 01</span>
                                <h3 class="title w-600 mb--10">Application Development</h3>
                                <p class="description b1 mb--0">Project summary to be added.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-02.jpg" alt="Temporary image for case study 2">
                            <div class="content">
                                <span class="category">CASE STUDY 02</span>
                                <h3 class="title w-600 mb--10">Digital Transformation</h3>
                                <p class="description b1 mb--0">Project summary to be added.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-03.jpg" alt="Temporary image for case study 3">
                            <div class="content">
                                <span class="category">CASE STUDY 03</span>
                                <h3 class="title w-600 mb--10">Enterprise Solutions</h3>
                                <p class="description b1 mb--0">Project summary to be added.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
  
            <!-- <div class="rainbow-brand-area rainbow-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">Our Technology</span></h4>
                                <h2 class="title w-600 mb--20">Brand Style Three.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt--10">
                            <ul class="brand-list brand-style-2">
                                <li><a href="#"><img src="assets/images/brand/brand-01.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-02.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-03.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-04.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-05.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-06.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-07.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-08.png" alt="Brand Image"></a></li>
                                <li><a href="#"><img src="assets/images/brand/brand-01.png" alt="Brand Image"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Timeline-Style-One  -->
        <div class="rainbow-timeline-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Working Process</span></h4>
                            <h2 class="title w-600 mb--20">Our Proven Business Working Process</h2>
                            <p class="description b1">We deliver innovative IT solutions by following a systematic approach <br> tailored to meet the unique needs of your business.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rainbow-timeline-wrapper timeline-style-one position-relative">
                            <div class="timeline-line"></div>

                            <!-- Step 1 -->
                            <div class="single-timeline mt--50">
                                <div class="timeline-dot">
                                    <div class="time-line-circle"></div>
                                </div>
                                <div class="single-content">
                                    <div class="inner">
                                        <div class="row row--30 align-items-center">
                                            <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-1</span>
                                                    <h2 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">Understanding Your Business Needs</h2>
                                                    <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                                                        Our process begins with a deep dive into your business goals, challenges, and requirements. This enables us to craft a solution aligned with your vision.
                                                    </p>
                                                    <div class="row row--30">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Requirement Analysis</h5>
                                                                <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">We gather and analyze all essential information about your project.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Consultation</h5>
                                                                <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">Collaborate with our experts to define the project roadmap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                                                        <a class="btn-default btn-large round" href="contact.php"><span>Get Started Now</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <div class="thumbnail">
                                                    <img class="w-100" src="assets/images/timeline/website-development-links-seo-webinar-cyberspace-concept_53876-120953.avif" alt="Indian professionals discussing business needs">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="single-timeline mt--50">
                                <div class="timeline-dot">
                                    <div class="time-line-circle"></div>
                                </div>
                                <div class="single-content">
                                    <div class="inner">
                                        <div class="row row--30 align-items-center">
                                            <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-2</span>
                                                    <h2 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">Design and Development</h2>
                                                    <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                                                        Our team designs and develops innovative, scalable solutions to address your specific business needs while adhering to industry best practices.
                                                    </p>
                                                    <div class="row row--30">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="350">Creative Design</h5>
                                                                <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Crafting user-friendly designs that align with your brand identity.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="350">Agile Development</h5>
                                                                <p data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Developing secure, high-performance solutions tailored to your needs.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="read-morebtn" data-sal="slide-up" data-sal-duration="700" data-sal-delay="400">
                                                        <a class="btn-default btn-large round" href="contact.php">
                                                            <span>Get Started Now</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 order-1 order-lg-2">
                                                <div class="thumbnail">
                                                    <img class="w-100" src="assets/images/timeline/timeline-02.jpg" alt="Design and Development">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Timeline-Style-One  -->

        

        <!-- Start final testimonial  -->
        <div class="rainbow-testimonial-area rainbow-section-gap">
            <div class="container">
                <div class="row mb--20">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">India Client Feedback</span></h4>
                            <h2 class="title w-600 mb--20">Technology Delivery for Public Services</h2>
                            <p class="description b1">Supporting Indian organizations with dependable digital services. Empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO.</p>
                        </div>
                    </div>
                </div>
                <div class="row rainbow-slick-dot rainbow-slick-arrow testimonial-activation row">

                    <div class="coll-lg-12">
                        <!-- Start single Testimonial -->
                        <div class="testimonial-style-two " tabindex="-1" style="width: 100%; display: inline-block;">
                            <div class="row align-items-center row--20">
                                <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                                    <div class="content mt_sm--40"><span class="form">INDIA</span>
                                        <p class="description">NS IT Solutions provides reliable and timely website support for DumIndia, ISUW, and IndiaSmartGrid, ensuring smooth operations and quick issue resolution. Their professional and responsive approach makes them a trusted digital support partner.
                                        </p>
                                        <div class="client-info">
                                            <h4 class="title">Reena Suri </h4>
                                            <h6 class="subtitle">Executive Director</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 order-md-2 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <img class="w-100" src="assets/images/testimonial/testimonial-dark-03.jpg" alt="Corporate Template">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single Testimonial -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End final testimonial  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        <!-- Start Blog Area  -->
        <!-- <div class="rainbow-blog-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Latests News</span></h4>
                            <h2 class="title w-600 mb--20">Our Latest News.</h2>
                            <p class="description b1">We provide company and finance service for <br> startups and
                                company business.</p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a class="image" href="blog-details.html">
                                        <img class="w-100" src="assets/images/blog-grid/blog-01.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rainbow-meta-list">
                                        <li><a href="#">Irin Pervin</a></li>
                                        <li class="separator">/</li>
                                        <li>10 Dec 2021</li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details.html">Best Corporate Tips You
                                            Will
                                            Read This Year.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a class="image" href="blog-details.html">
                                        <img class="w-100" src="assets/images/blog-grid/blog-02.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rainbow-meta-list">
                                        <li><a href="#">Fatima Asrafy</a></li>
                                        <li class="separator">/</li>
                                        <li>30 Nov 2021</li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details.html">Should Fixing Corporate
                                            Take
                                            100 Steps.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mt--30" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">
                        <div class="rainbow-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a class="image" href="blog-details.html">
                                        <img class="w-100" src="assets/images/blog-grid/blog-03.jpg" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rainbow-meta-list">
                                        <li><a href="#">John Dou</a></li>
                                        <li class="separator">/</li>
                                        <li>12 Oct 2021</li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details.html">The Next 100 Things To
                                            Immediately Do About.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Blog Area  -->

        <!-- Start Call To Action Area  -->
        <div class="rainbow-callto-action-area rainbow-section-gapBottom">
            <div class="wrapper">
                <div class="rainbow-callto-action clltoaction-style-default style-5">
                    <div class="container">
                        <div class="row row--0 align-items-center content-wrapper theme-shape">
                            <div class="col-lg-12">
                                <div class="inner">
                                    <div class="content text-center">
                                        <h2 class="title">Ready to Elevate Your Digital Presence?</h2>
                                        <h6 class="subtitle">Partner with us for innovative web solutions and IT services.</h6>
                                        <div class="call-to-btn">
                                            <a class="btn-default btn-icon" href="contact.php">Get Started Today
                                                <i class="feather-arrow-right"></i>
                                            </a>
                                        </div>
                                        <p class="description mt--10">
                                            Contact us now to create a custom website, mobile application, or enterprise solution 
                                            that perfectly aligns with your business goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Call To Action Area  -->
        <div class="rainbow-accordion-area rainbow-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h4 class="subtitle "><span class="theme-gradient">Accordion</span></h4>
                                <h2 class="title w-600 mb--20">Ask Any Questions
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--35 row--20">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="rainbow-accordion-style rainbow-accordion-03 accordion">
                                <div class="accordion" id="accordionExamplec">
                                    <!-- FAQ 1 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1">
                                                What services does NS IT Solutions provide?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq1" class="accordion-collapse collapse show" aria-labelledby="headingFaq1" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                We deliver custom web development, full‑stack applications, mobile apps, AI solutions, e‑commerce platforms, and digital marketing & IT consulting aligned to your business goals.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 2 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                                How do I start a project with you?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Share your goals via our <a href="contact.php">contact</a> page; we run a discovery call, refine scope, send a proposal (features, timeline, pricing), then schedule a kickoff.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 3 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                                What is your development process?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Our lifecycle: Discovery → UX/UI & Architecture → Agile Sprints → QA & Security Review → Launch → Post‑launch optimization.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 4 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                                                Do we own the source code and IP?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Yes—ownership transfers per contract. You have repository access from project start and a structured handover at completion.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 5 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                                                How do you estimate cost and timeline?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                We break features into effort points (complexity, integrations, risk) then map to phased delivery—providing fixed or time & materials options.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 6 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq6" aria-expanded="false" aria-controls="collapseFaq6">
                                                What technologies do you use?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq6" class="accordion-collapse collapse" aria-labelledby="headingFaq6" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Common stacks: React / Next.js, Node.js, PHP (Laravel), Python for data & AI, Flutter / React Native for mobile, plus AWS/Azure cloud services.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 7 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq7" aria-expanded="false" aria-controls="collapseFaq7">
                                                How do you ensure security and quality?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq7" class="accordion-collapse collapse" aria-labelledby="headingFaq7" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Secure coding standards, dependency scans, environment isolation, role‑based access, layered testing (unit, integration, regression, performance) and review gates.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 8 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq8" aria-expanded="false" aria-controls="collapseFaq8">
                                                Do you provide post‑launch support?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq8" class="accordion-collapse collapse" aria-labelledby="headingFaq8" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Yes—support tiers cover incident response, updates, minor enhancements, performance reviews, and analytics insights to guide growth.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 9 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq9" aria-expanded="false" aria-controls="collapseFaq9">
                                                Can you work with existing or legacy systems?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq9" class="accordion-collapse collapse" aria-labelledby="headingFaq9" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                We audit the current stack (architecture, security, performance) then refactor or extend with minimal disruption and clear remediation priorities.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FAQ 10 -->
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="headingFaq10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq10" aria-expanded="false" aria-controls="collapseFaq10">
                                                How quickly can we begin?
                                            </button>
                                        </h2>
                                        <div id="collapseFaq10" class="accordion-collapse collapse" aria-labelledby="headingFaq10" data-bs-parent="#accordionExamplec">
                                            <div class="accordion-body card-body">
                                                Discovery call usually in 2–3 business days; proposal within a week of clarified requirements; kickoff immediately after agreement and initial deposit.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Schema for SEO -->
                    <script type="application/ld+json">
                    {
                      "@context": "https://schema.org",
                      "@type": "FAQPage",
                      "mainEntity": [
                        {"@type": "Question","name": "What services does NS IT Solutions provide?","acceptedAnswer": {"@type": "Answer","text": "Custom web development, full-stack apps, mobile, AI, e-commerce, digital marketing and consulting."}},
                        {"@type": "Question","name": "How do I start a project with you?","acceptedAnswer": {"@type": "Answer","text": "Contact us with goals; we run discovery, refine scope, send proposal, then kickoff."}},
                        {"@type": "Question","name": "What is your development process?","acceptedAnswer": {"@type": "Answer","text": "Discovery, UX/UI & Architecture, Agile Sprints, QA & Security, Launch, Optimization."}},
                        {"@type": "Question","name": "Do we own the source code and IP?","acceptedAnswer": {"@type": "Answer","text": "Yes, ownership transfers per contract with full repository access and handover."}},
                        {"@type": "Question","name": "How do you estimate cost and timeline?","acceptedAnswer": {"@type": "Answer","text": "Feature effort points mapped to phased delivery; fixed price or time & materials."}},
                        {"@type": "Question","name": "What technologies do you use?","acceptedAnswer": {"@type": "Answer","text": "React, Next.js, Node.js, Laravel, Python, Flutter/React Native, AWS/Azure."}},
                        {"@type": "Question","name": "How do you ensure security and quality?","acceptedAnswer": {"@type": "Answer","text": "Secure coding, dependency scans, isolated environments, layered testing, review gates."}},
                        {"@type": "Question","name": "Do you provide post-launch support?","acceptedAnswer": {"@type": "Answer","text": "Yes, tiers for incidents, updates, enhancements, performance and analytics reviews."}}
                      ]
                    }
                    </script>
                </div>
            </div>

        <!-- Start Footer Area  -->
        <footer class="rainbow-footer footer-style-default footer-style-1">
            <?php include('utils/footer.php') ?>
        </footer>
        <!-- End Footer Area  -->
        <!-- Start Copy Right Area  -->
        <div class="copyright-area copyright-style-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12 col-12">
                        <div class="copyright-left">
                            <?php include('utils/footerBar.php') ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12 col-12">
                        <div class="copyright-right text-center text-lg-end">
                            <p class="copyright-text">© NS IT Solutions 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area  -->
    </main>
    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>