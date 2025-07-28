<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ucok Ucok Restaurant - Menu & Layanan</title>
   <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Navbar -->
    <nav>
      <div class="container navbar">
        <div class="logo">Ucok <span>Restaurant</span></div>
        <ul class="nav-links">
          <li><a href="index.html">Beranda</a></li>
          <li><a href="about.html">Tentang Kami</a></li>
          <li><a href="services.html">Layanan</a></li>
          <li><a href="menu.html">Menu</a></li>
          <li><a href="kontak.html">Kontak</a></li>
           <li><a href="formlogin.php">Login</a></li>
           <li><a href="formlogin.php">logout </a></li>
        </ul>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="container hero-content">
        <h1>Pengalaman Kuliner Tak Terlupakan</h1>
        <p>
          Menghadirkan cita rasa autentik dengan bahan-bahan pilihan terbaik
          sejak 2021
        </p>
        <a href="#menu" class="btn">Lihat Menu</a>
      </div>
    </section>

   
    <!-- Services Section -->
    <section class="services" id="services">
      <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="services-grid">
          <div class="service-card">
            <div class="service-icon">🍽️</div>
            <h3>Makan di Tempat</h3>
            <p>
              Nikmati suasana eksklusif dengan interior mewah dan pelayanan
              prima dari staf kami yang ramah dan profesional.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">🚚</div>
            <h3>Pesan Antar</h3>
            <p>
              Pesanan Anda akan diantar tepat waktu dengan kemasan khusus yang
              menjaga kualitas dan kehangatan makanan.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">🎉</div>
            <h3>Acara Khusus</h3>
            <p>
              Kami menyediakan layanan katering untuk acara pernikahan, ulang
              tahun, meeting, dan acara khusus lainnya.
            </p>
          </div>
          <div class="service-card">
            <div class="service-icon">👨‍🍳</div>
            <h3>Private Chef</h3>
            <p>
              Chef kami bisa datang ke rumah Anda untuk menyiapkan hidangan
              spesial sesuai permintaan Anda.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Menu Section -->
    <section class="menu" id="menu">
      <div class="container">
        <h2 class="section-title">Menu Kami</h2>
        <div class="menu-categories">
          <button class="category-btn active">Semua</button>
          <button class="category-btn">Hidangan Pembuka</button>
          <button class="category-btn">Hidangan Utama</button>
          <button class="category-btn">Minuman</button>
          <button class="category-btn">Hidangan Penutup</button>
        </div>
        <div class="menu-items">
          <!-- Appetizers -->
          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/87/c0/94/87c094977a372be3362697f8fd3d569c.jpg"
              alt="Sup Jamur"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">mie kering</h3>
                <span class="menu-item-price">Rp 40.000</span>
              </div>
              <p class="menu-item-desc">
                mie kering dengan kuah yang sangat lezat dan campuran sayuran
              </p>
              
            </div>
          </div>

          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/07/96/3b/07963b92a5a5db9deb8e1e03421e9cdc.jpg"
              alt="Lumpia Udang"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">Lumpia Udang</h3>
                <span class="menu-item-price">Rp 45.000</span>
              </div>
              <p class="menu-item-desc">
                Lumpia renyah dengan isian udang dan sayuran segar
              </p>
            </div>
          </div>

          <!-- Main Courses -->
          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/74/5e/27/745e27a062a2ff495db4f5042cc4f2f2.jpg"
              alt="Ayam Pedas Manis"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">Ayam Pedas</h3>
                <span class="menu-item-price">Rp 65.000</span>
              </div>
              <p class="menu-item-desc">
                Ayam goreng dengan saus pedas manis khas kami
              </p>
              <span class="menu-item-badge spicy">Pedas</span>
            </div>
          </div>

          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/43/a2/d2/43a2d2285738357d3bb922ac4ef19634.jpg"
              alt="Steak Sirloin"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">nasi goreng</h3>
                <span class="menu-item-price">Rp 35.000</span>
              </div>
              <p class="menu-item-desc">
                nasi goreng dengan beberapa campuran bahan membuat rasanya
                istimewa
              </p>
            </div>
          </div>

          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/70/6c/ae/706cae701324ca56a2c4c5929f990574.jpg"
              alt="Salad Quinoa"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">coto makassar</h3>
                <span class="menu-item-price">Rp 15.000</span>
              </div>
              <p class="menu-item-desc">
                coto makassar dengan bumbu khas makassar
              </p>

            </div>
          </div>

          <!-- Beverages -->
          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/0a/7c/27/0a7c27f56aa886c3451e4cf97bc37e57.jpg"
              alt="Es Teh Manis"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">Es Teh Manis</h3>
                <span class="menu-item-price">Rp 5.000</span>
              </div>
              <p class="menu-item-desc">Teh hitam dengan gula</p>
            </div>
          </div>

          <!-- mineral -->
          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/a0/66/b3/a066b3106727bcdc40d51acdd8f4709f.jpg"
              alt="Brownies"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">air mineral</h3>
                <span class="menu-item-price">Rp 10.000</span>
              </div>
              <p class="menu-item-desc">air minum yang baik untuk tubuh</p>
            </div>
          </div>
          <div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/50/ba/12/50ba125ead57ee46f967a1dd2d1c0fb3.jpg"
              alt="Brownies"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">air zam zam</h3>
                <span class="menu-item-price">Rp 50.000</span>
              </div>
              <p class="menu-item-desc">air dari surga</p>
            </div>
          </div><div class="menu-item">
            <img
              src="https://i.pinimg.com/736x/19/c4/d8/19c4d8f6b1d69cf8e7c4cb1dd82b4203.jpg"
              alt="Brownies"
              class="menu-item-img"
            />
            <div class="menu-item-content">
              <div class="menu-item-header">
                <h3 class="menu-item-title">jalankote</h3>
                <span class="menu-item-price">Rp 25.000</span>
              </div>
              <p class="menu-item-desc">cemilan khas</p>
        </div>
      </div>
    </section>
  </div>
</div>
</section>
        

    <!-- Footer -->
    <footer id="contact">
      <div class="container">
        <div class="footer-content">
          <div class="footer-column">
            <h3>Tentang Kami</h3>
            <p>
              Restoran Lezat menghadirkan pengalaman kuliner terbaik dengan
              bahan-bahan pilihan dan resep istimewa.
            </p>
            <p>Buka setiap hari dari 07:00 - 22:00 WIB</p>
          </div>
          <div class="footer-column">
            <h3>Kontak Kami</h3>
            <p>Jl. Sultan Alauddin, Belakang Honda</p>
            <p>Telepon: 081354303600 (Ucok Owner)</p>
            <p>Instagram: @UcokRestaurant</p>
          </div>
          <div class="footer-column">
            <h3>Link Cepat</h3>
            <a href="#home">Beranda</a>
            <a href="#about">Tentang Kami</a>
            <a href="#services">Layanan</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
          </div>
          <div class="footer-column">
            <h3>Media Sosial</h3>
            <div class="social-links">
              <a href="#">📱</a>
              <a href="#">📘</a>
              <a href="#">📸</a>
              <a href="#">🐦</a>
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>&copy; 2021 ucok resturant. Semua Hak Dilindungi.</p>
        </div>
      </div>
    </footer>
  </body>
</html>
