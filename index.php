<?php
  $page_id = 'home';
  $body_class = 'ori-digital-studio';
  include __DIR__ . '/includes/head.php';
?>
<body>
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <div class="cursor"></div>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <!-- Section 1: YOUR ORIGINAL SLIDER SECTION (updated with corner fade) -->
        <section id="ori-slider" class="ori-slider-section position-relative">
            <div class="ori-slider-content-wrapper-1 position-relative">
                <div class="ori-slider-wrap">
                    <div class="ori-slider-content position-relative">
                        <!-- Center text -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center z-20 text-center w-full">
                            <span class="text-xl md:text-5xl font-display text-white drop-shadow-lg uppercase tracking-wide">
                                <br> A new era of <br>fashion is coming
                            </span>
                        </div>

                        <!-- Video layer -->
                        <div class="ori-slider-img">
                            <video id="background-video" autoplay loop muted playsinline src="assets/images/demo video.mp4"></video>
                        </div>

                        <!-- Base overlay -->
                        <div class="slider-overlay"></div>

                        <!-- Vignette overlay for corner fade -->
                        <div class="vignette-border"></div>

                        <!-- Controls -->
                        <button id="audio-btn" class="audio-toggle-btn" aria-label="Toggle Audio">
                            <i class="fas fa-volume-off"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Why Fashion Vogue (Interactive Cards) -->
        <section id="why-vogue" class="py-20 md:py-28 bg-black">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-display mb-12">Your Launchpad to Stardom</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="group perspective-1000"><div class="relative preserve-3d group-hover:rotate-y-180 w-full h-48 duration-500"><div class="absolute backface-hidden w-full h-full flex flex-col items-center justify-center bg-gray-900 border border-gray-700 rounded-lg p-4"><i class="fa-solid fa-trophy text-yellow-400 text-4xl mb-3"></i><h3 class="font-display text-xl">Lucrative Prizes</h3></div><div class="absolute rotate-y-180 backface-hidden w-full h-full flex items-center justify-center bg-yellow-400 text-black rounded-lg p-4"><p class="text-center font-semibold">Fuel your ambition with substantial cash rewards.</p></div></div></div>
                    <div class="group perspective-1000"><div class="relative preserve-3d group-hover:rotate-y-180 w-full h-48 duration-500"><div class="absolute backface-hidden w-full h-full flex flex-col items-center justify-center bg-gray-900 border border-gray-700 rounded-lg p-4"><i class="fa-solid fa-camera-retro text-yellow-400 text-4xl mb-3"></i><h3 class="font-display text-xl">Elite Photoshoots</h3></div><div class="absolute rotate-y-180 backface-hidden w-full h-full flex items-center justify-center bg-yellow-400 text-black rounded-lg p-4"><p class="text-center font-semibold">Build a world-class portfolio with high-fashion shoots.</p></div></div></div>
                    <div class="group perspective-1000"><div class="relative preserve-3d group-hover:rotate-y-180 w-full h-48 duration-500"><div class="absolute backface-hidden w-full h-full flex flex-col items-center justify-center bg-gray-900 border border-gray-700 rounded-lg p-4"><i class="fa-solid fa-person-booth text-yellow-400 text-4xl mb-3"></i><h3 class="font-display text-xl">The Grand Runway</h3></div><div class="absolute rotate-y-180 backface-hidden w-full h-full flex items-center justify-center bg-yellow-400 text-black rounded-lg p-4"><p class="text-center font-semibold">Command the stage on the most prestigious runway.</p></div></div></div>
                    <div class="group perspective-1000"><div class="relative preserve-3d group-hover:rotate-y-180 w-full h-48 duration-500"><div class="absolute backface-hidden w-full h-full flex flex-col items-center justify-center bg-gray-900 border border-gray-700 rounded-lg p-4"><i class="fa-solid fa-mobile-screen-button text-yellow-400 text-4xl mb-3"></i><h3 class="font-display text-xl">Insider Access</h3></div><div class="absolute rotate-y-180 backface-hidden w-full h-full flex items-center justify-center bg-yellow-400 text-black rounded-lg p-4"><p class="text-center font-semibold">Get exclusive casting calls and updates via our private app.</p></div></div></div>
                    <div class="group perspective-1000"><div class="relative preserve-3d group-hover:rotate-y-180 w-full h-48 duration-500"><div class="absolute backface-hidden w-full h-full flex flex-col items-center justify-center bg-gray-900 border border-gray-700 rounded-lg p-4"><i class="fa-solid fa-users text-yellow-400 text-4xl mb-3"></i><h3 class="font-display text-xl">Power Networking</h3></div><div class="absolute rotate-y-180 backface-hidden w-full h-full flex items-center justify-center bg-yellow-400 text-black rounded-lg p-4"><p class="text-center font-semibold">Connect with the titans of the fashion industry.</p></div></div></div>
                </div>
            </div>
        </section>
        
        <!-- Section 3: India's Biggest Audition (Animated Stats) -->
        <section id="audition" class="py-20 md:py-32 bg-gray-900 bg-cover bg-center" style="background-image: url('https://images.pexels.com/photos/19409315/pexels-photo-19409315.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            <div class="absolute inset-0 bg-black opacity-70"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h2 class="text-4xl md:text-6xl font-display text-white mb-12">The Epicenter of Indian Fashion</h2>
                <div id="stats-container" class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="stat-item text-center"><p class="text-5xl md:text-7xl font-display text-yellow-400" data-target="200">0</p><p class="text-lg font-semibold uppercase tracking-wider mt-2">Elite Models</p></div>
                    <div class="stat-item text-center"><p class="text-5xl md:text-7xl font-display text-yellow-400" data-target="40">0</p><p class="text-lg font-semibold uppercase tracking-wider mt-2">Industry Icons</p></div>
                    <div class="stat-item text-center"><p class="text-5xl md:text-7xl font-display text-yellow-400" data-target="100">0</p><p class="text-lg font-semibold uppercase tracking-wider mt-2">Career-Defining Roles</p></div>
                    <div class="stat-item text-center"><p class="text-5xl md:text-7xl font-display text-yellow-400" data-target="30">0</p><p class="text-lg font-semibold uppercase tracking-wider mt-2">Visionary Designers</p></div>
                </div>
            </div>
        </section>

        <!-- Section 4: Elite Participant Privileges -->
        <section id="privileges" class="py-20 md:py-28 bg-black">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16"><h2 class="text-4xl md:text-5xl font-display">Unlock The Inner Circle</h2><p class="text-lg text-gray-400 max-w-2xl mx-auto mt-4">As an elite participant, you receive more than an opportunity—you gain an empire.</p></div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">01</span><h3 class="text-2xl font-display">The Signature Portfolio</h3></div><p class="text-gray-300">Command attention with a bespoke, hardbound portfolio of your iconic runway moments.</p></div>
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">02</span><h3 class="text-2xl font-display">The Magazine Cover</h3></div><p class="text-gray-300">Solidify your status with a feature and full credits in a national fashion magazine.</p></div>
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">03</span><h3 class="text-2xl font-display">The Black Book</h3></div><p class="text-gray-300">Gain coveted access to top-tier designer & makeup artist lookbooks for future castings.</p></div>
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">04</span><h3 class="text-2xl font-display">The Luxury Collaboration</h3></div><p class="text-gray-300">Become the face of luxury, styled by premium brand partners in exclusive collaborations.</p></div>
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">05</span><h3 class="text-2xl font-display">The 3-Year All-Access Pass</h3></div><p class="text-gray-300">Your career is always on. Get three years of priority access to castings via our exclusive app.</p></div>
                    <div class="privilege-card p-8 rounded-lg"><div class="flex items-center mb-4"><span class="text-4xl font-display text-yellow-400 mr-4">06</span><h3 class="text-2xl font-display">The Direct Line</h3></div><p class="text-gray-300">Skip the line. Get direct access to brands and networks for priority invites and showcases.</p></div>
                </div>
            </div>
        </section>

        <!-- Section 5: Opportunities for All (Interactive Tabs) -->
        <section id="opportunities" class="py-20 md:py-28 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16"><h2 class="text-4xl md:text-5xl font-display">Your Spotlight Awaits</h2><p class="text-lg text-gray-400 max-w-2xl mx-auto mt-4">The stage is set. The world is watching. It's your time to define a legacy.</p></div>
                <div class="flex justify-center space-x-4 md:space-x-8 mb-12 border-b border-gray-700">
                    <button class="opportunity-tab active py-4 px-2 md:px-6 text-lg font-semibold" onclick="switchTab('models')">For Models</button>
                    <button class="opportunity-tab py-4 px-2 md:px-6 text-lg font-semibold" onclick="switchTab('designers')">For Designers</button>
                    <button class="opportunity-tab py-4 px-2 md:px-6 text-lg font-semibold" onclick="switchTab('artists')">For Makeup Artists</button>
                </div>
                <div id="opportunities-content">
                    <div id="models" class="opportunity-content grid md:grid-cols-2 gap-12 items-center"><img src="https://images.pexels.com/photos/3775087/pexels-photo-3775087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="rounded-lg object-cover w-full h-full max-h-[500px]" alt="Fashion Model"><div><h3 class="text-3xl font-display mb-6">Become Unforgettable</h3><ul class="space-y-4 text-lg text-gray-300"><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Claim your moment on the runway, guaranteed, before a panel of industry titans.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Unlock your future with 3 years of priority access to casting agents via our app.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Be immortalized in print with features in prestigious portfolios and magazines.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Build your brand with a dedicated spotlight segment, reels, and media promotion.</span></li></ul></div></div>
                    <div id="designers" class="opportunity-content hidden grid md:grid-cols-2 gap-12 items-center"><img src="https://images.pexels.com/photos/375880/pexels-photo-375880.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="rounded-lg object-cover w-full h-full max-h-[500px]" alt="Fashion Designer"><div><h3 class="text-3xl font-display mb-6">Build Your Empire</h3><ul class="space-y-4 text-lg text-gray-300"><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Present your collection to an exclusive audience of India's top models and buyers.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Secure a guaranteed runway showcase seen by over 40+ industry directors.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>See your designs celebrated in high-fashion magazines and official portfolios.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Amplify your brand with a dedicated Designer Spotlight and massive social media reach.</span></li></ul></div></div>
                    <div id="artists" class="opportunity-content hidden grid md:grid-cols-2 gap-12 items-center"><img src="https://images.pexels.com/photos/3018845/pexels-photo-3018845.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="rounded-lg object-cover w-full h-full max-h-[500px]" alt="Makeup Artist"><div><h3 class="text-3xl font-display mb-6">Craft Your Legacy</h3><ul class="space-y-4 text-lg text-gray-300"><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Access a world of elite opportunities, lifetime app access, and luxury rewards.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Your artistry, guaranteed on the runway, in magazines, and on campaign shoots.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Receive high-profile recognition with credits in magazines and tags on all social media.</span></li><li class="flex items-start"><i class="fa-solid fa-check-circle text-yellow-400 mt-1 mr-3"></i><span>Be rewarded with exclusive backstage kits, premium vouchers, and award eligibility.</span></li></ul></div></div>
                </div>
            </div>
        </section>

        <!-- Section 6: Premium Collaborations -->
        <section id="collaborate" class="py-20 md:py-28 bg-black">
             <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-display mb-4">Beyond the Runway: Strategic Collaborations</h2>
                <p class="text-lg text-gray-400 max-w-3xl mx-auto mb-16">We don't just create moments; we build empires. From viral content to high-impact brand integrations.</p>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                    <div class="flex flex-col items-center p-6 bg-gray-900 rounded-lg border border-transparent hover:border-yellow-400 transition-colors"><i class="fas fa-film text-4xl text-yellow-400 mb-4"></i><h4 class="font-display text-xl">Viral Content Creation</h4></div>
                    <div class="flex flex-col items-center p-6 bg-gray-900 rounded-lg border border-transparent hover:border-yellow-400 transition-colors"><i class="fas fa-copyright text-4xl text-yellow-400 mb-4"></i><h4 class="font-display text-xl">High-Impact Branding</h4></div>
                    <div class="flex flex-col items-center p-6 bg-gray-900 rounded-lg border border-transparent hover:border-yellow-400 transition-colors"><i class="fas fa-box-open text-4xl text-yellow-400 mb-4"></i><h4 class="font-display text-xl">Seamless Product Integration</h4></div>
                    <div class="flex flex-col items-center p-6 bg-gray-900 rounded-lg border border-transparent hover:border-yellow-400 transition-colors"><i class="fas fa-camera text-4xl text-yellow-400 mb-4"></i><h4 class="font-display text-xl">Exclusive Campaign Shoots</h4></div>
                    <div class="flex flex-col items-center p-6 bg-gray-900 rounded-lg border border-transparent hover:border-yellow-400 transition-colors"><i class="fas fa-store text-4xl text-yellow-400 mb-4"></i><h4 class="font-display text-xl">Curated Brand Stalls</h4></div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include __DIR__ . '/includes/footer.php'; ?>

    <!-- Consolidated Styles (moved to bottom for your convenience; keep in your CSS file in production) -->
    <style>
