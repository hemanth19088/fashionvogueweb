<?php
//-–––––––––––––––––––––––––––––––––––––––––––––––––
// PAGE CONFIGURATION
//-–––––––––––––––––––––––––––––––––––––––––––––––––
$page_id = 'showverse';
$body_class = 'ori-digital-studio';
$meta_overrides = [
    'title'       => 'Showverse - The Future of Fashion Is Here',
    'description' => 'The first-ever hybrid fashion experience that blends real and virtual worlds. A competitive showcase for models, designers, MUAs, and creators.',
    'keywords'    => 'showverse, fashion competition, virtual fashion, hybrid event, models, designers, makeup artists, fashion vogue'
];

include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<style>
    /* Force black theme for showverse page */
    body.ori-digital-studio {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-banner-section-7,
    .ori-digital-studio .ori-sponsor-section-7,
    .ori-digital-studio .ori-about-section-7,
    .ori-digital-studio .ori-service-section-7,
    .ori-digital-studio .ori-video-skill-section-7 {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-banner-section-7 *,
    .ori-digital-studio .ori-sponsor-section-7 *,
    .ori-digital-studio .ori-about-section-7 *,
    .ori-digital-studio .ori-service-section-7 *,
    .ori-digital-studio .ori-video-skill-section-7 * {
        color: #fff !important;
    }
    .ori-digital-studio h1,
    .ori-digital-studio h2,
    .ori-digital-studio h3,
    .ori-digital-studio h4,
    .ori-digital-studio h5,
    .ori-digital-studio h6 {
        color: #fff !important;
    }
    .ori-digital-studio p {
        color: #ccc !important;
    }
    .ori-digital-studio .ori-section-title-7 .sub-title {
        color: #fff !important;
    }
    .ori-digital-studio .banner-slug {
        color: #fff !important;
    }
    .ori-digital-studio .ori-banner-text-wrap-7 h1 {
        color: #fff !important;
    }
    .ori-digital-studio .ori-banner-text-wrap-7 p {
        color: #ccc !important;
    }
    /* Additional text color overrides */
    .ori-digital-studio .ori-sponsor-content-7 h3 {
        color: #fff !important;
    }
    .ori-digital-studio .ori-about-text-wrap-7 p {
        color: #ccc !important;
    }
    .ori-digital-studio .ori-service-text h3 a {
        color: #060606 !important;
    }
    .ori-digital-studio .ori-service-text h3 {
        color: #000000 !important;
    }
    .ori-digital-studio .ori-service-text p {
        color: #333 !important;
    }
    .ori-digital-studio .ori-skill-text-progress-bar p {
        color: #ccc !important;
    }
    .ori-digital-studio .skill-set-percent h4 {
        color: #fff !important;
    }
    .ori-digital-studio .more-btn {
        color: #fff !important;
    }
    .ori-digital-studio .more-btn a {
        color: #fff !important;
    }
    .ori-digital-studio .ori-skill-client-more {
        color: #fff !important;
    }
    .ori-digital-studio .inner-text p {
        color: #ccc !important;
    }
    .ori-digital-studio .inner-text span {
        color: #fff !important;
    }
    .ori-digital-studio .inner-text a {
        color: #fff !important;
    }
    .ori-digital-studio .banner-play a {
        color: #fff !important;
    }
    .ori-digital-studio .ori-btn-7 a {
        color: #fff !important;
    }
    /* Target any remaining white text */
    .ori-digital-studio * {
        color: #fff !important;
    }
    .ori-digital-studio p {
        color: #ccc !important;
    }
    /* Fix specific problematic sections */
    .ori-digital-studio .ori-sponsor-content-7 {
        background-color: #fff !important;
        color: #000 !important;
    }
    .ori-digital-studio .ori-sponsor-content-7 * {
        color: #000 !important;
    }
    .ori-digital-studio .ori-sponsor-content-7 h3 {
        color: #fff !important;
    }
    /* Fix slick slider text colors */
    .ori-digital-studio .ori-sponsor-slider-7,
    .ori-digital-studio .slick-slider,
    .ori-digital-studio .slick-list,
    .ori-digital-studio .slick-track,
    .ori-digital-studio .slick-slide,
    .ori-digital-studio .slick-arrow,
    .ori-digital-studio .slick-prev,
    .ori-digital-studio .slick-next {
        color: #000 !important;
    }
    .ori-digital-studio .service-shape1 {
        background-color: transparent !important;
    }
    .ori-digital-studio .ori-service-inner-item-7 {
        background-color: #fff !important;
        color: #000 !important;
    }
    .ori-digital-studio .ori-service-inner-item-7 * {
        color: #000000 !important;
    }
    .ori-digital-studio .ori-service-inner-item-7 p {
        color: #555 !important;
    }
    .ori-digital-studio .ori-video-skill-section-7,
    .ori-digital-studio .ori-video-play-7,
    .ori-digital-studio .ori-skill-content-7 {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-video-skill-section-7 *,
    .ori-digital-studio .ori-skill-content-7 * {
        color: #fff !important;
    }
    /* Force all sections to have black background */
    .ori-digital-studio section,
    .ori-digital-studio .position-relative {
        background-color: #0d0d0d !important;
    }
    .ori-digital-studio .ori-banner-section-7:before,
    .ori-digital-studio .ori-banner-section-7:after {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
</style>

<section id="ori-banner-7" class="ori-banner-section-7 position-relative">
    <span class="ori-banner-shape1 position-absolute wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="assets/img/vector/banner-shape1.png" alt=""></span>
    <span class="ori-banner-shape2 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="assets/img/vector/banner-shape2.png" alt=""></span>
    <div class="line_animation">
        <div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div>
    </div>
    <div class="ori-banner-circle-img1 banner-circle-img position-absolute wow zoomIn" data-wow-delay="700ms" data-wow-duration="1500ms">
        <div class="banner-circle"><img src="assets/images/showverse/akshita.jpg" alt="Fashion Model 1"></div>
        <div class="circle-icon d-flex align-items-center justify-content-center"><i class="fab fa-dribbble"></i></div>
    </div>
    <div class="ori-banner-circle-img2 banner-circle-img position-absolute wow zoomIn" data-wow-delay="900ms" data-wow-duration="1500ms">
        <div class="banner-circle"><img src="assets/images/showverse/celeb2.jpg" alt="Fashion Model 2"></div>
        <div class="circle-icon d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></div>
    </div>
    <div class="ori-banner-circle-img3 banner-circle-img position-absolute wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms">
        <div class="banner-circle"><img src="assets/images/showverse/celeb1.jpg" alt="Fashion Model 3"></div>
        <div class="circle-icon d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></div>
    </div>
    <div class="ori-banner-option position-absolute wow fadeInLeft" data-wow-delay="1200ms" data-wow-duration="1500ms">
        <div class="inner-item-option">
            <div class="inner-icon position-absolute d-flex align-items-center justify-content-center"><i class="fal fa-users"></i></div>
            <div class="inner-text pera-content">
                <p>Showcasing Global <span>Talent</span></p>
                <div class="inner-img-list ul-li d-flex align-items-center">
                    <ul>
                        <li><img src="assets/images/showverse/mini1.jpg" alt="Talent thumbnail 1"></li>
                        <li><img src="assets/images/showverse/mini2.jpg" alt="Talent thumbnail 2"></li>
                        <li><img src="assets/images/showverse/mini3.jpg" alt="Talent thumbnail 3"></li>
                    </ul>
                    <a href="#explore"><span>More</span> <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ori-banner-content-7">
            <div class="ori-banner-text-wrap-7 pera-content">
                <h1 class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    Not a Runway. Not a Beauty Pageant. <span>It’s Showverse.</span>
                </h1>
                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">The first-ever hybrid fashion experience that blends real and virtual worlds.</p>
                <div class="banner-play-btn d-flex wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                    <div class="ori-btn-7">
                        <a href="#explore">Explore Showverse</a>
                    </div>
                    <div class="ori-btn-7" style="margin-left: 15px;">
                         <a href="#join">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>

<style>
    /* Custom styles to complement Tailwind */
    body {
        font-family: 'Inter', sans-serif;
        background-color: #FDFDFD; /* A very light, almost white background */
        color: #1C1C1C;
    }
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
    }
    .section-title {
        font-size: 3.5rem; /* 56px */
        letter-spacing: -0.025em;
        line-height: 1.1;
    }
    .section-subtitle {
        font-size: 1.125rem; /* 18px */
        line-height: 1.7;
        color: #525252; /* A softer gray for text */
    }
    .brand-accent {
        color: #A18A70; /* A sophisticated, muted gold/tan */
    }
    .btn-primary {
        background-color: #1C1C1C;
        color: #FFFFFF;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        padding: 0.875rem 2rem; /* 14px 32px */
        border-radius: 9999px; /* pill shape */
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #333333;
        transform: scale(1.05);
    }
    .form-input {
        border: 1px solid #D1D5DB;
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        width: 100%;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-input:focus {
        outline: none;
        border-color: #A18A70;
        box-shadow: 0 0 0 2px rgba(161, 138, 112, 0.2);
    }
    .feature-card {
        background-color: #ffffff;
        border: 1px solid #F0EAE4;
        border-radius: 0.75rem;
        padding: 2.5rem;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .feature-icon {
        width: 2.5rem; /* Changed from 3.5rem */
        height: 2.5rem; /* Changed from 3.5rem */
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 1.5rem;
        color: #A18A70;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2.5rem;
        }
    }
</style>




<section id="ori-service-7" class="ori-service-section-7">
    <div class="container">
        <div class="ori-section-title-7 text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="sub-title text-uppercase">Your Toolkit For Success</div>
            <h2>
                Everything You Need to
                <span>Start Modeling</span>
            </h2>
        </div>
        <div class="ori-service-content-7 position-relative">
            <div class="ori-service-silider-7">
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Instant Audition Alerts</a></h3>
                            <p>Get real-time notifications for casting calls and auditions in your area that match your profile.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Professional Portfolio Builder</a></h3>
                            <p>Create a stunning digital portfolio in minutes. Add photos, stats, and share your lookbook with agencies.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Live Skill Workshops</a></h3>
                            <p>Learn runway walking, posing, and industry secrets from professional models and coaches.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-4 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h6.375M9 12h6.375m-6.375 5.25h6.375M5.25 9h.008v.008H5.25V9zm.75 3h.008v.008H6v-.008zm.75 3h.008v.008H6.75v-.008zm.75 3h.008v.008H7.5v-.008zm6-12h.008v.008H13.5V9zm.75 3h.008v.008H14.25v-.008zm.75 3h.008v.008H15v-.008zm.75 3h.008v.008H15.75v-.008z" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Verified Agency Directory</a></h3>
                            <p>Connect with trusted, industry-vetted modeling agencies and find the right representation for you.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Instant Audition Alerts</a></h3>
                            <p>Get real-time notifications for casting calls and auditions in your area that match your profile.</p>
                        </div>
                    </div>
                </div>
                 <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="48" height="48">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Professional Portfolio Builder</a></h3>
                            <p>Create a stunning digital portfolio in minutes. Add photos, stats, and share your lookbook with agencies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_nav">
                <button type="button" class="ser7-left_arrow"><i class="far fa-angle-left"></i></button>
                <button type="button" class="ser7-right_arrow"><i class="far fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --primary-color: #5a67d8;
            --border-color: #e9ecef;
            --card-bg: #ffffff;
        }

        /* Basic styling for demonstration */
        body {
            font-family: system-ui, -apple-system, sans-serif;
            margin: 0;
            background-color: #f0f2f5;
            padding: 40px 20px;
            box-sizing: border-box;
        }
        .ori-video-skill-section-7 {
            max-width: 1100px;
            margin: auto;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            background-color: var(--card-bg);
        }
        .d-flex { display: flex; }

        /* Left column: Image */
        .ori-video-play-7 {
            flex: 0 0 40%;
            min-height: 600px;
            background-size: cover;
            background-position: center;
            background-image: url('https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
        }
        
        /* Right column: Content */
        .ori-skill-content-7 {
            flex: 1;
            padding: 40px;
        }
        .ori-section-title-7 h2 {
            font-size: 2.5em;
            margin: 0 0 15px 0;
        }
        .ori-section-title-7 h2 span {
            color: var(--primary-color);
        }
        .ori-section-title-7 .sub-title {
            color: #6c757d;
            font-weight: bold;
        }
        .ori-skill-text-progress-bar p {
            line-height: 1.7;
            color: #495057;
        }

        /* --- Robust Flowchart Styling --- */
        .flowchart-container {
            margin-top: 30px;
        }
        .flowchart-container h4 {
            font-size: 1.4em;
            margin-bottom: 20px;
        }
        .flowchart-list {
            position: relative;
            padding-left: 16px;
        }
        /* The main vertical line created with a pseudo-element */
        .flowchart-list::before {
            content: '';
            position: absolute;
            left: 16px;
            top: 16px;
            height: calc(100% - 32px);
            width: 2px;
            background-color: var(--border-color);
        }
        .flowchart-item {
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 45px;
            min-height: 32px;
        }
        .flowchart-item:not(:last-child) {
            margin-bottom: 30px;
        }
        .flowchart-item i {
            position: absolute;
            left: 0;
            top: 0;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: var(--card-bg);
            border: 2px solid var(--border-color);
            color: var(--primary-color);
            display: grid;
            place-items: center;
        }
        .flowchart-item b {
            font-size: 1.1em;
        }
        .flowchart-item span {
            display: block;
            color: #6c757d;
            font-size: 0.9em;
            font-weight: normal;
            margin-top: 4px;
        }

        /* CTA Button */
        .ori-skill-client-more {
            margin-top: 40px;
        }
        .more-btn a {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        .more-btn a:hover {
            background-color: #3e4ab8;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .d-flex { flex-direction: column; }
            .ori-video-play-7 { min-height: 250px; }
        }
    </style>
</head>
<body>

<section id="ori-video-skill-7" class="ori-video-skill-section-7">
    <div class="ori-video-skill-content-7 d-flex">
        <div class="ori-video-play-7 position-relative">
            </div>
        <div class="ori-skill-content-7">
            <div class="ori-skill-content-progress">
                <div class="ori-section-title-7">
                    <div class="sub-title text-uppercase">About &amp; Format</div>
                    <h2>The Journey to <span>Recognition</span></h2>
                </div>
                <div class="ori-skill-text-progress-bar">
                    <p>
                        Showverse is Fashion Vogue’s signature competitive showcase — a format that redefines how fashion talent is discovered, celebrated, and connected. It combines digital access, immersive virtual experiences, and live competitions into a single, seamless platform.
                    </p>
                    
                    <div class="flowchart-container">
                        <h4>The 4-Stage Process:</h4>
                        <div class="flowchart-list">
                            <div class="flowchart-item">
                                <i class="fas fa-file-signature"></i>
                                <div><b>1. Entry & Screening</b><span>Register, upload portfolio, and pass review.</span></div>
                            </div>
                            <div class="flowchart-item">
                                <i class="fas fa-camera-retro"></i>
                                <div><b>2. Themed Challenges</b><span>Participate in photoshoots and campaigns.</span></div>
                            </div>
                            <div class="flowchart-item">
                                <i class="fas fa-cube"></i>
                                <div><b>3. The Main Event</b><span>Experience a cinematic 3D showcase.</span></div>
                            </div>
                            <div class="flowchart-item">
                                <i class="fas fa-award"></i>
                                <div><b>4. Recognition & Opportunities</b><span>Earn awards, press, and collaborations.</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ori-skill-client-more">
                    <div class="more-btn">
                        <a href="#join">Step into Showverse <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ori-service-7" class="ori-service-section-7">
    <div class="container">
        <div class="ori-section-title-7 text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="sub-title text-uppercase" style="color: #120101ff;">Testimonials</div>
            <h2 style="color: #0d0101ff;">Words From Our Community</h2>
        </div>

        <div class="ori-testimonial-content-7 position-relative">
            <div class="ori-service-silider-7">

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <img src="assets/images/showverse/priya.jpg" alt="Aisha S.">
                        </div>
                        <div class="ori-service-text pera-content" style="flex: 1; display: flex; flex-direction: column;">
                            <h3>"I landed my first audition in a week!"</h3>
                            <p style="flex-grow: 1;">The Audition Alerts are amazing. I was tired of searching everywhere, but FashionVerge sent a perfect local casting call right to my phone. It felt like a dream!</p>
                            <footer>— Aisha S.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                        <div class="ori-service-inner-item-7 ser-color-2 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                             <img src="assets/images/showverse/anjali.jpg" alt="Vikram R.">
                        </div>
                        <div class="ori-service-text pera-content" style="flex: 1; display: flex; flex-direction: column;">
                            <h3>"The Portfolio Builder is a game-changer."</h3>
                            <p style="flex-grow: 1;">I didn't know how to create a professional portfolio. With the builder, I made one in minutes and used the Agency Directory to send it out. An agency contacted me the next day!</p>
                             <footer>— Ramya R.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <img src="assets/images/showverse/geetha.jpg" alt="Sneha P.">
                        </div>
                        <div class="ori-service-text pera-content" style="flex: 1; display: flex; flex-direction: column;">
                            <h3>"The workshops gave me so much confidence."</h3>
                            <p style="flex-grow: 1;">I was so nervous about walking and posing. The Skill Workshops with pro models taught me everything. I walked into my next audition feeling like a star.</p>
                             <footer>— Sneha P.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-4 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                             <img src="assets/images/showverse/roshan.jpg" alt="Karan L.">
                        </div>
                        <div class="ori-service-text pera-content" style="flex: 1; display: flex; flex-direction: column;">
                           <h3>"I finally feel like I'm not alone."</h3>
                           <p style="flex-grow: 1;">The best part is the Community Hub. Connecting with other aspiring models who get it has been so helpful. We all support each other. It's my favorite feature!</p>
                           <footer>— Roshan L.</footer>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="carousel_nav">
                <button type="button" class="ser7-left_arrow"><i class="far fa-angle-left"></i></button>
                <button type="button" class="ser7-right_arrow"><i class="far fa-angle-right"></i></button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>