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
                        <a href="showverse">Explore Now</a>
                    </div>
                    <div class="banner-play">
                        <a class="d-flex video_box align-items-center" href="https://www.youtube.com/watch?v=bIoPkZRVll"><i class="fas fa-play-circle"></i> <span>Watch the Trailer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Sponsor Section -->
<section id="ori-testimonial-7" class="ori-testimonial-section-7" style="background-color: #000000;">
    <div class="container">
        <div class="ori-section-title-7 text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="sub-title text-uppercase" style="color: #cccccc;">Testimonials</div>
            <h2 style="color: #ffffff;">Words From Our Community</h2>
        </div>

        <div class="ori-testimonial-content-7 position-relative">
            <div class="ori-service-silider-7">

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <img src="https://images.pexels.com/photos/3772510/pexels-photo-3772510.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Priya K.">
                        </div>
                        <div class="ori-service-text pera-content" style="color: #ffffff; flex: 1; display: flex; flex-direction: column;">
                            <h3>"The exclusive digital drops are incredible!"</h3>
                            <p style="flex-grow: 1;">This platform completely changed how I discover fashion. I feel like I have access to the future of style before anyone else!</p>
                            <footer>— Priya K.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                     <div class="ori-service-inner-item-7 ser-color-2 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                             <img src="https://images.pexels.com/photos/3778603/pexels-photo-3778603.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Rohan S.">
                        </div>
                        <div class="ori-service-text pera-content" style="color: #ffffff; flex: 1; display: flex; flex-direction: column;">
                            <h3>"The virtual try-on is a game-changer."</h3>
                            <p style="flex-grow: 1;">Being able to see how pieces fit my digital avatar before purchasing is incredible. The technology works flawlessly.</p>
                             <footer>— Rohan S.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <img src="https://images.pexels.com/photos/762080/pexels-photo-762080.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Anjali M.">
                        </div>
                        <div class="ori-service-text pera-content" style="color: #ffffff; flex: 1; display: flex; flex-direction: column;">
                            <h3>"True ownership of digital couture."</h3>
                            <p style="flex-grow: 1;">Owning a piece of authenticated digital couture feels amazing. The process was secure and seamless.</p>
                             <footer>— Anjali M.</footer>
                        </div>
                    </div>
                </div>

                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-4 position-relative" style="min-height: 450px; display: flex; flex-direction: column;">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                             <img src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Vikram">
                        </div>
                        <div class="ori-service-text pera-content" style="color: #ffffff; flex: 1; display: flex; flex-direction: column;">
                           <h3>"Connecting with visionary designers."</h3>
                           <p style="flex-grow: 1;">What I love most is learning the story behind each piece. This platform isn't just a marketplace; it's a cultural hub.</p>
                           <footer>— Vikram</footer>
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
<!--
<!-- About Section End -->
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




   <section id="ori-service-7" class="ori-service-section-7">
    <div class="container">
        <div class="ori-section-title-7 text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="sub-title text-uppercase">Platform Features</div>
            <h2>
                Experience Fashion in a
                <span>New Dimension</span>
            </h2>
        </div>
        <div class="ori-service-content-7 position-relative">
            <div class="ori-service-silider-7">
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-gem"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Exclusive Digital Drops</a></h3>
                            <p>Access limited-edition digital collections from leading Indian and global designers, available only here.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-magic"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Immersive Virtual Try-On</a></h3>
                            <p>Visualize how garments look on your digital avatar with our cutting-edge AR try-on technology.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-signature"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Direct From The Designers</a></h3>
                            <p>Explore the story and inspiration behind each collection, connecting you with visionary creators.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-4 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-shield-check"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Verifiable Ownership</a></h3>
                            <p>Own a piece of digital couture. Every item is authenticated on the blockchain for true ownership.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-gem"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Exclusive Digital Drops</a></h3>
                            <p>Access limited-edition digital collections from leading Indian and global designers, available only here.</p>
                        </div>
                    </div>
                </div>
                 <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-magic"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Immersive Virtual Try-On</a></h3>
                            <p>Visualize how garments look on your digital avatar with our cutting-edge AR try-on technology.</p>
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
                                <li><img src="assets/images/showverse/mini1.jpg" alt=""></li>
                                <li><img src="assets/images/showverse/mini2.jpg" alt=""></li>
                                <li><img src="assets/images/showverse/mini3.jpg" alt=""></li>
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