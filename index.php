<?php
  $page_id = 'home';
  $body_class = 'ori-digital-studio';
  include __DIR__ . '/includes/head.php';
?>
	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
    <div class="cursor"></div>

    <?php include __DIR__ . '/includes/header.php'; ?>

	<section id="ori-slider-1" class="ori-slider-section-1 position-relative">

    <style>
        /* --- Main Slider Styles --- */
        /* NOTE: For this section to display correctly, you may need to define
           the utility classes used (e.g., .position-relative, .position-absolute,
           .text-uppercase, .text-center, .ul-li) in your main stylesheet.
        */
        .ori-slider-content-1 {
            position: relative;
            overflow: hidden;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ori-slider-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1; 
        }
        .ori-slider-img video {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .ori-slider-text {
            position: relative;
            z-index: 2; 
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        /* --- Audio Button Styles --- */
        .audio-toggle-btn {
            position: absolute;
            bottom: 30px;
            right: 30px;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: 1px solid white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }
        .audio-toggle-btn:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>

    <div class="ori-slider-content-wrapper-1 position-relative">
        
        <div class="ori-slider-social position-absolute text-uppercase ul-li">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
            </ul>
        </div>
        
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>

        <div class="ori-slider-wrap-1">
            <div class="ori-slider-content-1 position-relative">
                <div class="ori-slider-img position-absolute">
                    <video id="background-video" autoplay loop muted playsinline src="assets/images/demo video.mp4"></video>
                </div>
                <div class="ori-slider-text text-center text-uppercase">
                    <h1>Discover Your <span>Aesthetic</span> <i class="fas fa-arrow-right"></i></h1>
                </div>
                <button id="audio-btn" class="audio-toggle-btn" aria-label="Toggle Audio">
                    <i class="fas fa-volume-off"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('background-video');
            const audioBtn = document.getElementById('audio-btn');
            
            // Check if the button actually exists before adding a listener
            if (audioBtn) {
                const audioIcon = audioBtn.querySelector('i');
                audioBtn.addEventListener('click', function() {
                    if (video.muted) {
                        video.muted = false;
                        audioIcon.classList.remove('fa-volume-off');
                        audioIcon.classList.add('fa-volume-high');
                    } else {
                        video.muted = true;
                        audioIcon.classList.remove('fa-volume-high');
                        audioIcon.classList.add('fa-volume-off');
                    }
                });
            }
        });
    </script>
</section>
<!-- End of Slider section
	============================================= -->


<!-- Start of App Launch Section -->
  <style>
    /* --- Styles for the announcement and new button --- */
    .ori-app-launch-text .announcement-text {
        font-size: 1.2rem;
        line-height: 1.7;
        margin-bottom: 40px; /* Increased space for the button */
    }

    /* A stylish, theme-friendly button */
    .ori-btn-app-launch {
        display: inline-block;
        padding: 12px 35px;
        border: 2px solid; /* Uses the current text color */
        color: inherit; /* Inherits text color */
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .ori-btn-app-launch:hover {
        background-color: white; /* Example hover effect */
        color: black;
        opacity: 1;
    }
</style>

<section id="ori-app-launch" class="ori-app-launch-section-1 position-relative">
    <div class="container">
        <div class="ori-section-title-1 text-center text-uppercase wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <h2>Our App is <span>Launching Soon</span></h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="ori-app-launch-img text-center">
                    <img src="https://placehold.co/550x580/1A202C/FFFFFF?text=FashionVogue&font=playfairdisplay" alt="A creative preview of the FashionVogue app">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="ori-app-launch-text">
                    <p class="announcement-text">
                        Get ready to enter a new world of style. Our exclusive mobile app for iOS and Android is preparing for takeoff. More details will be revealed soon!
                    </p>
                    
                    <a href="app.php" class="ori-btn-app-launch">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="line_animation">
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
    </div>
</section>
        
<!-- End of App Launch Section -->

<!-- Start of Service section
	============================================= -->
	<style>
    /* --- Styles for the Narrative Service Layout --- */
    .narrative-service-container {
        /* Adjusted padding for when there's no top heading */
        padding-top: 0;
    }

    .service-process-list {
        padding-right: 30px; /* Space between text and image */
    }

    .service-step {
        display: flex;
        padding: 35px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        gap: 30px;
    }
    .service-step:first-child {
        padding-top: 0;
    }
    .service-step:last-child {
        border-bottom: none;
    }

    .step-number {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        line-height: 1.2;
    }

    .step-content h3 {
        font-size: 2rem;
        margin-top: 0;
        margin-bottom: 15px;
    }
    .step-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 0;
        opacity: 0.8;
    }

    .service-visual {
        height: 100%;
        min-height: 500px; /* Ensure it has height on smaller viewports */
        background-size: cover;
        background-position: center;
        border-radius: 8px;
    }
</style>

