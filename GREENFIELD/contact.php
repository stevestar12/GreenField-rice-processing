<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | GreenField Rice Processing</title>
  <style>
    /* ============================================
       CONTACT PAGE CSS
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

    /* NAVBAR - Same as index.php */
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

    /* CONTACT HERO */
    .contact-hero {
      background: linear-gradient(rgba(47, 93, 47, 0.9), rgba(30, 64, 30, 0.95)),
                  url('https://images.unsplash.com/photo-1560493676-04071c5f467b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      color: var(--pure-white);
      text-align: center;
      padding: 5rem 2rem;
      position: relative;
      overflow: hidden;
    }

    .contact-hero::before {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background: linear-gradient(to bottom, transparent, var(--cream));
      z-index: 1;
    }

    .contact-hero-content {
      position: relative;
      z-index: 2;
      max-width: 900px;
      margin: 0 auto;
    }

    .contact-hero h1 {
      font-size: 3rem;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
    }

    .contact-hero p {
      font-size: 1.3rem;
      opacity: 0.9;
      line-height: 1.7;
      max-width: 800px;
      margin: 0 auto;
    }

    /* CONTACT CONTENT */
    .contact-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 4rem 2rem;
    }

    .contact-wrapper {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 3rem;
      margin: 3rem 0;
    }

    /* CONTACT INFO */
    .contact-info {
      background: var(--pure-white);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px var(--shadow-light);
      border-top: 5px solid var(--rice-green);
    }

    .contact-info h2 {
      color: var(--dark-green);
      margin-bottom: 2rem;
      font-size: 2rem;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 1.5rem;
      margin-bottom: 2rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .contact-icon {
      background: var(--light-green);
      color: white;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      flex-shrink: 0;
    }

    .contact-details h3 {
      color: var(--dark-green);
      margin-bottom: 0.5rem;
      font-size: 1.3rem;
    }

    .contact-details p {
      color: #555;
      line-height: 1.6;
    }

    /* CONTACT FORM */
    .contact-form {
      background: var(--pure-white);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px var(--shadow-light);
      border-top: 5px solid var(--earth-brown);
    }

    .contact-form h2 {
      color: var(--dark-green);
      margin-bottom: 2rem;
      font-size: 2rem;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
      font-weight: 600;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 1rem;
      border: 2px solid #e0e0e0;
      border-radius: 8px;
      font-size: 1rem;
      font-family: inherit;
      transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      border-color: var(--rice-green);
      box-shadow: 0 0 0 3px rgba(47, 93, 47, 0.1);
      outline: none;
    }

    /* BUTTON */
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
      width: 100%;
    }

    .btn:hover {
      background: linear-gradient(to right, #9c6b3a, var(--earth-brown));
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(139, 90, 43, 0.4);
    }

    /* MAP SECTION */
    .map-section {
      margin: 4rem 0;
      background: var(--pure-white);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px var(--shadow-light);
    }

    .map-section h2 {
      color: var(--dark-green);
      margin-bottom: 2rem;
      font-size: 2rem;
      text-align: center;
    }

    .map-placeholder {
      background: linear-gradient(rgba(47, 93, 47, 0.1), rgba(47, 93, 47, 0.1));
      height: 300px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--rice-green);
      font-size: 1.2rem;
      font-weight: 600;
    }

    /* BUSINESS HOURS */
    .hours-section {
      background: var(--pure-white);
      padding: 3rem;
      border-radius: 15px;
      box-shadow: 0 10px 30px var(--shadow-light);
      margin: 3rem 0;
    }

    .hours-section h2 {
      color: var(--dark-green);
      margin-bottom: 2rem;
      font-size: 2rem;
      text-align: center;
    }

    .hours-table {
      width: 100%;
      max-width: 600px;
      margin: 0 auto;
    }

    .hours-table tr {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .hours-table td {
      padding: 1rem;
      color: #555;
    }

    .hours-table td:first-child {
      font-weight: 600;
      color: var(--dark-green);
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
      
      .contact-hero {
        padding: 4rem 1.5rem;
      }
      
      .contact-hero h1 {
        font-size: 2.2rem;
      }
      
      .contact-hero p {
        font-size: 1.1rem;
      }
      
      .contact-info,
      .contact-form,
      .map-section,
      .hours-section {
        padding: 2rem 1.5rem;
      }
      
      .contact-wrapper {
        grid-template-columns: 1fr;
      }
      
      .btn {
        padding: 0.9rem 2rem;
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      .contact-hero h1 {
        font-size: 1.9rem;
      }
      
      .logo-main {
        font-size: 1.3rem;
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

    .contact-item, .contact-form, .map-section, .hours-section {
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
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php" class="active">Contact</a>
    <a href="admin/login.php" class="admin-link">Admin</a>
  </nav>
</header>

<section class="contact-hero">
  <div class="contact-hero-content">
    <h1>Contact GreenField Rice Processing</h1>
    <p>Get in touch with us for rice milling, threshing, and processing services. We're here to help you get the best value from your harvest.</p>
  </div>
</section>

<div class="contact-container">
  <div class="contact-wrapper">
    <!-- CONTACT INFO -->
    <div class="contact-info">
      <h2>Get In Touch</h2>
      
      <div class="contact-item">
        <div class="contact-icon">📞</div>
        <div class="contact-details">
          <h3>Phone Numbers</h3>
          <p>+234 123 456 7890<br>+234 987 654 3210</p>
        </div>
      </div>
      
      <div class="contact-item">
        <div class="contact-icon">✉️</div>
        <div class="contact-details">
          <h3>Email Address</h3>
          <p>info@greenfieldrice.com<br>sales@greenfieldrice.com</p>
        </div>
      </div>
      
      <div class="contact-item">
        <div class="contact-icon">📍</div>
        <div class="contact-details">
          <h3>Visit Our Facility</h3>
          <p>123 Rice Processing Avenue<br>Agricultural Zone, Lagos State<br>Nigeria</p>
        </div>
      </div>
      
      <div class="contact-item">
        <div class="contact-icon">⏰</div>
        <div class="contact-details">
          <h3>Business Hours</h3>
          <p>Monday - Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 4:00 PM<br>Sunday: Closed</p>
        </div>
      </div>
    </div>

    <!-- CONTACT FORM -->
    <div class="contact-form">
      <h2>Send Us a Message</h2>
      <form action="submit_contact.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name *</label>
          <input type="text" id="name" name="name" required placeholder="Your full name">
        </div>
        
        <div class="form-group">
          <label for="email">Email Address *</label>
          <input type="email" id="email" name="email" required placeholder="Your email address">
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="Your phone number">
        </div>
        
        <div class="form-group">
          <label for="service">Service Interested In</label>
          <select id="service" name="service">
            <option value="">Select a service</option>
            <option value="milling">Rice Milling</option>
            <option value="threshing">Rice Threshing</option>
            <option value="bulk">Bulk Processing</option>
            <option value="consultation">Consultation</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="message">Your Message *</label>
          <textarea id="message" name="message" rows="5" required placeholder="Tell us about your rice processing needs..."></textarea>
        </div>
        
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
  </div>

  <!-- MAP SECTION -->
  <div class="map-section">
    <h2>Our Location</h2>
    <div class="map-placeholder">
      🗺️ Map Location - GreenField Rice Processing Facility
    </div>
  </div>

  <!-- BUSINESS HOURS -->
  <div class="hours-section">
    <h2>Operating Hours</h2>
    <table class="hours-table">
      <tr>
        <td>Monday - Friday</td>
        <td>8:00 AM - 6:00 PM</td>
      </tr>
      <tr>
        <td>Saturday</td>
        <td>9:00 AM - 4:00 PM</td>
      </tr>
      <tr>
        <td>Sunday</td>
        <td>Closed</td>
      </tr>
      <tr>
        <td>Public Holidays</td>
        <td>10:00 AM - 2:00 PM</td>
      </tr>
    </table>
  </div>
</div>

<footer>
  <div class="footer-logo">
    <div class="logo"></div>
    <span>GreenField Rice Processing</span>
  </div>
  © 2026 GreenField Rice Processing | Quality Rice Processing Since 2010
  <br>
  <small>Contact us today for all your rice processing needs</small>
</footer>

</body>
</html>