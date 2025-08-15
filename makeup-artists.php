<?php
$page_id = 'makeup-artists';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
// Assuming head.php includes the Tailwind CSS CDN link and a font like Inter.
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="bg-gray-900 text-white font-sans">

    <!-- ============================================ -->
    <!-- ==           Lead Artists Section         == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Lead Artists</h2>
                <p class="text-lg text-gray-400">Visionaries setting the trends in beauty.</p>
            </div>

            <!-- Artists Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Artist Card 1 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/ec4899/ffffff?text=Isabelle" alt="Makeup Artist Isabelle" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Isabelle</h3>
                        <p class="text-gray-300">Editorial & Runway</p>
                    </div>
                </div>
                <!-- Artist Card 2 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/8b5cf6/ffffff?text=Javier" alt="Makeup Artist Javier" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Javier</h3>
                        <p class="text-gray-300">Bridal & Glamour</p>
                    </div>
                </div>
                <!-- Artist Card 3 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/10b981/ffffff?text=Chloe" alt="Makeup Artist Chloe" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Chloe</h3>
                        <p class="text-gray-300">Special Effects (SFX)</p>
                    </div>
                </div>
                <!-- Artist Card 4 -->
                <div class="group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/400x500/f59e0b/ffffff?text=Adrian" alt="Makeup Artist Adrian" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="text-2xl font-bold text-white">Adrian</h3>
                        <p class="text-gray-300">Celebrity & Red Carpet</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- ==         Emerging Talent Section        == -->
    <!-- ============================================ -->
    <section class="py-16 md:py-24 bg-gray-800">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">Emerging Talent</h2>
                <p class="text-lg text-gray-400">The fresh faces of the beauty industry.</p>
            </div>

            <!-- Artists Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Artist Card 1 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/ef4444/ffffff?text=Lila" alt="Makeup Artist Lila" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Lila</h3>
                        <p class="text-cyan-400">Natural Beauty</p>
                    </div>
                </div>
                <!-- Artist Card 2 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/3b82f6/ffffff?text=Kenji" alt="Makeup Artist Kenji" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Kenji</h3>
                        <p class="text-cyan-400">Avant-Garde</p>
                    </div>
                </div>
                <!-- Artist Card 3 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/d946ef/ffffff?text=Simone" alt="Makeup Artist Simone" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Simone</h3>
                        <p class="text-cyan-400">Commercial</p>
                    </div>
                </div>
                <!-- Artist Card 4 -->
                <div class="bg-gray-900 rounded-lg shadow-lg overflow-hidden text-center">
                    <img src="https://placehold.co/400x400/22c55e/ffffff?text=Ravi" alt="Makeup Artist Ravi" class="w-full h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white">Ravi</h3>
                        <p class="text-cyan-400">Film & TV</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
