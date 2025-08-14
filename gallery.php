<?php
$page_id = 'gallery';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Main Gallery Page Content Starts Here -->

<style>
    /* Basic Page Styles */
    :root {
        --primary-color: #1a237e; /* Deep blue from previous designs */
        --secondary-color: #00050aff;
        --dark-text: #212121;
        --light-text: #6c757d;
        --border-color: #e0e0e0;
        --accent-color: #007bff;
    }

    body.ori-app-landing {
        font-family: 'Inter', sans-serif;
        background-color: #090101ff;
    }

    .gallery-page-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .gallery-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .gallery-header h2 {
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--dark-text);
        margin-bottom: 15px;
    }

    .gallery-header p {
        font-size: 1.2rem;
        color: var(--light-text);
        max-width: 700px;
        margin: 0 auto;
    }

    /* Filter Buttons */
    .filter-controls {
        text-align: center;
        margin-bottom: 50px;
    }

    .filter-btn {
        background: transparent;
        border: 1px solid var(--border-color);
        color: var(--light-text);
        padding: 10px 20px;
        margin: 5px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .filter-btn:hover {
        background-color: var(--secondary-color);
        color: var(--dark-text);
    }

    .filter-btn.active {
        background-color: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .gallery-item {
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        display: none; /* Initially hidden, shown by JS */
    }
    
    .gallery-item.show {
        display: block;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.4s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-item .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 50%);
        opacity: 0;
        transition: opacity 0.4s ease;
        display: flex;
        align-items: flex-end;
        padding: 20px;
        color: #fff;
    }
    
    .gallery-item:hover .overlay {
        opacity: 1;
    }
    
    .overlay-text {
        transform: translateY(20px);
        transition: transform 0.4s ease;
    }
    
    .gallery-item:hover .overlay-text {
        transform: translateY(0);
    }

    /* Load More Button */
    .load-more-container {
        text-align: center;
        margin-top: 50px;
    }

    #load-more-btn {
        background: var(--primary-color);
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    #load-more-btn:hover {
        background-color: #283593;
    }
    
    #load-more-btn.hidden {
        display: none;
    }
    
    /* Lightbox */
    .lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.85);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    
    .lightbox.show {
        display: flex;
    }

    .lightbox-content {
        position: relative;
        max-width: 90vw;
        max-height: 85vh;
    }
    
    .lightbox-content img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .lightbox-close {
        position: absolute;
        top: -40px;
        right: 0;
        color: #fff;
        font-size: 2.5rem;
        cursor: pointer;
    }
</style>

<main class="gallery-page-container">
    <div class="gallery-header">
        <h2 style="color: #fff;"><br>Our Visual Story</h2>
        <p>Explore the moments that define us. From the energy of the runway to the quiet focus behind the scenes, this is our world in pictures.</p>
    </div>

    <!-- Filter Controls -->
    <div class="filter-controls">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="runway">Runway</button>
        <button class="filter-btn" data-filter="portraits">Portraits</button>
        <button class="filter-btn" data-filter="backstage">Behind the Scenes</button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid">
        <!-- Add your gallery items here. Use the 'data-category' attribute for filtering. -->
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/1.jpg" alt="Runway model in a dramatic outfit">
        </div>
        <div class="gallery-item" data-category="portraits">
            <img src="assets/images/gallery/2.jpg" alt="Close-up portrait of a model">
        </div>
        <div class="gallery-item" data-category="backstage">
            <img src="assets/images/gallery/3.jpg" alt="Makeup artist working backstage">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/4.jpg" alt="Model walking down the runway">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/5.jpg" alt="Audience at a fashion event">
        </div>
        <div class="gallery-item" data-category="portraits">
            <img src="assets/images/gallery/6.jpg" alt="Portrait of a person with unique style">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/7.jpg" alt="Model in a colorful outfit">
        </div>
        <div class="gallery-item" data-category="backstage">
            <img src="assets/images/gallery/8.jpg" alt="Designers discussing backstage">
        </div>
        <!-- Add 8 more items for a total of 16 -->
        <div class="gallery-item" data-category="portraits">
            <img src="assets/images/gallery/9.jpg" alt="Portrait of a man">
        </div>
         <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/10.jpg" alt="Red carpet event">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/14.jpg" alt="Female model on runway">
        </div>
        <div class="gallery-item" data-category="backstage">
            <img src="assets/images/gallery/11.jpg" alt="Clothing rack backstage">
        </div>
        <div class="gallery-item" data-category="portraits">
            <img src="assets/images/gallery/12.jpg" alt="Portrait of a smiling man">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/13.jpg" alt="Model in avant-garde fashion">
        </div>
        <div class="gallery-item" data-category="runway">
            <img src="assets/images/gallery/15.jpg" alt="Awards ceremony">
        </div>
        <div class="gallery-item" data-category="backstage">
            <img src="assets/images/gallery/16.jpg" alt="Team planning session">
        </div>
    </div>

    <!-- Load More Button -->
    <div class="load-more-container">
        <button id="load-more-btn">Load More</button>
    </div>
</main>

<!-- Lightbox Structure -->
<div class="lightbox" id="lightbox">
    <span class="lightbox-close" id="lightbox-close">&times;</span>
    <div class="lightbox-content">
        <img src="" alt="Enlarged gallery image" id="lightbox-img">
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const loadMoreBtn = document.getElementById('load-more-btn');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');

    let currentFilter = 'all';
    const itemsPerLoad = 8;
    let itemsShown = 0;

    // --- Filter Logic ---
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            
            currentFilter = button.getAttribute('data-filter');
            
            // Hide all items and reset count
            galleryItems.forEach(item => item.classList.remove('show'));
            itemsShown = 0;
            
            // Load initial items for the new filter
            loadMoreItems();
        });
    });

    // --- Load More Logic ---
    function loadMoreItems() {
        const itemsToLoad = [];
        // Find all items that match the current filter
        galleryItems.forEach(item => {
            if (currentFilter === 'all' || item.getAttribute('data-category') === currentFilter) {
                itemsToLoad.push(item);
            }
        });

        const currentVisibleItems = itemsToLoad.slice(0, itemsShown + itemsPerLoad);
        
        // Show the next batch of items
        currentVisibleItems.forEach(item => item.classList.add('show'));
        
        itemsShown = currentVisibleItems.length;

        // Hide or show the "Load More" button
        if (itemsShown >= itemsToLoad.length) {
            loadMoreBtn.classList.add('hidden');
        } else {
            loadMoreBtn.classList.remove('hidden');
        }
    }

    loadMoreBtn.addEventListener('click', loadMoreItems);

    // --- Lightbox Logic ---
    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            const imgSrc = item.querySelector('img').src;
            lightboxImg.src = imgSrc;
            lightbox.classList.add('show');
        });
    });

    function closeLightbox() {
        lightbox.classList.remove('show');
        lightboxImg.src = ''; // Clear src to stop loading
    }

    lightboxClose.addEventListener('click', closeLightbox);
    
    // Also close lightbox on clicking the background
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Initial load
    loadMoreItems();
});
</script>

<!-- Main Gallery Page Content Ends Here -->

<?php include __DIR__ . '/includes/footer.php'; ?>
