<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spark Mobile — Delivering Car Wash Right From Your Doorstep</title>
  <meta name="description" content="Spark Mobile — Delivering professional Car Wash services right from your doorstep.">

  <!-- Favicon -->
  <link rel="icon" href="<?= URLROOT ?>/images/NEW SM LOGO.png" type="image/png">

  <!-- Google Fonts: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS (local) -->
  <link rel="stylesheet" href="<?= URLROOT ?>/css/bootstrap.min.css">

  <!-- Bootstrap Icons (CDN) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Landing Page CSS -->
  <link rel="stylesheet" href="<?= URLROOT ?>/css/landing.css">
</head>

<body>
<div class="lp-root">

  <!-- =====================================================================
       NAVBAR
       ===================================================================== -->
  <header class="lp-navbar">
    <div class="lp-container">

      <!-- Brand / Logo -->
      <a href="#hero" class="lp-brand">
        <img src="<?= URLROOT ?>/images/NEW SM LOGO.png" alt="Spark Mobile Logo">
        <span>Spark Mobile</span>
      </a>

      <!-- Mobile Toggle -->
      <button class="lp-nav-toggle" id="navToggle" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>

      <!-- Nav Links -->
      <nav class="lp-nav" id="lpNav">
        <ul>
          <li><a href="#hero"     class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
        </ul>
      </nav>

      <!-- Sign-up CTA -->
      <a href="#" class="lp-btn-signup" data-bs-toggle="modal" data-bs-target="#signupModal">
        Sign-up
      </a>

    </div>
  </header>

  <!-- =====================================================================
       HERO SECTION
       ===================================================================== -->
  <section id="hero" class="lp-hero"
    style="background-image: url('<?= URLROOT ?>/images/carwashbackground.jpg');">
    <div class="lp-hero-overlay">
      <div class="lp-container">
        <div class="lp-hero-content">
          <h1>Spark Mobile</h1>
          <p>Delivering Car Wash right from your doorstep</p>
          <a href="#" class="lp-btn-started"
             data-bs-toggle="modal" data-bs-target="#loginModal">
            Get Started
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- =====================================================================
       ABOUT SECTION
       ===================================================================== -->
  <section id="about" class="lp-about">
    <div class="lp-container">
      <div class="lp-about-row">

        <div class="lp-about-img" data-animate>
          <img src="<?= URLROOT ?>/images/carwashlanding.avif" alt="Spark Mobile Car Wash Service">
        </div>

        <div class="lp-about-text" data-animate data-delay="200">
          <h2>About Spark Mobile</h2>
          <p class="about-lead">
            Spark Mobile aims to revolutionize the Car Wash industry
            system by providing a fast and seamless Car Wash services.
          </p>
          <ul class="about-list">
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Convenient booking and scheduling.</span>
            </li>
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Affordable cleaning products.</span>
            </li>
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Door to door cleaning services.</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================================
       FEATURES SECTION
       ===================================================================== -->
  <section id="features" class="lp-features">
    <div class="lp-container">

      <div class="lp-section-header" data-animate>
        <h2>Features</h2>
        <p>Discover what makes Spark Mobile your ultimate Car Wash companion.</p>
      </div>

      <div class="lp-features-grid">
        <?php
        $features = [
          [
            'icon'        => 'bi-geo-alt-fill',
            'title'       => 'Real-time Tracking',
            'description' => 'Know exactly when your washer will arrive with live location updates.',
          ],
          [
            'icon'        => 'bi-calendar-check-fill',
            'title'       => 'Easy Booking',
            'description' => 'Schedule a wash in advance and skip the hassle during peak hours.',
          ],
          [
            'icon'        => 'bi-shield-lock-fill',
            'title'       => 'Secure Payments',
            'description' => 'Pay safely through the app and enjoy a fully cashless experience.',
          ],
          [
            'icon'        => 'bi-bar-chart-fill',
            'title'       => 'Analytics Dashboard',
            'description' => 'Monitor wash history, statistics, and manage your account with ease.',
          ],
        ];
        $loop = 0;
        foreach ($features as $f): $loop++; ?>
          <div class="lp-feature-card" data-animate data-delay="<?= $loop * 100 ?>">
            <div class="fc-icon">
              <i class="bi <?= htmlspecialchars($f['icon']) ?>"></i>
            </div>
            <h3><?= htmlspecialchars($f['title']) ?></h3>
            <p><?= htmlspecialchars($f['description']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- =====================================================================
       FOOTER
       ===================================================================== -->
  <footer class="lp-footer">
    <div class="lp-container">

      <div class="lp-footer-grid">

        <!-- Contact Info -->
        <div>
          <h4>Spark Mobile</h4>
          <p>
            Davao Central College<br>
            Davao City, Toril, 8000<br>
            Philippines<br><br>
            <strong>Phone:</strong> 12345789<br>
            <strong>Email:</strong> sparkmobileph@gmail.com
          </p>
        </div>

        <!-- Quick Links -->
        <div class="lp-footer-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Newsletter -->
        <div>
          <h4>Join Our Newsletter</h4>
          <p>Subscribe for the latest updates and exclusive offers!</p>
          <form class="lp-newsletter-form" action="subscribe.php" method="post">
            <input type="email" name="email" placeholder="Your email address" required>
            <button type="submit">Send</button>
          </form>
        </div>

      </div>

      <div class="lp-footer-bottom">
        &copy; <span id="lp-year"></span> <strong>Spark Mobile</strong>. All Rights Reserved.
      </div>

    </div>
  </footer>

</div><!-- /.lp-root -->


<!-- =========================================================================
     LOGIN MODAL
     ========================================================================= -->
<div class="modal fade lp-modal" id="loginModal" tabindex="-1"
     aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title lp-modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
      </div>

      <div class="modal-body pt-2">
        <form action="cslogin.php" method="POST">
          <input type="hidden" name="status" value="online">

          <div class="mb-3">
            <label for="login-email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="login-email"
                   name="email" required>
          </div>

          <div class="mb-3">
            <label for="login-password" class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" id="login-password"
                   name="password" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3 mb-0" style="font-size:.9rem;">
          Don't have an account?
          <a href="#" data-bs-dismiss="modal"
             data-bs-toggle="modal" data-bs-target="#signupModal">Sign-up</a>
        </p>
      </div>

    </div>
  </div>
</div>


<!-- =========================================================================
     SIGN-UP MODAL
     ========================================================================= -->
<div class="modal fade lp-modal" id="signupModal" tabindex="-1"
     aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title lp-modal-title" id="signupModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
      </div>

      <div class="modal-body pt-2">
        <form action="csregister.php" method="POST">
          <input type="hidden" name="role" value="User">

          <div class="row g-2 mb-2">
            <div class="col-6">
              <label for="signup-firstname" class="form-label fw-semibold">First Name</label>
              <input type="text" class="form-control" id="signup-firstname"
                     name="firstname" required>
            </div>
            <div class="col-6">
              <label for="signup-lastname" class="form-label fw-semibold">Last Name</label>
              <input type="text" class="form-control" id="signup-lastname"
                     name="lastname" required>
            </div>
          </div>

          <div class="mb-2">
            <label for="signup-gender" class="form-label fw-semibold">Gender</label>
            <select class="form-select" id="signup-gender" name="gender" required>
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>

          <div class="mb-2">
            <label for="signup-email" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" id="signup-email"
                   name="email" required>
          </div>

          <div class="mb-3">
            <label for="signup-password" class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" id="signup-password"
                   name="password" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Sign-up</button>
        </form>

        <?php if (isset($_GET['signup_error'])): ?>
          <div class="alert alert-danger mt-3 mb-0">
            <?= htmlspecialchars($_GET['signup_error']) ?>
          </div>
        <?php endif; ?>

        <p class="text-center mt-3 mb-0" style="font-size:.9rem;">
          Already have an account?
          <a href="#" data-bs-dismiss="modal"
             data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
        </p>
      </div>

    </div>
  </div>
</div>


<!-- Bootstrap 5 JS Bundle (CDN — required for modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // ── Dynamic copyright year ──────────────────────────────
  document.getElementById('lp-year').textContent = new Date().getFullYear();

  // ── Mobile nav toggle ───────────────────────────────────
  document.getElementById('navToggle').addEventListener('click', function () {
    document.getElementById('lpNav').classList.toggle('open');
  });

  // ── Signup success flash ────────────────────────────────
  (function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get('signup') === 'success') {
      alert('Signup successful! Please log in.');
      history.replaceState({}, document.title, location.pathname);
    }
  })();

  // ── Scroll Reveal (Intersection Observer) ───────────────
  (function () {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target); // animate once only
          }
        });
      },
      { threshold: 0.15 } // trigger when 15% of element is visible
    );

    document.querySelectorAll('[data-animate]').forEach(function (el) {
      observer.observe(el);
    });
  })();
</script>

</body>
</html>
