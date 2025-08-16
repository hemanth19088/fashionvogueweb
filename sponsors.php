<?php
  $page_id = 'sponsors';
  $body_class = 'ori-digital-studio';
  include __DIR__ . '/includes/head.php';
  // Assuming head.php includes the Tailwind CSS CDN link, but if not, you'd need this:
  // echo '<script src="https://cdn.tailwindcss.com"></script>';
?>
   <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- ============================================ -->
    <!-- ==              Header Section            == -->
    <!-- ============================================ -->
    <header class="bg-gray-800">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-2xl font-bold">FashionVogue Sponsorship</h1>
        </div>
    </header>

    <main>
        <!-- ============================================ -->
        <!-- ==               Hero Section             == -->
        <!-- ============================================ -->
        <section class="relative py-20 md:py-32 bg-gray-900 text-center">
            <div class="absolute inset-0 bg-cyan-900/30 backdrop-blur-sm"></div>
            <div class="relative container mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-extrabold mb-4 leading-tight">Partner With Us</h2>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                    Align your brand with innovation and creativity. Reach a dedicated audience of tech enthusiasts, designers, and industry leaders.
                </p>
               <a  class="inline-flex items-center gap-2 bg-cyan-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-cyan-700 transition duration-300 text-lg">
                    View Packages
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- ==         Why Sponsor Us Section         == -->
        <!-- ============================================ -->
        <section class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Why Sponsor Us?</h2>
                    <p class="text-lg text-gray-400">Unlock unparalleled benefits and exposure.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto text-center">
                    <!-- Benefit 1 -->
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700">
                        <h3 class="text-2xl font-bold text-cyan-400 mb-3">Brand Visibility</h3>
                        <p class="text-gray-400">Showcase your brand to a highly engaged and targeted audience through our events, website, and social media channels.</p>
                    </div>
                    <!-- Benefit 2 -->
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700">
                        <h3 class="text-2xl font-bold text-cyan-400 mb-3">Community Engagement</h3>
                        <p class="text-gray-400">Connect directly with creators, developers, and potential clients. Build meaningful relationships within the tech community.</p>
                    </div>
                    <!-- Benefit 3 -->
                    <div class="bg-gray-800 p-8 rounded-lg border border-gray-700">
                        <h3 class="text-2xl font-bold text-cyan-400 mb-3">Support Innovation</h3>
                        <p class="text-gray-400">Your sponsorship directly supports our mission to foster innovation and provide a platform for emerging talent.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- ==          Sponsorship Section           == -->
        <!-- ============================================ -->
        <section id="sponsorship-tiers" class="py-16 md:py-24 bg-gray-800 font-sans">
            <div class="container mx-auto px-4 text-center">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Sponsorship Packages</h2>
                    <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                        Choose a package that aligns with your marketing goals and budget.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Tier 1: Bronze -->
                    <div class="bg-gray-900 border border-gray-700 rounded-lg p-8 shadow-sm hover:shadow-cyan-500/20 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-2xl font-bold text-yellow-500 mb-4">Bronze</h3>
                        <p class="text-4xl font-extrabold text-white mb-4">Rs.500</p>
                        <ul class="text-left space-y-3 text-gray-400 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Logo on our website</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Social media shoutout</li>
                            <li class="flex items-center text-gray-600"><span class="text-red-500 mr-2">✖</span> Mention in newsletter</li>
                            <li class="flex items-center text-gray-600"><span class="text-red-500 mr-2">✖</span> Event banner placement</li>
                        </ul>
                        <a href="contact" class="w-full block bg-gray-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-600 transition duration-300">Get Started</a>
                    </div>
                    <!-- Tier 2: Silver (Featured) -->
                    <div class="bg-gray-900 border-2 border-cyan-500 rounded-lg p-8 shadow-lg shadow-cyan-500/20 relative transform md:scale-105">
                        <span class="bg-cyan-500 text-white text-xs font-bold px-3 py-1 rounded-full absolute -top-4 right-6">Most Popular</span>
                        <h3 class="text-2xl font-bold text-cyan-400 mb-4">Silver</h3>
                        <p class="text-4xl font-extrabold text-white mb-4">Rs.1,500</p>
                        <ul class="text-left space-y-3 text-gray-400 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Logo on our website</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Social media shoutout</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Mention in newsletter</li>
                            <li class="flex items-center text-gray-600"><span class="text-red-500 mr-2">✖</span> Event banner placement</li>
                        </ul>
                        <a href="contact" class="w-full block bg-cyan-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-cyan-700 transition duration-300">Get Started</a>
                    </div>
                    <!-- Tier 3: Gold -->
                    <div class="bg-gray-900 border border-gray-700 rounded-lg p-8 shadow-sm hover:shadow-yellow-400/20 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-2xl font-bold text-yellow-400 mb-4">Gold</h3>
                        <p class="text-4xl font-extrabold text-white mb-4">Rs.5,000</p>
                        <ul class="text-left space-y-3 text-gray-400 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Logo on our website</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Social media shoutout</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Mention in newsletter</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✔</span> Event banner placement</li>
                        </ul>
                        <a href="contact" class="w-full block bg-gray-700 text-white font-bold py-3 px-6 rounded-lg hover:bg-gray-600 transition duration-300">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- ==      Media Partnership Section         == -->
        <!-- ============================================ -->
        <section class="py-16 md:py-24 bg-gray-900 font-sans">
            <div class="container mx-auto px-4 text-center">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Media Coverage & Promotion</h2>
                    <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                        Our media presence doesn't just create noise – it creates recall. We are proud to be featured in leading publications.
                    </p>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 items-center">
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Dailyhunt</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Google News</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">ENTRACKR</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">The Indian Express</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Hindustan Times</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Entrepreneur</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Business Standard</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">The Print</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">The Logical Indian</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">Forbes India</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">99 News</h3>
                    </div>
                    <div class="bg-gray-800/80 p-6 rounded-lg h-full flex items-center justify-center transform hover:bg-cyan-600 hover:scale-105 transition-all duration-300 group cursor-pointer">
                        <h3 class="text-lg font-semibold text-gray-400 group-hover:text-white transition-colors duration-300">UP 18 News</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================ -->
        <!-- ==             Contact Section            == -->
        <!-- ============================================ -->
        <section id="contact" class="py-16 md:py-24 bg-gray-800">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Ready to Partner?</h2>
                    <p class="text-lg text-gray-400">Let's connect and discuss how we can collaborate.</p>
                </div>
                <div class="max-w-xl mx-auto">
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" name="name" id="name" autocomplete="name" required class="w-full bg-gray-700 border-gray-600 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Your Name">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" autocomplete="email" required class="w-full bg-gray-700 border-gray-600 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Your Email Address">
                        </div>
                        <div>
                            <label for="company" class="sr-only">Company</label>
                            <input type="text" name="company" id="company" autocomplete="organization" class="w-full bg-gray-700 border-gray-600 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Company Name (Optional)">
                        </div>
                        <div>
                            <label for="message" class="sr-only">Message</label>
                            <textarea name="message" id="message" rows="4" required class="w-full bg-gray-700 border-gray-600 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Your Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-cyan-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-cyan-700 transition duration-300">
                                Send Inquiry
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
