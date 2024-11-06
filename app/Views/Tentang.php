<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: Inter, sans-serif;

      body {
        overflow-x: hidden;
      }

    }

    .header,
    .footer {
      width: 100%;
      height: 80px;
      position: relative;
      background: #4D869C;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      box-sizing: border-box;
    }

    .footer {
      width: 100%;
      text-align: center;
      /* Pastikan ini mengatur teks agar berada di tengah */
      padding: 50px 0;
      /* Tambahkan jarak di atas dan bawah footer */
      background-color: #4D869C;
      color: white;
      margin-top: 100px;
      /* Tambahkan jarak di atas footer */
      display: flex;
      /* Gunakan flexbox */
      justify-content: center;
      /* Pastikan isi footer berada di tengah */
      align-items: center;
      /* Vertikal tengah */
    }

    .footer-text {
      color: white;
      font-size: 16px;
      font-weight: 400;
      line-height: 21px;
      letter-spacing: 1.6px;
    }

    /* Untuk layar kecil (ponsel) */
    @media (max-width: 576px) {
      .footer-text {
        font-size: 12px;
        line-height: 18px;
        letter-spacing: 1.2px;
      }
    }

    /* Untuk layar sedang (tablet) */
    @media (min-width: 577px) and (max-width: 768px) {
      .footer-text {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: 1.4px;
      }
    }

    /* Untuk layar besar (desktop) */
    @media (min-width: 769px) {
      .footer-text {
        font-size: 16px;
        line-height: 21px;
        letter-spacing: 1.6px;
      }
    }

    .logo {
      width: 30vw;
      /* default pada layar kecil */
      height: auto;
      max-width: 106px;
    }

    /* Pada layar tablet */
    @media (min-width: 768px) {
      .logo {
        width: 20vw;
      }
    }

    /* Pada layar desktop */
    @media (min-width: 1024px) {
      .logo {
        width: 10vw;
      }
    }

    .nav-item {
      color: white;
      font-size: 16px;
      font-weight: 800;
      margin-left: 20px;
      cursor: pointer;
      position: relative;
      /* Perlu untuk efek garis bawah animatif */
      transition: color 0.3s ease;
      /* Transisi halus pada perubahan warna */
      text-decoration: none;
      /* Menghilangkan garis bawah */

    }

    .nav-item:first-child {
      margin-left: 0;
    }

    .nav-item::after {
      content: '';
      position: absolute;
      width: 0;
      height: 3px;
      background-color: white;
      bottom: -6px;
      left: 0;
      transition: width 0.3s ease;
    }

    .nav-item:hover {
      color: #000000;
      /* Mengubah warna teks saat hover */
    }

    .nav-item:hover::after {
      width: 100%;
    }

    .nav {
      display: flex;
    }

    .nav-left {
      margin-left: auto;
    }

    .overlay {
      width: 100%;
      height: auto;
      position: relative;
      text-align: center;
    }

    .overlay-img {
      width: 100%;
      max-height: 400px;
      height: auto;
      object-fit: cover;
    }

    .overlay-dark {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .overlay-img {
        max-height: 300px;
        /* Mengurangi tinggi gambar */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .overlay-img {
        max-height: 200px;
        /* Mengurangi tinggi gambar lebih lanjut */
      }

      .overlay-dark {
        background: rgba(0, 0, 0, 0.4);
        /* Mengurangi opacity agar teks lebih terbaca di layar kecil */
      }
    }

    .breadcrumb {
      position: absolute;
      top: 90%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 20px;
      font-weight: 300;
      letter-spacing: 2px;
      padding: 10px;
      border-radius: 8px;
      background-color: transparent;
      z-index: 2;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .breadcrumb {
        font-size: 18px;
        /* Mengurangi ukuran font */
        padding: 8px;
        /* Mengurangi padding */
        letter-spacing: 1.5px;
        /* Menyesuaikan spasi antar huruf */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .breadcrumb {
        font-size: 16px;
        /* Mengurangi ukuran font lebih lanjut */
        padding: 6px;
        /* Mengurangi padding lebih lanjut */
        letter-spacing: 1px;
        /* Mengurangi spasi antar huruf */
        top: 85%;
        /* Menyesuaikan posisi agar terlihat proporsional pada layar kecil */
      }
    }

    .article-label {
      position: absolute;
      top: 20px;
      left: 20px;
      color: #fff;
      font-size: 32px;
      font-weight: 700;
      letter-spacing: 1px;
      z-index: 2;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .article-label {
        font-size: 24px;
        /* Mengurangi ukuran font */
        top: 15px;
        /* Menurunkan jarak dari atas */
        left: 15px;
        /* Menurunkan jarak dari kiri */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .article-label {
        font-size: 18px;
        /* Mengurangi ukuran font lebih lanjut */
        top: 10px;
        /* Menurunkan jarak dari atas */
        left: 10px;
        /* Menurunkan jarak dari kiri */
        letter-spacing: 0.5px;
        /* Mengurangi spasi antar huruf */
      }
    }

    .article-title {
      text-align: center;
      color: #4D869C;
      font-size: 35px;
      /* Ukuran default */
      font-weight: 600;
      margin-top: 70px;
      margin-bottom: 70px;
      line-height: 1.2;
    }

    /* Untuk perangkat yang lebih kecil seperti tablet */
    @media (max-width: 768px) {
      .article-title {
        font-size: 28px;
        /* Ukuran lebih kecil untuk tablet */
        margin-top: 50px;
        /* Margin lebih kecil untuk tablet */
        margin-bottom: 50px;
      }
    }

    /* Untuk perangkat yang sangat kecil seperti ponsel */
    @media (max-width: 480px) {
      .article-title {
        font-size: 24px;
        /* Ukuran lebih kecil untuk ponsel */
        margin-top: 40px;
        /* Margin lebih kecil untuk ponsel */
        margin-bottom: 40px;
      }
    }


    /* Tablet */
    @media (max-width: 768px) {
      .article-title {
        font-size: 28px;
        /* Mengurangi ukuran font */
        margin-top: 50px;
        /* Mengurangi margin atas */
        margin-bottom: 50px;
        /* Mengurangi margin bawah */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .article-title {
        font-size: 22px;
        /* Mengurangi ukuran font lebih lanjut */
        margin-top: 30px;
        /* Mengurangi margin atas */
        margin-bottom: 30px;
        /* Mengurangi margin bawah */
        line-height: 1.3;
        /* Menyesuaikan line-height untuk keterbacaan */
      }
    }


    .about-section {
      position: relative;
      max-width: 1200px;
      margin: 200px auto 200px;
      /* Berikan margin atas lebih besar (150px) */
      display: flex;
      padding: 40px 20px;
      align-items: center;
      background-color: #4D869C;
      border-radius: 25px;
    }


    .about-text {
      width: 40%;
      padding-right: 20px;
      font-size: 19px;
      color: #ffffff;
      line-height: 1.8;
    }

    .profile-img {
      width: 400px;
      /* Ukuran default */
      height: 400px;
      object-fit: cover;
      border-radius: 12px;
    }

    /* Untuk perangkat yang lebih kecil seperti tablet */
    @media (max-width: 768px) {
      .profile-img {
        width: 300px;
        /* Mengurangi lebar gambar pada tablet */
        height: 300px;
        /* Mengurangi tinggi gambar pada tablet */
      }
    }

    /* Untuk perangkat yang sangat kecil seperti ponsel */
    @media (max-width: 480px) {
      .profile-img {
        width: 200px;
        /* Lebar lebih kecil untuk ponsel */
        height: 200px;
        /* Tinggi lebih kecil untuk ponsel */
      }
    }


    .profile-info {
      flex: 1;
      color: black;
      font-size: 22px;
      font-weight: 500;
      line-height: 30px;
      text-align: justify;
      margin-left: 10px;
      margin-right: 100px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .article-content {
      width: 100%;
      max-width: 700px;
      margin: 50px;
      color: black;
      font-size: 20px;
      font-weight: 400;
      line-height: 25px;
      letter-spacing: 1.5px;
      text-align: justify;
    }

    .sub-title {
      text-align: center;
      color: black;
      font-size: 28px;
      font-weight: 500;
      margin-top: 40px;
    }




    .about-image {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .about-title-container h2 {
      font-size: 28px;
      font-weight: 600;
      margin: 0;
    }

    .about-image img {
      width: 400px;
      height: 400px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>
  <div class="container">
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

    <!-- Gambar Tepat di Bawah Navbar -->
    <div class="overlay">
      <img class="overlay-img" src="/upload/fotocar.jpg" alt="Gambar Overlay" />
      <div class="overlay-dark"></div>
      <div class="breadcrumb">Beranda / Tentang</div>
      <div class="article-label">Tentang Kami</div>
    </div>

    <!-- Tentang Kami Section -->
    <div class="article-title">Kilau Sempurna, Perjalanan Luar Biasa</div>
    <div class="about-section">
      <div class="about-title-container">

      </div>
      <div class="about-text">
        <p>
          <?= $tentang->deskripsi_tentang ?>
        </p>
      </div>
      <div class="profile-img-wrapper">
        <img class="profile-img" src="/upload/<?= $tentang->img_tentang2; ?>" alt="Profile Image" />
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>

</html>