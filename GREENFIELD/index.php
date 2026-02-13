<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GreenField Rice Processing</title>
  <style>
    /* ============================================
       HOME PAGE WITH MILLED RICE BACKGROUND
       ============================================ */
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --rice-green: #2f5d2f;
      --dark-green: #1e401e;
      --light-green: #4a7c4a;
      --earth-brown: #8b5a2b;
      --golden-yellow: #d4af37;
      --cream: #f8f7f3;
      --pure-white: #ffffff;
      --off-white: #f5f5f0;
      --shadow-light: rgba(0, 0, 0, 0.08);
      --shadow-dark: rgba(0, 0, 0, 0.15);
    }

    body {
      background-color: var(--cream);
      color: #333;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* MILLED RICE BACKGROUND */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      opacity: 0.15;
      z-index: -1;
    }

    /* NAVBAR STYLING WITH LOGO */
    .navbar {
      background: linear-gradient(135deg, var(--rice-green) 0%, var(--dark-green) 100%);
      color: var(--pure-white);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      border-bottom: 3px solid var(--golden-yellow);
    }

    .logo-container {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .logo {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      background: linear-gradient(135deg, var(--golden-yellow), #e6c158);
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      position: relative;
      overflow: hidden;
    }

    .logo::before {
      content: "🌾";
      font-size: 2rem;
      z-index: 2;
    }

    .logo::after {
      content: "";
      position: absolute;
      width: 60px;
      height: 60px;
      background: var(--rice-green);
      border-radius: 50%;
      opacity: 0.3;
      top: -5px;
      left: -5px;
    }

    .logo-text {
      display: flex;
      flex-direction: column;
    }

    .logo-main {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--pure-white);
      line-height: 1.2;
    }

    .logo-tagline {
      font-size: 0.75rem;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 400;
    }

    .navbar nav {
      display: flex;
      gap: 1.2rem;
      align-items: center;
    }

    .navbar nav a {
      color: var(--pure-white);
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      padding: 0.5rem 0.9rem;
      border-radius: 4px;
      transition: all 0.3s ease;
    }

    .navbar nav a:hover {
      background-color: rgba(255, 255, 255, 0.15);
      transform: translateY(-2px);
    }

    .admin-link {
      background-color: rgba(212, 175, 55, 0.15);
      color: #ffdd99 !important;
      border: 1px solid rgba(212, 175, 55, 0.3);
    }

    .admin-link:hover {
      background-color: rgba(212, 175, 55, 0.25) !important;
    }

    /* HERO SECTION WITH MILLED RICE BACKGROUND */
    .hero {
      background: linear-gradient(rgba(47, 93, 47, 0.85), rgba(30, 64, 30, 0.9)),
                  url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: var(--pure-white);
      text-align: center;
      padding: 6rem 2rem;
      margin: 0;
      position: relative;
      overflow: hidden;
      border-radius: 0 0 20px 20px;
    }

    .hero::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background: linear-gradient(to bottom, transparent, var(--cream));
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 900px;
      margin: 0 auto;
    }

    .hero h2 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
      line-height: 1.2;
    }

    .hero p {
      font-size: 1.3rem;
      max-width: 700px;
      margin: 0 auto 2.5rem;
      opacity: 0.9;
      line-height: 1.7;
    }

    /* BUTTONS */
    .btn {
      background: linear-gradient(to right, var(--earth-brown), #a67c52);
      color: var(--pure-white);
      padding: 1rem 2.5rem;
      border-radius: 50px;
      text-decoration: none;
      display: inline-block;
      font-weight: 600;
      font-size: 1.1rem;
      border: none;
      cursor: pointer;
      box-shadow: 0 5px 20px rgba(139, 90, 43, 0.4);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .btn::after {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.7s;
    }

    .btn:hover {
      background: linear-gradient(to right, #9c6b3a, var(--earth-brown));
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(139, 90, 43, 0.5);
    }

    .btn:hover::after {
      left: 100%;
    }

    /* SERVICES SECTION */
    .services {
      padding: 5rem 2rem;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(5px);
      margin: 4rem auto;
      max-width: 1200px;
      border-radius: 15px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .services::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      opacity: 0.1;
      border-radius: 15px;
      z-index: -1;
    }

    .services h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 3rem;
      color: var(--dark-green);
      position: relative;
      padding-bottom: 1rem;
    }

    .services h2::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 4px;
      background: linear-gradient(to right, var(--rice-green), var(--golden-yellow));
      border-radius: 2px;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2.5rem;
    }

    .service-card {
      background: var(--pure-white);
      padding: 2.5rem 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px var(--shadow-light);
      transition: all 0.4s ease;
      text-align: center;
      border-top: 5px solid var(--rice-green);
      position: relative;
      overflow: hidden;
    }

    .service-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, transparent 30%, rgba(74, 124, 74, 0.05) 100%);
    }

    .service-card:hover {
      transform: translateY(-15px);
      box-shadow: 0 20px 40px var(--shadow-dark);
    }

    .service-icon {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      display: block;
      color: var(--rice-green);
    }

    .service-card h3 {
      color: var(--dark-green);
      margin-bottom: 1.2rem;
      font-size: 1.6rem;
      position: relative;
    }

    .service-card p {
      color: #555;
      line-height: 1.7;
      position: relative;
    }

    /* CTA SECTION */
    .cta {
      background: linear-gradient(rgba(47, 93, 47, 0.85), rgba(30, 64, 30, 0.9)),
                  url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 5rem 2rem;
      margin: 4rem 0;
      border-radius: 15px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
    }

    .cta h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    .cta p {
      font-size: 1.2rem;
      margin-bottom: 2.5rem;
      opacity: 0.9;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    /* FOOTER */
    footer {
      background: linear-gradient(135deg, var(--earth-brown) 0%, #6b4628 100%);
      color: var(--pure-white);
      text-align: center;
      padding: 2rem;
      margin-top: 4rem;
      position: relative;
    }

    footer::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(to right, var(--rice-green), var(--golden-yellow));
    }

    .footer-logo {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 1rem;
      gap: 0.5rem;
    }

    .footer-logo .logo {
      width: 30px;
      height: 30px;
      font-size: 1.2rem;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        padding: 1rem;
        gap: 1rem;
        text-align: center;
      }
      
      .logo-container {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
      }
      
      .navbar nav {
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.8rem;
      }
      
      .navbar nav a {
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
      }
      
      .hero {
        padding: 4rem 1.5rem;
      }
      
      .hero h2 {
        font-size: 2.2rem;
      }
      
      .hero p {
        font-size: 1.1rem;
      }
      
      .services h2,
      .cta h2 {
        font-size: 2rem;
      }
      
      .service-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
      
      .btn {
        padding: 0.9rem 2rem;
        font-size: 1rem;
      }
      
      .services {
        padding: 3rem 1.5rem;
        margin: 3rem 1rem;
      }
    }

    @media (max-width: 480px) {
      .hero h2 {
        font-size: 1.9rem;
      }
      
      .logo-main {
        font-size: 1.3rem;
      }
      
      .services h2,
      .cta h2 {
        font-size: 1.7rem;
      }
      
      .service-card {
        padding: 2rem 1.5rem;
      }
    }

    /* ANIMATIONS */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes floatLogo {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-5px);
      }
    }

    .hero, .service-card {
      animation: fadeUp 0.6s ease forwards;
    }

    .logo {
      animation: floatLogo 3s ease-in-out infinite;
    }

    /* RICE GRAIN DECORATION */
    .rice-grain {
      position: absolute;
      font-size: 1.5rem;
      opacity: 0.1;
      z-index: -1;
      animation: floatLogo 8s ease-in-out infinite;
    }

    .rice-grain:nth-child(1) { top: 10%; left: 5%; animation-delay: 0s; }
    .rice-grain:nth-child(2) { top: 20%; right: 10%; animation-delay: 1s; }
    .rice-grain:nth-child(3) { bottom: 30%; left: 15%; animation-delay: 2s; }
  </style>
