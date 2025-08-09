<?php
$page_id = 'contact';
$body_class = 'ori-inner-page';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<!-- Contact: Hero/Breadcrumbs -->
<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
  <div class="container">
    <div class="ori-breadcrumb-content text-center ul-li">
      <h1>Contact Us</h1>
      <ul>
        <li><a href="index">Home</a></li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <div class="line_animation">
    <div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div>
    <div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div>
  </div>
</section>

<!-- Contact info (number + email only) -->
<section id="ori-contact-info" class="ori-contact-form-section position-relative">
  <div class="container">
    <div class="ori-contact-form-content">
      <div class="row">
        <div class="col-lg-6">
          <div class="ori-contact-form-text-info pera-content">
            <h3>Reach us directly</h3>
            <div class="ori-contact-form-item-info">
              <div class="ori-contact-info d-flex align-items-center">
                <div class="info-icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-phone-alt"></i>
                </div>
                <div class="info-text pera-content">
                  <h4>Phone</h4>
                  <p><a href="tel:+919035620546">+91 9035620546</a></p>
                </div>
              </div>
              <div class="ori-contact-info d-flex align-items-center">
                <div class="info-icon d-flex align-items-center justify-content-center">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="info-text pera-content">
                  <h4>Email</h4>
                  <p><a href="mailto:hello@fashionvogue.org">hello@fashionvogue.org</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ori-contact-form-wrap">
            <form action="sendemail" method="post">
              <label>Name *</label>
              <input type="text" name="name" required>
              <label>Email *</label>
              <input type="email" name="email" placeholder="your@email.com" required>
              <label>Phone *</label>
              <input type="tel" name="phone" placeholder="+91 9035620546" required>
              <label>Subject *</label>
              <input type="text" name="subject" placeholder="Subject" required>
              <label>Message *</label>
              <textarea name="message" placeholder="Write your message" required></textarea>
              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Google Map -->
<div class="ori-google-map">
  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496" height="600" style="width:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

  <div class="line_animation">
    <div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div>
    <div class="line_area"></div><div class="line_area"></div><div class="line_area"></div><div class="line_area"></div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


