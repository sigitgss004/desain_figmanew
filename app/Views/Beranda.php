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
      margin: 0;
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
      margin-top: 100px;
      margin-bottom: 90px;
      color: #000000;
      position: relative;
      top: 30px;
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
      <img class="logo" src="/upload/logo.png" alt="Logo">
    </div>

    <!-- Gambar Overlay -->
    <div class="overlay">
      <div class="content-wrapper">
        <img class="car-img" src="/upload/fotoberanda.png" alt="Gambar Mobil" />
        <div class="text-box">
          <h1 class="title-highlight">HighLight of</h1>
          <h1 class="title-carwash">Car Wash</h1>
          <p class="description">Menjadikan setiap mobil tampil memukau,</p>
          <p class="description">Membuat setiap perjalanan lebih istimewa.</p>
        </div>
      </div>
    </div>

    <!-- Teks di bawah gambar overlay -->
    <div class="centered-text">Kilau Sempurna, Perjalanan Luar Biasa</div>

    <!-- Footer -->
    <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
</html>