</head>
<body>

<!-- Decorative rice grains -->
<div class="rice-grain">🌾</div>
<div class="rice-grain">🌾</div>
<div class="rice-grain">🌾</div>

<header class="navbar">
  <div class="logo-container">
    <div class="logo"></div>
    <div class="logo-text">
      <div class="logo-main">GreenField Rice Processing</div>
      <div class="logo-tagline">Quality Rice Processing Since 2010</div>
    </div>
  </div>
  <nav>
    <!-- FIXED LINKS: Changed #about and #contact to actual PHP files -->
    <a href="index.php">Home</a>
    <a href="about.php">About</a>        <!-- WAS: href="#about" -->
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>    <!-- WAS: href="#contact" -->
    <a href="admin/login.php" class="admin-link">Admin</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-content">
    <h2>Clean, Fast & Reliable Rice Processing</h2>
    <p>Professional rice milling and threshing services with state-of-the-art technology. We transform your rice harvest into premium quality grains ready for market.</p>
    <a href="services.php" class="btn">Explore Our Services</a>
  </div>
</section>

<section id="services" class="services">
  <h2>Our Services</h2>

  <div class="service-grid">

    <div class="service-card">
      <div class="service-icon">🌾</div>
      <h3>Rice Milling</h3>
      <p>Efficient milling services to produce high-quality rice grains with maximum recovery and minimal breakage.</p>
    </div>

    <div class="service-card">
      <div class="service-icon">⚙️</div>
      <h3>Rice Threshing</h3>
      <p>Modern threshing methods to separate grains quickly and cleanly from the stalks.</p>
    </div>

    <div class="service-card">
      <div class="service-icon">📦</div>
      <h3>Bulk Processing</h3>
      <p>Large-scale processing for farmers, cooperatives, and distributors with custom solutions.</p>
    </div>

  </div>
</section>

<section class="cta">
  <h2>Ready to Process Your Rice?</h2>
  <p>Visit us today or contact us for professional service. Get the best value from your harvest with our premium processing.</p>
  <a href="contact.php" class="btn">Contact Us Today</a>  <!-- WAS: href="#contact" -->
</section>

<footer>
  <div class="footer-logo">
    <div class="logo"></div>
    <span>GreenField Rice Processing</span>
  </div>
  © 2026 GreenField Rice Processing | Quality Rice Processing Since 2010
</footer>

</body>
</html>