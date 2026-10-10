<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>NS IT Solutions | CMMI Level 5 &amp; ISO 27001:2022 Certified | Government &amp; Enterprise IT Partner</title>
    <meta name="description" content="NS IT Solutions is a CMMI Level 5 &amp; ISO 27001:2022 certified IT company delivering e-Governance portals, enterprise software, and digital transformation for Government of India, PSUs, and enterprises. Empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO.">
    <meta name="keywords" content="government IT solutions, e-governance portal development, CMMI Level 5, ISO 27001, GeM empanelled, UP Electronics, NS IT Solutions, enterprise software India">

    <!-- Open Graph -->
    <meta property="og:title" content="NS IT Solutions | Government &amp; Enterprise IT Partner">
    <meta property="og:description" content="CMMI Level 5 &amp; ISO 27001:2022 certified. Empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO.">
    <meta property="og:type" content="website">

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
        /* ---------- Header / Global ---------- */
        .page-wrapper > .header-top-bar { color: #fff; background: #0f0f11; border-bottom-color: #303034; }
        .page-wrapper > .header-top-bar p,
        .page-wrapper > .header-top-bar p a,
        .page-wrapper > .header-top-bar .social-icon-wrapper a { color: #fff; }

        body .nsit-header.header-default {
            min-height: 96px; background: #fff !important;
            border-bottom: 1px solid #e5e7e9;
            box-shadow: 0 2px 12px rgba(25,30,35,.06);
        }
        body .nsit-header.header-default.sticky { background: #fff !important; }
        .nsit-header .logo a { height: 96px; line-height: normal; }
        .nsit-header .logo a img { width: 100%; max-width: 238px; max-height: 88px; object-fit: contain; }
        .nsit-header .mainmenu-nav .mainmenu > li > a { color: #17191d !important; }
        .nsit-header .mainmenu-nav .mainmenu > li > a:hover,
        .nsit-header .mainmenu-nav .mainmenu > li > a.active { color: #d9232e !important; }
        .popup-mobile-menu .mainmenu li.current > a { color: #d9232e !important; }
        .nsit-header .hamberger-button { color: #17191d; background: #f1f2f3; }
        .theme-mode-toggle {
            width: 40px; height: 40px; display: inline-flex; align-items: center; justify-content: center;
            margin-left: 12px; padding: 0; border: 1px solid #d9dcdf; border-radius: 50%;
            color: #17191d; background: #fff; cursor: pointer;
        }
        .theme-mode-toggle:hover, .theme-mode-toggle:focus-visible { color: #d9232e; border-color: #d9232e; }

        /* ---------- Partner Panels ---------- */
        .partner-logo-panel {
            min-height: 180px; display: flex; flex-direction: column; align-items: center;
            justify-content: center; gap: 14px; padding: 20px;
            background: #fff; border: 1px solid #e5e7e9; border-radius: 4px;
            transition: all .3s ease;
        }
        .partner-logo-panel:hover { border-color: #d9232e; box-shadow: 0 8px 24px rgba(217,35,46,.08); }
        .partner-logo-panel img {
            display: block; width: 100%; max-width: 300px; max-height: 80px;
            object-fit: contain; filter: grayscale(100%); opacity: .85; transition: all .3s ease;
        }
        .partner-logo-panel:hover img { filter: grayscale(0%); opacity: 1; }
        .partner-logo-panel h3 {
            margin: 0; color: #17191d; font-size: 16px; font-weight: 600;
            line-height: 1.45; text-align: center;
        }

        /* ---------- Hero Slider ---------- */
        .gov-hero-slider { position: relative; min-height: 720px; overflow: hidden; }
        .gov-hero-slide {
            position: relative; min-height: 720px;
            display: flex !important; align-items: center;
            background-size: cover; background-position: center; background-repeat: no-repeat;
        }
        .gov-hero-slide::before {
            content: ""; position: absolute; inset: 0; z-index: 1;
            background: linear-gradient(115deg, rgba(10,12,20,.94) 0%, rgba(15,18,30,.85) 55%, rgba(15,18,30,.55) 100%);
        }
        .gov-hero-slide .hero-inner {
            position: relative; z-index: 2;
            padding: 140px 0 100px; width: 100%;
        }
        .gov-hero-slide .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 6px 14px; margin-bottom: 22px;
            font-size: 12px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
            color: #fff; background: rgba(217,35,46,.18);
            border: 1px solid rgba(217,35,46,.5); border-radius: 100px;
        }
        .gov-hero-slide .hero-badge i { color: #d9232e; }
        .gov-hero-slide .title {
            font-size: clamp(2rem, 4.5vw, 3.4rem);
            line-height: 1.15; font-weight: 800; color: #fff;
            max-width: 960px; margin: 0 auto 22px;
        }
        .gov-hero-slide .title .accent { color: #d9232e; }
        .gov-hero-slide .description {
            max-width: 780px; margin: 0 auto 32px;
            font-size: 1.05rem; line-height: 1.7; color: #d3d7de;
        }
        .gov-hero-slide .hero-cta { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }

        .gov-hero-slider .slick-prev,
        .gov-hero-slider .slick-next {
            z-index: 10; width: 48px; height: 48px;
            background: rgba(255,255,255,.12); border: 1px solid rgba(255,255,255,.25);
            border-radius: 50%; transition: all .3s ease;
        }
        .gov-hero-slider .slick-prev:hover,
        .gov-hero-slider .slick-next:hover { background: #d9232e; border-color: #d9232e; }
        .gov-hero-slider .slick-prev { left: 30px; }
        .gov-hero-slider .slick-next { right: 30px; }
        .gov-hero-slider .slick-prev:before,
        .gov-hero-slider .slick-next:before { color: #fff; font-size: 18px; opacity: 1; }
        .gov-hero-slider .slick-dots { bottom: 30px; z-index: 10; }
        .gov-hero-slider .slick-dots li button:before { color: #fff; opacity: .5; font-size: 10px; }
        .gov-hero-slider .slick-dots li.slick-active button:before { color: #d9232e; opacity: 1; }

        /* ---------- Stats Strip ---------- */
        .stats-strip { background: #fff; border-bottom: 1px solid #e5e7e9; padding: 34px 0; }
        .stat-block { text-align: center; padding: 12px 8px; }
        .stat-block .stat-num {
            display: block; font-size: 2.4rem; font-weight: 800;
            color: #17191d; line-height: 1; letter-spacing: -.02em;
        }
        .stat-block .stat-num span { color: #d9232e; }
        .stat-block .stat-label {
            display: block; margin-top: 8px;
            font-size: .82rem; font-weight: 600; letter-spacing: .06em;
            text-transform: uppercase; color: #5b6169;
        }

        /* ---------- Certification Badge Row ---------- */
        .cert-badge-row {
            display: flex; flex-wrap: wrap; justify-content: center;
            gap: 14px; margin-top: 26px;
        }
        .cert-badge {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 8px 16px; font-size: 12px; font-weight: 700; letter-spacing: .06em;
            color: #17191d; background: #fff; border: 1px solid #e5e7e9; border-radius: 100px;
            text-transform: uppercase;
        }
        .cert-badge i { color: #d9232e; font-size: 14px; }

        /* ---------- Service Card Gov Tags ---------- */
        .service__style--1 .gov-tag {
            display: inline-block; margin-top: 10px; padding: 3px 10px;
            font-size: 11px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase;
            color: #d9232e; background: rgba(217,35,46,.08);
            border: 1px solid rgba(217,35,46,.25); border-radius: 100px;
        }

        /* ---------- Misc ---------- */
        .client-info .subtitle { color: #8a919b; }

        @media only screen and (max-width: 767px) {
            body .nsit-header.header-default { min-height: 78px; }
            .nsit-header .logo a { height: 78px; }
            .nsit-header .logo a img { max-height: 70px; }
            .gov-hero-slider { min-height: 560px; }
            .gov-hero-slide { min-height: 560px; }
            .gov-hero-slide .hero-inner { padding: 100px 0 80px; }
            .gov-hero-slide .title { font-size: 1.6rem; }
            .gov-hero-slide .description { font-size: .92rem; }
            .gov-hero-slider .slick-prev { left: 10px; }
            .gov-hero-slider .slick-next { right: 10px; }
            .stat-block .stat-num { font-size: 1.6rem; }
            .stat-block .stat-label { font-size: .72rem; }
        }
    </style>
</head>

<body>
    <main class="page-wrapper">

        <!-- Header Top Bar -->
        <?php include('utils/notification.php') ?>

        <!-- Header -->
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
                            <?php include('utils/payNow.php') ?>

                            <button type="button" class="theme-mode-toggle" data-theme-toggle aria-label="Switch to light mode" title="Switch to light mode">
                                <i class="feather-sun" aria-hidden="true"></i>
                            </button>

                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="popup-mobile-menu">
            <?php include('utils/mobileMenu.php') ?>
        </div>

        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>

        <!-- ===================================================== -->
        <!-- HERO SLIDER                                             -->
        <!-- ===================================================== -->
        <section class="gov-hero-slider" aria-label="Hero highlights">
            <div class="hero-slider-activation">

                <!-- Slide 1 : Government / Enterprise -->
                <div class="gov-hero-slide" style="background-image:url('assets/images/hero/hero-gov-01.jpg');">
                    <div class="container">
                        <div class="hero-inner text-center">
                            <span class="hero-badge">
                                <i class="feather-shield"></i> CMMI Level 5 &amp; ISO 27001:2022 Certified
                            </span>
                            <h1 class="title">
                                Empowering <span class="accent">Government &amp; Enterprise</span> with Secure, Scalable IT Solutions
                            </h1>
                            <p class="description">
                                We deliver e-Governance portals, enterprise software, and digital transformation
                                for public sector undertakings and enterprises across India.
                            </p>
                            <div class="hero-cta">
                                <a class="btn-default btn-medium round btn-icon" href="contact.php">
                                    Request a Consultation <i class="icon feather-arrow-right"></i>
                                </a>
                                <a class="btn-default btn-medium btn-border round btn-icon" href="#services">
                                    Explore Our Services <i class="icon feather-arrow-right"></i>
                                </a>
                            </div>
                            <div class="cert-badge-row">
                                <span class="cert-badge"><i class="feather-award"></i> ISO 27001:2022</span>
                                <span class="cert-badge"><i class="feather-award"></i> CMMI Level 5</span>
                                <span class="cert-badge"><i class="feather-check-circle"></i> GeM Empanelled</span>
                                <span class="cert-badge"><i class="feather-check-circle"></i> UP Electronics Empanelled</span>
                                <span class="cert-badge"><i class="feather-check-circle"></i> UPDSCO Empanelled</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 : Citizen-Centric e-Governance -->
                <div class="gov-hero-slide" style="background-image:url('assets/images/hero/hero-gov-02.jpg');">
                    <div class="container">
                        <div class="hero-inner text-center">
                            <span class="hero-badge">
                                <i class="feather-globe"></i> Digital India · e-Governance Ready
                            </span>
                            <h1 class="title">
                                Building <span class="accent">Citizen-Centric</span> Digital Platforms for Public Services
                            </h1>
                            <p class="description">
                                From scheme management and grievance redressal to secure citizen data platforms —
                                we help departments deliver transparent, accessible digital services.
                            </p>
                            <div class="hero-cta">
                                <a class="btn-default btn-medium round btn-icon" href="contact.php">
                                    Discuss Your Project <i class="icon feather-arrow-right"></i>
                                </a>
                                <a class="btn-default btn-medium btn-border round btn-icon" href="#services">
                                    View Our Capabilities <i class="icon feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 : Security & Compliance -->
                <div class="gov-hero-slide" style="background-image:url('assets/images/hero/hero-gov-03.jpg');">
                    <div class="container">
                        <div class="hero-inner text-center">
                            <span class="hero-badge">
                                <i class="feather-lock"></i> ISO 27001:2022 Aligned Security
                            </span>
                            <h1 class="title">
                                Secure by Design. <span class="accent">Compliant by Default.</span>
                            </h1>
                            <p class="description">
                                Every solution we build follows ISO 27001:2022 security standards, CMMI Level 5
                                processes, and government IT guidelines — protecting sensitive data at every layer.
                            </p>
                            <div class="hero-cta">
                                <a class="btn-default btn-medium round btn-icon" href="contact.php">
                                    Talk to a Security Expert <i class="icon feather-arrow-right"></i>
                                </a>
                                <a class="btn-default btn-medium btn-border round btn-icon" href="#credentials">
                                    View Certifications <i class="icon feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ===================================================== -->
        <!-- STATS STRIP — FIXED NUMBERS                             -->
        <!-- ===================================================== -->
        <section class="stats-strip" aria-label="Company Impact">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="5">5</span><span>+</span></span>
                            <span class="stat-label">Years of Experience</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="10">10</span><span>+</span></span>
                            <span class="stat-label">Projects Delivered</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="6">6</span><span>+</span></span>
                            <span class="stat-label">Government Portals</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="5">5</span><span>+</span></span>
                            <span class="stat-label">Active Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="100">100</span><span>%</span></span>
                            <span class="stat-label">Compliance Adherence</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num"><span class="counter" data-count="24">24</span><span>/7</span></span>
                            <span class="stat-label">Support Availability</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CREDENTIALS -->
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

        <!-- CLIENTS -->
        <section class="rainbow-brand-area ptb--40 bg-color-blackest" aria-labelledby="client-partners-title">
            <div class="container">
                <div class="row mb--30">
                    <div class="col-12 text-center">
                        <h4 class="subtitle"><span class="theme-gradient">Trusted By</span></h4>
                        <h2 id="client-partners-title" class="title w-600">Government &amp; Public Sector Undertakings</h2>
                    </div>
                </div>
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/UPSIDA.jpeg" alt="Uttar Pradesh State Industrial Development Authority logo" loading="lazy">
                            <h3>Uttar Pradesh State Industrial Development Authority (UPSIDA)</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/uprnn.jpeg" alt="Uttar Pradesh Rajkiya Nirman Nigam Limited logo" loading="lazy">
                            <h3>Uttar Pradesh Rajkiya Nirman Nigam Limited</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/upkvib.jpeg" alt="Uttar Pradesh Khadi and Village Industries Board logo" loading="lazy">
                            <h3>Uttar Pradesh Khadi and Village Industries Board (UPKVIB)</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/state-bridge-corporation.jpeg" alt="State Bridge Corporation Ltd logo" loading="lazy">
                            <h3>State Bridge Corporation Ltd</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="partner-logo-panel">
                            <img src="assets/images/partners/up-electronics.png" alt="U.P. Electronics Corporation Limited logo" loading="lazy">
                            <h3>Uttar Pradesh Electronics Corporation Limited</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="rbt-separator-mid">
            <div class="container"><hr class="rbt-separator m-0"></div>
        </div>

        <!-- ABOUT -->
        <div id="about" class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">About Us</span></h4>
                            <h2 class="title w-600 mb--20 mt--20">About NS IT Solutions</h2>
                            <p class="description b1 mb--30">
                                Founded in 2021 and headquartered in Lucknow, Uttar Pradesh, NS IT Solutions
                                partners with government departments, public sector undertakings, and enterprises
                                across India to deliver reliable digital transformation.
                            </p>
                            <div class="row g-4 text-start">
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Vision</h3>
                                        <p class="description b1 mb--0">
                                            To make secure, dependable technology accessible to organizations and
                                            help them deliver better citizen-centric services through digital
                                            transformation.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Mission</h3>
                                        <p class="description b1 mb--0">
                                            To build and support practical software solutions focused on information
                                            security, quality, and long-term partnership — aligned with the
                                            Digital India vision.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rbt-separator-mid">
            <div class="container"><hr class="rbt-separator m-0"></div>
        </div>

        <!-- SERVICES -->
        <div id="services" class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Our Services</span></h4>
                            <h2 class="title w-600 mb--20">IT Services for Government,<br>PSUs &amp; Enterprises</h2>
                            <p class="description b1">
                                From e-Governance portals to enterprise software and secure cloud operations,
                                we support end-to-end execution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">

                    <!-- 1. e-Governance -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-briefcase"></i></div>
                            <div class="content">
                                <h4 class="title w-600">e-Governance &amp; Citizen Portals</h4>
                                <p class="description b1 color-gray mb--0">
                                    Secure portals for scheme management, grievance redressal, and citizen
                                    service delivery with role-based access and audit trails.
                                </p>
                                <span class="gov-tag">Government Focus</span>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Enterprise Software -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-codepen"></i></div>
                            <div class="content">
                                <h4 class="title w-600">Enterprise Software Development</h4>
                                <p class="description b1 color-gray mb--0">
                                    Full-stack, scalable applications for government departments and PSUs — from
                                    front-end to back-end integration.
                                </p>
                                <span class="gov-tag">Enterprise Grade</span>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Mobile Apps -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-smartphone"></i></div>
                            <div class="content">
                                <h4 class="title w-600">Mobile App Development</h4>
                                <p class="description b1 color-gray mb--0">
                                    Citizen-facing iOS &amp; Android applications with secure authentication,
                                    offline capability, and multi-language support.
                                </p>
                                <span class="gov-tag">m-Governance Ready</span>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Digital Transformation -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-shopping-cart"></i></div>
                            <div class="content">
                                <h4 class="title w-600">Digital Transformation &amp; e-Commerce</h4>
                                <p class="description b1 color-gray mb--0">
                                    Digitize legacy workflows, automate processes, and build secure transaction
                                    platforms for public and enterprise use.
                                </p>
                                <span class="gov-tag">Process Automation</span>
                            </div>
                        </div>
                    </div>

                    <!-- 5. AI & Data Analytics -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-cpu"></i></div>
                            <div class="content">
                                <h4 class="title w-600">AI, Data Analytics &amp; Governance</h4>
                                <p class="description b1 color-gray mb--0">
                                    AI/ML for data-driven governance, predictive analytics, and automated
                                    decision support systems.
                                </p>
                                <span class="gov-tag">Data-Driven Governance</span>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Cybersecurity -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-shield"></i></div>
                            <div class="content">
                                <h4 class="title w-600">Cybersecurity &amp; Compliance</h4>
                                <p class="description b1 color-gray mb--0">
                                    Security audits, secure hosting, vulnerability assessment, and compliance
                                    support for sensitive government data.
                                </p>
                                <span class="gov-tag">ISO 27001 Aligned</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- CASE STUDIES — HIDDEN -->
        <!--
        <section id="case-studies" class="rainbow-portfolio-area rainbow-section-gap" aria-labelledby="case-studies-title">
            ... [existing case studies markup] ...
        </section>
        -->

        <!-- WORKING PROCESS -->
        <div class="rainbow-timeline-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Working Process</span></h4>
                            <h2 class="title w-600 mb--20">Our Proven Delivery Process</h2>
                            <p class="description b1">
                                A systematic, ISO-aligned approach tailored to the unique needs of government
                                and enterprise clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rainbow-timeline-wrapper timeline-style-one position-relative">
                            <div class="timeline-line"></div>

                            <!-- Step 1 -->
                            <div class="single-timeline mt--50">
                                <div class="timeline-dot"><div class="time-line-circle"></div></div>
                                <div class="single-content">
                                    <div class="inner">
                                        <div class="row row--30 align-items-center">
                                            <div class="col-lg-12 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-1</span>
                                                    <h2 class="title">Understanding Your Business Needs</h2>
                                                    <p class="description">
                                                        We begin with a deep dive into your departmental goals,
                                                        compliance requirements, and stakeholder expectations —
                                                        so the solution aligns with your public mandate.
                                                    </p>
                                                    <div class="row row--30">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Requirement Analysis</h5>
                                                                <p>We gather and analyze all essential functional and non-functional requirements.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Consultation</h5>
                                                                <p>Collaborate with our experts and your stakeholders to define the project roadmap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="read-morebtn">
                                                        <a class="btn-default btn-large round" href="contact.php"><span>Get Started Now</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="single-timeline mt--50">
                                <div class="timeline-dot"><div class="time-line-circle"></div></div>
                                <div class="single-content">
                                    <div class="inner">
                                        <div class="row row--30 align-items-center">
                                            <div class="col-lg-12 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-2</span>
                                                    <h2 class="title">Design, Development &amp; Deployment</h2>
                                                    <p class="description">
                                                        Our team designs and develops scalable solutions adhering to
                                                        CMMI Level 5 processes, ISO 27001 security standards, and
                                                        government IT guidelines.
                                                    </p>
                                                    <div class="row row--30">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Creative Design</h5>
                                                                <p>User-friendly, accessible designs aligned with your brand and GIGW guidelines.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Agile Development</h5>
                                                                <p>Secure, high-performance solutions delivered with rigorous QA gates.</p>
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
                </div>
            </div>
        </div>

        <!-- TESTIMONIAL — HIDDEN -->
        <!--
        <div class="rainbow-testimonial-area rainbow-section-gap">
            ... [existing testimonial markup] ...
        </div>
        -->

        <!-- CTA -->
        <div class="rainbow-callto-action-area rainbow-section-gapBottom">
            <div class="wrapper">
                <div class="rainbow-callto-action clltoaction-style-default style-5">
                    <div class="container">
                        <div class="row row--0 align-items-center content-wrapper theme-shape">
                            <div class="col-lg-12">
                                <div class="inner">
                                    <div class="content text-center">
                                        <h2 class="title">Ready to Digitize Your Department or Enterprise?</h2>
                                        <h6 class="subtitle">Partner with a CMMI Level 5 &amp; ISO 27001:2022 certified IT organization.</h6>
                                        <div class="call-to-btn">
                                            <a class="btn-default btn-icon" href="contact.php">Request a Proposal
                                                <i class="feather-arrow-right"></i>
                                            </a>
                                        </div>
                                        <p class="description mt--10">
                                            Discuss e-Governance portals, enterprise software, mobile applications,
                                            or secure cloud solutions aligned with your organizational goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ -->
        <div class="rainbow-accordion-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">FAQ</span></h4>
                            <h2 class="title w-600 mb--20">Frequently Asked Questions</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--35 row--20">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="rainbow-accordion-style rainbow-accordion-03 accordion">
                            <div class="accordion" id="accordionExamplec">

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="true" aria-controls="collapseFaq1">
                                            Are you empanelled with GeM and UP Electronics Corporation?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq1" class="accordion-collapse collapse show" aria-labelledby="headingFaq1" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Yes. NS IT Solutions is empanelled with UP Electronics Corporation Ltd,
                                            GeM (Government e-Marketplace), and UPDSCO — enabling us to participate
                                            in government tenders and serve public sector organizations directly.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            What services do you provide for government departments?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            We deliver e-Governance portals, citizen service platforms, mobile
                                            applications, enterprise software, AI-driven analytics, and cybersecurity
                                            solutions — along with onsite deployment, training, AMC, and dedicated
                                            resource models as per tender requirements.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            How do you ensure data security and regulatory compliance?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            We follow ISO 27001:2022 aligned practices — encryption, role-based access
                                            control, audit logging, secure hosting, and data localization compliance
                                            as per government guidelines.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                                            What is your development and delivery process?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Discovery → UX/UI &amp; Architecture → Agile Sprints → QA &amp; Security
                                            Review → Launch → Post-launch optimization, all governed under CMMI
                                            Level 5 processes.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq5" aria-expanded="false" aria-controls="collapseFaq5">
                                            Do we own the source code and IP of the delivered solution?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq5" class="accordion-collapse collapse" aria-labelledby="headingFaq5" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Yes — ownership transfers per contract. You receive repository access
                                            from project start and a structured handover at completion.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "FAQPage",
                  "mainEntity": [
                    {"@type": "Question","name": "Are you empanelled with GeM and UP Electronics Corporation?","acceptedAnswer": {"@type": "Answer","text": "Yes. NS IT Solutions is empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO for government IT services."}},
                    {"@type": "Question","name": "What services do you provide for government departments?","acceptedAnswer": {"@type": "Answer","text": "e-Governance portals, citizen service platforms, mobile apps, enterprise software, AI analytics, cybersecurity, plus onsite support and AMC."}},
                    {"@type": "Question","name": "How do you ensure data security and regulatory compliance?","acceptedAnswer": {"@type": "Answer","text": "ISO 27001:2022 aligned practices: encryption, RBAC, audit logging, secure hosting, and data localization compliance."}},
                    {"@type": "Question","name": "What is your development and delivery process?","acceptedAnswer": {"@type": "Answer","text": "Discovery, UX/UI & Architecture, Agile Sprints, QA & Security Review, Launch, Post-launch optimization under CMMI Level 5."}},
                    {"@type": "Question","name": "Do we own the source code and IP of the delivered solution?","acceptedAnswer": {"@type": "Answer","text": "Yes, ownership transfers per contract with full repository access and structured handover."}}
                  ]
                }
                </script>
            </div>
        </div>

        <!-- Footer -->
        <footer class="rainbow-footer footer-style-default footer-style-1">
            <?php include('utils/footer.php') ?>
        </footer>

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

    </main>

    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>

    <!-- JS ============================================ -->
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

    <!-- Hero Slider Init -->
    <script>
    jQuery(document).ready(function($){
        if ($('.hero-slider-activation').length) {
            $('.hero-slider-activation').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                fade: true,
                arrows: true,
                dots: true,
                infinite: true,
                pauseOnHover: false,
                speed: 900,
                cssEase: 'ease-in-out',
                adaptiveHeight: false
            });
        }
    });
    </script>

    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "NS IT Solutions",
      "url": "https://nsit.org.in",
      "logo": "https://nsit.org.in/assets/images/logo/nsit-logo.png",
      "description": "CMMI Level 5 & ISO 27001:2022 certified IT company delivering e-Governance portals, enterprise software, and digital transformation for Government of India, PSUs, and enterprises.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Gomti Nagar",
        "addressRegion": "Uttar Pradesh",
        "addressCountry": "IN"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Sales",
        "email": "info@nsit.org.in",
        "areaServed": "IN"
      }
    }
    </script>
</body>

</html>