<?php
$page_id = 'app';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* Background image with a light overlay for readability */
            background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Keeps the background fixed during scroll */
        }
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        /* This rule hides the login button only on this page using !important to ensure it overrides other styles */
        .ori-app-landing #loginBtn {
            display: none !important;
        }
    </style>
</head>
<body class="text-gray-800 ori-app-landing"> <!-- Added the class here for the CSS to work -->

    <!-- Main Content -->
    <div class="flex flex-col min-h-screen pt-16"> 
        
        <!-- The included header file will now have its login button hidden by the CSS rule above -->

        <!-- Hero Section -->
        <main class="flex-grow flex flex-col items-center justify-center text-center p-4">
            <div class="max-w-4xl mx-auto">
                <!-- Adjusted font sizes for better responsiveness on small screens -->
                <h2 class="font-playfair text-3xl sm:text-4xl md:text-6xl font-bold text-gray-900 mb-4 leading-tight">Your Style Revolution Begins Soon.</h2>
                <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
                    We're putting the final touches on FashionVogue, an app designed to transform your wardrobe and connect you with a world of style inspiration. Get ready to express yourself like never before!
                </p>
                <!-- WhatsApp Redirect Button -->
                <button id="whatsappBtn" class="bg-green-500 text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50 transition duration-300 transform hover:scale-105">
                    I'm Interested
                </button>
            </div>
        </main>

        <!-- Footer -->
        <footer class="w-full p-4 sm:p-6 text-center text-gray-600 font-medium">
            <p>&copy; 2025 FashionVogue. All Rights Reserved.</p>
        </footer>
    </div>

    <script>
        // --- WhatsApp Redirect Logic ---
        const whatsappBtn = document.getElementById('whatsappBtn');
        whatsappBtn.addEventListener('click', () => {
            // IMPORTANT: Phone number updated as per your request.
            const phoneNumber = '9676199849';
            const message = "Hi! I'm interested in FashionVogue. Please notify me when you launch!";
            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            
            // Open the WhatsApp link in a new tab
            window.open(whatsappUrl, '_blank');
        });
    </script>
