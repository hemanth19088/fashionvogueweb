<!-- Start of Footer section
	============================================= -->
<footer id="ori-footer" class="ori-footer-section footer-style-one">
	<div class="container">
		<div class="ori-footer-title text-center text-uppercase">
			<h2>Get In <span>Touch</span> <i class="fas fa-arrow-right"></i></h2>
		</div>
		<div class="ori-footer-widget-wrapper">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
                    <div class="logo-widget">
                        <a href="index">
                            <img src="assets/images/logos/fashionvogue_colour_logo.png" alt="FashionVogue Logo">
                        </a>
                    </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="menu-location-widget ul-li-block">
							<h2 class="widget-title text-uppercase">Our Location</h2>
							<ul>
								<li><a href="#">London</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Constarica</a></li>
								<li><a href="#">Germany</a></li>
								<li><a href="#">India</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="contact-widget ul-li-block">
							<h2 class="widget-title text-uppercase">Contact info</h2>
							<div class="contact-info">
								<span>ECA-135/A, 25/2 Barlin, Germany </span>
								<span>(+250)155 69569 365</span>
								<a href="#">support@orixy.com</a>
								<span>Office Hours: 8AM - 11PM</span>
								<span>Sunday - Wekend Day</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="ori-footer-widget">
						<div class="newslatter-widget ul-li-block">
							<h2 class="widget-title text-uppercase">Newslatter</h2>
							<div class="newslatter-form">
								<form action="#" method="get">
									<input type="email" name="email" placeholder="Enter mail">
									<button type="submit">Subscribe <i class="fas fa-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ori-footer-copyright d-flex justify-content-between">
			<div class="ori-copyright-text">
				© 2022 All Right Recived - Orixy - Themexriver
			</div>
			<div class="ori-copyright-social">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>
</footer>
<!-- End of Footer section
	============================================= -->

<!-- For Js Library -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/twin.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/knob.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/rbtools.min.js"></script>
<script src="assets/js/rs6.min.js"></script>
<script src="assets/js/jarallax.js"></script>
<script src="assets/js/jquery.inputarrow.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
(function(){
  var form = document.getElementById('contactForm');
  if (!form) return;
  var successEl = document.getElementById('contactSuccess');
  var errorEl = document.getElementById('contactError');
  var formWrap = form.closest('.ori-contact-form-wrap') || form;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    successEl && (successEl.style.display='none');
    errorEl && (errorEl.style.display='none');
    var formData = new FormData(form);
    formData.append('ajax','1');
    fetch(form.action, { method:'POST', body: formData, headers: { 'Accept':'application/json' } })
      .then(function(res){ return res.json(); })
      .then(function(data){
        if (data && data.success) {
          if (successEl) {
            successEl.textContent = 'Thank you! Our team will get in touch with you.';
            successEl.style.display='block';
          }
          form.reset();
          if (formWrap) formWrap.style.display='none';
        } else {
          if (errorEl) errorEl.style.display='block';
        }
      })
      .catch(function(){ if (errorEl) errorEl.style.display='block'; });
    return false;
  });
})();
</script>

<!-- WhatsApp sticky -->
<div class="fv-whatsapp-sticky" style="position:fixed;right:20px;bottom:95px;z-index:2147483647">
  <span style="position:absolute;right:0;bottom:74px;background:#25D366;color:#fff;padding:8px 12px;border-radius:20px;font-size:14px;font-weight:600;box-shadow:0 8px 20px rgba(0,0,0,.15);white-space:nowrap">Say Hello</span>
  <a href="https://wa.me/919035620546" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
     style="width:64px;height:64px;border-radius:50%;background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:30px;box-shadow:0 8px 20px rgba(0,0,0,.2)">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>