<section id="ori-service-1" class="ori-service-section-1">
    <div class="container">
        <div class="narrative-service-container">
            <div class="row">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="service-process-list">
                        <div class="service-step">
                            <div class="step-number">01</div>
                            <div class="step-content">
                                <h3>Discovery & Strategy</h3>
                                <p>Every great design begins with a deep understanding. We partner with you to uncover your brand's core narrative, audience, and goals, crafting a strategic foundation for everything that follows.</p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="step-number">02</div>
                            <div class="step-content">
                                <h3>Brand Identity & Design</h3>
                                <p>We translate your story into a compelling visual identity. From logos and color palettes to typography, we create a cohesive and memorable brand that resonates with your customers and stands out in the market.</p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="step-number">03</div>
                            <div class="step-content">
                                <h3>Digital Experience & Launch</h3>
                                <p>We bring your brand's story to life online. Our team designs and develops beautiful, intuitive websites and digital platforms that engage users and drive results, ensuring a flawless launch into the digital world.</p>
                            </div>
                        </div>
                    </div>
                </div>

                < <div class="col-lg-5 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
    <img src="assets/images/home page/about.jpg" alt="A visual representation of a creative journey in design" class="service-visual-img">
</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Service section
	============================================= -->

	<!-- Start of Testimonial section
	============================================= -->
	<section id="ori-testimonial-1" class="ori-testimonial-section-1 position-relative">
		<div class="ori-vector-bg position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
			<img src="assets/img/vector/tst-vector1.png" alt="">
		</div>
		<div class="container">
			<div class="ori-testimonial-content-1 position-relative">
				<div class="ori-testimonial-title text-center text-uppercase">
					<h3>What our Client say</h3>
				</div>
				<div class="ori-testimonial-slider-1">
					<div class="ori-testimonial-item-area">
						<div class="ori-testimonial-item-1">
							<div class="ori-testimonial-text text-center pera-content">
								<p>“A high level of professionalism and creativity has been consistently experienced through our collaboration with Fashion Vogue. Opportunities have been created, careers have been launched, and talent has been showcased with excellence. Being associated with a brand that is reshaping the future of fashion in India is genuinely appreciated.
								</p>
								<div class="ori-testimonial-author text-center text-uppercase">
									<h4>Lasya Gouda</h4>
									<span>CLIENT</span>
								</div>
							</div>
						</div>
					</div>
					<div class="ori-testimonial-item-area">
						<div class="ori-testimonial-item-1">
							<div class="ori-testimonial-text text-center pera-content">
								<p>“Exceptional planning and execution have been witnessed in every event conducted by Fashion Vogue. Through their platform, fresh talent has been introduced and industry engagement has been greatly enhanced.
								</p>
								<div class="ori-testimonial-author text-center text-uppercase">
									<h4>Ramya </h4>
									<span>CLIENT</span>
								</div>
							</div>
						</div>
					</div>
					<div class="ori-testimonial-item-area">
						<div class="ori-testimonial-item-1">
							<div class="ori-testimonial-text text-center pera-content">
								<p>“Exceptional planning and execution have been witnessed in every event conducted by Fashion Vogue. Through their platform, fresh talent has been introduced and industry engagement has been greatly enhanced.”
								</p>
								<div class="ori-testimonial-author text-center text-uppercase">
									<h4>Lalitha</h4>
									<span>Client<Span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel_nav">
					<button type="button" class="testi-left_arrow"><img src="assets/img/vector/prev.png" alt=""></button>
					<button type="button" class="testi-right_arrow"><img src="assets/img/vector/next.png" alt=""></button>
				</div>
			</div>
		</div>
		<div class="line_animation">
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
			<div class="line_area"></div>
		</div>
	</section>				
<!-- End of Testimonial section
	============================================= -->	 
