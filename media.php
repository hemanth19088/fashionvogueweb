<?php
$page_id = 'media';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<style>
    /* Basic Page Styles */
    :root {
        --primary-color: #1a237e; /* A deep, professional blue */
        --secondary-color: #f4f6f8; /* A light grey background */
        --dark-text: #212121;
        --light-text: #616161;
        --border-color: #e0e0e0;
        --accent-color: #007bff; /* Standard link blue for accents */
    }

    body.ori-app-landing {
        font-family: 'Inter', sans-serif; /* A clean, modern font */
    }

    .media-page-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .media-section {
        padding: 80px 0;
        border-bottom: 1px solid var(--border-color);
    }

    .media-section:last-child {
        border-bottom: none;
    }

    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-text);
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 1.1rem;
        color: var(--light-text);
        max-width: 700px;
        margin: 0 auto;
    }

    /* Section 1: Latest News */
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .news-card {
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }

    .news-card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .news-card-content {
        padding: 25px;
    }

    .news-card-content .date {
        font-size: 0.8rem;
        color: var(--light-text);
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .news-card-content h3 {
        font-size: 1.25rem;
        margin-bottom: 15px;
        color: var(--dark-text);
    }

    .news-card-content .read-more {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 600;
    }

    /* Section 2: Media Gallery */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 15px;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
        transition: opacity 0.3s ease;
    }
    
    .gallery-item img:hover {
        opacity: 0.85;
    }

    /* Section 3: In the Press */
    .press-logos {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 40px;
        margin-bottom: 50px;
    }

    .press-logos img {
        max-height: 40px;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: filter 0.3s ease, opacity 0.3s ease;
    }

    .press-logos img:hover {
        filter: grayscale(0%);
        opacity: 1;
    }

    .press-quote {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .press-quote blockquote {
        font-size: 1.5rem;
        font-style: italic;
        color: var(--dark-text);
        margin-bottom: 15px;
        border: none;
        padding: 0;
    }

    .press-quote footer {
        font-size: 1rem;
        color: var(--light-text);
    }

    /* Section 4: Press Kit */
    .resource-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }
    
    .resource-card {
        background: var(--secondary-color);
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        transition: background 0.3s ease;
    }

    .resource-card:hover {
        background: #e9ecef;
    }

    .resource-card .icon {
        font-size: 2.5rem; /* Placeholder for icon */
        margin-bottom: 15px;
        color: var(--primary-color);
    }

    .resource-card h4 {
        margin-bottom: 10px;
        font-size: 1.2rem;
    }
    
    .resource-card a {
        text-decoration: none;
        color: var(--accent-color);
        font-weight: 600;
    }

    /* Section 5: Connect */
    .connect-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 40px;
    }
    
    .social-links a {
        margin: 0 15px;
        font-size: 1.5rem;
        color: var(--light-text);
        transition: color 0.3s ease;
    }
    .social-links a:hover {
        color: var(--primary-color);
    }
    
    .newsletter-form {
        display: flex;
        gap: 10px;
        max-width: 500px;
        width: 100%;
    }

    .newsletter-form input {
        flex-grow: 1;
        padding: 15px;
        border: 1px solid var(--border-color);
        border-radius: 5px;
    }

    .newsletter-form button {
        padding: 15px 25px;
        border: none;
        background: var(--primary-color);
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
    }
</style>

<main class="media-page-container">

    <section id="latest-news" class="media-section">
        <div class="section-header">
