<?php
$page_id = 'press';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Main Press Page Content Starts Here -->

<style>
    /* Basic Page Styles */
    :root {
        --primary-color: #1a237e; /* Deep blue */
        --secondary-color: #f4f6f8; /* Light grey background */
        --dark-text: #212121;
        --light-text: #616161;
        --border-color: #e0e0e0;
        --accent-color: #007bff;
    }

    body.ori-app-landing {
        font-family: 'Inter', sans-serif;
    }

    .press-page-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .press-section {
        padding: 60px 0;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--dark-text);
        margin-bottom: 10px;
    }

    .section-title p {
        font-size: 1.1rem;
        color: var(--light-text);
        max-width: 700px;
        margin: 0 auto;
    }

    /* Section 1: Press Coverage */
    .press-coverage-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    .article-card {
        background: #fff;
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 30px;
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.3s ease;
    }

    .article-card:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .article-card .publication-logo {
        height: 35px;
        margin-bottom: 20px;
        object-fit: contain;
        align-self: flex-start;
    }

    .article-card h3 {
        font-size: 1.3rem;
        color: var(--dark-text);
        margin-bottom: 15px;
        flex-grow: 1; /* Allows headline to take up space */
    }

    .article-card .read-link {
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 600;
        align-self: flex-start;
    }

    /* Section 2: Media Bytes */
    .media-bytes-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .byte-item {
        border-radius: 8px;
        overflow: hidden;
    }

    .byte-item.video {
        position: relative;
        padding-top: 56.25%; /* 16:9 Aspect Ratio */
        height: 0;
    }

    .byte-item.video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .byte-item.quote {
        background: var(--secondary-color);
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .byte-item.quote blockquote {
        font-size: 1.5rem;
        font-style: italic;
        color: var(--dark-text);
        border-left: 4px solid var(--primary-color);
        padding-left: 20px;
        margin: 0 0 20px 0;
    }

    .byte-item.quote footer {
        font-size: 1rem;
        font-weight: 600;
        color: var(--light-text);
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .media-bytes-grid {
            grid-template-columns: 1fr;
        }
    }

</style>

<main class="press-page-container">

    <!-- =========== SECTION 1: PRESS COVERAGE =========== -->
    <section id="press-coverage" class="press-section">
        <div class="section-title">
            <h2 style="color: white;">Fashion Coverage</h2>
            <p>We're proud to be recognized by leading voices in the industry. Explore our features, interviews, and stories from top media publications.</p>
        </div>
        <div class="press-coverage-grid">
            <!-- Article 1 -->
            <article class="article-card">
                <img src="https://placehold.co/150x35/f0f0f0/cccccc?text=PUBLICATION+A" alt="Publication A Logo" class="publication-logo">
                <h3>"A Groundbreaking Approach to Modern Industry Challenges"</h3>
                <a href="#" class="read-link">Read Full Story &rarr;</a>
            </article>
            <!-- Article 2 -->
            <article class="article-card">
                <img src="https://placehold.co/150x35/f0f0f0/cccccc?text=PUBLICATION+B" alt="Publication B Logo" class="publication-logo">
                <h3>"How One Company is Redefining the Standards of Excellence"</h3>
                <a href="#" class="read-link">Read Full Story &rarr;</a>
            </article>
            <!-- Article 3 -->
            <article class="article-card">
                <img src="https://placehold.co/150x35/f0f0f0/cccccc?text=PUBLICATION+C" alt="Publication C Logo" class="publication-logo">
                <h3>"The Visionary Leadership Behind a Decade of Success"</h3>
                <a href="#" class="read-link">Read Full Story &rarr;</a>
            </article>
        </div>
    </section>

    <!-- =========== SECTION 2: MEDIA BYTES =========== -->
    <section id="media-bytes" class="press-section">
        <div class="section-title">
            <h2 style="color: white;">Media Bytes</h2>
            <p>Catch the highlights. Here are quick, shareable clips and quotes from our recent interviews, events, and keynote speeches.</p>
        </div>
        <div class="media-bytes-grid">
            <!-- Video Byte -->
            <div class="byte-item video">
                <iframe src="assets/images/demo video.mp4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- Quote Byte -->
            <div class="byte-item quote">
                <blockquote>"<strong>Vogue Motto</strong>
                                To turn auditions into transformations - creating
                        real opportunities, real content, and real recognition"</blockquote>
                <footer>- FashionVogue</footer>
            </div>
        </div>
    </section>

</main>

<!-- Main Press Page Content Ends Here -->

<?php include __DIR__ . '/includes/footer.php'; ?>