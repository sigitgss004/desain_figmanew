<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Inter, sans-serif;
    }

    .container {
      width: 100%;
      min-height: 100vh;
      position: relative;
      background: white;
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
      width: 100%;
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
      width: 100%;
      height: 400px;
      position: relative;
      background: linear-gradient(90deg, #4D869C 50%, #FFFFFF 50%);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1;
    }

    .content-wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      max-width: 1200px;
      padding: 20px;
      box-sizing: border-box;
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
    }

    .title {
      font-size: 48px;
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
      font-size: 30px;
      font-weight: bold;
      margin-top: 100px; /* Gunakan nilai yang lebih besar */
      margin-bottom: 40px;
      color: #000000;
      position: relative; /* Agar top berfungsi */
      top: 30px; /* Atur jarak vertikal tambahan */
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
      }

      .title {
        font-size: 36px;
      }

      .description {
        font-size: 14px;
      }

      .centered-text {
        font-size: 20px;
        margin-top: 50px; /* Jarak lebih kecil di layar kecil */
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
        <a href="http://localhost:8080/bahasa" class="nav-item">Bahasa</a>
      </div>
      <img class="logo" src="/upload/logo.png" alt="Logo">
    </div>

    <!-- Gambar Overlay -->
    <div class="overlay">
      <div class="content-wrapper">
        <img class="car-img" src="/upload/fotoberanda.png" alt="Gambar Mobil" />
        <div class="text-box">
          <h1 class="title">HighLight of Car Wash</h1>
          <p class="description">Menjadikan setiap mobil tampil memukau, membuat setiap perjalanan lebih istimewa.</p>
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
