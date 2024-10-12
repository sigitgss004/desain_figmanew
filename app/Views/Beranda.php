<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Highlight</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Inter, sans-serif;
      background-color: #ffffff; /* Background for the entire body */
    }

    .container {
      width: 100%;
      min-height: 100vh;
      position: relative;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .header, .footer {
      width: 100%;
      height: 80px;
      background: #4D869C;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      box-sizing: border-box;
      z-index: 10;
      position: relative;
    }

    .footer {
      text-align: center;
      padding: 50px 0;
      background-color: #4D869C;
      color: white;
      margin-top: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .footer-text {
      color: white;
      font-size: 16px;
      font-weight: 400;
      line-height: 21px;
      letter-spacing: 1.60px;
    }

    .logo {
      width: 106px;
      height: 58px;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0);
    }

    .nav-item {
      color: white;
      font-size: 16px;
      font-weight: 800;
      margin-left: 20px;
      cursor: pointer;
      position: relative;
      transition: color 0.3s ease;
      text-decoration: none;
    }

    .nav-item:first-child {
      margin-left: 0;
    }

    .nav-item:hover {
      color: #000000;
    }

    .nav {
      display: flex;
    }

    .nav-left {
      margin-left: auto;
    }

    .overlay {
      width: 100vw; /* Make it full-width */
      height: 400px;
      position: relative;
      background: linear-gradient(90deg, #4D869C 50%, #FFFFFF 50%);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1;
      margin-bottom: 50px; /* Tambahkan margin bawah */
      padding: 0;
    }

    .content-wrapper {
      width: 100%; /* Full width of the content */
      max-width: 1200px; /* Max width for large screens */
      padding: 20px;
      box-sizing: border-box;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 2;
    }

    .car-img {
      max-width: 50%;
      height: auto;
      object-fit: contain;
      z-index: 1;
    }

    .text-box {
      color: #000;
      padding-left: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for readability */
      border-radius: 10px; /* Rounded corners for aesthetics */
    }

    .title-highlight {
      font-size: 45px; /* Ukuran font untuk "HighLight of" */
      font-weight: bold;
      margin: 0;
      color: #000;
    }

    .title-carwash {
      font-size: 48px; /* Ukuran font untuk "Car Wash" lebih besar */
      font-weight: bold;
      margin: 0;
      color: #000;
    }

    .description {
      font-size: 16px;
      font-weight: 400;
      margin-top: 10px;
      color: #333;
    }

    /* Teks di bawah gambar overlay */
    .centered-text {
      width: 100%;
      text-align: center;
      font-size: 50px;
      font-weight: bold;
      margin: 30px 0; /* Kurangi margin untuk menambah jarak antara bagian overlay dan bagian lain */
      color: #000000;
      position: relative;
      z-index: 2;
    }

    /* Bagian Tentang Kami */
    .about-section {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 50px auto;
      padding: 20px;
      max-width: 1200px;
      position: relative;
      z-index: 2; /* Pastikan bagian ini berada di atas overlay */
    }

    .text-box-about {
      width: 50%;
      padding: 30px;
      background-color: #BFE1F2; /* Ubah warna menjadi putih agar kontras dengan latar belakang biru */
      border-radius: 20px 0 0 20px;
    }

    .text-box-about h2 {
      font-size: 1.5rem;
      color: #2a4d69;
      margin-bottom: 10px;
    }

    .text-box-about h1 {
      font-size: 2rem;
      color: #333;
      margin-bottom: 20px;
    }

    .text-box-about p {
      font-size: 1rem;
      line-height: 1.8;
      color: #555;
      margin-bottom: 20px;
    }

    .read-more-btn {
      display: inline-block;
      text-decoration: none;
      padding: 10px 20px;
      color: white;
      background-color: #3a78b3;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .read-more-btn:hover {
      background-color: #2a4d69;
    }

    .image-box-about {
      width: 50%;
      overflow: hidden;
      border-radius: 0 20px 20px 0;
    }

    .image-box-about img {
      width: 500px; /* Lebar tetap */
      height: 500px; /* Tinggi tetap */
      object-fit: cover; /* Memastikan gambar tetap proporsional */
      border-radius: 0 40px 40px 0;
    }

    .about-background {
      width: 100%;
      background-color: #d0ecf6; /* Warna latar belakang biru */
      padding: 200px 0; /* Menambah ruang di atas dan bawah */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan untuk memberikan efek kedalaman */
      z-index: 1; /* Pastikan berada di bawah konten */
    }

    @media (max-width: 768px) {
      .content-wrapper {
        flex-direction: column;
        text-align: center;
      }

      .car-img {
        max-width: 80%;
        margin-bottom: 20px;
      }

      .text-box {
        padding-left: 0;
        padding: 20px; /* Added padding for better mobile readability */
      }

      .title-highlight {
        font-size: 30px; /* Ukuran font "HighLight of" untuk mobile */
      }

      .title-carwash {
        font-size: 36px; /* Ukuran font "Car Wash" untuk mobile */
      }



      .description {
        font-size: 14px;
      }

      .centered-text {
        font-size: 20px;
        margin-top: 50px;
      }

      /* Responsive Tentang Kami */
      .about-section {
        flex-direction: column;
      }

      .text-box-about, .image-box-about {
        width: 100%;
        border-radius: 20px;
      }

      .image-box-about img {
        border-radius: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header -->
    <div class="header">
      <div class="nav">
        <a href="http://localhost:8080" class="nav-item">Beranda</a>
        <a href="http://localhost:8080/tentang" class="nav-item">Tentang</a>
        <a href="http://localhost:8080/artikel" class="nav-item">Artikel</a>
        <a href="http://localhost:8080/produk" class="nav-item">Produk</a>
        <a href="http://localhost:8080/aktivitas" class="nav-item">Aktivitas</a>
        <a href="http://localhost:8080/kontak" class="nav-item">Kontak</a>
      </div>
      <img class="logo" src="/upload/logo.png" alt="LuxeWash Auto Detail Logo">
    </div>

    <!-- Overlay -->
    <div class="overlay">
      <div class="content-wrapper">
        <img class="car-img" src="/upload/fotoberanda.png" alt="Gambar Mobil" />
        <div class="text-box">
          <h1 class="title-highlight">HighLight of</h1>
          <h1 class="title-carwash">Car Wash</h1>
          <p class="description">Menjadikan setiap mobil tampil memukau,</p>
          <p class="description">kembali seperti baru.</p>
        </div>
      </div>
    </div>

    <!-- Teks "LuxeWash Auto Detail" -->
    <div class="centered-text">
      LuxeWash Auto Detail
    </div>

    <!-- Tentang Kami -->
    <div class="about-section">
      <div class="text-box-about">
        <h2>Tentang Kami</h2>
        <h1>LuxeWash Auto Detail</h1>
        <p>LuxeWash Auto Detail adalah layanan detailing mobil premium yang berdedikasi untuk memberikan hasil terbaik bagi setiap kendaraan pelanggan kami. Kami menggunakan teknik dan bahan terbaik untuk memastikan mobil Anda selalu tampil seperti baru.</p>
        <a href="#" class="read-more-btn">Selengkapnya</a>
      </div>
      <div class="image-box-about">
        <img src="/upload/profiltentang.jpg" alt="Tentang Kami">
      </div>
    </div>

<!-- Bagian Galeri Aktivitas -->
<div class="gallery-section">
    <h2 class="gallery-title">Galeri Aktivitas Kami</h2>
    <div class="gallery-grid">
        <!-- Gambar 1 -->
        <div class="gallery-item">
            <img src="/upload/activity1.jpg" alt="Cuci Mobil Reguler" />
        </div>
        <!-- Gambar 2 -->
        <div class="gallery-item">
            <img src="/upload/activity2.jpg" alt="Detailing Interior" />
        </div>
        <!-- Gambar 3 -->
        <div class="gallery-item">
            <img src="/upload/activity3.jpg" alt="Cuci Mesin" />
        </div>
        <!-- Gambar 4 -->
        <div class="gallery-item">
            <img src="/upload/activity4.jpg" alt="Polishing" />
        </div>
    </div>
</div>


    <!-- Latar Belakang Biru di Bawah Konten -->
    <div class="about-background"></div>

    <!-- Footer -->
    <div class="footer">
      <p class="footer-text">&copy; 2024 LuxeWash Auto Detail. All Rights Reserved.</p>
    </div>
  </div>
</body>
</html>
