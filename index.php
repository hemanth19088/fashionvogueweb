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
        /* Optional: Import stylish fonts from Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Cormorant:wght@700&family=Poppins:wght@300;400;600&display=swap');

        /* Basic body reset */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #0d0d0d; /* Setting body background for standalone viewing */
        }

        .hero-section {
            /* Full screen setup */
            height: 100vh;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            color: #ffffff;
        }

        .hero-background {
            /* Background image setup */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.pexels.com/photos/1629236/pexels-photo-1629236.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); /* Orange/Green/Black blend image */
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        /* Dark overlay for text readability */
        .hero-background::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.65);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            padding: 20px;
        }

        .hero-phrase {
            font-family: 'Cormorant', serif; /* Using the elegant serif font */
            font-size: 7vw; /* Responsive font size */
            font-weight: 700;
            line-height: 1.1;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin: 0;
            opacity: 0; /* Start hidden for animation */
            animation: fadeInUp 1.5s ease-out forwards;
        }

        /* Staggered animation delays for each phrase */
        .hero-phrase.p1 {
            animation-delay: 0.5s;
        }
        .hero-phrase.p2 {
            font-size: 3vw;
            letter-spacing: 3px;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            animation-delay: 1.5s;
            margin-top: 10px;
        }
        
        /* --- Email Form Styling --- */
        .hero-form {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0; /* Start hidden */
            animation: fadeInUp 1.5s ease-out forwards;
            animation-delay: 2.5s; /* Appears last */
        }

        .hero-email-input {
            flex-grow: 1; /* Takes up available space */
            padding: 18px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s;
        }

        .hero-email-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .hero-email-input:focus {
            border-color: #D4A392; /* Highlight color on focus */
        }

        .hero-submit-btn {
            padding: 18px 35px;
            border: none;
            border-radius: 8px;
            background-color: #D4A392; /* Brand color */
            color: #000000;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: background-color 0.4s;
        }
        
        .hero-submit-btn:hover {
            background-color: #E2B2A2; /* Lighter hover color */
        }
        
        /* Animation keyframes */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* --- MODIFIED: Responsive Design for Smaller Screens --- */
        @media (max-width: 768px) {
            /* Make the section height flexible on mobile */
            .hero-section {
                height: auto; /* Allows the section to fit its content */
                min-height: 90vh; /* Ensures it still feels immersive */
                padding: 60px 0; /* Adds vertical spacing */
            }

            /* Reduce font sizes to prevent text from being too large */
            .hero-phrase {
                font-size: 11vw;
                letter-spacing: 3px;
            }
            .hero-phrase.p2 {
                font-size: 5.5vw;
                letter-spacing: 2px;
                margin-top: 5px;
            }

            /* Make the form more compact */
            .hero-form {
                flex-direction: column; /* Stack form elements */
                width: 90%;
                margin-top: 35px; /* Reduced space above the form */
            }
            .hero-email-input, .hero-submit-btn {
                width: 100%;
                padding: 16px; /* Unified padding */
                font-size: 15px;
            }
        }

    </style>

    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="hero-content">
            <h1 class="hero-phrase p1">A New Era of Fashion</h1>
            <h2 class="hero-phrase p2">Is Coming Soon</h2>
            
			  <a href="https://wa.me/9196766199848?text=I'm%20interested%20in%20your%20content!" target="_blank" style="background-color: #000; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 5px;">I'm Interested</a>		  </div>
        </div>
    </section>

        
<!-- End of App Launch Section -->
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
		   background-color: #000000; /* A very light, almost white background */
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
		   border: 1px solid #000000;
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

	   /* Responsive adjustments */
	   @media (max-width: 768px) {
		   .section-title {
			   font-size: 2.5rem;
		   }
	   }
   </style>
