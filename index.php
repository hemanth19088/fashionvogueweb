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

	<section id="ori-slider" class="ori-slider-section position-relative">

    <style>
        /* --- Main Slider Styles --- */
        /* NOTE: For this section to display correctly, you may need to define
           the utility classes used (e.g., .position-relative, .position-absolute,
           .text-uppercase, .text-center, .ul-li) in your main stylesheet.
        */
        .ori-slider-content {
            position: relative;
            overflow: hidden;
            min-height: 110vh;
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

    <div class="ori-slider-content-wrapper position-relative">
        
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

        <div class="ori-slider-wrap">
            <div class="ori-slider-content position-relative">
                <div class="ori-slider-img position-absolute">
                    <video id="background-video" autoplay loop muted playsinline src="assets/images/demo video.mp4"></video>
                </div>
                <div class="ori-slider-text text-center text-uppercase">
                    <h1>A NEW ERA OF FASHION  <span>IS COMING</span> <i class="fas fa-arrow-right"></i></h1>
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

 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Basic Setup */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        /* Section Styling */
        .app-launch-section {
            background-color: #121212; /* A deep, dark background */
            color: #ffffff;
            padding: 6rem 2rem; /* Generous padding for focus */
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Makes the section take up the full viewport height */
            box-sizing: border-box;
        }

        .launch-container {
            max-width: 650px; /* Optimal width for readability */
        }
        
        .launch-container h2 {
            font-size: 3rem; /* Large, impactful headline */
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .launch-container p {
            font-size: 1.125rem; /* 18px */
            color: #b0b0b0; /* Softer grey for the subtitle */
            line-height: 1.7;
            margin-bottom: 2.5rem;
        }

        /* WhatsApp Button Styling */
        .whatsapp-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff; /* Clean white button */
            color: #121212; /* Dark text */
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px; /* Pill shape */
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .whatsapp-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(255, 255, 255, 0.1);
        }

        .whatsapp-button svg {
            width: 1.5rem; /* 24px */
            height: 1.5rem;
            margin-right: 0.75rem; /* Space between icon and text */
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .app-launch-section {
                padding: 4rem 1.5rem;
            }
            .launch-container h2 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

    <section class="app-launch-section">
        <div class="launch-container">
            <h2>The Future of Fashion Fits in Your Pocket.</h2>
            <p>
                The wait is over. The FashionVerge app is launching soon, connecting models, designers, and industry professionals in one seamless ecosystem. Stop searching for opportunities—let them find you.
            </p>
            
            <a href="https://wa.me/919876543210?text=Hi!%20I'm%20interested%20in%20the%20FashionVerge%20app%20launch.%20Please%20keep%20me%20updated." class="whatsapp-button" target="_blank">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.21 4.41C9.93 4.41 4.8 9.53 4.8 15.82C4.8 18.23 5.46 20.53 6.64 22.49L4.85 27.18L9.75 25.35C11.62 26.41 13.84 27.04 16.21 27.04H16.22C22.49 27.04 27.62 21.92 27.62 15.63C27.62 9.34 22.5 4.22 16.22 4.22H16.21ZM13.81 9.32C14.07 9.32 14.3 9.33 14.49 9.33C14.74 9.33 15.06 9.33 15.22 9.77C15.42 10.29 16.14 12.18 16.23 12.35C16.32 12.52 16.36 12.72 16.23 12.92C16.1 13.12 16.06 13.2 15.9 13.36C15.73 13.53 15.58 13.68 15.42 13.88C15.25 14.08 15.08 14.31 15.29 14.63C15.5 14.95 16.01 15.7 16.66 16.31C17.49 17.11 18.25 17.38 18.57 17.51C18.9 17.64 19.06 17.59 19.26 17.39C19.46 17.19 19.88 16.64 20.1 16.34C20.32 16.05 20.55 15.96 20.81 16.05C21.07 16.14 22.65 16.9 22.95 17.05C23.25 17.2 23.46 17.29 23.55 17.41C23.64 17.53 23.64 18.01 23.42 18.33C23.2 18.65 22.31 19.45 21.8 19.9C21.29 20.35 20.62 20.48 20.06 20.48C19.5 20.48 18.84 20.31 18.23 20.1C17.1 19.72 15.82 19.03 14.35 17.69C12.56 16.06 11.35 14.01 11.08 13.56C10.82 13.11 10.03 11.95 10.03 11.01C10.03 10.07 10.5 9.61 10.72 9.39C10.94 9.17 11.22 9.13 11.45 9.13C11.53 9.13 11.61 9.13 11.69 9.13H11.75C11.97 9.13 12.18 9.13 12.35 9.13C12.39 9.13 12.43 9.13 12.48 9.13L12.56 9.17C12.86 9.25 13.07 9.32 13.23 9.32C13.43 9.32 13.59 9.32 13.81 9.32Z" fill="currentColor"></path>
                </svg>
                I'm Interested
            </a>
        </div>
    </section>
<title>In-House Collaboration Section</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root {
            --dark-bg: #2d3436;
            --primary-accent: #00a8ff; /* A vibrant blue as an accent */
            --light-text: #f5f6fa;
            --faded-text: #b2bec3;
            --hexagon-bg: rgba(255, 255, 255, 0.05);
            --hexagon-border: rgba(255, 255, 255, 0.2);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            margin: 0;
            padding: 0;
        }

        .collaboration-section {
            position: relative;
            background: linear-gradient(45deg, #25282cff, #0f0f0fff);
            color: var(--light-text);
            padding: 80px 20px;
            overflow: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.8rem;
            font-weight: 700;
            margin: 0 0 10px 0;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .section-header p {
            font-size: 1.1rem;
            color: var(--faded-text);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .collaboration-grid {
            display: grid;
            /* UPDATED: Changed to 5 columns for a single row layout */
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .collaboration-item {
            /* This clip-path creates the hexagon shape */
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            background-color: var(--hexagon-bg);
            border: 2px solid var(--hexagon-border);
            aspect-ratio: 1 / 1.1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .collaboration-item:hover {
            background-color: rgba(0, 168, 255, 0.1);
            border-color: var(--primary-accent);
        }

        .item-icon {
            font-size: 2.5rem;
            color: var(--primary-accent);
            margin-bottom: 15px;
        }

        .item-title {
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }
        
        /* REMOVED: Specific grid placement rules are no longer needed */

        .season-banner {
            position: absolute;
            top: 160px;
            right: -55px;
            background-color: var(--primary-accent);
            color: var(--dark-bg);
            padding: 10px 40px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            transform: rotate(90deg);
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 1200px) {
            .collaboration-grid {
                /* On tablets, wrap to 3 columns */
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 2rem;
            }
            .collaboration-grid {
                /* On small tablets/large phones, wrap to 2 columns */
                grid-template-columns: repeat(2, 1fr);
            }
            .season-banner {
                display: none;
            }
        }
        
        @media (max-width: 500px) {
             .collaboration-grid {
                /* On small phones, stack into a single column */
                grid-template-columns: 1fr;
                max-width: 300px;
                margin: 0 auto;
            }
        }

    </style>
</head>
<body>

<section class="collaboration-section">
    <div class="container">
        <header class="section-header">
            <h2>A Premium In-House Collaboration</h2>
            <p>India's most anticipated fashion platform, redefining brand activation and influencer reach — from the ramp to real-time content.</p>
        </header>

        <div class="collaboration-grid">
            <div class="collaboration-item">
                <div class="item-icon"><i class="fa-solid fa-clapperboard"></i></div>
                <h3 class="item-title">Reels & Stories</h3>
            </div>

            <div class="collaboration-item">
                <div class="item-icon"><i class="fa-solid fa-copyright"></i></div>
                <h3 class="item-title">Event Branding & Visual Placement</h3>
            </div>

            <div class="collaboration-item">
                <div class="item-icon"><i class="fa-solid fa-box-check"></i></div>
                <h3 class="item-title">Authentic Product Integration</h3>
            </div>

            <div class="collaboration-item">
                <div class="item-icon"><i class="fa-solid fa-camera-retro"></i></div>
                <h3 class="item-title">Exclusive In-House Shoots with Models</h3>
            </div>

            <div class="collaboration-item">
                <div class="item-icon"><i class="fa-solid fa-store"></i></div>
                <h3 class="item-title">Stalls</h3>
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
<style>
    .container .section-title,
    .container .feature-card h3 {
        color: black;
    }
</style>

<section class="py-16 md:py-28 bg-gray-200">
    <div class="container mx-auto px-6 bg-black rounded-2xl text-white py-12 md:py-20">
        <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
            <p class="text-uppercase brand-accent font-semibold tracking-widest mb-2">WHAT WE OFFER</p>
            <h2 class="section-title mb-4">
                <span class="text-white">Launch Your Modeling Career with </span><span class="brand-accent">FashionVerge</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Audition Alerts</h3>
                <p class="section-subtitle !text-base">Never miss a chance! Get instant messages for modeling tryouts that are a perfect match for you.</p>
            </div>
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Portfolio Builder</h3>
                <p class="section-subtitle !text-base">Show off your style! Easily make a cool online lookbook with your photos and info to share with agencies.</p>
            </div>
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Skill Workshops</h3>
                <p class="section-subtitle !text-base">Learn from real pros! Join fun online classes that teach you how to walk the runway and pose for photos.</p>
            </div>
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h6.375M9 12h6.375m-6.375 5.25h6.375M5.25 9h.008v.008H5.25V9zm.75 3h.008v.008H6v-.008zm.75 3h.008v.008H6.75v-.008zm.75 3h.008v.008H7.5v-.008zm6-12h.008v.008H13.5V9zm.75 3h.008v.008H14.25v-.008zm.75 3h.008v.008H15v-.008zm.75 3h.008v.008H15.75v-.008z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Agency Directory</h3>
                <p class="section-subtitle !text-base">Find your team! Look through our safe list of modeling agencies to find the perfect one for you.</p>
            </div>
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Expert Advice</h3>
                <p class="section-subtitle !text-base">Get secret tips from famous models and fashion experts to help you follow your dreams.</p>
            </div>
            <div class="feature-card">
                <div class="w-10 h-10 mx-auto mb-6 text-[#A18A70]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m-7.5-2.962c.57-1.023-.09-2.3-1.023-2.962A4.5 4.5 0 006 6A4.5 4.5 0 006 15a7.527 7.527 0 001.732 4.721m9.509 0a9.094 9.094 0 01-3.741-.479 3 3 0 01-4.682-2.72m-7.5-2.962c-.57 1.023.09 2.3 1.023 2.962a4.5 4.5 0 01-1.732 4.721M6 6c0-1.714 1.401-3.099 3.12-2.675a4.505 4.505 0 014.76 0c1.719-.424 3.12 1.07 3.12 2.675v3.999a4.5 4.5 0 01-1.171 3.243m-2.13-1.854a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708zM9 12a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708z" />
                    </svg>
                </div>
                <h3 class="text-2xl mb-3">Community Hub</h3>
                <p class="section-subtitle !text-base">Make new friends! Chat with other aspiring models, share your stories, and cheer each other on.</p>
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

  


           

    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


