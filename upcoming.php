<?php
$page_id = 'designers';
$body_class = 'ori-app-landing';
include __DIR__ . '/includes/head.php';
// Assuming head.php includes the Tailwind CSS CDN link and a font like Inter.
?>
<?php include __DIR__ . '/includes/header.php'; ?>


<section class="fashion-vogue-event-full">

    <style>
        .fashion-vogue-event-full {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            width: 100%;
            /* This padding adds space at the top and bottom of the section */
            padding: 60px 0;
            background-color: #ffffff; /* Use a background color to fill the space */
            box-sizing: border-box; /* Ensures padding doesn't add to the width */
        }
        .fashion-vogue-event-full .event-content-wrapper {
            /* This inner container centers the content and limits its width on large screens for readability */
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px; /* Adds space on the sides for smaller screens */
            text-align: center;
        }
        .fashion-vogue-event-full .event-title {
            font-size: 2.8rem;
            font-weight: bold;
            color: #1a1a1a;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .fashion-vogue-event-full .event-subtitle {
            font-size: 1.2rem;
            font-style: italic;
            color: #6c757d;
            margin-top: 0;
            margin-bottom: 25px;
        }
        .fashion-vogue-event-full .event-dates {
            font-size: 1.2rem;
            font-weight: 600;
            background-color: #f2f2f2;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 25px;
        }
        .fashion-vogue-event-full .section-divider {
            border: 0;
            height: 1px;
            background: #e0e0e0;
            margin: 40px auto;
            max-width: 100px;
        }
        .fashion-vogue-event-full .section-title {
            font-size: 2rem;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        .fashion-vogue-event-full .highlights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            text-align: left;
            margin-bottom: 20px;
        }
        .fashion-vogue-event-full .highlight-item {
            background-color: #fafafa;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #007bff; /* Main Accent color */
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .fashion-vogue-event-full .highlight-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.07);
        }
        .fashion-vogue-event-full .highlight-item h5 {
            margin-top: 0;
            font-size: 1.1rem;
            color: #0056b3;
        }
        .fashion-vogue-event-full .highlight-item ul {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .fashion-vogue-event-full .highlight-item ul li {
            margin-bottom: 8px;
        }
        .fashion-vogue-event-full .contact-section {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            margin-top: 40px;
        }
        .fashion-vogue-event-full .contact-section p {
            margin: 0;
            font-size: 1.1rem;
        }
        .fashion-vogue-event-full .contact-phone {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }
        .fashion-vogue-event-full .contact-phone:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .fashion-vogue-event-full {
                padding: 40px 0;
            }
            .fashion-vogue-event-full .event-title {
                font-size: 2.2rem;
            }
        }
    </style>
    
    <div class="event-content-wrapper">
        <h1 class="event-title">FASHION VOGUE 2025</h1>
        <p class="event-subtitle">"Where Auditions Meet Talent, and Talent Meets the Runway"</p>
        
        <div class="event-dates">
            🗓️ October 18 & 19, 2025
        </div>

        <p>Get ready for the most anticipated fashion event of the year! Fashion Vogue is back, providing a premier platform for aspiring and established models. This is your chance to shine, get discovered, and walk the ramp.</p>

        <hr class="section-divider">

        <h2 class="section-title">Event Highlights</h2>

        <div class="highlights-grid">
            <div class="highlight-item">
                <h5>🏆 Grand Prize</h5>
                <p>A stunning prize of ₹2 Lakhs awaits the winner!</p>
            </div>
            <div class="highlight-item">
                <h5>✨ Categories for All</h5>
                <ul>
                    <li>MR</li>
                    <li>MRS</li>
                    <li>MISS</li>
                    <li>KIDS</li>
                </ul>
            </div>
            <div class="highlight-item">
                <h5>🚀 Unparalleled Opportunities</h5>
                <p>This isn't just a competition; it's a career launchpad with:</p>
                <ul>
                    <li><strong>40+</strong> Directors Attending</li>
                    <li><strong>200+</strong> Models Participating</li>
                    <li><strong>100+</strong> Industry Opportunities</li>
                </ul>
            </div>
        </div>
        
        <div class="contact-section">
            <h3 class="section-title" style="margin-bottom: 10px;">Ready to Take the Stage?</h3>
            <p>For auditions, registration, and inquiries, please get in touch with us.</p>
            <p style="margin-top:15px; font-weight: 500;">Say Hello @</p>
            <a href="tel:+919035620546" class="contact-phone">+91 9035620546</a>
        </div>
    </div>
    
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
