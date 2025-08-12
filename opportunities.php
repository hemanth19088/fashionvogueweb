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
					<h1>Find Your
						<span>Fashion Opportunity</span>
					</h1>
<p style="color: white;"><strong>One platform, endless possibilities. Connect with the industry leaders and launch your career.</strong></p>
                </div>
			<div class="ori-dm-banner-img wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
				<img src="assets/images/oppurtunities/bgo1.png" alt="Dark and moody high fashion banner">
			</div>
		</div>
	</div>
</section>
<section id="opportunities-models" class="hero-section-new" style="background-image: url('https://placehold.co/1920x800/000000/FFFFFF?text=Model+in+Dramatic+Lighting');">
	<div class="container text-center">
		<div class="wow fadeInUp" data-wow-delay="200ms">
			<h2 class="display-4 font-weight-bold">Become the Face of Tomorrow</h2>
			<p class="lead my-4">We are searching for unique individuals with the passion and drive to succeed. <br> No experience necessary. All looks welcome.</p>
			<div class="ori-btn-5 text-uppercase">
				<a href="#">Apply for Casting</a>
			</div>
		</div>
		<div class="row mt-5 pt-5">
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
				<div class="icon-box">
					<div class="icon"><i class="fas fa-eye"></i></div>
					<h3>Get Discovered</h3>
					<p>Be seen by top-tier agents, casting directors, and global brands at our exclusive events.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="500ms">
				<div class="icon-box">
					<div class="icon"><i class="fas fa-camera-retro"></i></div>
					<h3>Build Your Portfolio</h3>
					<p>Work with professional photographers and stylists to create stunning images for your book.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="600ms">
				<div class="icon-box">
					<div class="icon"><i class="fas fa-shoe-prints"></i></div>
					<h3>Runway Training</h3>
					<p>Receive expert coaching on your walk, posture, and presence from industry veterans.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="opportunities-designers" class="split-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 px-0 wow fadeInLeft">
                <img src="assets/images/oppurtunities/showcase.png" alt="Avant-Garde Fashion Design" class="image-half">
            </div>
            
            <div class="col-lg-6 wow fadeInRight">
                <div class="text-half">
                    <div class="ori-section-title-6 pera-content">
                        <h2>Showcase Your Vision</h2>
                        <p>Are you a designer with a unique point of view? We provide the ultimate platform to unveil your collection to the world. Connect with buyers, press, and the industry's most influential figures.</p>
                    </div>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Global Stage:</strong> Present your work during a premier fashion event.</span></li>
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Media Exposure:</strong> Gain features in leading fashion publications and blogs.</span></li>
                        <li class="d-flex align-items-start mb-3"><i class="fas fa-check-circle text-success mr-3 mt-1"></i><span><strong>Retail Opportunities:</strong> Connect directly with buyers from luxury boutiques and department stores.</span></li>
                    </ul>
                    <div class="ori-btn-5 text-uppercase mt-4">
                        <a href="#">Submit Your Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="opportunities-mua" class="py-5">
	<div class="container">
		<div class="ori-section-title-6 text-center pera-content wow fadeInUp" data-wow-delay="200ms">
			<h2>Create. Collaborate. Inspire.</span></h2>
			<p>We are looking for talented makeup artists and hair stylists to create iconic looks for our runway shows and editorial shoots. Join our backstage pro team.</p>
		</div>
		<div class="row mua-gallery mt-5">
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="300ms">
				<div class="gallery-item">
					<img src="assets/images/oppurtunities/blog1.jpg" alt="Backstage Makeup Prep" class="img-fluid">
					<div class="overlay">
						<h5>Runway Ready</h5>
						<p>Execute high-concept looks under pressure.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
				<div class="gallery-item">
					<img src="assets/images/oppurtunities/design1.jpg" alt="Editorial Beauty Shot" class="img-fluid">
					<div class="overlay">
						<h5>Editorial Vision</h5>
						<p>Collaborate on photoshoots for major publications.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="500ms">
				<div class="gallery-item">
					<img src="assets/images/oppurtunities/blog2.jpg"alt="Creative Hair Styling" class="img-fluid">
					<div class="overlay">
						<h5>Artistic Freedom</h5>
						<p>Push creative boundaries with avant-garde styling.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center mt-4 wow fadeInUp" data-wow-delay="600ms">
			 <div class="ori-btn-5 text-uppercase">
				<a href="#">Join The Pro Team</a>
			</div>
		</div>
	</div>