/* --- Dull/Brightness Fixes --- */
body {
    background: linear-gradient(135deg, #232323 0%, #393939 100%);
    color: #fafafa;
}
.slider-overlay {
    background-color: rgba(255,255,255,0.13);
}
.ori-slider-img video {
    filter: brightness(1.17) saturate(1.2) contrast(1.09);
}
.privilege-card {
    background-color: rgba(255,255,255,0.16);
    border: 1px solid rgba(255,255,255,0.22);
}
.privilege-card:hover {
    background-color: rgba(255,255,255,0.32);
    border-color: #FFD700;
}
.text-gray-300, .text-gray-400 {
    color: #fff!important;
}
section#audition {
    filter: brightness(1.1) saturate(1.1);
}

/* --- Slider base styles --- */
.ori-slider-content {
    position: relative;
    overflow: hidden;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
}
.ori-slider-img {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: -1;
}
.ori-slider-img video {
    object-fit: cover;
    width: 100%; height: 100%;
}
.slider-overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.32); /* slightly lighter to showcase vignette */
    z-index: 2;
}

/* Headline */
.ori-slider-text h1 {
    font-family: 'Oswald', sans-serif;
    color: white;
    font-size: 3.5rem;
    line-height: 1.1;
}

/* Audio button */
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

/* Typography */
body {
    font-family: 'Montserrat', sans-serif;
    background-color: #000000;
    color: #ffffff;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Oswald', sans-serif;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

/* Cards etc. */
.privilege-card {
    background-color: rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
}
.privilege-card:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: #EAB308;
    transform: translateY(-5px);
}
.opportunity-tab {
    transition: all 0.3s;
    border-bottom: 2px solid transparent;
}
.opportunity-tab.active {
    color: #EAB308;
    border-bottom-color: #EAB308;
}
.stat-item {
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
.stat-item.is-visible {
    opacity: 1;
    transform: translateY(0);
}
.perspective-1000 { perspective: 1000px; }
.preserve-3d { transform-style: preserve-3d; }
.rotate-y-180 { transform: rotateY(180deg); }
.backface-hidden { backface-visibility: hidden; }

/* --- Corner fade (vignette) overlay --- */
.vignette-border {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 3; /* above .slider-overlay, below text */
    background: radial-gradient(
        circle at 50% 50%,
        rgba(0,0,0,0) 60%,
        rgba(0,0,0,0.22) 76%,
        rgba(0,0,0,0.5) 90%,
        rgba(0,0,0,0.7) 100%
    );
}



@media (max-width: 640px) {
    .vignette-border {
        background: radial-gradient(
            circle at 50% 50%,
            rgba(0,0,0,0) 62%,
            rgba(0,0,0,0.18) 78%,
            rgba(0,0,0,0.42) 92%,
            rgba(0,0,0,0.62) 100%
        );
    }
}
    </style>

    <!-- Consolidated Scripts -->
    <script>
        // Script for YOUR original slider
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('background-video');
            const audioBtn = document.getElementById('audio-btn');
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

        // Script for NEW animated stats section
        document.addEventListener("DOMContentLoaded", () => {
            const statsContainer = document.getElementById('stats-container');
            const animateCounter = (el) => {
                const target = +el.dataset.target;
                const duration = 2000;
                let current = 0;
                const stepTime = Math.abs(Math.floor(duration / target));
                const timer = setInterval(() => {
                    current += 1;
                    el.textContent = current;
                    if (current >= target) {
                        el.textContent = target;
                        clearInterval(timer);
                    }
                }, stepTime);
            };
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    const items = statsContainer.querySelectorAll('.stat-item');
                    items.forEach((item, index) => {
                        setTimeout(() => {
                            item.classList.add('is-visible');
                            const counter = item.querySelector('p[data-target]');
                            if (counter) animateCounter(counter);
                        }, index * 200);
                    });
                    observer.unobserve(statsContainer);
                }
            }, { threshold: 0.5 });
            if(statsContainer) observer.observe(statsContainer);
        });

        // Script for NEW opportunities tabs
        function switchTab(tabName) {
            document.querySelectorAll('.opportunity-tab').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.opportunity-content').forEach(content => content.classList.add('hidden'));
            document.querySelector(`.opportunity-tab[onclick="switchTab('${tabName}')"]`).classList.add('active');
            document.getElementById(tabName).classList.remove('hidden');
        }
    </script>
</body>
</html>