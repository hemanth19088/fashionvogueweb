<?php
$page_id = 'opportunities';
$body_class = 'digital-marketing'; // Using class from index-6 for consistency
include __DIR__ . '/includes/head.php';
?>
<style>
    /* --- DARK MODE THEME --- */

    body {
        background-color: #000000;
        color: #f0f0f0;
    }

    /* Make links visible on dark background */
    a {
        color: #58a6ff;
    }
    a:hover {
        color: #81ccff;
    }
    
    /* Invert section titles */
    .ori-section-title-6 h2, .ori-dm-banner-text h1 {
        color: #fff;
    }

    .ori-section-title-6 h2 span, .ori-dm-banner-text h1 span {
        color: #01060bff; /* Highlight color for spans */
    }

    /* Custom Styles for the New Sections */
    .hero-section-new {
        position: relative; /* Needed for the overlay */
        background-size: cover;
        background-position: center center;
        color: #fff;
        padding: 120px 0;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }
    
    /* REPAIR: Added dark overlay for text visibility */
    .hero-section-new::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: 0;
    }
    
    /* Ensure content is above the overlay */
    .hero-section-new .container {
        position: relative;
        z-index: 1;
    }


    .icon-box {
        background: #1a1a1a; /* Dark grey background */
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease-in-out;
        border: 1px solid #333; /* Darker border */
        height: 100%;
    }

    .icon-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.1);
    }

    .icon-box .icon {
        font-size: 48px;
        margin-bottom: 20px;
        color: #f0f0f0; /* Light icon color */
    }
    .icon-box h3 {
        color: #fff;
    }

    .split-section {
        display: flex;
        align-items: center;
        background: #000; /* Black background */
    }

    .split-section .image-half {
        background-size: cover;
        background-position: center;
        min-height: 500px;
    }

    .split-section .text-half {
        padding: 50px;
    }

    .mua-gallery .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .mua-gallery .gallery-item img {
        transition: transform 0.5s ease;
    }

    .mua-gallery .gallery-item:hover img {
        transform: scale(1.1);
    }

    .mua-gallery .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        color: #ffffff; /* White text for overlay */
        padding: 20px;
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .mua-gallery .gallery-item:hover .overlay {
        opacity: 1;
    }
    
    .agency-section {
        background: #000; /* Black background */
    }

    .agency-section .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }
    .agency-section .feature-icon {
        font-size: 40px;
        margin-right: 20px;
        color: #f0f0f0; /* Light icon color */
    }
    .agency-section h4 {
        color: #fff;
    }

    .sponsor-tier {
        background: #1a1a1a; /* Dark grey background */
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.2);
        text-align: center;
        height: 100%;
        border: 1px solid #333;
    }
    .sponsor-tier h3 {
        font-size: 24px;
        font-weight: 700;
        color: #fff;
    }
    .sponsor-tier .price {
        font-size: 36px;
        font-weight: 700;
        color: #f0f0f0; /* Light price color */
        margin: 20px 0;
    }
    .sponsor-tier ul {
        list-style: none;
        padding: 0;
        margin-bottom: 30px;
    }
    .sponsor-tier ul li {
        padding: 10px 0;
        border-bottom: 1px solid #333; /* Darker border */
    }
    
    #opportunities-mua, #opportunities-sponsors {
        background: #0a0a0a !important; /* Slightly off-black for sections */
    }
</style>
<?php include __DIR__ . '/includes/header.php'; ?>

<section id="ori-dm-banner" class="ori-dm-banner-section position-relative">
    <div class="container">
        <div class="ori-dm-banner-content">
            <div class="ori-dm-banner-text-play-btn d-flex align-items-center justify-content-between">
                <div class="ori-dm-banner-text wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
                    <h1>Launch Your
                        <span>Legacy in Fashion</span>
                    </h1>
<p style="color: white;"><strong>This is where careers ignite. Discover opportunities for models, designers, artists, and brands.</strong></p>
                </div>
            <div class="ori-dm-banner-img wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                <img src="assets/images/oppurtunities/bgo1.png" alt="High fashion opportunities banner">
            </div>
        </div>
    </div>
