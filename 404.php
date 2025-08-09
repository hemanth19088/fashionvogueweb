<?php
// Send proper 404 status
http_response_code(404);

$page_id = '404';
$body_class = 'ori-digital-studio';
include __DIR__ . '/includes/head.php';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<section class="ori-breadcrumb-section text-center" style="padding:120px 0">
  <div class="container">
    <div class="ori-breadcrumb-content">
      <h1>Page Not Found</h1>
      <p>The page you’re looking for doesn’t exist or was moved.</p>
      <div class="ori-btn-1" style="margin-top:20px">
        <a href="/fashionvogueweb/">Go to Home</a>
      </div>
    </div>
  </div>
  <div class="line_animation">
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
    <div class="line_area"></div>
  </div>
  </section>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>