<section id="ori-blog-5" class="ori-blog-section-5">
    <div class="container">
        <div class="ori-blog-top-content-5 d-flex justify-content-between">
            <div class="ori-section-title-5 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                <h2 style="color: #ffffff;">The Vogue Edit</h2>
            </div>
            </div>
        </div>
        <div class="ori-blog-content-5">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <div class="ori-blog-inner-item-5">
                        <div class="ori-blog-img">
                            <img src="assets/images/home page/blog.jpg" alt="A model in a minimalist Sabyasachi bridal lehenga">
                        </div>
                        <div class="ori-blog-text pera-content">
                            <span class="blog-category text-uppercase"><a href="#">Trends</a></span>
                            <h3><a href="#">The New Indian Bride: Sabyasachi's Quiet Revolution</a></h3>
                            <p>Sabyasachi's latest bridal collection redefines wedding wear with a focus on 'stillness over spectacle'. We explore how this move towards minimalism and meaning is shaping the future of Indian bridal fashion...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                    <div class="ori-blog-inner-item-5">
                        <div class="ori-blog-img">
                            <img src="assets/images/home page/blog1.jpg" alt="Designer JJ Valaya on the ramp at his India Couture Week show">
                        </div>
                        <div class="ori-blog-text pera-content">
                            <span class="blog-category text-uppercase"><a href="#">Designer Spotlight</a></span>
                            <h3><a href="#">JJ Valaya: A 33-Year Legacy of Couture</a></h3>
                            <p>We delve into JJ Valaya's spectacular India Couture Week finale, a show that was more than just fashion – it was a cinematic journey through heritage, craftsmanship, and the designer's enduring vision...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                    <div class="ori-blog-inner-item-5">
                        <div class="ori-blog-img">
                            <img src="assets/images/home page/blog2.jpg" alt="A collage of Indian models with a quote about fair pay">
                        </div>
                        <div class="ori-blog-text pera-content">
                            <span class="blog-category text-uppercase"><a href="#">Style Forecast</a></span>
                            <h3><a href="#">The Edit: Top 5 Trends Defining Autumn/Winter 2025</a></h3>
                            <p>From the resurgence of '70s-inspired faux fur to the dominance of digital lavender, the upcoming season is a blend of nostalgic comfort and futuristic optimism. We break down the essential looks, textures, and tech-infused accessories you need to know about...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section
	============================================= -->
    <!-- Start of Opportunities Section -->             
    <style>
    /* --- Styles for the Narrative Service Layout --- */
    #ori-service-1 .narrative-service-container {
        padding-top: 0;
    }
    #ori-service-1 .service-process-list {
        padding-right: 30px;
    }
    #ori-service-1 .service-step {
        display: flex;
        padding: 35px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        gap: 30px;
    }
    #ori-service-1 .service-step:first-child {
        padding-top: 0;
    }
    #ori-service-1 .service-step:last-child {
        border-bottom: none;
    }
    #ori-service-1 .step-number {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        line-height: 1.2;
    }
    #ori-service-1 .step-content h3 {
        font-size: 2rem;
        margin-top: 0;
        margin-bottom: 15px;
    }
    #ori-service-1 .step-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 0;
        opacity: 0.8;
    }
    #ori-service-1 .service-visual {
        height: 100%;
        min-height: 500px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
    }
</style>

<section id="ori-service-1" class="ori-service-section-1">
    <div class="container">
        <div class="narrative-service-container">
            <div class="row">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="service-process-list">
                        <div class="service-step">
                            <div class="step-number">01</div>
                            <div class="step-content">
                                <h3>Discovery & Strategy</h3>
                                <p>Every great design begins with a deep understanding. We partner with you to uncover your brand's core narrative, audience, and goals, crafting a strategic foundation for everything that follows.</p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="step-number">02</div>
                            <div class="step-content">
                                <h3>Brand Identity & Design</h3>
                                <p>We translate your story into a compelling visual identity. From logos and color palettes to typography, we create a cohesive and memorable brand that resonates with your customers and stands out in the market.</p>
                            </div>
                        </div>
                        <div class="service-step">
                            <div class="step-number">03</div>
                            <div class="step-content">
                                <h3>Digital Experience & Launch</h3>
                                <p>We bring your brand's story to life online. Our team designs and develops beautiful, intuitive websites and digital platforms that engage users and drive results, ensuring a flawless launch into the digital world.</p>
                            </div>
                        </div>
                    </div>
                </div>

               <div class="col-lg-5 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
    <img src="assets/images/home page/about.jpg" alt="A visual representation of a creative journey in design" class="service-visual-img">
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* --- Minimal CSS for the Opportunities Section --- */
    #ori-opportunities {
        padding: 80px 0; /* Standard vertical spacing */
    }
    .opportunity-card {
        border: 1px solid #e9ecef; /* A light, subtle border */
        padding: 2rem;
        height: 100%; /* Ensures cards in the same row have equal height */
        border-radius: 8px;
    }
    .opportunity-card h3 {
        font-size: 1.75rem;
    }
    .opportunity-card .role-description {
        opacity: 0.8;
        margin-bottom: 1.5rem;
    }
</style>

<section id="ori-opportunities">
    <div class="container">
        <div class="ori-section-title-1 text-center text-uppercase wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="margin-bottom: 50px;">
            <h2>Join Our <span>Journey</span></h2>
        </div>

        <div class="row">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="opportunity-card">
                    <h3>Fashion Curator & Archivist</h3>
                    <p class="role-description">
                        Become a storyteller of style. In this role, you will manage our digital fashion archives, curate collections for online exhibitions, and preserve the legacy of iconic designs for a new generation of fashion enthusiasts.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <div class="opportunity-card">
                    <h3>Lead Stylist & Trend Forecaster</h3>
                    <p class="role-description">
                        Shape the future of fashion. As our lead stylist, you will create breathtaking editorial looks, identify emerging global trends, and guide the creative direction of our content to inspire our audience.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Opportunities Section -->           

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


