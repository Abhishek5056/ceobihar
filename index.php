<?php
// Add server-side logic here if needed
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Official CEO Bihar Portal - Access electoral data, register as a voter, and stay informed.">
  <title>CEO Bihar Portal</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />

  <!-- Bootstrap & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!-- AOS (Animate On Scroll) -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    * {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f9f9f9;
    }

    .hero-header {
      background: linear-gradient(to bottom, #f6c589, #0000FF);
      color: white;
    }

    .navbar {
      background-color: transparent !important;
      transition: all 0.3s ease;
    }

    .navbar .nav-link {
      font-size: 20px;
      font-weight: 700;
      color: white !important;
      padding: 10px 18px;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .navbar .nav-link:hover {
      background-color: #007bff;
      color: #fff !important;
    }

    .navbar-brand img {
      height: auto;
      width: 100%;
      max-width: 270px;
    }

    .hero {
      padding: 100px 0 60px;
    }

    .hero h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.1rem;
    }

    .btn-light {
      background-color: #fff;
      color: #003366;
      font-weight: 600;
    }

    .btn-outline-light {
      border: 2px solid white;
      color: white;
      font-weight: 600;
    }

    .features {
      padding: 60px 0;
    }

    .icon-circle {
      width: 60px;
      height: 60px;
      line-height: 60px;
      border-radius: 50%;
      display: inline-block;
      font-size: 24px;
      transition: transform 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .feature-card {
      transition: transform 0.4s ease, box-shadow 0.4s ease, opacity 0.4s ease;
      background: linear-gradient(to bottom right, #fefefe, #e6ecff);
    }

    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
      opacity: 0.95;
    }

    .feature-card:hover .icon-circle {
      transform: scale(1.2) rotate(8deg);
    }

    @media (max-width: 768px) {
      .card-text {
        font-size: 0.95rem;
      }

      .card-title {
        font-size: 1.1rem;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .hero p {
        font-size: 1rem;
      }

      .hero {
        padding: 60px 0 40px;
        text-align: center;
      }
    }

    .footer {
      background-color: #222;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .footer a {
      color: white;
      font-size: 18px;
      margin: 0 10px;
      transition: color 0.3s ease;
    }

    .footer a:hover {
      color: #ffcc00;
    }
  </style>
</head>

<body>

  <!-- Header with Navbar and Hero Section -->
  <header class="hero-header">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="CEOLogo.png" alt="CEO Bihar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent"
          aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.php"><i class="fas fa-info-circle me-2"></i>About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="electoral.php"><i class="fas fa-chart-bar me-2"></i>Electoral Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fas fa-envelope me-2"></i>Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-white">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center text-md-start">
          <div class="col-md-6" data-aos="fade-right">
            <h2 class="text-uppercase">Welcome to CEO Bihar</h2>
            <h1>We Deliver Transparent Electoral Services</h1>
            <p>Empowering voters through digital technology and democratic values across Bihar.</p>
            <a href="getstarted.php" class="btn btn-light me-2 mt-3" aria-label="Get Started with CEO Bihar">Get Started</a>
            <a href="nvsp.php" class="btn btn-outline-light mt-3" aria-label="Visit NVSP Portal">NVSP Portal</a>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <!-- Optional image or animation -->
          <!--  <img src="hand-puts-ballot-paper-into-ballot-box-elections-concept-red-vote-box-vector-flat-illustration_566734-215.avif" class="img-fluid" alt="Voting Illustration">-->
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- Features Section -->
  <section class="features py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold">Portal Services</h2>
      </div>
      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 border-0 shadow feature-card">
            <div class="card-body text-center">
              <div class="icon-circle bg-primary text-white mx-auto mb-3">
                <i class="fas fa-database fa-lg"></i>
              </div>
              <h5 class="card-title fw-bold">Electoral Data</h5>
              <p class="card-text">Access district-wise electoral rolls and insightful demographics to understand voter distribution in Bihar.</p>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 border-0 shadow feature-card">
            <div class="card-body text-center">
              <div class="icon-circle bg-success text-white mx-auto mb-3">
                <i class="fas fa-vote-yea fa-lg"></i>
              </div>
              <h5 class="card-title fw-bold">Voter Registration</h5>
              <p class="card-text">Quickly register as a new voter, make corrections, or update your personal and electoral details seamlessly.</p>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="card h-100 border-0 shadow feature-card">
            <div class="card-body text-center">
              <div class="icon-circle bg-danger text-white mx-auto mb-3">
                <i class="fas fa-bullhorn fa-lg"></i>
              </div>
              <h5 class="card-title fw-bold">Public Awareness</h5>
              <p class="card-text">Stay informed with timely notifications, voter education programs, and important campaign announcements.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>© 2025 CEO Bihar. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>

</html>
