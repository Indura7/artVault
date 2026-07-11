<?php include_once __DIR__ . '/../config/config.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<footer class="footer-art py-5 border-top">
  <div class="container-fluid px-sm-1 px-md-5">
    <div class="row gy-4 justify-content-between">
      
      
      <div class="col-md-5 col-lg-4">
        <div class="d-flex align-items-center mb-3">
          <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="ArtVault Logo" width="80" height="80" class="me-2">
          <span class="fs-1 fw-bold text-dark text-uppercase">ArtVault</span>
        </div>
        <p class="text-secondary small mb-4 pe-lg-1">
          Empowering creators to share their vision with the world through a secure, curated digital gallery experience.
        </p>
        
        <h6 class="fw-bold text-uppercase small mb-2 text-dark" style="letter-spacing: 0.5px;">Stay Inspired</h6>
        <div class="d-flex flex-sm-row flex-column gap-2">
          <input type="email" class="form-control rounded-pill px-3 text-uppercase small" placeholder="Enter your email for updates" style="font-size: 0.8rem; max-width: 250px;">
          <button class="btn btn-gradient rounded-pill px-4 text-white btn-sm" type="button">SUBSCRIBE</button>
        </div>
      </div>

      <!-- COLUMN 2: QUICK LINKS -->
      <div class="col-6 col-md-3 col-lg-2 offset-lg-1">
        <h6 class="fw-bold text-uppercase small mb-3 text-dark">Quick Links</h6>
        <ul class="list-unstyled footer-links d-flex flex-column gap-2">
          <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
          <li><a href="<?php echo BASE_URL; ?>artwork/gallery.php">Browse Art</a></li>
          <li><a href="<?php echo BASE_URL; ?>workshop/workshop.php">Workshops</a></li>
          <li><a href="<?php echo BASE_URL; ?>artist/artist">Artists</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
      </div>

      <!-- COLUMN 3: SUPPORT -->
      <div class="col-6 col-md-3 col-lg-2">
        <h6 class="fw-bold text-uppercase small mb-3 text-dark">Support</h6>
        <ul class="list-unstyled footer-links d-flex flex-column gap-2">
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <!-- COLUMN 4: SOCIALS -->
      <div class="col-md-6 col-lg-3 text-md-start text-lg-start">
        <h6 class="fw-bold text-uppercase small mb-3 text-dark">Connect With Us</h6>
        <div class="d-flex gap-2">
          <!-- Social Icons (Using FontAwesome or Bootstrap Icons) -->
          <a href="#" class="social-icon-circle"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon-circle"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon-circle"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>

    </div>

    <!-- BOTTOM COPYRIGHT ROW -->
    <div class="row mt-5 pt-4 border-top border-light">
      <div class="col-12 text-center text-secondary small">
        &copy; 2026 ArtVault. All rights reserved. <a href="#" class="text-secondary ms-2 text-decoration-none">Terms & Privacy</a>
      </div>
    </div>
  </div>
</footer>