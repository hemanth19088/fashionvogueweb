<?php
$page_id = 'designers';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
// Assuming head.php includes the Tailwind CSS CDN link and a font like Inter.
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="bg-gray-900 text-white font-sans">

    <!-- ============================================ -->
    <!-- ==           Featured Models Section      == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Featured Models</h2>
                <p class="text-lg text-gray-400">Our top-tier talent, ready for the runway.</p>
            </div>

            <!-- Models Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Model Card 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="assets/images/media/model5.jpg" alt="Model Elena" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Akshitha</h3>
                        <p class="text-gray-300">Commercial</p>
                    </div>
                </div>
                <!-- Model Card 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="assets/images/gallery/14.jpg" alt="Model " class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">model</h3>
                        <p class="text-gray-300">runway</p>
                    </div>
                </div>
                <!-- Model Card 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="assets/images/gallery/10.jpg" alt="Model Aisha" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white"></h3>
                        <p class="text-gray-300">Fitness</p>
                    </div>
                </div>
                <!-- Model Card 4 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="assets/images/gallery/16.jpg" alt="Model Leo" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white"></h3>
                        <p class="text-gray-300">Runway</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- ==             New Faces Section          == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24 bg-gray-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">New Faces</h2>
                <p class="text-lg text-gray-400">The next generation of talent.</p>
            </div>

            <!-- Models Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Model Card 1 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="assets/images/gallery/13.jpg" alt="Model Sofia" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white"></h3>
                        <p class="text-cyan-400">Editorial</p>
                    </div>
                </div>
                <!-- Model Card 2 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="assets/images/gallery/15.jpg" alt="Model Chen" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white"></h3>
                        <p class="text-cyan-400">Commercial</p>
                    </div>
                </div>
                <!-- Model Card 3 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="assets/images/gallery/12.jpg" alt="Model Isabella" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white"></h3>
                        <p class="text-cyan-400">Print</p>
                    </div>
                </div>
                <!-- Model Card 4 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="assets/images/gallery/9.jpg" alt="Model Noah" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white"></h3>
                        <p class="text-cyan-400">Runway</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