<body class="bg-gray-50">
   <!-- Section 2: Key Features -->
   <section class="py-16 md:py-28 bg-gray-200">
	   <div class="container mx-auto px-6 bg-black rounded-2xl text-white py-12 md:py-20">
		   <!-- Section Header -->
		   <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
			   <p class="text-uppercase brand-accent font-semibold tracking-widest mb-2">WHAT YOU'LL DISCOVER</p>
			   <h2 class="section-title mb-4">
				   <span class="text-dark-Green">Key Features of the </span><span class="brand-accent">FashionVogue</span>
			   </h2>
		   </div>

		   <!-- Features Grid -->
		   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
			   <!-- Feature 1: Virtual Fashion Week -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.82m5.84-2.56a16.95 16.95 0 00-2.58-.22m2.58 2.78a16.92 16.92 0 01-2.58-.22m0 0A16.92 16.92 0 015.63 12a16.95 16.95 0 015.58-6.84m-5.58 6.84a6 6 0 01-2.28 2.58m-2.28-2.58a6 6 0 015.84-7.38v4.82m-5.84 2.56a16.95 16.95 0 002.58.22m-2.58-2.78a16.92 16.92 0 002.58.22m0 0A16.92 16.92 0 0018.37 12a16.95 16.95 0 00-5.58-6.84m5.58 6.84a6 6 0 002.28-2.58m2.28 2.58a6 6 0 00-5.84 7.38v-4.82" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">Virtual Fashion Week</h3>
				   <p class="section-subtitle !text-base">Be front row at fully immersive 3D catwalks—couture reveals from visionary designers in breathtaking digital environments.</p>
			   </div>
			   <!-- Feature 2: Digital Couture Closet -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">Digital Couture Closet</h3>
				   <p class="section-subtitle !text-base">Collect, style, and showcase exclusive fashion wearables—your signature looks for the new digital era.</p>
			   </div>
			   <!-- Feature 3: Atelier Access -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.311a15.045 15.045 0 01-7.5 0C4.508 17.627 2.25 14.454 2.25 10.5 2.25 6.546 4.508 3.373 7.5 1.5c3.679 1.873 6.168 5.046 6.168 9.046a12.06 12.06 0 01-1.25 5.25m3.75-5.25a12.06 12.06 0 00-1.25-5.25m0 0a15.045 15.045 0 00-7.5 0" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">Atelier Access</h3>
				   <p class="section-subtitle !text-base">Connect with designers and stylists, attend exclusive talks, and go behind the scenes of collection-making.</p>
			   </div>
			   <!-- Feature 4: AR Fitting Rooms -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">AR Fitting Rooms</h3>
				   <p class="section-subtitle !text-base">Try on digital garments virtually and see how they move, fit, and flow with cutting‑edge AR technology.</p>
			   </div>
			   <!-- Feature 5: Limited Edition Drops -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">Limited Edition Drops</h3>
				   <p class="section-subtitle !text-base">Secure rare runway pieces and time-limited digital looks from leading fashion houses before anyone else.</p>
			   </div>
			   <!-- Feature 6: Style Socials -->
			   <div class="feature-card">
				   <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
					   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
				   </div>
				   <h3 class="text-2xl mb-3">Style Socials</h3>
				   <p class="section-subtitle !text-base">Join virtual shows, styling challenges, and live community events with creators and fans from across the globe.</p>
			   </div>
		   </div>
	   </div>
   </section>

	<!-- Start of Testimonial section
	============================================= -->
	<section id="ori-testimonial-1" class="ori-testimonial-section-1 position-relative">
    <div class="ori-vector-bg position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
        <img src="assets/img/vector/tst-vector1.png" alt="">
    </div>
    <div class="container">
        <div class="ori-testimonial-content-1 position-relative">
            <div class="ori-testimonial-title text-center text-uppercase">
                <h3>What Our Clients Say</h3>
            </div>
            <div class="ori-testimonial-slider-1">

                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“A high level of professionalism and creativity has been consistently experienced through our collaboration with Fashion Vogue. Opportunities have been created, careers have been launched, and talent has been showcased with excellence. Being associated with a brand that is reshaping the future of fashion in India is genuinely appreciated.”</p>
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
                            <p>“Exceptional planning and execution have been witnessed in every event conducted by Fashion Vogue. Through their platform, fresh talent has been introduced and industry engagement has been greatly enhanced.”</p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Ramya</h4>
                                <span>CLIENT</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ori-testimonial-item-area">
                    <div class="ori-testimonial-item-1">
                        <div class="ori-testimonial-text text-center pera-content">
                            <p>“Exceptional planning and execution have been witnessed in every event conducted by Fashion Vogue. Through their platform, fresh talent has been introduced and industry engagement has been greatly enhanced.”</p>
                            <div class="ori-testimonial-author text-center text-uppercase">
                                <h4>Lalitha</h4>
                                <span>Client</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel_nav">
                <button type="button" class="testi-left_arrow"><img src="assets/img/vector/prev.png" alt="Previous Testimonial"></button>
                <button type="button" class="testi-right_arrow"><img src="assets/img/vector/next.png" alt="Next Testimonial"></button>
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
  


           

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


