<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | GreenField Rice Processing</title>
  <style>
    /* ============================================
       PROFESSIONAL ABOUT US PAGE CSS
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
      opacity: 0.12;
      z-index: -1;
    }

    /* NAVBAR */
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

    /* HERO SECTION */
    .about-hero {
      background: linear-gradient(rgba(47, 93, 47, 0.92), rgba(30, 64, 30, 0.95)),
                  url('https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 8rem 2rem;
      position: relative;
      overflow: hidden;
    }

    .about-hero::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(to bottom, transparent, var(--cream));
      z-index: 1;
    }

    .about-hero-content {
      position: relative;
      z-index: 2;
      max-width: 1000px;
      margin: 0 auto;
    }

    .about-hero h1 {
      font-size: 3.8rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
      line-height: 1.1;
    }

    .about-hero p {
      font-size: 1.4rem;
      opacity: 0.95;
      line-height: 1.7;
      max-width: 800px;
      margin: 0 auto;
      font-weight: 300;
    }

    /* MAIN CONTENT */
    .about-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }

    /* STORY SECTION */
    .story-section {
      padding: 6rem 0;
      position: relative;
    }

    .section-header {
      text-align: center;
      margin-bottom: 5rem;
    }

    .section-header h2 {
      font-size: 2.8rem;
      color: var(--dark-green);
      margin-bottom: 1.5rem;
      position: relative;
      display: inline-block;
    }

    .section-header h2::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 4px;
      background: linear-gradient(to right, var(--rice-green), var(--golden-yellow));
      border-radius: 2px;
    }

    .section-header p {
      font-size: 1.2rem;
      color: #666;
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.7;
    }

    .story-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }

    .story-text p {
      font-size: 1.15rem;
      line-height: 1.8;
      color: #555;
      margin-bottom: 1.8rem;
    }

    .story-image {
      background: linear-gradient(rgba(47, 93, 47, 0.1), rgba(47, 93, 47, 0.1)),
                  url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      height: 500px;
      border-radius: 15px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
      position: relative;
      overflow: hidden;
    }

    .story-image::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, transparent 30%, rgba(47, 93, 47, 0.1) 100%);
    }

    /* MISSION & VISION */
    .mission-vision {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      margin: 6rem 0;
    }

    .mission-card, .vision-card {
      background: var(--pure-white);
      padding: 4rem 3rem;
      border-radius: 15px;
      box-shadow: 0 15px 40px var(--shadow-light);
      position: relative;
      overflow: hidden;
      transition: transform 0.4s ease;
    }

    .mission-card:hover, .vision-card:hover {
      transform: translateY(-15px);
    }

    .mission-card::before, .vision-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      background: linear-gradient(to right, var(--rice-green), var(--golden-yellow));
    }

    .mission-icon, .vision-icon {
      font-size: 3.5rem;
      margin-bottom: 2rem;
      display: block;
    }

    .mission-card h2, .vision-card h2 {
      color: var(--dark-green);
      margin-bottom: 1.5rem;
      font-size: 2.2rem;
    }

    .mission-card p, .vision-card p {
      color: #555;
      line-height: 1.8;
      font-size: 1.1rem;
    }

    /* VALUES SECTION */
    .values-section {
      padding: 6rem 0;
      background: linear-gradient(rgba(248, 247, 243, 0.9), rgba(248, 247, 243, 0.9));
      border-radius: 20px;
      margin: 4rem 0;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2.5rem;
      margin-top: 4rem;
    }

    .value-card {
      background: var(--pure-white);
      padding: 3rem 2rem;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 10px 30px var(--shadow-light);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .value-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--golden-yellow);
    }

    .value-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px var(--shadow-dark);
    }

    .value-icon {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      display: block;
      color: var(--rice-green);
    }

    .value-card h3 {
      color: var(--dark-green);
      margin-bottom: 1rem;
      font-size: 1.6rem;
    }

    .value-card p {
      color: #666;
      line-height: 1.7;
    }

    /* STATISTICS */
    .stats-section {
      padding: 5rem 0;
      background: linear-gradient(rgba(47, 93, 47, 0.05), rgba(47, 93, 47, 0.05));
      border-radius: 15px;
      margin: 4rem 0;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 3rem;
      text-align: center;
    }

    .stat-item {
      position: relative;
    }

    .stat-number {
      font-size: 3.5rem;
      font-weight: 800;
      color: var(--rice-green);
      margin-bottom: 0.5rem;
      line-height: 1;
    }

    .stat-number::after {
      content: "+";
      font-size: 2rem;
      color: var(--golden-yellow);
    }

    .stat-label {
      color: #555;
      font-size: 1.1rem;
      font-weight: 600;
    }

    /* TEAM SECTION */
    .team-section {
      padding: 6rem 0;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 3rem;
      margin-top: 4rem;
    }

    .team-member {
      background: var(--pure-white);
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 15px 40px var(--shadow-light);
      transition: transform 0.4s ease;
    }

    .team-member:hover {
      transform: translateY(-10px);
    }

    .member-image {
      height: 300px;
      background: linear-gradient(rgba(47, 93, 47, 0.1), rgba(47, 93, 47, 0.1)),
                  url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .member-info {
      padding: 2.5rem;
    }

    .member-info h3 {
      color: var(--dark-green);
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }

    .member-role {
      color: var(--golden-yellow);
      font-weight: 600;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .member-bio {
      color: #666;
      line-height: 1.7;
      font-size: 0.95rem;
    }

    /* CTA SECTION */
    .about-cta {
      background: linear-gradient(rgba(47, 93, 47, 0.9), rgba(30, 64, 30, 0.95)),
                  url('https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 6rem 2rem;
      border-radius: 15px;
      margin: 6rem 0;
      position: relative;
      overflow: hidden;
    }

    .about-cta::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      z-index: 1;
    }

    .about-cta-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
    }

    .about-cta h2 {
      font-size: 2.8rem;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    .about-cta p {
      font-size: 1.2rem;
      margin-bottom: 2.5rem;
      opacity: 0.95;
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
      padding: 3rem;
      margin-top: 6rem;
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
    @media (max-width: 1024px) {
      .story-content,
      .mission-vision {
        grid-template-columns: 1fr;
        gap: 3rem;
      }
      
      .story-image {
        height: 400px;
        order: -1;
      }
    }

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
      
      .about-hero {
        padding: 6rem 1.5rem;
      }
      
      .about-hero h1 {
        font-size: 2.8rem;
      }
      
      .about-hero p {
        font-size: 1.2rem;
      }
      
      .section-header h2 {
        font-size: 2.2rem;
      }
      
      .mission-card, .vision-card {
        padding: 3rem 2rem;
      }
      
      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .about-cta h2 {
        font-size: 2.2rem;
      }
    }

    @media (max-width: 480px) {
      .about-hero h1 {
        font-size: 2.2rem;
      }
      
      .section-header h2 {
        font-size: 1.8rem;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .stat-number {
        font-size: 3rem;
      }
      
      .team-grid {
        grid-template-columns: 1fr;
      }
    }

    /* ANIMATIONS */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .story-content, .mission-card, .vision-card, .value-card, .team-member, .stat-item {
      animation: fadeUp 0.6s ease forwards;
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
    <a href="about.php" class="active">About</a>
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
    <a href="admin/login.php" class="admin-link">Admin</a>
  </nav>
</header>

<section class="about-hero">
  <div class="about-hero-content">
    <h1>Excellence in Rice Processing Since 2010</h1>
    <p>Leading the agricultural revolution with state-of-the-art technology and unwavering commitment to quality.</p>
  </div>
</section>

<div class="about-container">
  <!-- OUR STORY -->
  <section class="story-section">
    <div class="section-header">
      <h2>Our Journey</h2>
      <p>From humble beginnings to industry leadership, our story is one of dedication and innovation</p>
    </div>
    
    <div class="story-content">
      <div class="story-text">
        <p>Founded in 2010 by agricultural engineer James Farmington, GreenField Rice Processing began with a single milling machine and a vision: to revolutionize rice processing in Nigeria. Our founder, a third-generation farmer, recognized the need for reliable, high-quality processing services that would help local farmers maximize their harvest value.</p>
        
        <p>What started as a small family operation has grown into a modern processing facility equipped with cutting-edge technology. Over 14 years, we've invested heavily in advanced threshing, milling, and quality control systems to ensure every grain receives the attention it deserves.</p>
        
        <p>Today, we process thousands of metric tons annually, serving farmers, cooperatives, and distributors across West Africa. Our commitment remains unchanged: providing exceptional service while supporting the agricultural community that sustains us.</p>
      </div>
      <div class="story-image"></div>
    </div>
  </section>

  <!-- MISSION & VISION -->
  <section class="mission-vision">
    <div class="mission-card">
      <div class="mission-icon">🎯</div>
      <h2>Our Mission</h2>
      <p>To provide farmers and distributors with reliable, efficient, and high-quality rice processing services that maximize yield, preserve grain quality, and add significant value to every harvest through modern technology and sustainable practices.</p>
    </div>
    
    <div class="vision-card">
      <div class="vision-icon">👁️</div>
      <h2>Our Vision</h2>
      <p>To become Africa's leading rice processing facility, recognized globally for excellence in service delivery, innovation in agricultural technology, and commitment to transforming local agriculture while expanding market reach for premium rice products.</p>
    </div>
  </section>

  <!-- CORE VALUES -->
  <section class="values-section">
    <div class="section-header">
      <h2>Our Core Values</h2>
      <p>The principles that guide every decision and action at GreenField</p>
    </div>
    
    <div class="values-grid">
      <div class="value-card">
        <div class="value-icon">🌾</div>
        <h3>Quality Excellence</h3>
        <p>Every grain matters. We maintain international quality standards throughout our processing chain.</p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">🤝</div>
        <h3>Farmer Partnership</h3>
        <p>We work collaboratively with farmers, understanding their challenges and ensuring fair, transparent service.</p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">⚡</div>
        <h3>Operational Efficiency</h3>
        <p>Quick turnaround without compromising quality. Your harvest is processed promptly and professionally.</p>
      </div>
      
      <div class="value-card">
        <div class="value-icon">🌍</div>
        <h3>Sustainable Practices</h3>
        <p>We implement eco-friendly methods and minimize waste in all operations, protecting our environment.</p>
      </div>
    </div>
  </section>

  <!-- STATISTICS -->
  <section class="stats-section">
    <div class="section-header">
      <h2>Our Impact</h2>
      <p>Numbers that tell our story of growth and commitment</p>
    </div>
    
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">14</div>
        <div class="stat-label">Years of Excellence</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number">15,000</div>
        <div class="stat-label">Tons Processed</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number">500</div>
        <div class="stat-label">Farmers Served</div>
      </div>
      
      <div class="stat-item">
        <div class="stat-number">98</div>
        <div class="stat-label">% Satisfaction Rate</div>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section class="team-section">
    <div class="section-header">
      <h2>Leadership Team</h2>
      <p>The experienced professionals driving our success</p>
    </div>
    
    <div class="team-grid">
      <div class="team-member">
        <div class="member-image"></div>
        <div class="member-info">
          <h3>James Farmington</h3>
          <div class="member-role">Founder & CEO</div>
          <p class="member-bio">Agricultural engineer with 30+ years experience. Passionate about transforming Nigerian agriculture through technology.</p>
        </div>
      </div>
      
      <div class="team-member">
        <div class="member-image"></div>
        <div class="member-info">
          <h3>Sarah Ricewell</h3>
          <div class="member-role">Operations Director</div>
          <p class="member-bio">15+ years in agricultural processing. Expert in efficiency optimization and quality control systems.</p>
        </div>
      </div>
      
      <div class="team-member">
        <div class="member-image"></div>
        <div class="member-info">
          <h3>Thomas Grains</h3>
          <div class="member-role">Technical Manager</div>
          <p class="member-bio">Specializes in milling technology and equipment maintenance. Ensures optimal machine performance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="about-cta">
    <div class="about-cta-content">
      <h2>Partner With Excellence</h2>
      <p>Join hundreds of satisfied farmers and distributors who trust GreenField for their rice processing needs. Experience the difference that 14 years of expertise makes.</p>
      <a href="contact.php" class="btn btn-green">Start Processing Today</a>
      <a href="services.php" class="btn" style="background: transparent; border: 2px solid white; margin-left: 1rem;">View Services</a>
    </div>
  </section>
</div>

<footer>
  <div class="footer-logo">
    <div class="logo"></div>
    <span>GreenField Rice Processing</span>
  </div>
  © 2026 GreenField Rice Processing | Excellence in Agricultural Processing
  <br>
  <small>ISO 9001:2015 Certified | Member, Nigerian Rice Processors Association</small>
</footer>

</body>
</html>