<h2 style="color: white;">The Latest from Our World</h2>
            <p>Stay informed with our official press releases, event announcements, and breaking news. This is your primary source for what's new and what's next.</p>
        </div>
        <div class="news-grid">
            <article class="news-card">
                <img src="https://placehold.co/600x400/1a237e/ffffff?text=Announcement" alt="Major company announcement" class="news-card-image">
                <div class="news-card-content">
                    <p class="date">August 12, 2025</p>
                    <h3>We're Launching a New Global Initiative</h3>
                    <p>We are thrilled to announce a landmark project aimed at expanding our impact across three new continents...</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>
            <article class="news-card">
                <img src="https://placehold.co/600x400/e0e0e0/000000?text=Event" alt="Recap of a recent event" class="news-card-image">
                <div class="news-card-content">
                    <p class="date">July 30, 2025</p>
                    <h3>Our Annual Summit: A Record-Breaking Success</h3>
                    <p>This year's summit brought together industry leaders from around the world for three days of innovation...</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>
            <article class="news-card">
                <img src="https://placehold.co/600x400/333333/ffffff?text=Report" alt="Cover of a new report" class="news-card-image">
                <div class="news-card-content">
                    <p class="date">July 15, 2025</p>
                    <h3>New Industry Report Published</h3>
                    <p>Our latest research provides key insights into market trends and future growth opportunities for 2026...</p>
                    <a href="#" class="read-more">Read More &rarr;</a>
                </div>
            </article>
        </div>
    </section>

    <section id="gallery" class="media-section" style="background-color: var(--secondary-color);">
        <div class="section-header">
            <h2>A Visual Journey</h2>
            <p>Explore our curated collection of high-resolution photos and videos. Here, our story unfolds through captivating moments and powerful imagery.</p>
        </div>
        <div class="gallery-grid">
            <a href="#"><img src="https://placehold.co/400x400/1a237e/ffffff?text=Event+Photo" alt="Photo from a company event"></a>
            <a href="#"><img src="https://placehold.co/400x400/cccccc/000000?text=Behind+the+Scenes" alt="Behind the scenes at a photoshoot"></a>
            <a href="#"><img src="https://placehold.co/400x400/555555/ffffff?text=Team" alt="Company team photo"></a>
            <a href="#"><img src="https://placehold.co/400x400/1a237e/ffffff?text=Product" alt="Product in action"></a>
            <a href="#"><img src="https://placehold.co/400x400/cccccc/000000?text=Campaign" alt="Image from a marketing campaign"></a>
            <a href="#"><img src="https://placehold.co/400x400/555555/ffffff?text=Office" alt="Photo of the company office"></a>
            <a href="#"><img src="https://placehold.co/400x400/1a237e/ffffff?text=Community" alt="Community outreach event"></a>
            <a href="#"><img src="https://placehold.co/400x400/cccccc/000000?text=Leadership" alt="Headshot of a company leader"></a>
        </div>
    </section>

    <section id="in-the-press" class="media-section">
        <div class="section-header">
<h2 style="color: white;">AS SEEN IN</h2>    
        <p>We're honored to be featured by leading publications and media outlets. See what others are saying about our work and impact.</p>
        </div>
        <div class="press-logos">
            <img src="https://placehold.co/150x40/f0f0f0/cccccc?text=FORBES" alt="Forbes Logo">
            <img src="https://placehold.co/150x40/f0f0f0/cccccc?text=TechCrunch" alt="TechCrunch Logo">
            <img src="https://placehold.co/150x40/f0f0f0/cccccc?text=VOGUE" alt="Vogue Logo">
            <img src="https://placehold.co/150x40/f0f0f0/cccccc?text=WIRED" alt="Wired Logo">
            <img src="https://placehold.co/150x40/f0f0f0/cccccc?text=BLOOMBERG" alt="Bloomberg Logo">
        </div>
        <div class="press-quote">
<blockquote style="color: white;">"A true innovator in their field, consistently pushing the boundaries of what's possible and setting new standards for the entire industry."</blockquote>            <footer>- Forbes Magazine</footer>
        </div>
    </section>

    <section id="press-kit" class="media-section" style="background-color: var(--secondary-color);">
        <div class="section-header">
            <h2>Resources for the Press</h2>
            <p>Everything you need to tell our story. Access our official brand assets, executive bios, and contact information for media inquiries.</p>
        </div>
        <div class="resource-grid">
            <div class="resource-card">
                <div class="icon">&#128196;</div> <h4>Company Fact Sheet</h4>
                <a href="#">Download PDF</a>
            </div>
            <div class="resource-card">
                <div class="icon">&#128444;</div> <h4>Logo & Brand Assets</h4>
                <a href="#">Download .ZIP</a>
            </div>
            <div class="resource-card">
                <div class="icon">&#128247;</div> <h4>High-Res Image Pack</h4>
                <a href="#">Download .ZIP</a>
            </div>
            <div class="resource-card">
                <div class="icon">&#128100;</div> <h4>Executive Bios</h4>
                <a href="#">View Bios</a>
            </div>
        </div>
    </section>

    <section id="connect" class="media-section">
        <div class="section-header">
<h2 style="color: white;">Let's Keep in Touch</h2>
            <p>Follow our journey on social media or subscribe to our newsletter for the latest news delivered straight to your inbox.</p>
        </div>
        <div class="connect-wrapper">
             <div class="social-links">
                <a href="#" title="Facebook">FB</a>
                <a href="#" title="Instagram">IG</a>
                <a href="#" title="Twitter / X">X</a>
                <a href="#" title="LinkedIn">IN</a>
             </div>
             <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
             </form>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>