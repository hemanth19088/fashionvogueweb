<?php
//-–––––––––––––––––––––––––––––––––––––––––––––––––
// PAGE CONFIGURATION
//-–––––––––––––––––––––––––––––––––––––––––––––––––
$page_id = 'showverse';
$body_class = 'ori-digital-studio';
$meta_overrides = [
    'title'       => 'Showverse - Fashion Vogue',
    'description' => 'Enter the Showverse by FashionVogue — an immersive fashion universe of virtual runways, digital couture, and visionary designers.',
    'keywords'    => 'fashion, showverse, digital fashion, virtual runways, couture, fashion technology, fashion metaverse, designers'
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
    .ori-digital-studio .ori-service-text p {
        color: #ccc !important;
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
    .ori-digital-studio .ori-sponsor-slider-7 {
        color: #000 !important;
    }
    .ori-digital-studio .ori-sponsor-slider-7 * {
        color: #000 !important;
    }
    .ori-digital-studio .slick-slider {
        color: #000 !important;
    }
    .ori-digital-studio .slick-slider * {
        color: #000 !important;
    }
    .ori-digital-studio .slick-list {
        color: #000 !important;
    }
    .ori-digital-studio .slick-track {
        color: #000 !important;
    }
    .ori-digital-studio .slick-slide {
        color: #000 !important;
    }
    .ori-digital-studio .slick-arrow {
        color: #000 !important;
    }
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
    .ori-digital-studio .ori-video-skill-section-7 {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-video-skill-section-7 * {
        color: #fff !important;
    }
    .ori-digital-studio .ori-video-play-7 {
        background-color: #0d0d0d !important;
    }
    .ori-digital-studio .ori-skill-content-7 {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-skill-content-7 * {
        color: #fff !important;
    }
    /* Force all sections to have black background */
    .ori-digital-studio section {
        background-color: #0d0d0d !important;
    }
    .ori-digital-studio .position-relative {
        background-color: #0d0d0d !important;
    }
    /* Fix banner section before pseudo-element */
    .ori-digital-studio .ori-banner-section-7:before {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
    .ori-digital-studio .ori-banner-section-7:after {
        background-color: #0d0d0d !important;
        color: #fff !important;
    }
</style>

<section id="ori-banner-7" class="ori-banner-section-7 position-relative">
    <span class="ori-banner-shape1 position-absolute wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms"><img src="assets/img/vector/banner-shape1.png" alt=""></span>
    <span class="ori-banner-shape2 position-absolute wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms"><img src="assets/img/vector/banner-shape2.png" alt=""></span>
    <div class="ori-banner-circle-img1 banner-circle-img position-absolute wow zoomIn" data-wow-delay="700ms" data-wow-duration="1500ms">
        <div class="banner-circle">
            <img src="assets/img/slider/b-cir1.jpg" alt="">
        </div>
        <div class="circle-icon d-flex align-items-center justify-content-center">
            <i class="fab fa-dribbble"></i>
        </div>
    </div>
    <div class="ori-banner-circle-img2 banner-circle-img position-absolute wow zoomIn" data-wow-delay="900ms" data-wow-duration="1500ms">
        <div class="banner-circle">
            <img src="assets/img/slider/b-cir2.jpg" alt="">
        </div>
        <div class="circle-icon d-flex align-items-center justify-content-center">
            <i class="fab fa-facebook-f"></i>
        </div>
    </div>
    <div class="ori-banner-circle-img3 banner-circle-img position-absolute wow zoomIn" data-wow-delay="1000ms" data-wow-duration="1500ms">
        <div class="banner-circle">
            <img src="assets/img/slider/b-cir3.jpg" alt="">
        </div>
        <div class="circle-icon d-flex align-items-center justify-content-center">
            <i class="fab fa-twitter"></i>
        </div>
    </div>
    <div class="ori-banner-option position-absolute wow fadeInLeft" data-wow-delay="1200ms" data-wow-duration="1500ms">
        <div class="inner-item-option">
            <div class="inner-icon position-absolute d-flex align-items-center justify-content-center">
                <i class="fal fa-users"></i>
            </div>
            <div class="inner-text pera-content">
                <p>Meet our Featured <span>Designers</span></p>
                <div class="inner-img-list ul-li d-flex align-items-center">
                    <ul>
                        <li><img src="assets/img/slider/tmb1.jpg" alt=""></li>
                        <li><img src="assets/img/slider/tmb2.jpg" alt=""></li>
                        <li><img src="assets/img/slider/tmb3.jpg" alt=""></li>
                    </ul>
                    <a href="team.html"><span>More</span> <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="ori-banner-content-7">
            <div class="ori-banner-text-wrap-7 pera-content">
                <div class="banner-slug text-uppercase wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    Where Haute Couture Meets the Digital Age
                </div>
                <h1 class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    Welcome to the <span>Showverse</span>
                </h1>
                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Step inside FashionVogue’s immersive fashion universe — virtual runways, exclusive digital couture drops, and visionary creators redefining tomorrow’s style.</p>
                <div class="banner-play-btn d-flex wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                    <div class="ori-btn-7">
                        <a href="contact">Explore Now</a>
                    </div>
                    <div class="banner-play">
                        <a class="d-flex video_box align-items-center" href="https://www.youtube.com/watch?v=bIoPkZRVll"><i class="fas fa-play-circle"></i> <span>Watch the Trailer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ori-sponsor-7" class="ori-sponsor-section-7">
    <div class="container">
        <div class="ori-sponsor-content-7 position-relative">
            <h3>Featuring Exclusive Digital Collections From Visionary <span>Designers & Fashion Houses</span></h3>
            <div class="ori-sponsor-slider-7">
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp12.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp13.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp14.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp15.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp16.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp12.png" alt="">
                    </div>
                </div>
                <div class="ori-sponsor-img">
                    <div class="inner-img">
                        <img src="assets/img/sponsor/sp13.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="ori-about-7" class="ori-about-section-7">
    <div class="container">
        <div class="ori-about-img-wrapper-7">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ori-about-img-item-wrap position-relative wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="ori-about-inner-img1">
                            <img src="assets/img/about/abs1.jpg" alt="">
                        </div>
                        <div class="ori-about-inner-img2">
                            <img src="assets/img/about/abs2.jpg" alt="">
                        </div>
                        <div class="ori-about-shape-circle">
                            <img src="assets/img/about/abs-cir.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ori-about-text-area-7 wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="ori-section-title-7">
                            <div class="sub-title text-uppercase">About The Platform</div>
                            <h2>Beyond the Runway. It’s a <span>Digital Couture Revolution.</span> </h2>
                        </div>
                        <div class="ori-about-text-wrap-7 pera-content">
                            <p>Showverse by FashionVogue brings the world of couture into immersive, interactive digital spaces. Explore virtual fashion weeks, discover avant-garde collections, and experience the craft of style like never before.</p>
                            <p>For designers, it’s a global stage to debut collections and connect with audiences in real time. For fashion lovers, it’s a front-row pass to exclusive drops, behind-the-scenes ateliers, and collectible digital garments.</p>
                            <p>Curate your identity with a digital wardrobe and step into the future of fashion — bold, immersive, and boundaryless.</p>
                            <div class="ori-btn-7">
                                <a href="contact">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Google Fonts: Cormorant Garamond for headings, Inter for body text -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS for utility-first styling -->
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




    <!-- Section 2: Key Features -->
    <section class="py-16 md:py-28 bg-[#F8F4F1]">
        <div class="container mx-auto px-6">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-20">
                <p class="text-uppercase brand-accent font-semibold tracking-widest mb-2">WHAT YOU'LL DISCOVER</p>
                <h2 class="section-title mb-4">Key Features of the <span class="brand-accent">VogueVerse</span></h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1: Virtual Fashion Week -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.82m5.84-2.56a16.95 16.95 0 00-2.58-.22m2.58 2.78a16.92 16.92 0 01-2.58-.22m0 0A16.92 16.92 0 015.63 12a16.95 16.95 0 015.58-6.84m-5.58 6.84a6 6 0 01-2.28 2.58m-2.28-2.58a6 6 0 015.84-7.38v4.82m-5.84 2.56a16.95 16.95 0 002.58.22m-2.58-2.78a16.92 16.92 0 002.58.22m0 0A16.92 16.92 0 0018.37 12a16.95 16.95 0 00-5.58-6.84m5.58 6.84a6 6 0 002.28-2.58m2.28 2.58a6 6 0 00-5.84 7.38v-4.82" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">Virtual Fashion Week</h3>
                    <p class="section-subtitle !text-base">Be front row at fully immersive 3D catwalks—couture reveals from visionary designers in breathtaking digital environments.</p>
                </div>
                <!-- Feature 2: Digital Couture Closet -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">Digital Couture Closet</h3>
                    <p class="section-subtitle !text-base">Collect, style, and showcase exclusive fashion wearables—your signature looks for the new digital era.</p>
                </div>
                <!-- Feature 3: Atelier Access -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.311a15.045 15.045 0 01-7.5 0C4.508 17.627 2.25 14.454 2.25 10.5 2.25 6.546 4.508 3.373 7.5 1.5c3.679 1.873 6.168 5.046 6.168 9.046a12.06 12.06 0 01-1.25 5.25m3.75-5.25a12.06 12.06 0 00-1.25-5.25m0 0a15.045 15.045 0 00-7.5 0" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">Atelier Access</h3>
                    <p class="section-subtitle !text-base">Connect with designers and stylists, attend exclusive talks, and go behind the scenes of collection-making.</p>
                </div>
                <!-- Feature 4: AR Fitting Rooms -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">AR Fitting Rooms</h3>
                    <p class="section-subtitle !text-base">Try on digital garments virtually and see how they move, fit, and flow with cutting‑edge AR technology.</p>
                </div>
                <!-- Feature 5: Limited Edition Drops -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">Limited Edition Drops</h3>
                    <p class="section-subtitle !text-base">Secure rare runway pieces and time-limited digital looks from leading fashion houses before anyone else.</p>
                </div>
                <!-- Feature 6: Style Socials -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                    </div>
                    <h3 class="text-2xl mb-3">Style Socials</h3>
                    <p class="section-subtitle !text-base">Join virtual shows, styling challenges, and live community events with creators and fans from across the globe.</p>
                </div>
            </div>
        </div>
    </section>

<section id="ori-video-skill-7" class="ori-video-skill-section-7">
    <div class="ori-video-skill-content-7 d-flex">
        <div class="ori-video-play-7 position-relative" data-background="assets/img/bg/video-bg.jpg">
            <div class="ori-play-video-play position-absolute">
                <a class="video_box d-flex align-items-center justify-content-center" href="https://www.youtube.com/watch?v=bIoPkZRVll"><i class="fas fa-play"></i></a>
            </div>
        </div>
        <div class="ori-skill-content-7">
            <div class="ori-skill-content-progress">
                <div class="ori-section-title-7 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="sub-title text-uppercase">The Technology</div>
                    <h2> Powered by Cutting-Edge <span>Style Innovation</span> </h2>
                </div>
                <div class="ori-skill-text-progress-bar wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <p>Real-time 3D artistry, seamless AR try‑on, and authenticated digital couture ensure every Showverse moment feels like a front-row experience — refined, exclusive, and truly future-ready.</p>
                    <div class="ori-skill-progress-7">
                        <div class="skill-progress-bar">
                            <div class="skill-set-percent headline">
                                <h4>High‑Fidelity Virtual Runways</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="92"></div>
                                </div>
                            </div>
                            <div class="skill-set-percent headline">
                                <h4>Seamless AR Try‑On</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="85"></div>
                                </div>
                            </div>
                            <div class="skill-set-percent headline">
                                <h4>Blockchain‑Backed Couture IDs</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="99"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ori-skill-client-more">
                        <div class="inner-img-list ul-li d-flex align-items-center">
                            <ul>
                                <li><img src="assets/img/slider/tmb1.jpg" alt=""></li>
                                <li><img src="assets/img/slider/tmb2.jpg" alt=""></li>
                                <li><img src="assets/img/slider/tmb3.jpg" alt=""></li>
                            </ul>
                            <div class="more-btn">
                                2k+ Fashion Enthusiasts. <a href="about.html"><span>Explore now</span> <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>