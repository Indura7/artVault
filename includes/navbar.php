<?php include_once __DIR__ . '/../config/config.php';
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-light border-bottom py-3 custom-navbar">
  <div class="container-fluid px-4">
    
    
    <a class="navbar-brand d-flex align-items-center fw-bold text-uppercase" href="<?php echo BASE_URL; ?>index.php" style="letter-spacing: 2px;">
      <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="ArtVault Logo" width="48" height="48" class="d-inline-block align-text-top me-5 scaled-logo"> 
        ArtVault
    </a>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNav">
      
      <!-- CENTERED LINKS -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">

        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'gallery.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>artwork/gallery.php">Browse Art</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'workshop.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>workshop/workshop.php">Workshops</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?php echo ($current_page == 'artist.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>artist/artist.php">Artists</a>
        </li>

        <li class="nav-item">
         <a class="nav-link <?php echo ($current_page == 'aboutus.php') ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>about/aboutus.php">About Us</a>
        </li>
      </ul>

      
      <div class="d-flex align-items-center gap-2">
        <button class="btn btn-outline-purple rounded-pill px-4" type="button">LOGIN</button>
        <button class="btn btn-gradient rounded-pill px-4 text-white" type="button">REGISTER</button>
      </div>

    </div>
  </div>
</nav>