</section>
<section id="opportunities-agencies" class="agency-section py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 wow fadeInLeft">
				<div class="ori-section-title-6 pera-content">
					<h2>Discover the Future of Fashion</span></h2>
					<p>Gain unparalleled access to the industry's most promising new talent. Our platform is a curated ecosystem of the best emerging models, designers, and artists. Find your next star here.</p>
				</div>
				<div class="feature-item mt-5">
					<div class="feature-icon"><i class="fas fa-users"></i></div>
					<div>
						<h4>Scout with Precision</h4>
						<p>Attend our exclusive runway shows and private showcases to discover talent that aligns with your brand's aesthetic.</p>
					</div>
				</div>
				 <div class="feature-item">
					<div class="feature-icon"><i class="fas fa-id-card"></i></div>
					<div>
						<h4>Media & Press Access</h4>
						<p>Receive front-row seating, backstage passes, and direct interview access to cover the event for your publication or clients.</p>
					</div>
				</div>
				 <div class="ori-btn-5 text-uppercase mt-4">
					<a href="#">Request Credentials</a>
				</div>
			</div>
			<div class="col-lg-6 text-center wow fadeInRight" data-wow-delay="300ms">
				<img src="assets/images/oppurtunities/pr.jpg" alt="PR and Media Networking Event" class="img-fluid rounded-circle">
			</div>
		</div>
	</div>
</section>
<section id="opportunities-sponsors" class="py-5">
	<div class="container">
		<div class="ori-section-title-6 text-center pera-content wow fadeInUp">
			<h2>Partner With Excellence</span></h2>
			<p>Align your brand with innovation, creativity, and the future of fashion. Connect with a passionate, trend-setting audience and achieve your marketing goals.</p>
		</div>
		<div class="row mt-5">
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="300ms">
				<div class="sponsor-tier">
					<h3>Runway Partner</h3>
					<div class="price">Silver</div>
					<ul>
						<li>Logo on event signage</li>
						<li>Social media mention</li>
						<li>2 VIP event passes</li>
						<li>-</li>
					</ul>
					<div class="ori-btn-5 text-uppercase"><a href="#">Select Tier</a></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
				<div class="sponsor-tier" style="transform: scale(1.05); border: 2px solid #58a6ff;">
					<h3>Collection Partner</h3>
					<div class="price">Gold</div>
					<ul>
						<li>All Silver benefits</li>
						<li>Logo on step-and-repeat wall</li>
						<li>Verbal recognition during show</li>
						<li>4 VIP event passes</li>
					</ul>
					<div class="ori-btn-5 text-uppercase"><a href="#">Select Tier</a></div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="500ms">
				<div class="sponsor-tier">
					<h3>Title Sponsor</h3>
					<div class="price">Platinum</div>
					<ul>
						<li>All Gold benefits</li>
						<li>"Presented by" naming rights</li>
						<li>Dedicated press release</li>
						<li>Exclusive backstage access</li>
					</ul>
					<div class="ori-btn-5 text-uppercase"><a href="#">Select Tier</a></div>
				</div>
			</div>
		</div>
		<div class="text-center mt-4 wow fadeInUp" data-wow-delay="600ms">
			<p>Have something else in mind? <a href="#">Contact us</a> for custom partnership opportunities.</p>
		</div>
	</div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>