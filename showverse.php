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
 <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    :root{
      /* Aurora theme tokens */
      --bg: #070707ff;
      --bg-2: #0c0c0cff;
      --panel: #0f0f0fff;
      --card: #090909ff;
      --ink: #f2f5ff;
      --ink-2: #101010ff;

      --primary: #74f0ff;     /* aurora cyan */
      --primary-2: #7c5cff;   /* violet */
      --accent: #ffd36e;      /* warm highlight */
      --outline: #050505ff;

      --glow-cyan: 0 0 36px rgba(5, 5, 5, 0.25);
      --glow-violet: 0 0 36px rgba(13, 13, 13, 0.25);

      --r-sm: 12px;
      --r-md: 16px;
      --r-lg: 22px;

      --s-1: 6px;
      --s-2: 10px;
      --s-3: 14px;
      --s-4: 18px;
      --s-5: 24px;
      --s-6: 28px;
      --s-8: 36px;
      --s-10: 48px;

      --container: 1200px;

      --fz-eyebrow: .8rem;
      --fz-title: clamp(2rem, 3.8vw, 3.1rem);
      --fz-lead: clamp(1rem, 1.2vw, 1.15rem);
      --fz-step: 1.05rem;

      --dur-1: .18s;
      --dur-2: .35s;
      --dur-3: .6s;
    }

    /* Page background: aurora gradient + starfield */
    html,body{height:100%}
    body{
      margin:0; color:var(--ink);
      background:
        radial-gradient(1200px 500px at 80% -10%, rgba(116,240,255,.18), transparent 60%),
        radial-gradient(900px 600px at 10% 110%, rgba(124,92,255,.18), transparent 60%),
        linear-gradient(180deg, var(--bg) 0%, var(--bg-2) 100%);
      font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial;
      line-height:1.65;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    .stars{
      position: fixed; inset: 0; pointer-events: none; opacity:.25;
      background-image:
        radial-gradient(2px 2px at 10% 20%, rgba(255,255,255,.6), transparent 60%),
        radial-gradient(2px 2px at 60% 40%, rgba(255,255,255,.5), transparent 60%),
        radial-gradient(2px 2px at 30% 80%, rgba(255,255,255,.6), transparent 60%),
        radial-gradient(2px 2px at 85% 70%, rgba(255,255,255,.5), transparent 60%);
      filter: blur(.2px);
      animation: twinkle 7s ease-in-out infinite alternate;
    }
    @keyframes twinkle{ to { opacity:.4; transform: translateY(-2px) } }

    /* Shell */
    .aura-wrap{
      max-width: var(--container);
      margin: clamp(18px,4vw,40px) auto;
      padding: clamp(var(--s-6), 4vw, var(--s-10));
      border-radius: var(--r-lg);
      background:
        linear-gradient(180deg, rgba(8, 8, 8, 0.8), rgba(18,24,62,.55));
      border: 1px solid rgba(12, 12, 12, 0.08);
      box-shadow:
        0 18px 60px rgba(0,0,0,.45),
        inset 0 0 0 1px rgba(255,255,255,.03);
      backdrop-filter: blur(8px);
      position: relative;
      overflow: clip;
      isolation: isolate;
    }
    .aura-wrap::before{
      content:"";
      position:absolute; inset:-2px; z-index:-1;
      background: conic-gradient(from 210deg,
        rgba(116,240,255,.22), rgba(124,92,255,.22), rgba(255,211,110,.18), rgba(116,240,255,.22));
      filter: blur(26px);
      opacity:.45;
    }

    /* New layout: side split with floating card stack */
    .aura-grid{
      display:grid;
      gap: clamp(var(--s-6), 3vw, var(--s-10));
      grid-template-columns: 1fr;
    }
    @media (min-width: 980px){
      .aura-grid{ grid-template-columns: 48% 52% }
    }

    /* Left: stacked feature cards (replaces single hero) */
    .stack{
      display: grid;
      gap: var(--s-4);
    }
    .stack-card{
      position: relative;
      border-radius: var(--r-md);
      background: linear-gradient(180deg, rgba(10,14,40,.7), rgba(10,14,40,.45));
      border: 1px solid rgba(255,255,255,.07);
      min-height: 160px;
      overflow: hidden;
      transition: transform var(--dur-1) ease, box-shadow var(--dur-2) ease, border-color var(--dur-1) ease;
    }
    .stack-card:hover{
      transform: translateY(-2px);
      box-shadow: var(--glow-cyan), var(--glow-violet);
      border-color: rgba(116,240,255,.25);
    }
    .stack-card .bg{
      position:absolute; inset:0; z-index:0;
      background:
        radial-gradient(600px 300px at 70% 20%, rgba(116,240,255,.15), transparent 60%),
        radial-gradient(500px 300px at 25% 80%, rgba(124,92,255,.18), transparent 60%),
        url("assets/images/media/a\ ina1E8A0970.jpg") center/cover no-repeat;
      filter: saturate(1.05) contrast(1.02);
      opacity:.9;
      mix-blend-mode: screen;
    }
    .stack-card:nth-child(2) .bg{ background-image: url("assets/images/media/A\ ina_MGL9448.jpg"); }
    .stack-card:nth-child(3) .bg{ background-image: linear-gradient(180deg, rgba(10,14,40,.7), rgba(10,14,40,.7)), url("assets/images/media/A\ ina_MGL9448.jpg"); }

    .stack-card .chip{
      position: absolute; top: 14px; right: 14px;
      display:inline-flex; align-items:center; gap:8px;
      padding:8px 12px; border-radius:999px;
      font-weight:700; color:#0a0b16;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      border: 1px solid rgba(255,255,255,.35);
      box-shadow: inset 0 0 0 1px rgba(0,0,0,.25);
    }
    .stack-card .chip i{ color:#0a0b16 }

    .stack-card .label{
      position: absolute; left:16px; bottom:16px;
      display:flex; flex-direction:column; gap:6px;
      max-width: 80%;
      z-index:1;
    }
    .label .kicker{
      font-size:.78rem; letter-spacing:.14em; text-transform:uppercase;
      color: var(--ink-2); font-weight:800;
    }
    .label .headline{
      margin:0; font-size: clamp(1.1rem, 2.2vw, 1.35rem);
      font-weight:800; line-height:1.2;
      text-shadow: 0 2px 20px rgba(0,0,0,.55);
    }

    /* Right: content and timeline in a pill card */
    .content-card{
      border-radius: var(--r-lg);
      background: linear-gradient(180deg, rgba(12,18,56,.9), rgba(12,18,56,.7));
      border: 1px solid rgba(255,255,255,.08);
      padding: clamp(var(--s-6), 3.5vw, var(--s-10));
      box-shadow: 0 14px 50px rgba(0,0,0,.35), inset 0 0 0 1px rgba(255,255,255,.03);
    }

    .eyebrow{
      margin:0 0 var(--s-2);
      text-transform:uppercase; letter-spacing:.16em;
      color: var(--ink-2); font-weight:800; font-size: var(--fz-eyebrow);
    }
    .title{
      margin:0 0 var(--s-4);
      font-size: var(--fz-title); font-weight:900; line-height:1.12; text-wrap:balance;
    }
    .title .accent{
      background: linear-gradient(90deg, var(--primary), var(--primary-2) 55%, var(--accent));
      -webkit-background-clip:text; background-clip:text; color:transparent;
      text-shadow: 0 0 22px rgba(116,240,255,.25);
    }
    .lead{
      margin:0 0 var(--s-6);
      color: var(--ink-2); font-size: var(--fz-lead);
      max-width:70ch;
    }

    /* New timeline style: orbital nodes */
    .timeline{
      display:grid; gap: var(--s-4); margin:0; padding:0; list-style:none;
    }
    .t-item{
      display:grid;
      grid-template-columns: 56px 1fr;
      gap:16px; align-items:start;
    }
    .node{
      position:relative;
      width:52px; height:52px; border-radius:50%;
      background: radial-gradient(circle at 35% 35%, rgba(116,240,255,.45), rgba(124,92,255,.28));
      box-shadow: var(--glow-cyan), inset 0 0 18px rgba(255,255,255,.15);
      border: 1px solid rgba(255,255,255,.2);
      display:grid; place-items:center;
    }
    .node::after{
      content:""; position:absolute; inset:-6px; border-radius:50%;
      border: 1px dashed rgba(116,240,255,.35);
      animation: orbit 6s linear infinite;
    }
    @keyframes orbit { to { transform: rotate(360deg) } }
    .node i{ color:#081029; background:#b5f7ff; border-radius:8px; padding:6px; font-size:1rem }

    .step-title{
      margin:0; font-weight:900; font-size: var(--fz-step); letter-spacing:.2px;
    }
    .step-desc{
      margin:6px 0 0 0; color: var(--ink-2);
      max-width: 65ch;
    }

    /* CTA */
    .actions{
      margin-top: clamp(var(--s-6), 3vw, var(--s-10));
      display:flex; flex-wrap:wrap; gap:12px; align-items:center;
    }
    .btn{
      display:inline-flex; align-items:center; gap:10px;
      padding: 12px 18px; border-radius: 999px;
      text-decoration:none; font-weight:900; letter-spacing:.02em;
      transition: transform var(--dur-1) ease, box-shadow var(--dur-2) ease, background var(--dur-1) ease;
      border:1px solid rgba(255,255,255,.2);
    }
    .btn-primary{
      background: linear-gradient(90deg, var(--primary), var(--primary-2));
      color:#0a0b16;
      box-shadow: 0 12px 36px rgba(116,240,255,.25), inset 0 0 0 1px rgba(255,255,255,.4);
    }
    .btn-primary i{ color:#0a0b16 }
    .btn-primary:hover{ transform: translateY(-1px); box-shadow: 0 16px 46px rgba(124,92,255,.35) }
    .btn-ghost{
      background: transparent; color: var(--ink-2);
    }
    .btn-ghost:hover{ color: var(--ink) }

    .subnote{ color: var(--ink-2); font-size:.92rem }

    /* Accessibility focus */
    .btn:focus-visible{
      outline:none; box-shadow: 0 0 0 3px rgba(116,240,255,.45), 0 0 0 6px rgba(124,92,255,.28);
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce){
      *{ transition-duration:.01ms !important; animation-duration:.01ms !important }
    }
  </style>
</head>
<body>

  <div class="stars" aria-hidden="true"></div>

  <section class="aura-wrap" aria-labelledby="sv-title">
    <div class="aura-grid">
      <!-- Left: stacked feature cards -->
      <div class="stack" aria-hidden="false">
        

        <article class="stack-card" aria-label="Editorial photo challenges">
          <div class="bg"></div>
          <span class="chip"><i class="fa-solid fa-camera-retro"></i> Showcase Briefs</span>
          <div class="label">
            <span class="kicker">Creative</span>
            <h3 class="headline">Shoots that showcase range and craft</h3>
          </div>
        </article>

        <article class="stack-card" aria-label="Recognition and brand access">
          <div class="bg"></div>
          <span class="chip"><i class="fa-solid fa-award"></i> Recognition</span>
          <div class="label">
            <span class="kicker">Career</span>
            <h3 class="headline">Awards, press, and direct brand collaboration</h3>
          </div>
        </article>
      </div>

      <!-- Right: content -->
      <div class="content-card">
        <p class="eyebrow">About &amp; Format</p>
        <h2 id="sv-title" class="title">The Journey to <span class="accent">Recognition</span></h2>

        <p class="lead">
          Showverse is Fashion Vogue’s signature competitive showcase — a contemporary stage where discovery meets spectacle. It fuses digital access, immersive virtual worlds, and live competitions into one connected experience.
        </p>

        <ol class="timeline" role="list">
          <li class="t-item">
            <div class="node" aria-hidden="true"><i class="fa-solid fa-file-signature"></i></div>
            <div>
              <p class="step-title">1. Entry &amp; Screening</p>
              <p class="step-desc">Create a profile, upload your portfolio, and pass a quick creative review to join the cohort.</p>
            </div>
          </li>

          <li class="t-item">
            <div class="node" aria-hidden="true"><i class="fa-solid fa-camera-retro"></i></div>
            <div>
              <p class="step-title">2. Themed Challenges</p>
              <p class="step-desc">Respond to editorial briefs and guided shoots that highlight technique, narrative, and versatility.</p>
            </div>
          </li>

          

          <li class="t-item">
            <div class="node" aria-hidden="true"><i class="fa-solid fa-award"></i></div>
            <div>
              <p class="step-title">4. Recognition &amp; Opportunities</p>
              <p class="step-desc">Gain awards, press features, and collaboration offers with brands and creators.</p>
            </div>
          </li>
        </ol>

       
        <p class="subnote" style="margin-top:8px">Tip: Bring a concise, editorial-ready portfolio for the fastest screen.</p>
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