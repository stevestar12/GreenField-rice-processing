<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | GreenField Rice Processing</title>
  <style>
    /* ============================================
       PROFESSIONAL GALLERY PAGE CSS WITH VIDEOS
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

    /* RICE BACKGROUND */
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

    /* GALLERY HERO */
    .gallery-hero {
      background: linear-gradient(rgba(47, 93, 47, 0.9), rgba(30, 64, 30, 0.95)),
                  url('https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 7rem 2rem;
      position: relative;
      overflow: hidden;
    }

    .gallery-hero::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 150px;
      background: linear-gradient(to bottom, transparent, var(--cream));
      z-index: 1;
    }

    .gallery-hero-content {
      position: relative;
      z-index: 2;
      max-width: 1000px;
      margin: 0 auto;
    }

    .gallery-hero h1 {
      font-size: 3.5rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
      line-height: 1.1;
    }

    .gallery-hero p {
      font-size: 1.3rem;
      opacity: 0.95;
      line-height: 1.7;
      max-width: 700px;
      margin: 0 auto;
      font-weight: 300;
    }

    /* GALLERY FILTER */
    .gallery-filter {
      padding: 3rem 2rem;
      text-align: center;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(5px);
      margin: 2rem auto;
      max-width: 1200px;
      border-radius: 15px;
      box-shadow: 0 10px 30px var(--shadow-light);
    }

    .filter-title {
      color: var(--dark-green);
      font-size: 1.8rem;
      margin-bottom: 2rem;
    }

    .filter-buttons {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .filter-btn {
      background: var(--off-white);
      color: #555;
      padding: 0.8rem 1.8rem;
      border-radius: 50px;
      border: 2px solid transparent;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .filter-btn:hover,
    .filter-btn.active {
      background: var(--rice-green);
      color: white;
      border-color: var(--rice-green);
      transform: translateY(-3px);
    }

    /* GALLERY GRID */
    .gallery-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 2rem;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
      gap: 2rem;
      margin-bottom: 4rem;
    }

    .gallery-item {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px var(--shadow-light);
      transition: all 0.4s ease;
      height: 350px;
      cursor: pointer;
    }

    .gallery-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px var(--shadow-dark);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
    }

    .gallery-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 2rem;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
      color: white;
      transform: translateY(100%);
      transition: transform 0.4s ease;
    }

    .gallery-item:hover .gallery-overlay {
      transform: translateY(0);
    }

    .gallery-category {
      display: inline-block;
      background: var(--golden-yellow);
      color: var(--dark-green);
      padding: 0.4rem 1rem;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 0.8rem;
    }

    .gallery-title {
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
      font-weight: 700;
    }

    .gallery-desc {
      font-size: 0.95rem;
      opacity: 0.9;
    }

    /* GALLERY SECTIONS */
    .gallery-section {
      margin: 5rem 0;
    }

    .section-title {
      text-align: center;
      color: var(--dark-green);
      font-size: 2.5rem;
      margin-bottom: 3rem;
      position: relative;
      padding-bottom: 1rem;
    }

    .section-title::after {
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

    /* LIGHTBOX MODAL */
    .lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.95);
      z-index: 2000;
      justify-content: center;
      align-items: center;
      animation: fadeIn 0.3s ease;
    }

    .lightbox.active {
      display: flex;
    }

    .lightbox-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
    }

    .lightbox-img {
      max-width: 100%;
      max-height: 80vh;
      border-radius: 8px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }

    .lightbox-close {
      position: absolute;
      top: -50px;
      right: 0;
      color: white;
      font-size: 2.5rem;
      cursor: pointer;
      background: rgba(255, 255, 255, 0.1);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .lightbox-close:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: rotate(90deg);
    }

    .lightbox-caption {
      color: white;
      text-align: center;
      margin-top: 1rem;
      font-size: 1.2rem;
    }

    .lightbox-nav {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 2rem;
      transform: translateY(-50%);
    }

    .nav-btn {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      border: none;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      font-size: 1.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .nav-btn:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: scale(1.1);
    }

    /* VIDEO GALLERY - UPDATED */
    .video-gallery {
      margin: 5rem 0;
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 2rem;
      margin-top: 3rem;
    }

    .video-item {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px var(--shadow-light);
      transition: transform 0.3s ease;
      height: 250px;
      cursor: pointer;
    }

    .video-item:hover {
      transform: translateY(-10px);
    }

    .video-thumbnail {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .video-play {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgba(0, 0, 0, 0.7);
      color: white;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      cursor: pointer;
      transition: all 0.3s ease;
      z-index: 2;
    }

    .video-play:hover {
      background: var(--rice-green);
      transform: translate(-50%, -50%) scale(1.1);
    }

    /* VIDEO PLAYER MODAL */
    .video-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.95);
      z-index: 3000;
      justify-content: center;
      align-items: center;
      animation: fadeIn 0.3s ease;
    }

    .video-modal.active {
      display: flex;
    }

    .video-modal-content {
      position: relative;
      width: 90%;
      max-width: 1000px;
    }

    .video-close {
      position: absolute;
      top: -50px;
      right: 0;
      color: white;
      font-size: 2.5rem;
      cursor: pointer;
      background: rgba(255, 255, 255, 0.1);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .video-close:hover {
      background: rgba(255, 255, 255, 0.2);
      transform: rotate(90deg);
    }

    .video-player {
      width: 100%;
      height: 0;
      padding-bottom: 56.25%; /* 16:9 aspect ratio */
      position: relative;
      border-radius: 8px;
      overflow: hidden;
    }

    .video-player iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }

    .video-title {
      color: white;
      text-align: center;
      margin-top: 1.5rem;
      font-size: 1.3rem;
    }

    /* CTA */
    .gallery-cta {
      background: linear-gradient(rgba(47, 93, 47, 0.9), rgba(30, 64, 30, 0.95)),
                  url('https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 5rem 2rem;
      border-radius: 15px;
      margin: 5rem auto;
      max-width: 1200px;
      position: relative;
      overflow: hidden;
    }

    .gallery-cta::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.3);
      z-index: 1;
    }

    .gallery-cta-content {
      position: relative;
      z-index: 2;
      max-width: 800px;
      margin: 0 auto;
    }

    .gallery-cta h2 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }

    .gallery-cta p {
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

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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
      
      .gallery-hero {
        padding: 5rem 1.5rem;
      }
      
      .gallery-hero h1 {
        font-size: 2.5rem;
      }
      
      .gallery-hero p {
        font-size: 1.1rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .filter-buttons {
        flex-direction: column;
        align-items: center;
      }
      
      .filter-btn {
        width: 200px;
      }
      
      .video-grid {
        grid-template-columns: 1fr;
      }
      
      .video-modal-content {
        width: 95%;
      }
    }

    @media (max-width: 480px) {
      .gallery-hero h1 {
        font-size: 2rem;
      }
      
      .gallery-grid {
        grid-template-columns: 1fr;
      }
      
      .gallery-item {
        height: 300px;
      }
    }

    /* ANIMATIONS */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .gallery-item {
      animation: fadeIn 0.6s ease;
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
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="gallery.php" class="active">Gallery</a>
    <a href="contact.php">Contact</a>
    <a href="admin/login.php" class="admin-link">Admin</a>
  </nav>
</header>

<section class="gallery-hero">
  <div class="gallery-hero-content">
    <h1>Our Processing Journey in Photos & Videos</h1>
    <p>Explore our state-of-the-art facilities, advanced machinery, and the rice processing journey from farm to market</p>
  </div>
</section>

<div class="gallery-filter">
  <h2 class="filter-title">Browse Our Gallery</h2>
  <div class="filter-buttons">
    <button class="filter-btn active" data-filter="all">All Photos</button>
    <button class="filter-btn" data-filter="facility">Our Facility</button>
    <button class="filter-btn" data-filter="machinery">Machinery</button>
    <button class="filter-btn" data-filter="process">Processing</button>
    <button class="filter-btn" data-filter="products">Final Products</button>
    <button class="filter-btn" data-filter="team">Our Team</button>
    <button class="filter-btn" data-filter="videos">Videos</button>
  </div>
</div>

<div class="gallery-container">
  <!-- FACILITY SECTION -->
  <div class="gallery-section">
    <h2 class="section-title">Our Processing Facility</h2>
    <div class="gallery-grid">
      <div class="gallery-item" data-category="facility">
        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Main Processing Building">
        <div class="gallery-overlay">
          <span class="gallery-category">Facility</span>
          <h3 class="gallery-title">Main Processing Building</h3>
          <p class="gallery-desc">Our 10,000 sq ft modern processing facility</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="facility">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Storage Warehouse">
        <div class="gallery-overlay">
          <span class="gallery-category">Facility</span>
          <h3 class="gallery-title">Storage Warehouse</h3>
          <p class="gallery-desc">Climate-controlled storage for rice grains</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="facility">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Quality Control Lab">
        <div class="gallery-overlay">
          <span class="gallery-category">Facility</span>
          <h3 class="gallery-title">Quality Control Lab</h3>
          <p class="gallery-desc">Modern laboratory for quality testing</p>
        </div>
      </div>
    </div>
  </div>

  <!-- MACHINERY SECTION -->
  <div class="gallery-section">
    <h2 class="section-title">Advanced Machinery</h2>
    <div class="gallery-grid">
      <div class="gallery-item" data-category="machinery">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Rice Milling Machine">
        <div class="gallery-overlay">
          <span class="gallery-category">Machinery</span>
          <h3 class="gallery-title">Modern Milling Machine</h3>
          <p class="gallery-desc">High-capacity rice milling equipment</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="machinery">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Threshing Machine">
        <div class="gallery-overlay">
          <span class="gallery-category">Machinery</span>
          <h3 class="gallery-title">Threshing Equipment</h3>
          <p class="gallery-desc">Advanced threshing for clean grain separation</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="machinery">
        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Sorting Machine">
        <div class="gallery-overlay">
          <span class="gallery-category">Machinery</span>
          <h3 class="gallery-title">Automatic Sorting</h3>
          <p class="gallery-desc">Computerized grain sorting system</p>
        </div>
      </div>
    </div>
  </div>

  <!-- VIDEO GALLERY SECTION -->
  <div class="video-gallery">
    <h2 class="section-title">Processing Videos</h2>
    <div class="video-grid">
      <div class="video-item" data-video="https://www.youtube.com/embed/3Z1O6zqLZ8M" data-title="Rice Milling Process">
        <img src="https://img.youtube.com/vi/3Z1O6zqLZ8M/maxresdefault.jpg" alt="Rice Milling Process" class="video-thumbnail">
        <div class="video-play">▶</div>
      </div>
      
      <div class="video-item" data-video="https://www.youtube.com/embed/5K5G7z6rL7Y" data-title="Modern Rice Processing">
        <img src="https://img.youtube.com/vi/5K5G7z6rL7Y/maxresdefault.jpg" alt="Modern Rice Processing" class="video-thumbnail">
        <div class="video-play">▶</div>
      </div>
      
      <div class="video-item" data-video="https://www.youtube.com/embed/8Q6Zq7wL3cM" data-title="Rice Packaging Line">
        <img src="https://img.youtube.com/vi/8Q6Zq7wL3cM/maxresdefault.jpg" alt="Rice Packaging Line" class="video-thumbnail">
        <div class="video-play">▶</div>
      </div>
    </div>
  </div>

  <!-- PROCESSING SECTION -->
  <div class="gallery-section">
    <h2 class="section-title">Processing Stages</h2>
    <div class="gallery-grid">
      <div class="gallery-item" data-category="process">
        <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Rice Cleaning">
        <div class="gallery-overlay">
          <span class="gallery-category">Processing</span>
          <h3 class="gallery-title">Initial Cleaning</h3>
          <p class="gallery-desc">Removing impurities and foreign materials</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="process">
        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Rice Milling Process">
        <div class="gallery-overlay">
          <span class="gallery-category">Processing</span>
          <h3 class="gallery-title">Milling Process</h3>
          <p class="gallery-desc">Transforming paddy rice into white rice</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="process">
        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Polishing">
        <div class="gallery-overlay">
          <span class="gallery-category">Processing</span>
          <h3 class="gallery-title">Polishing Stage</h3>
          <p class="gallery-desc">Final polishing for premium appearance</p>
        </div>
      </div>
    </div>
  </div>

  <!-- PRODUCTS SECTION -->
  <div class="gallery-section">
    <h2 class="section-title">Final Products</h2>
    <div class="gallery-grid">
      <div class="gallery-item" data-category="products">
        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Premium Rice">
        <div class="gallery-overlay">
          <span class="gallery-category">Products</span>
          <h3 class="gallery-title">Premium Quality Rice</h3>
          <p class="gallery-desc">Clean, polished rice ready for market</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="products">
        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Packaged Rice">
        <div class="gallery-overlay">
          <span class="gallery-category">Products</span>
          <h3 class="gallery-title">Packaged Products</h3>
          <p class="gallery-desc">Various packaging sizes available</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="products">
        <img src="https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Bulk Rice">
        <div class="gallery-overlay">
          <span class="gallery-category">Products</span>
          <h3 class="gallery-title">Bulk Rice Storage</h3>
          <p class="gallery-desc">Ready for large-scale distribution</p>
        </div>
      </div>
    </div>
  </div>

  <!-- TEAM SECTION -->
  <div class="gallery-section">
    <h2 class="section-title">Our Team in Action</h2>
    <div class="gallery-grid">
      <div class="gallery-item" data-category="team">
        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Quality Control Team">
        <div class="gallery-overlay">
          <span class="gallery-category">Team</span>
          <h3 class="gallery-title">Quality Control</h3>
          <p class="gallery-desc">Our team ensuring product standards</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="team">
        <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Machine Operators">
        <div class="gallery-overlay">
          <span class="gallery-category">Team</span>
          <h3 class="gallery-title">Machine Operators</h3>
          <p class="gallery-desc">Expert operators managing equipment</p>
        </div>
      </div>
      
      <div class="gallery-item" data-category="team">
        <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Technical Staff">
        <div class="gallery-overlay">
          <span class="gallery-category">Team</span>
          <h3 class="gallery-title">Technical Staff</h3>
          <p class="gallery-desc">Maintaining optimal machine performance</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA SECTION -->
<div class="gallery-cta">
  <div class="gallery-cta-content">
    <h2>See Our Facility in Person</h2>
    <p>Schedule a tour to see our advanced rice processing operations firsthand and discuss your processing needs with our team.</p>
    <a href="contact.php" class="btn btn-green">Schedule a Visit</a>
    <a href="services.php" class="btn" style="background: transparent; border: 2px solid white; margin-left: 1rem;">Our Services</a>
  </div>
</div>

<!-- LIGHTBOX MODAL -->
<div class="lightbox" id="lightbox">
  <div class="lightbox-content">
    <span class="lightbox-close" id="lightboxClose">×</span>
    <img src="" alt="" class="lightbox-img" id="lightboxImg">
    <div class="lightbox-caption" id="lightboxCaption"></div>
    <div class="lightbox-nav">
      <button class="nav-btn" id="prevBtn">‹</button>
      <button class="nav-btn" id="nextBtn">›</button>
    </div>
  </div>
</div>

<!-- VIDEO PLAYER MODAL -->
<div class="video-modal" id="videoModal">
  <div class="video-modal-content">
    <span class="video-close" id="videoClose">×</span>
    <div class="video-player" id="videoPlayer"></div>
    <div class="video-title" id="videoTitle"></div>
  </div>
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

<script>
  // ===== PHOTO GALLERY FUNCTIONALITY =====
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxCaption = document.getElementById('lightboxCaption');
  const lightboxClose = document.getElementById('lightboxClose');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  
  const galleryItems = document.querySelectorAll('.gallery-item');
  let currentIndex = 0;
  
  // Open lightbox with clicked image
  galleryItems.forEach((item, index) => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      const title = item.querySelector('.gallery-title').textContent;
      const desc = item.querySelector('.gallery-desc').textContent;
      
      currentIndex = index;
      lightboxImg.src = img.src;
      lightboxCaption.textContent = `${title} - ${desc}`;
      lightbox.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });
  
  // Close lightbox
  lightboxClose.addEventListener('click', () => {
    lightbox.classList.remove('active');
    document.body.style.overflow = 'auto';
  });
  
  // Close on background click
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
  });
  
  // Navigation between images
  prevBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
    updateLightbox();
  });
  
  nextBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    currentIndex = (currentIndex + 1) % galleryItems.length;
    updateLightbox();
  });
  
  // Keyboard navigation
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    
    if (e.key === 'Escape') {
      lightbox.classList.remove('active');
      document.body.style.overflow = 'auto';
    } else if (e.key === 'ArrowLeft') {
      currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
      updateLightbox();
    } else if (e.key === 'ArrowRight') {
      currentIndex = (currentIndex + 1) % galleryItems.length;
      updateLightbox();
    }
  });
  
  function updateLightbox() {
    const item = galleryItems[currentIndex];
    const img = item.querySelector('img');
    const title = item.querySelector('.gallery-title').textContent;
    const desc = item.querySelector('.gallery-desc').textContent;
    
    lightboxImg.src = img.src;
    lightboxCaption.textContent = `${title} - ${desc}`;
  }
  
  // ===== VIDEO PLAYER FUNCTIONALITY =====
  const videoModal = document.getElementById('videoModal');
  const videoClose = document.getElementById('videoClose');
  const videoPlayer = document.getElementById('videoPlayer');
  const videoTitle = document.getElementById('videoTitle');
  const videoItems = document.querySelectorAll('.video-item');
  
  // Open video modal
  videoItems.forEach(item => {
    const playBtn = item.querySelector('.video-play');
    
    playBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      const videoUrl = item.getAttribute('data-video');
      const title = item.getAttribute('data-title');
      
      // Create iframe for YouTube video
      videoPlayer.innerHTML = `
        <iframe 
          src="${videoUrl}?autoplay=1&rel=0&modestbranding=1" 
          title="${title}"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      `;
      
      videoTitle.textContent = title;
      videoModal.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });
  
  // Close video modal
  videoClose.addEventListener('click', () => {
    videoModal.classList.remove('active');
    videoPlayer.innerHTML = ''; // Remove iframe to stop video
    document.body.style.overflow = 'auto';
  });
  
  // Close on background click
  videoModal.addEventListener('click', (e) => {
    if (e.target === videoModal) {
      videoModal.classList.remove('active');
      videoPlayer.innerHTML = ''; // Remove iframe to stop video
      document.body.style.overflow = 'auto';
    }
  });
  
  // ===== FILTER FUNCTIONALITY =====
  const filterButtons = document.querySelectorAll('.filter-btn');
  const allGalleryItems = document.querySelectorAll('.gallery-item, .video-item');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Update active button
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      
      const filter = button.getAttribute('data-filter');
      
      // Filter items
      allGalleryItems.forEach(item => {
        const category = item.getAttribute('data-category');
        
        if (filter === 'all' || filter === 'videos' || category === filter) {
          item.style.display = 'block';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
          }, 10);
        } else {
          item.style.opacity = '0';
          item.style.transform = 'translateY(20px)';
          setTimeout(() => {
            item.style.display = 'none';
          }, 300);
        }
      });
      
      // Special handling for videos filter
      if (filter === 'videos') {
        document.querySelectorAll('.gallery-item').forEach(item => {
          item.style.display = 'none';
        });
        document.querySelectorAll('.video-item').forEach(item => {
          item.style.display = 'block';
          setTimeout(() => {
            item.style.opacity = '1';
            item.style.transform = 'translateY(0)';
          }, 10);
        });
      }
    });
  });
  
  // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });
</script>

</body>
</html>