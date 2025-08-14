<?php
$page_id = 'contact';
$body_class = 'ori-inner-page';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<style>
    /* Basic Page Styles */
    :root {
        --primary-color: #673ab7; /* Deep purple */
        --secondary-color: #f5f3f7; /* Light lavender background */
        --dark-text: #212121;
        --light-text: #6c757d;
        --border-color: #e0e0e0;
        --tag-bg: #e8eaf6;
        --tag-text: #3f51b5;
    }

    /* Use a standard font for a clean look */
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f9fafb; /* Slightly off-white background for the page */
    }

    .blogs-section-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 20px;
    }

    .blogs-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .blogs-header h2 {
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--dark-text);
        margin-bottom: 15px;
    }

    .blogs-header p {
        font-size: 1.2rem;
        color: var(--light-text);
        max-width: 700px;
        margin: 0 auto;
    }
    
    .blogs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .blog-card {
        background: #ffffff;
        border: 1px solid var(--border-color);
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .blog-card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    
    .blog-card-content {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1; /* Makes the card content fill available space */
    }
    
    .blog-card-category {
        display: inline-block;
        background-color: var(--tag-bg);
        color: var(--tag-text);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 15px;
        align-self: flex-start;
    }

    .blog-card-content h3 {
        font-size: 1.3rem;
        color: var(--dark-text);
        margin: 0 0 15px 0;
        line-height: 1.4;
        flex-grow: 1;
    }

    .blog-card-meta {
        font-size: 0.9rem;
        color: var(--light-text);
        margin-top: auto; /* Pushes meta to the bottom */
    }

</style>

<section class="blogs-section-container">
    <div class="blogs-header">
        <h2 style="color: whitesmoke;" >From Our Blog</h2>
        <p>Explore the opportunities, rewards, and recognition that come with being an elite artist in our community.</p>
    </div>

    <div class="blogs-grid">
        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1599405652234-56a64a563935?w=500&auto=format&fit=crop&q=60" alt="Makeup artist working on a model for a runway show" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Opportunities</span>
                <h3>Beyond the Basics: Landing Your First Runway & Magazine Shoot</h3>
                <div class="blog-card-meta">
                    <span>By Priya Sharma • August 14, 2025</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1455849318743-b2233052fcff?w=500&auto=format&fit=crop&q=60" alt="A person scrolling through a social media feed with tagged photos" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Recognition</span>
                <h3>Building Your Brand: Getting Tagged, Credited, and Featured</h3>
                <div class="blog-card-meta">
                    <span>By Alex Johnson • August 11, 2025</span>
                </div>
            </div>
        </article>
        
        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=500&auto=format&fit=crop&q=60" alt="A person using a professional app on a tablet" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Digital Tools</span>
                <h3>How Our App Connects You to Casting Calls & Bridal Bookings</h3>
                <div class="blog-card-meta">
                    <span>By Sam Lee • August 7, 2025</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1590439471364-192aa70c0b23?w=500&auto=format&fit=crop&q=60" alt="A flat lay of luxury makeup products and gift boxes" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Rewards</span>
                <h3>Unboxing the Perks: A Look Inside Our Exclusive Sponsor Kits</h3>
                <div class="blog-card-meta">
                    <span>By Priya Sharma • August 2, 2025</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1515688594390-b649fe4d9836?w=500&auto=format&fit=crop&q=60" alt="Two makeup artists collaborating backstage" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Opportunities</span>
                <h3>From Artist to Leader: The Path to Heading a Backstage Team</h3>
                <div class="blog-card-meta">
                    <span>By Alex Johnson • July 28, 2025</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="https://images.unsplash.com/photo-1611162617213-7d7a39e9b1d7?w=500&auto=format&fit=crop&q=60" alt="Smartphone showing a viral social media video" class="blog-card-image">
            <div class="blog-card-content">
                <span class="blog-card-category">Recognition</span>
                <h3>Going Viral: How Our Reels Can Amplify Your Social Reach</h3>
                <div class="blog-card-meta">
                    <span>By Sam Lee • July 22, 2025</span>
                </div>
            </div>
        </article>
    </div>
</section>






<?php include __DIR__ . '/includes/footer.php'; ?>