<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - GreenField Rice Processing</title>
  <style>
    /* ============================================
       SERVICES PAGE CSS WITH MILLED RICE BACKGROUND
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

    /* Background Pattern */
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
      opacity: 0.2;
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

    .navbar nav a.active {
      background-color: rgba(255, 255, 255, 0.2);
      color: var(--golden-yellow);
      border: 1px solid rgba(212, 175, 55, 0.3);
    }

    .admin-link {
      background-color: rgba(212, 175, 55, 0.15);
      color: #ffdd99 !important;
      border: 1px solid rgba(212, 175, 55, 0.3);
    }

    .admin-link:hover {
      background-color: rgba(212, 175, 55, 0.25) !important;
    }

    /* PAGE HERO SECTION */
    .page-hero {
      background: linear-gradient(rgba(47, 93, 47, 0.85), rgba(30, 64, 30, 0.9)),
                  url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 5rem 2rem;
      margin-bottom: 4rem;
      position: relative;
      overflow: hidden;
    }

    .page-hero::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background: linear-gradient(to bottom, transparent, var(--cream));
      z-index: 1;
    }

    .page-hero-content {
      position: relative;
      z-index: 2;
    }

    .page-hero h1 {
      font-size: 3rem;
      margin-bottom: 1.2rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }

    .page-hero p {
      font-size: 1.3rem;
      max-width: 800px;
      margin: 0 auto;
      opacity: 0.9;
      line-height: 1.7;
    }

    /* SERVICES SECTION WITH BACKGROUND */
    .services-main {
      padding: 4rem 2rem;
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(5px);
      margin: 0 auto 4rem;
      max-width: 1200px;
      border-radius: 15px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .services-main h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 3rem;
      color: var(--dark-green);
      position: relative;
      padding-bottom: 1rem;
    }

    .services-main h2::after {
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

    .services-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2.5rem;
    }

    .service-card-enhanced {
      background: var(--pure-white);
      padding: 2.5rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px var(--shadow-light);
      transition: all 0.4s ease;
      border-left: 5px solid var(--rice-green);
      position: relative;
      overflow: hidden;
    }

    .service-card-enhanced::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, transparent 30%, rgba(74, 124, 74, 0.05) 100%);
      z-index: 1;
    }

    .service-card-enhanced:hover {
      transform: translateY(-15px);
      box-shadow: 0 20px 40px var(--shadow-dark);
    }

    .service-icon-large {
      font-size: 3.5rem;
      margin-bottom: 1.5rem;
      display: block;
      color: var(--rice-green);
    }

    .service-card-enhanced h3 {
      color: var(--dark-green);
      margin-bottom: 1.2rem;
      font-size: 1.6rem;
      position: relative;
      z-index: 2;
    }

    .service-card-enhanced p {
      color: #555;
      line-height: 1.7;
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 2;
    }

    .service-features {
      list-style: none;
      margin-top: 1.5rem;
      position: relative;
      z-index: 2;
    }

    .service-features li {
      padding: 0.5rem 0;
      padding-left: 1.8rem;
      position: relative;
      color: #555;
    }

    .service-features li::before {
      content: "✓";
      position: absolute;
      left: 0;
      color: var(--light-green);
      font-weight: bold;
    }

    /* PROCESS FLOW SECTION */
    .process-section {
      padding: 4rem 2rem;
      background: linear-gradient(rgba(248, 247, 243, 0.9), rgba(248, 247, 243, 0.9)),
                  url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-attachment: fixed;
      margin: 4rem 0;
    }

    .process-section h2 {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 3rem;
      color: var(--dark-green);
    }

    .process-steps {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 2rem;
      max-width: 1000px;
      margin: 0 auto;
    }

    .process-step {
      background: var(--pure-white);
      padding: 2rem;
      border-radius: 10px;
      text-align: center;
      width: 200px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .process-step:hover {
      transform: scale(1.05);
    }

    .step-number {
      background: var(--rice-green);
      color: white;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
      font-weight: bold;
      font-size: 1.2rem;
    }

    /* CTA SECTION */
    .cta-services {
      background: linear-gradient(rgba(139, 90, 43, 0.9), rgba(107, 70, 40, 0.9)),
                  url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
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
    }

    .cta-services h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }

    .cta-services p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 2.5rem;
      opacity: 0.9;
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
      box-shadow: 0 5px 15px rgba(139, 90, 43, 0.3);
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(to right, #9c6b3a, var(--earth-brown));
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(139, 90, 43, 0.4);
    }

    .btn-green {
      background: linear-gradient(to right, var(--rice-green), var(--light-green));
    }

    .btn-green:hover {
      background: linear-gradient(to right, var(--light-green), var(--rice-green));
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
      
      .page-hero {
        padding: 4rem 1.5rem;
      }
      
      .page-hero h1 {
        font-size: 2.2rem;
      }
      
      .page-hero p {
        font-size: 1.1rem;
      }
      
      .services-main h2,
      .cta-services h2 {
        font-size: 2rem;
      }
      
      .services-container {
        grid-template-columns: 1fr;
      }
      
      .process-steps {
        flex-direction: column;
        align-items: center;
      }
      
      .btn {
        padding: 0.9rem 2rem;
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      .page-hero h1 {
        font-size: 1.9rem;
      }
      
      .logo-main {
        font-size: 1.3rem;
      }
      
      .services-main h2,
      .cta-services h2 {
        font-size: 1.7rem;
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

    .service-card-enhanced {
      animation: fadeUp 0.6s ease forwards;
    }

    /* Back to Home Link */
    .back-home {
      display: inline-block;
      margin-top: 2rem;
      color: var(--rice-green);
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .back-home:hover {
      color: var(--dark-green);
      text-decoration: underline;
    }
  </style>
</head>
<body>

<header class="navbar">
  <div class="logo-container">
    <div class="logo"></div>
    <div class="logo-text">
      <div class="logo-main">GreenField Rice Processing</div>
      <div class="logo-tagline">Quality Rice Processing Since 2010</div>
    </div>
  </div>
  <nav>
    <a href="index.php">Home</a>
    <a href="#about">About</a>
    <a href="services.php" class="active">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="#contact">Contact</a>
    <a href="admin/login.php" class="admin-link">Admin</a>
  </nav>
</header>

<section class="page-hero">
  <div class="page-hero-content">
    <h1>Our Premium Rice Processing Services</h1>
    <p>Experience professional rice milling and processing with state-of-the-art technology and quality assurance.</p>
  </div>
</section>

<section class="services-main">
  <h2>Complete Rice Processing Solutions</h2>
  
  <div class="services-container">
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">🌾</div>
      <h3>Premium Rice Milling</h3>
      <p>Our advanced milling process ensures maximum grain recovery with minimal breakage. We produce clean, polished rice that meets international standards.</p>
      <ul class="service-features">
        <li>Modern milling technology</li>
        <li>Quality control at every stage</li>
        <li>Custom milling options</li>
        <li>Bulk and small batch processing</li>
      </ul>
    </div>
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">⚙️</div>
      <h3>Rice Threshing Services</h3>
      <p>Efficient threshing that separates grains from stalks with minimal loss. Our machines handle various rice varieties and quantities.</p>
      <ul class="service-features">
        <li>High-speed threshing machines</li>
        <li>Low grain loss rate</li>
        <li>Multiple capacity options</li>
        <li>Clean separation process</li>
      </ul>
    </div>
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">📦</div>
      <h3>Bulk Processing & Packaging</h3>
      <p>Large-scale processing for farmers, cooperatives, and distributors. We handle everything from processing to packaging.</p>
      <ul class="service-features">
        <li>High-capacity processing</li>
        <li>Custom packaging solutions</li>
        <li>Storage facilities available</li>
        <li>Distribution support</li>
      </ul>
    </div>
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">🔬</div>
      <h3>Quality Testing & Grading</h3>
      <p>Comprehensive quality testing to ensure your rice meets market standards. We provide grading and certification services.</p>
      <ul class="service-features">
        <li>Moisture content testing</li>
        <li>Broken grain analysis</li>
        <li>Purity grading</li>
        <li>Quality certification</li>
      </ul>
    </div>
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">🚚</div>
      <h3>Logistics & Distribution</h3>
      <p>Complete logistics support for your processed rice. We handle transportation and delivery to your specified locations.</p>
      <ul class="service-features">
        <li>Nationwide distribution</li>
        <li>Secure transportation</li>
        <li>Timely delivery</li>
        <li>Tracking system</li>
      </ul>
    </div>
    
    <div class="service-card-enhanced">
      <div class="service-icon-large">💼</div>
      <h3>Consultation Services</h3>
      <p>Expert advice on rice processing, storage, and market strategies. We help optimize your rice processing operations.</p>
      <ul class="service-features">
        <li>Process optimization</li>
        <li>Equipment selection</li>
        <li>Market insights</li>
        <li>Cost analysis</li>
      </ul>
    </div>
    
  </div>
</section>

<section class="process-section">
  <h2>Our 5-Step Processing Method</h2>
  <div class="process-steps">
    <div class="process-step">
      <div class="step-number">1</div>
      <h3>Cleaning</h3>
      <p>Remove impurities and foreign materials</p>
    </div>
    <div class="process-step">
      <div class="step-number">2</div>
      <h3>De-husking</h3>
      <p>Remove outer husk from rice grains</p>
    </div>
    <div class="process-step">
      <div class="step-number">3</div>
      <h3>Polishing</h3>
      <p>Polish grains to remove bran layers</p>
    </div>
    <div class="process-step">
      <div class="step-number">4</div>
      <h3>Grading</h3>
      <p>Sort by size, color, and quality</p>
    </div>
    <div class="process-step">
      <div class="step-number">5</div>
      <h3>Packaging</h3>
      <p>Pack in quality bags for distribution</p>
    </div>
  </div>
</section>

<section class="cta-services">
  <h2>Ready to Process Your Rice?</h2>
  <p>Contact us today for a free consultation and quote. We'll help you get the best value from your rice crop.</p>
  <a href="#contact" class="btn btn-green">Get a Free Quote</a>
  <a href="index.php" class="btn" style="background: transparent; border: 2px solid white; margin-left: 1rem;">Back to Home</a>
</section>

<footer>
  <div class="footer-logo">
    <div class="logo"></div>
    <span>GreenField Rice Processing</span>
  </div>
  © 2026 GreenField Rice Processing | Professional Rice Processing Services
  <br>
  <small>Quality assurance guaranteed on all our services</small>
</footer>

</body>
</html>