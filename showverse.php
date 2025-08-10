<?php
$page_id = 'showverse';
$body_class = 'ori-digital-studio';
$meta_overrides = [
    'title' => 'Showverse - Fashion Vogue',
    'description' => 'Explore the world of fashion through our innovative Showverse platform.',
    'keywords' => 'fashion, showverse, digital fashion, fashion platform, fashion technology'
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


<!-- Start of banner section -->
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
                <p>We have a awesome <span>Team</span></p>
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
                    We are Responsive to build success
                </div>
                <h1 class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    Build <span>Digital</span>
                    Product Brand
                </h1>
                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">Our employees are our biggest strength. Through the combination of experience, loyalty and up-and-coming young prospects.</p>
                <div class="banner-play-btn d-flex wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                    <div class="ori-btn-7">
                        <a href="contact">Get Started</a>
                    </div>
                    <div class="banner-play">
                        <a class="d-flex video_box align-items-center" href="https://www.youtube.com/watch?v=bIoPkZRVll"><i class="fas fa-play-circle"></i> <span>Check Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Banner section -->

<!-- Start of Sponsor section -->
<section id="ori-sponsor-7" class="ori-sponsor-section-7">
    <div class="container">
        <div class="ori-sponsor-content-7 position-relative">
            <h3>Over 400+ Companise Worldwide joined with <span>Orixy</span></h3>
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
<!-- End of Sponsor section -->

<!-- Start of About section -->
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
                            <div class="sub-title text-uppercase">About our Company</div>
                            <h2>Beyond a coworking
                                space with <span>Orixy</span>
                            </h2>
                        </div>
                        <div class="ori-about-text-wrap-7 pera-content">
                            <p>When it comes to making multiple business decisions, it's easy to get caught up in the weeds.</p>
                            <p>Your workspace should provide you more tools and resources to conquer everyday work challenges and prepare you for your best. A virtual office is the smartest way to establish a presence in a new market</p>
                            <p>Choose a plan with phone and virtual receptionist support.</p>
                            <div class="ori-btn-7">
                                <a href="contact">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About section -->

<!-- Start of Service section -->
<section id="ori-service-7" class="ori-service-section-7">
    <div class="container">
        <div class="ori-section-title-7 text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
            <div class="sub-title text-uppercase">Our Services</div>
            <h2>Beyond a coworking
                space with <span>Orixy</span>
            </h2>
        </div>
        <div class="ori-service-content-7 position-relative">
            <div class="ori-service-silider-7">
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-pencil-ruler"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="service-single.html">Web design</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-computer-speaker"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="service-single.html">Branding</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-briefcase"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="service-single.html">Web developmnt</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-4 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-mouse-pointer"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="#">Pay-Per-Click</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-3 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-pencil-ruler"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="service-single.html">Web design</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
                        </div>
                    </div>
                </div>
                <div class="ori-service-item-7 position-relative">
                    <div class="ori-service-inner-item-7 ser-color-2 position-relative">
                        <span class="service-shape1 position-absolute"> </span>
                        <div class="ori-service-icon">
                            <i class="fal fa-pencil-ruler"></i>
                        </div>
                        <div class="ori-service-text pera-content">
                            <h3><a href="service-single.html">Web design</a></h3>
                            <p>In the performance of our tasks and duties, we are faithful.</p>
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
<!-- End of Service section -->

<!-- Start of Video Skill section -->
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
                    <div class="sub-title text-uppercase">Our Skill</div>
                    <h2>
                        <span>Orixy</span>is the best company for skills
                    </h2>
                </div>
                <div class="ori-skill-text-progress-bar wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <p>Your workspace should provide you more tools and resources to conquer everyday work challenges and prepare you for your best. A virtual office is the smartest way to establish new market. </p>
                    <div class="ori-skill-progress-7">
                        <div class="skill-progress-bar">
                            <div class="skill-set-percent headline">
                                <h4>Crativity</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="92"></div>
                                </div>
                            </div>
                            <div class="skill-set-percent headline">
                                <h4>Work Management</h4>
                                <div class="progress">
                                    <div class="progress-bar" data-percent="85"></div>
                                </div>
                            </div>
                            <div class="skill-set-percent headline">
                                <h4>Skill</h4>
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
                                2k+ Real Clients. <a href="about.html"><span>Explor now</span> <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Video Skill section -->

<?php include __DIR__ . '/includes/footer.php'; ?>
