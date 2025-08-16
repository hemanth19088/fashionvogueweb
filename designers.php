<?php
$page_id = 'designers';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
// Assuming head.php includes the Tailwind CSS CDN link and a font like Inter.
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="bg-gray-900 text-white font-sans">

    <!-- ============================================ -->
    <!-- ==         Featured Designers Section     == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Featured Designers</h2>
                <p class="text-lg text-gray-400">Industry leaders shaping the future of fashion.</p>
            </div>

            <!-- Designers Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Designer Card 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/8b5cf6/ffffff?text=Julian" alt="Designer Julian" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Julian</h3>
                        <p class="text-gray-300">Avant-Garde</p>
                    </div>
                </div>
                <!-- Designer Card 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/ec4899/ffffff?text=Stella" alt="Designer Stella" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Stella</h3>
                        <p class="text-gray-300">Streetwear</p>
                    </div>
                </div>
                <!-- Designer Card 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/f59e0b/ffffff?text=Roman" alt="Designer Roman" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Roman</h3>
                        <p class="text-gray-300">Haute Couture</p>
                    </div>
                </div>
                <!-- Designer Card 4 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/10b981/ffffff?text=Clara" alt="Designer Clara" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Clara</h3>
                        <p class="text-gray-300">Sustainable Fashion</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- ==           Rising Stars Section         == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24 bg-gray-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Rising Stars</h2>
                <p class="text-lg text-gray-400">The innovative minds of tomorrow.</p>
            </div>

            <!-- Designers Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Designer Card 1 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/3b82f6/ffffff?text=Mateo" alt="Designer Mateo" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Mateo</h3>
                        <p class="text-cyan-400">Knitwear</p>
                    </div>
                </div>
                <!-- Designer Card 2 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/ef4444/ffffff?text=Amara" alt="Designer Amara" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Amara</h3>
                        <p class="text-cyan-400">Bridal</p>
                    </div>
                </div>
                <!-- Designer Card 3 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/22c55e/ffffff?text=Finn" alt="Designer Finn" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Finn</h3>
                        <p class="text-cyan-400">Menswear</p>
                    </div>
                </div>
                <!-- Designer Card 4 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/d946ef/ffffff?text=Nia" alt="Designer Nia" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Nia</h3>
                        <p class="text-cyan-400">Accessories</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
