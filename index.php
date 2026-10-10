<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>NS IT Solutions | CMMI Level 5 & ISO 27001:2022 Certified | Government & Enterprise IT Partner</title>
    <meta name="description" content="NS IT Solutions is a CMMI Level 5 & ISO 27001:2022 certified IT company delivering e-Governance portals, enterprise software, and digital transformation for Government of India, PSUs, and enterprises. Empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO.">
    <meta name="keywords" content="government IT solutions, e-governance portal development, CMMI Level 5, ISO 27001, GeM empanelled, UP Electronics, NS IT Solutions, enterprise software India">

    <!-- Open Graph -->
    <meta property="og:title" content="NS IT Solutions | Government & Enterprise IT Partner">
    <meta property="og:description" content="CMMI Level 5 & ISO 27001:2022 certified. Empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO.">
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
        /* ---------- Existing tweaks (preserved) ---------- */
        .page-wrapper > .header-top-bar { color: #fff; background: #0f0f11; border-bottom-color: #303034; }
        .page-wrapper > .header-top-bar p, .page-wrapper > .header-top-bar p a,
        .page-wrapper > .header-top-bar .social-icon-wrapper a { color: #fff; }

        body .nsit-header.header-default {
            min-height: 96px; background: #fff !important;
            border-bottom: 1px solid #e5e7e9; box-shadow: 0 2px 12px rgba(25,30,35,.06);
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

        .case-study-card {
            height: 100%; overflow: hidden;
            border: 1px solid rgba(255,255,255,.12); border-radius: 4px; background: #151517;
        }
        .case-study-card img { display: block; width: 100%; aspect-ratio: 4/3; object-fit: cover; }
        .case-study-card .content { padding: 22px 24px 24px; }
        .case-study-card .category {
            display: block; margin-bottom: 8px; color: #d9232e;
            font-size: 12px; font-weight: 700;
        }
        body.active-light-mode .case-study-card { border-color: #e5e7e9; background: #fff; }

        @media only screen and (max-width: 767px) {
            body .nsit-header.header-default { min-height: 78px; }
            .nsit-header .logo a { height: 78px; }
            .nsit-header .logo a img { max-height: 70px; }
        }

        /* ---------- NEW: Hero / Government-Focused Styles ---------- */
        .gov-hero {
            position: relative;
            min-height: 720px;
            display: flex;
            align-items: center;
            background:
                linear-gradient(115deg, rgba(10,12,20,.92) 0%, rgba(15,18,30,.85) 55%, rgba(15,18,30,.55) 100%),
                url('assets/images/bg/bg-image-3.jpg') center/cover no-repeat;
        }
        .gov-hero .hero-inner { padding: 140px 0 100px; }
        .gov-hero .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 6px 14px; margin-bottom: 22px;
            font-size: 12px; font-weight: 700; letter-spacing: .12em; text-transform: uppercase;
            color: #fff; background: rgba(217,35,46,.18);
            border: 1px solid rgba(217,35,46,.5); border-radius: 100px;
        }
        .gov-hero .hero-badge i { color: #d9232e; }
        .gov-hero .title {
            font-size: clamp(2rem, 4.5vw, 3.4rem);
            line-height: 1.15; font-weight: 800; color: #fff;
            max-width: 960px; margin: 0 auto 22px;
        }
        .gov-hero .title .accent { color: #d9232e; }
        .gov-hero .description {
            max-width: 780px; margin: 0 auto 32px;
            font-size: 1.05rem; line-height: 1.7; color: #d3d7de;
        }
        .gov-hero .hero-cta { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; }

        /* ---------- NEW: Stats Strip ---------- */
        .stats-strip {
            background: #fff; border-bottom: 1px solid #e5e7e9;
            padding: 34px 0;
        }
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

        /* ---------- NEW: Certification Badge Row ---------- */
        .cert-badge-row { display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 26px; }
        .cert-badge {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 8px 16px; font-size: 12px; font-weight: 700; letter-spacing: .06em;
            color: #17191d; background: #fff; border: 1px solid #e5e7e9; border-radius: 100px;
            text-transform: uppercase;
        }
        .cert-badge i { color: #d9232e; font-size: 14px; }

        /* ---------- NEW: Government Service Card Tags ---------- */
        .service__style--1 .gov-tag {
            display: inline-block; margin-top: 10px; padding: 3px 10px;
            font-size: 11px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase;
            color: #d9232e; background: rgba(217,35,46,.08);
            border: 1px solid rgba(217,35,46,.25); border-radius: 100px;
        }

        /* ---------- NEW: Case Study Card - Result Highlight ---------- */
        .case-study-card .result-line {
            display: block; margin-top: 12px; padding-top: 12px;
            border-top: 1px dashed rgba(255,255,255,.15);
            color: #2ecc71; font-size: 13px; font-weight: 700;
        }
        body.active-light-mode .case-study-card .result-line {
            border-top-color: #e5e7e9; color: #1e9e5a;
        }

        /* ---------- NEW: Testimonial Meta ---------- */
        .client-info .subtitle { color: #8a919b; }

        /* ---------- NEW: Government-Focused Section Backgrounds ---------- */
        .gov-section {
            background: linear-gradient(180deg, #0d0f16 0%, #101319 100%);
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
        <!-- End Header Area  -->

        <div class="popup-mobile-menu">
            <?php include('utils/mobileMenu.php') ?>
        </div>

        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>

        <!-- ===================================================== -->
        <!-- HERO — GOVERNMENT / ENTERPRISE POSITIONING (UPDATED)   -->
        <!-- ===================================================== -->
        <section class="gov-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-inner text-center">
                            <span class="hero-badge">
                                <i class="feather-shield"></i> CMMI Level 5 &amp; ISO 27001:2022 Certified
                            </span>
                            <h1 class="title">
                                Empowering <span class="accent">Government &amp; Enterprise</span> with Secure, Scalable IT Solutions
                            </h1>
                            <p class="description">
                                NS IT Solutions is a CMMI Level 5 &amp; ISO 27001:2022 certified organization delivering
                                e-Governance portals, enterprise software, and digital transformation for public sector
                                undertakings and enterprises across India — empanelled with <strong>UP Electronics Corporation Ltd</strong>,
                                <strong>GeM</strong>, and <strong>UPDSCO</strong>.
                            </p>
                            <div class="hero-cta">
                                <a class="btn-default btn-medium round btn-icon" href="contact.php">
                                    Request a Consultation <i class="icon feather-arrow-right"></i>
                                </a>
                                <a class="btn-default btn-medium btn-border round btn-icon" href="#services">
                                    Explore Our Services <i class="icon feather-arrow-right"></i>
                                </a>
                            </div>

                            <!-- NEW: Inline certification badges -->
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
            </div>
        </section>

        <!-- ===================================================== -->
        <!-- NEW: STATS / IMPACT STRIP (OTPL-inspired)               -->
        <!-- ===================================================== -->
        <section class="stats-strip" aria-label="Company Impact">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="25">0<span>+</span></span>
                            <span class="stat-label">Years Combined Experience</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="500">0<span>+</span></span>
                            <span class="stat-label">Projects Delivered</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="50">0<span>+</span></span>
                            <span class="stat-label">Government Portals</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="40">0<span>+</span></span>
                            <span class="stat-label">Active Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="100">0<span>%</span></span>
                            <span class="stat-label">Compliance Adherence</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="stat-block">
                            <span class="stat-num" data-count="24">0<span>/7</span></span>
                            <span class="stat-label">Support Availability</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================== -->
        <!-- CREDENTIALS (preserved)                                 -->
        <!-- ===================================================== -->
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

        <!-- ===================================================== -->
        <!-- CLIENTS (grayscale logos + gov label)                   -->
        <!-- ===================================================== -->
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

        <div class="rbt-separator-mid">
            <div class="container"><hr class="rbt-separator m-0"></div>
        </div>

        <!-- ===================================================== -->
        <!-- ABOUT (Vision + Mission + Location + Stack)             -->
        <!-- ===================================================== -->
        <div id="about" class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">About Us</span></h4>
                            <h2 class="title w-600 mb--20 mt--20">About NS IT Solutions</h2>
                            <p class="description b1 mb--30">
                                Headquartered in Lucknow, Uttar Pradesh, NS IT Solutions is a CMMI Level 5 &amp; ISO 27001:2022
                                certified IT organization delivering digital transformation services for government
                                departments, public sector undertakings, and enterprises across India.
                            </p>
                            <div class="row g-4 text-start">
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Vision</h3>
                                        <p class="description b1 mb--0">
                                            To make secure, dependable technology accessible to organizations and help
                                            them deliver better citizen-centric services through digital transformation.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="h-100 p-4 rbt-border radius bg-color-blackest">
                                        <h3 class="title w-600 mb--15">Our Mission</h3>
                                        <p class="description b1 mb--0">
                                            To build and support practical software solutions with a focus on information
                                            security, quality, and long-term partnership — aligned with the Digital India
                                            vision.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- NEW: Tech stack chips -->
                            <div class="row mt--30">
                                <div class="col-12 text-center">
                                    <p class="b3 color-gray mb--15"><strong>Technology Stack:</strong></p>
                                    <div class="cert-badge-row" style="margin-top:0;">
                                        <span class="cert-badge">Java</span>
                                        <span class="cert-badge">.NET</span>
                                        <span class="cert-badge">PHP / Laravel</span>
                                        <span class="cert-badge">Node.js</span>
                                        <span class="cert-badge">React</span>
                                        <span class="cert-badge">Next.js</span>
                                        <span class="cert-badge">Python</span>
                                        <span class="cert-badge">Flutter</span>
                                        <span class="cert-badge">AWS / Azure</span>
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

        <!-- ===================================================== -->
        <!-- SERVICES (re-titled with government focus)              -->
        <!-- ===================================================== -->
        <div id="services" class="rainbow-service-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Our Services</span></h4>
                            <h2 class="title w-600 mb--20">IT Services for Government,<br>PSUs &amp; Enterprises</h2>
                            <p class="description b1">
                                From e-Governance portals and citizen service platforms to enterprise software and secure
                                cloud operations — we support end-to-end execution.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- 1. e-Governance & Citizen Portals (NEW) -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-briefcase"></i></div>
                            <div class="content">
                                <h4 class="title w-600">e-Governance &amp; Citizen Portals</h4>
                                <p class="description b1 color-gray mb--0">
                                    Secure, accessible portals for government departments — scheme management, grievance
                                    redressal, and citizen service delivery.
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
                                    Citizen-facing iOS &amp; Android applications with secure authentication, offline
                                    capability, and multi-language support.
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
                                    Leverage AI/ML for data-driven governance, predictive analytics, and automated
                                    decision support systems.
                                </p>
                                <span class="gov-tag">Data-Driven Governance</span>
                            </div>
                        </div>
                    </div>

                    <!-- 6. Cybersecurity & Compliance -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate">
                        <div class="service service__style--1 bg-color-blackest radius text-center rbt-border">
                            <div class="icon"><i class="feather-shield"></i></div>
                            <div class="content">
                                <h4 class="title w-600">Cybersecurity &amp; Compliance</h4>
                                <p class="description b1 color-gray mb--0">
                                    ISO 27001-aligned security audits, secure hosting, vulnerability assessment, and
                                    compliance support for sensitive data.
                                </p>
                                <span class="gov-tag">ISO 27001 Aligned</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Service Area -->

        <!-- ===================================================== -->
        <!-- CASE STUDIES (Challenge → Solution → Result)            -->
        <!-- ===================================================== -->
        <section id="case-studies" class="rainbow-portfolio-area rainbow-section-gap" aria-labelledby="case-studies-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subtitle"><span class="theme-gradient">Selected Work</span></h4>
                            <h2 id="case-studies-title" class="title w-600 mb--20">Government &amp; Enterprise Case Studies</h2>
                            <p class="description b1">
                                A snapshot of our delivery impact across public sector and enterprise engagements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt--10">
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-01.jpg" alt="Government application development case study">
                            <div class="content">
                                <span class="category">CASE STUDY 01 · GOVERNMENT</span>
                                <h3 class="title w-600 mb--10">e-Governance Application Development</h3>
                                <p class="description b1 mb--0">
                                    <strong>Challenge:</strong> Manual, paper-based workflow across district offices.<br>
                                    <strong>Solution:</strong> Centralized web portal with role-based access and audit trails.
                                </p>
                                <span class="result-line">➜ Reduced processing time by 60%</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-02.jpg" alt="Digital transformation case study">
                            <div class="content">
                                <span class="category">CASE STUDY 02 · PSU</span>
                                <h3 class="title w-600 mb--10">Digital Transformation for PSU</h3>
                                <p class="description b1 mb--0">
                                    <strong>Challenge:</strong> Disconnected legacy systems across departments.<br>
                                    <strong>Solution:</strong> Unified digital platform with real-time dashboards.
                                </p>
                                <span class="result-line">➜ 3x faster reporting cycle</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <article class="case-study-card">
                            <img src="assets/images/portfolio/portfolio-03.jpg" alt="Enterprise solution case study">
                            <div class="content">
                                <span class="category">CASE STUDY 03 · ENTERPRISE</span>
                                <h3 class="title w-600 mb--10">Enterprise Resource Platform</h3>
                                <p class="description b1 mb--0">
                                    <strong>Challenge:</strong> Fragmented resource tracking and compliance gaps.<br>
                                    <strong>Solution:</strong> Secure ERP module with ISO-aligned data controls.
                                </p>
                                <span class="result-line">➜ 100% audit compliance achieved</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <div class="rbt-separator-mid">
            <div class="container"><hr class="rbt-separator m-0"></div>
        </div>

        <!-- ===================================================== -->
        <!-- WORKING PROCESS (duplicate CTA removed)                 -->
        <!-- ===================================================== -->
        <div class="rainbow-timeline-area rainbow-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Working Process</span></h4>
                            <h2 class="title w-600 mb--20">Our Proven Delivery Process</h2>
                            <p class="description b1">
                                We deliver innovative IT solutions by following a systematic, ISO-aligned approach
                                tailored to the unique needs of government and enterprise clients.
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
                                            <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-1</span>
                                                    <h2 class="title">Understanding Your Business Needs</h2>
                                                    <p class="description">
                                                        Our process begins with a deep dive into your departmental goals,
                                                        compliance requirements, and stakeholder expectations. This enables
                                                        us to craft a solution aligned with your public mandate.
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
                                <div class="timeline-dot"><div class="time-line-circle"></div></div>
                                <div class="single-content">
                                    <div class="inner">
                                        <div class="row row--30 align-items-center">
                                            <div class="col-lg-6 mt_md--40 mt_sm--40 order-2 order-lg-1">
                                                <div class="content">
                                                    <span class="date-of-timeline">Step-2</span>
                                                    <h2 class="title">Design, Development &amp; Deployment</h2>
                                                    <p class="description">
                                                        Our team designs and develops innovative, scalable solutions
                                                        adhering to CMMI Level 5 processes, ISO 27001 security standards,
                                                        and government IT guidelines.
                                                    </p>
                                                    <div class="row row--30">
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Creative Design</h5>
                                                                <p>Crafting user-friendly, accessible designs that align with your brand and GIGW guidelines.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="working-list">
                                                                <h5 class="working-title">Agile Development</h5>
                                                                <p>Developing secure, high-performance solutions with rigorous QA gates.</p>
                                                            </div>
                                                        </div>
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
        <!-- End Timeline -->

        <!-- ===================================================== -->
        <!-- TESTIMONIALS (slider-ready, gov titles)                 -->
        <!-- ===================================================== -->
        <div class="rainbow-testimonial-area rainbow-section-gap">
            <div class="container">
                <div class="row mb--20">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle"><span class="theme-gradient">Client Feedback</span></h4>
                            <h2 class="title w-600 mb--20">Trusted by Government &amp; Public Institutions</h2>
                            <p class="description b1">
                                Supporting Indian organizations with dependable digital services. Empanelled with
                                UP Electronics Corporation Ltd, GeM, and UPDSCO.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row rainbow-slick-dot rainbow-slick-arrow testimonial-activation">
                    <div class="coll-lg-12">
                        <div class="testimonial-style-two" tabindex="-1" style="width:100%; display:inline-block;">
                            <div class="row align-items-center row--20">
                                <div class="order-2 order-md-1 col-lg-6 col-md-8 offset-lg-1">
                                    <div class="content mt_sm--40">
                                        <span class="form">INDIA · PUBLIC SECTOR</span>
                                        <p class="description">
                                            NS IT Solutions provides reliable and timely website support for DumIndia,
                                            ISUW, and IndiaSmartGrid, ensuring smooth operations and quick issue
                                            resolution. Their professional and responsive approach makes them a trusted
                                            digital support partner for our public-facing platforms.
                                        </p>
                                        <div class="client-info">
                                            <h4 class="title">Reena Suri</h4>
                                            <h6 class="subtitle">Executive Director · India Smart Grid Forum</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1 order-md-2 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <img class="w-100" src="assets/images/testimonial/testimonial-dark-03.jpg" alt="Client testimonial">
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

        <!-- ===================================================== -->
        <!-- CTA                                                     -->
        <!-- ===================================================== -->
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
                                            Contact us to discuss e-Governance portals, enterprise software, mobile
                                            applications, or secure cloud solutions aligned with your organizational goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================================================== -->
        <!-- FAQ (government-focused questions added)                -->
        <!-- ===================================================== -->
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

                                <!-- NEW: GeM question first -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaqGov1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqGov1" aria-expanded="true" aria-controls="collapseFaqGov1">
                                            Are you empanelled with GeM and UP Electronics Corporation?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqGov1" class="accordion-collapse collapse show" aria-labelledby="headingFaqGov1" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Yes. NS IT Solutions is empanelled with UP Electronics Corporation Ltd, GeM
                                            (Government e-Marketplace), and UPDSCO — enabling us to participate in
                                            government tenders and provide IT services to public sector organizations
                                            directly.
                                        </div>
                                    </div>
                                </div>

                                <!-- NEW: Onsite support -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaqGov2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqGov2" aria-expanded="false" aria-controls="collapseFaqGov2">
                                            Do you provide onsite support for government departments?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqGov2" class="accordion-collapse collapse" aria-labelledby="headingFaqGov2" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Yes. We provide onsite deployment, training, and support for government
                                            departments and PSUs, including AMC and dedicated resource models as per
                                            tender requirements.
                                        </div>
                                    </div>
                                </div>

                                <!-- NEW: Data security -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaqGov3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqGov3" aria-expanded="false" aria-controls="collapseFaqGov3">
                                            How do you handle sensitive citizen data?
                                        </button>
                                    </h2>
                                    <div id="collapseFaqGov3" class="accordion-collapse collapse" aria-labelledby="headingFaqGov3" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            We follow ISO 27001:2022 aligned information security practices including
                                            encryption, role-based access control, audit logging, secure hosting, and
                                            data localization compliance as per government guidelines.
                                        </div>
                                    </div>
                                </div>

                                <!-- Existing FAQ 1 (kept) -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            What services does NS IT Solutions provide?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            We deliver e-Governance portals, custom web development, full-stack
                                            applications, mobile apps, AI solutions, e-commerce platforms, cybersecurity
                                            services, and digital marketing aligned to your organizational goals.
                                        </div>
                                    </div>
                                </div>

                                <!-- Existing FAQ 2 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            How do I start a project with you?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Share your goals via our <a href="contact.php">contact</a> page; we run a
                                            discovery call, refine scope, send a proposal (features, timeline, pricing),
                                            then schedule a kickoff.
                                        </div>
                                    </div>
                                </div>

                                <!-- Existing FAQ 3 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            What is your development process?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Our lifecycle: Discovery → UX/UI &amp; Architecture → Agile Sprints → QA
                                            &amp; Security Review → Launch → Post-launch optimization — aligned with
                                            CMMI Level 5 processes.
                                        </div>
                                    </div>
                                </div>

                                <!-- Existing FAQ 4 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq4" aria-expanded="false" aria-controls="collapseFaq4">
                                            Do we own the source code and IP?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq4" class="accordion-collapse collapse" aria-labelledby="headingFaq4" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Yes — ownership transfers per contract. You have repository access from
                                            project start and a structured handover at completion.
                                        </div>
                                    </div>
                                </div>

                                <!-- Existing FAQ 7 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingFaq7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq7" aria-expanded="false" aria-controls="collapseFaq7">
                                            How do you ensure security and quality?
                                        </button>
                                    </h2>
                                    <div id="collapseFaq7" class="accordion-collapse collapse" aria-labelledby="headingFaq7" data-bs-parent="#accordionExamplec">
                                        <div class="accordion-body card-body">
                                            Secure coding standards, dependency scans, environment isolation,
                                            role-based access, layered testing (unit, integration, regression,
                                            performance) and review gates — all under ISO 27001:2022 and CMMI Level 5.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Schema for SEO (updated) -->
                <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "FAQPage",
                  "mainEntity": [
                    {"@type": "Question","name": "Are you empanelled with GeM and UP Electronics Corporation?","acceptedAnswer": {"@type": "Answer","text": "Yes. NS IT Solutions is empanelled with UP Electronics Corporation Ltd, GeM, and UPDSCO for government IT services."}},
                    {"@type": "Question","name": "Do you provide onsite support for government departments?","acceptedAnswer": {"@type": "Answer","text": "Yes. We provide onsite deployment, training, support, AMC, and dedicated resource models as per tender requirements."}},
                    {"@type": "Question","name": "How do you handle sensitive citizen data?","acceptedAnswer": {"@type": "Answer","text": "We follow ISO 27001:2022 aligned practices: encryption, RBAC, audit logging, secure hosting, and data localization compliance."}},
                    {"@type": "Question","name": "What services does NS IT Solutions provide?","acceptedAnswer": {"@type": "Answer","text": "e-Governance portals, custom web development, full-stack apps, mobile, AI, e-commerce, cybersecurity, and digital marketing."}},
                    {"@type": "Question","name": "How do I start a project with you?","acceptedAnswer": {"@type": "Answer","text": "Contact us with goals; we run discovery, refine scope, send proposal, then kickoff."}},
                    {"@type": "Question","name": "What is your development process?","acceptedAnswer": {"@type": "Answer","text": "Discovery, UX/UI & Architecture, Agile Sprints, QA & Security, Launch, Optimization."}},
                    {"@type": "Question","name": "Do we own the source code and IP?","acceptedAnswer": {"@type": "Answer","text": "Yes, ownership transfers per contract with full repository access and handover."}},
                    {"@type": "Question","name": "How do you ensure security and quality?","acceptedAnswer": {"@type": "Answer","text": "Secure coding, dependency scans, isolated environments, layered testing, review gates under ISO 27001 and CMMI 5."}}
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
</body>

</html>