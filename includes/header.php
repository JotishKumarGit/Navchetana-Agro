<!-- Sticky Navbar -->
<nav class="navbar navbar-expand-lg sticky-top py-3">
  <div class="container-fluid px-4">
    <!-- Brand -->
    <a class="navbar-brand fw-bold fs-4" href="#"> Navchetana Agro Center Producer Company Limited</a>

    <!-- Toggler (mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
      aria-controls="mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Nav -->
    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Mustard_Oil_Cake.php">Mustard Oil Cake</a></li>
            <li><a class="dropdown-item" href="Neem_Khali_Cake.php">Neem Khali Cake</a></li>
            <li><a class="dropdown-item" href="Cow_Dung_Cake.php">Cow Dung Cake</a></li>
            <li><a class="dropdown-item" href="Organic_manure.php">Organic Manure</a></li>
            <li><a class="dropdown-item" href="Outdoor_Plants.php">Outdoor Plants</a></li>
            <li><a class="dropdown-item" href="Organic_Fertilizers.php">Organic Fertilizers</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Offcanvas for Mobile Menu -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

      <!-- Dropdown inside Offcanvas -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="Mustard_Oil_Cake.php">Mustard Oil Cake</a></li>
          <li><a class="dropdown-item" href="Neem_Khali_Cake.php">Neem Khali Cake</a></li>
          <li><a class="dropdown-item" href="Cow_Dung_Cake.php">Cow Dung Cake</a></li>
          <li><a class="dropdown-item" href="Organic_manure.php">Organic Manure</a></li>
          <li><a class="dropdown-item" href="Outdoor_Plants.php">Outdoor Plants</a></li>
          <li><a class="dropdown-item" href="Organic_Fertilizers.php">Organic Fertilizers</a></li>
        </ul>
      </li>

      <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
      <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>
  </div>
</div>