</section>
<section id="opportunities-models" class="hero-section-new" style="background-image: url('https://placehold.co/1920x800/000000/FFFFFF?text=Model+in+Dramatic+Lighting');">
    <div class="container text-center">
        <div class="wow fadeInUp" data-wow-delay="200ms">
            <h2 class="display-4 font-weight-bold">Define the Next Look</h2>
            <p class="lead my-4">Your unique look has a place here. We connect emerging models with global opportunities. <br> No experience required.</p>
            <div class="ori-btn-5 text-uppercase">
                <a href="#">Start Your Journey</a>
            </div>
        </div>
        <div class="row mt-5 pt-5">
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-eye"></i></div>
                    <h3>Gain Visibility</h3>
                    <p>Showcase your talent to leading agents, casting directors, and international brands at our events.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-camera-retro"></i></div>
                    <h3>Craft Your Image</h3>
                    <p>Collaborate with industry photographers and stylists to build a powerful and professional portfolio.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="600ms">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-shoe-prints"></i></div>
                    <h3>Master the Runway</h3>
                    <p>Perfect your walk, presence, and technique with personalized coaching from runway experts.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="opportunities-designers" class="split-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 px-0 wow fadeInLeft">
                <img src="assets/images/oppurtunities/showcase.png" alt="Designer showcasing a collection" class="image-half">
            </div>
            
            <div class="col-lg-6 wow fadeInRight">
                <div class="text-half">
                    <div class="ori-section-title-6 pera-content">
                        <h2>Unveil Your Collection</h2>
                        <p>Your designs deserve a global stage. Present your collection to an exclusive audience of buyers, editors, and industry influencers.</p>
                    </div>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Premier Runway:</strong> Feature your collection in a high-profile runway show.</span></li>
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Press & Media:</strong> Secure coverage in top fashion magazines and digital publications.</span></li>
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Buyer Connections:</strong> Meet directly with buyers from influential boutiques and global retailers.</span></li>
                    </ul>
                    <div class="ori-btn-5 text-uppercase mt-4">
                        <a href="portfolio">Showcase Your Work</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="opportunities-mua" class="py-5">
    <div class="container">
        <div class="ori-section-title-6 text-center pera-content wow fadeInUp" data-wow-delay="200ms">
            <h2>The Artists Behind the Look</h2>
            <p>Join the elite backstage team. We're seeking visionary makeup artists and hair stylists to define the beauty of our shows.</p>
        </div>
        <div class="row mua-gallery mt-5">
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="gallery-item">
                    <img src="assets/images/oppurtunities/blog1.jpg" alt="Makeup artist preparing a model" class="img-fluid">
                    <div class="overlay">
                        <h5>High-Fashion Runway</h5>
                        <p>Create and execute iconic runway looks.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="gallery-item">
                    <img src="assets/images/oppurtunities/design1.jpg" alt="Model with editorial makeup" class="img-fluid">
                    <div class="overlay">
                        <h5>Magazine Editorials</h5>
                        <p>Lend your artistry to high-profile photoshoots.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="500ms">
                <div class="gallery-item">
                    <img src="assets/images/oppurtunities/blog2.jpg"alt="Model with avant-garde hairstyle" class="img-fluid">
                    <div class="overlay">
                        <h5>Creative Campaigns</h5>
                        <p>Work with top brands on their next big campaign.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 wow fadeInUp" data-wow-delay="600ms">
             <div class="ori-btn-5 text-uppercase">
                <a href="#">Apply for Backstage</a>
            </div>
        </div>
    </div>
</section>
<section id="opportunities-agencies" class="agency-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="ori-section-title-6 pera-content">
                    <h2>Access Tomorrow's Talent</h2>
                    <p>Our platform is the definitive source for emerging talent. Scout the next generation of models, designers, and artists before anyone else.</p>
                </div>
                <div class="feature-item mt-5">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <div>
                        <h4>Exclusive Scouting</h4>
                        <p>Gain access to private showcases and runway events to discover fresh talent perfectly suited for your agency or publication.</p>
                    </div>
                </div>
                 <div class="feature-item">
                    <div class="feature-icon"><i class="fas fa-id-card"></i></div>
                    <div>
                        <h4>Full Media Credentials</h4>
                        <p>Get front-row seats, all-access backstage passes, and direct interview opportunities to capture the story.</p>
                    </div>
                </div>
                 <div class="ori-btn-5 text-uppercase mt-4">
                    <a href="#">Register for Access</a>
                </div>
            </div>
            <div class="col-lg-6 text-center wow fadeInRight" data-wow-delay="300ms">
                <img src="assets/images/oppurtunities/pr.jpg" alt="Fashion industry networking" class="img-fluid rounded-circle">
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>