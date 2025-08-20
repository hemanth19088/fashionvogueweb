<?php
  $page_id = 'opportunities';
  $body_class = 'ori-digital-studio';
  include __DIR__ . '/includes/head.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunities - Fashion Vogue</title>

    <!-- CDN CSS & Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #000000;
            color: #ffffff;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Oswald', sans-serif;
            text-transform: uppercase;
        }
        .hero-section {
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0,0,0,0.6);
        }
        .opportunity-card {
            background-color: #1a1a1a;
            border-radius: 1rem;
            overflow: hidden;
            border: 1px solid #333;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .opportunity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(234, 179, 8, 0.2);
        }
        .timeline-item {
            position: relative;
            padding-bottom: 2.5rem;
            padding-left: 2.5rem;
            border-left: 2px solid #4a4a4a;
        }
        .timeline-item:last-child {
            border-left: 2px solid transparent;
        }
        .timeline-dot {
            position: absolute;
            left: -0.8rem;
            top: 0;
            height: 1.5rem;
            width: 1.5rem;
            background-color: #EAB308;
            border-radius: 9999px;
            border: 4px solid #000;
        }
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in-up.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <div class="cursor"></div>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- Section 1: Hero -->
<section class="hero-section py-24 md:py-40" 
            ><img src="assets/images/oppurtunities/bgo11.jpg" alt="Fashion runway" class="hero-image w-full h-full object-cover absolute inset-0 z-0" />

            <div class="container mx-auto px-6 text-center relative z-3">
                <h1 class="text-5xl md:text-7xl font-bold text-white drop-shadow-lg">Your Future in Fashion Starts Now</h1>
                <p class="text-xl md:text-2xl mt-4 max-w-3xl mx-auto  text-gray-200">This isn't just an audition. It's your ticket to the biggest runways, campaigns, and collaborations in India.</p>
            </div>
        </section>

        <!-- Section 2: Your Big Break Starts Here -->
        <section class="py-20 md:py-28 bg-black">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Your Big Break Starts Here</h2>
                <p class="text-lg text-gray-400 max-w-2xl mx-auto mb-16">No matter your talent, we have a spot for you. Here’s what you get:</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">
                    <div class="text-center p-6">
                        <i class="fas fa-camera-retro text-yellow-400 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Get Discovered</h3>
                        <p class="text-gray-400">Perform in front of 40+ celebrity directors and industry icons who are looking for the next big star.</p>
                    </div>
                    <div class="text-center p-6">
                        <i class="fas fa-book-open text-yellow-400 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Build Your Portfolio</h3>
                        <p class="text-gray-400">Get a professional, hardbound portfolio and features in major fashion magazines to show off your talent.</p>
                    </div>
                    <div class="text-center p-6">
                        <i class="fas fa-rocket text-yellow-400 text-5xl mb-4"></i>
                        <h3 class="text-2xl font-bold mb-2">Launch Your Career</h3>
                        <p class="text-gray-400">Unlock over 100 career opportunities, from runway shows to ad campaigns, all through our exclusive app.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Find Your Spotlight (Interactive Carousel) -->
        <section class="py-20 md:py-28 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold">Find Your Spotlight</h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto mt-4">Click on your role to see the amazing opportunities waiting for you.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card 1: Models -->
                    <div class="opportunity-card">
                        <img src="https://images.pexels.com/photos/322207/pexels-photo-322207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Model on runway" class="w-full h-72 object-cover">
                        <div class="p-8 text-center">
                            <h3 class="text-3xl font-bold mb-4">Are You a Model?</h3>
                            <p class="text-gray-300 mb-6">Walk the biggest runways and star in major campaigns. Your journey to become unforgettable starts here.</p>
                            <a href="models" class="bg-yellow-400 text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-yellow-300 transition-colors">Discover more</a>
                        </div>
                    </div>
                    <!-- Card 2: Designers -->
                    <div class="opportunity-card">
                        <img src="https://images.pexels.com/photos/7139703/pexels-photo-7139703.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Fashion designer with collection" class="w-full h-72 object-cover">
                        <div class="p-8 text-center">
                            <h3 class="text-3xl font-bold mb-4">Are You a Designer?</h3>
                            <p class="text-gray-300 mb-6">Showcase your collection to the world. Connect with buyers, press, and the models who will bring your vision to life.</p>
                            <a href="designers" class="bg-yellow-400 text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-yellow-300 transition-colors">Discover more</a>
                        </div>
                    </div>
                    <!-- Card 3: Makeup Artists -->
                    <div class="opportunity-card">
                        <img src="https://images.pexels.com/photos/3268732/pexels-photo-3268732.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Makeup artist working" class="w-full h-72 object-cover">

                        <div class="p-8 text-center">
                            <h3 class="text-3xl font-bold mb-4">Are You a Makeup Artist?</h3>
                            <p class="text-gray-300 mb-6">Create the looks that define a season. Work backstage with top models and get your artistry featured everywhere.</p>
                            <a href="makeup-artists" class="bg-yellow-400 text-black font-bold py-3 px-8 rounded-full text-lg hover:bg-yellow-300 transition-colors">Discover more </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4: How to Apply (Simple Timeline) -->
        <section id="apply" class="py-20 md:py-28 bg-black">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold">Your 3 Steps to Stardom</h2>
                    <p class="text-lg text-gray-400 max-w-2xl mx-auto mt-4">Applying is easy. Follow these simple steps to get started.</p>
                </div>
                <div class="max-w-2xl mx-auto">
                    <!-- Step 1 -->
                    <div class="timeline-item fade-in-up">
                        <div class="timeline-dot"></div>
                        <h3 class="text-3xl font-bold text-yellow-400 mb-2">Step 1: Create Your Profile</h3>
                        <p class="text-gray-300 text-lg">Click the "Register Now" button below. Fill out your details and tell us what makes you special. It only takes 5 minutes!</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="timeline-item fade-in-up">
                        <div class="timeline-dot"></div>
                        <h3 class="text-3xl font-bold text-yellow-400 mb-2">Step 2: Upload Your Best Work</h3>
                        <p class="text-gray-300 text-lg">Show us what you've got! Models and artists, upload your best photos. Designers, upload your lookbook. Make a great first impression!</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="timeline-item fade-in-up">
                        <div class="timeline-dot"></div>
                        <h3 class="text-3xl font-bold text-yellow-400 mb-2">Step 3: Get Your Audition Invite</h3>
                        <p class="text-gray-300 text-lg">Our team will review your profile. If you're a match, you'll get an exclusive invitation to India's Biggest Fashion Audition!</p>
                    </div>
                </div>
                <div class="text-center mt-12 fade-in-up">
                    <a href="#" class="bg-yellow-400 text-black font-bold py-4 px-12 rounded-full text-xl hover:bg-yellow-300 transition-colors transform hover:scale-105 inline-block">Register Now and Start Your Journey</a>
                </div>
            </div>
        </section>
    </main>
    
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <script>
        // Intersection Observer for animations
        document.addEventListener("DOMContentLoaded", () => {
            const animatedElements = document.querySelectorAll('.fade-in-up');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            animatedElements.forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
