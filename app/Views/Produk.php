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

    .header,
    .footer {
      width: 100%;
      height: 80px;
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
      transition: color 0.3s ease;
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
      font-weight: 600;
      margin-top: 70px;
      margin-bottom: 70px;
      line-height: 1.2;
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

    /* Profile Image Wrapper */
    .article-wrapper {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      padding: 20px;
      /* Menambahkan padding untuk ruang */
    }

    /* Tablet */
    @media (max-width: 768px) {
      .article-wrapper {
        padding: 10px;
        /* Mengurangi padding pada layar tablet */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .article-wrapper {
        padding: 5px;
        /* Mengurangi padding lebih lanjut pada layar mobile */
      }
    }

    .background-box {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      background-color: #4D869C;
      border-radius: 0 10% 0 10%;
      /* Menggunakan persentase untuk border-radius */
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      padding: 5%;
      /* Menggunakan persentase untuk padding */
      margin-bottom: 5%;
      /* Menggunakan persentase untuk margin */
      box-sizing: border-box;
    }

    /* Media Queries untuk perangkat yang lebih kecil */
    @media (max-width: 768px) {
      .background-box {
        flex-direction: column;
        /* Ubah arah flex menjadi kolom */
        align-items: center;
        /* Rata tengah item */
      }
    }

    /* Media Queries untuk perangkat sangat kecil */
    @media (max-width: 480px) {
      .background-box {
        padding: 10%;
        /* Tambahkan padding lebih banyak untuk ruang di layar kecil */
      }
    }


    /* Box article individual */
    .article-box {
      width: 48%;
      /* Dua kolom pada layar besar */
      background-color: #4D869C;
      /* Menambahkan warna latar belakang */
      border-radius: 0px 100px 0px 100px;
      padding: 10px;
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 5px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .article-box {
        width: 100%;
        /* Satu kolom pada layar tablet */
        margin-bottom: 20px;
        /* Menambah jarak antar artikel */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .article-box {
        flex-direction: column;
        /* Tumpuk artikel secara vertikal */
        align-items: flex-start;
        /* Rata kiri untuk teks */
      }
    }

    .article-text {
      margin-left: 20px;
    }

    .article-text h3 {
      font-size: 20px;
      color: #ffffff;
    }

    .article-text p {
      font-size: 14px;
      color: #ffffff;
      line-height: 22px;
    }

    /* Add option to change content text color */
    .article-text p.custom-color {
      color: #fff;
      /* Default gray */
    }

    .read-more-btn {
      margin-top: 10px;
      display: inline-block;
      background-color: transparent;
      /* Atur warna latar belakang menjadi transparan jika diinginkan */
      color: white;
      padding: 0.5rem 1rem;
      /* Menggunakan rem untuk ukuran yang lebih responsif */
      border: 2px solid white;
      /* Menambahkan border putih */
      border-radius: 5px;
      /* Menjaga radius sudut */
      text-decoration: none;
      font-size: 1rem;
      /* Menggunakan rem untuk font size */
      transition: background-color 0.3s ease;
      /* Transisi halus saat hover */
    }

    .read-more-btn:hover {
      background-color: rgba(255, 255, 255, 0.1);
      /* Efek hover untuk memberi warna latar belakang saat di-hover */
    }

    /* Media Queries untuk perangkat yang lebih kecil */
    @media (max-width: 768px) {
      .read-more-btn {
        padding: 0.75rem 1.5rem;
        /* Tambahkan padding untuk layar lebih kecil */
        font-size: 1.1rem;
        /* Sedikit menambah ukuran font */
      }
    }

    /* Media Queries khusus untuk layar 320px */
    @media (max-width: 320px) {
      .read-more-btn {
        width: 50%;
        /* Tombol memenuhi lebar kontainer pada layar 320px */
        padding: 0.4rem;
        /* Menyesuaikan padding untuk ukuran lebih kecil */
        font-size: 0.7rem;
        /* Mengurangi ukuran font sedikit */
        margin-left: 5.0rem;
        /* Menggeser ke kanan dengan margin otomatis */
        margin-right: 0;
        /* Pastikan tidak ada margin di sisi kanan */
      }
    }

    /* Gambar artikel */
    .article-img {
      width: 80px;
      height: 80px;
    }

    .profile-img {
      width: 150px;
      /* Ukuran default pada layar besar */
      height: 150px;
      object-fit: cover;
      border-radius: 12px;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .profile-img {
        width: 120px;
        /* Ukuran lebih kecil pada tablet */
        height: 120px;
        /* Sesuaikan tinggi untuk menjaga rasio */
      }
    }

    .profile-img {
      width: 150px;
      /* Ukuran default pada layar besar */
      height: 150px;
      object-fit: cover;
      border-radius: 12px;
    }

    /* Tablet */
    @media (max-width: 768px) {
      .profile-img {
        width: 120px;
        /* Ukuran lebih kecil pada tablet */
        height: 120px;
        /* Sesuaikan tinggi untuk menjaga rasio */
      }
    }

    /* Default Size */
    .profile-img {
      width: 150px;
      /* Ukuran default untuk desktop */
      height: 150px;
      /* Sesuaikan tinggi untuk menjaga rasio */
    }

    /* Tablet */
    @media (max-width: 768px) {
      .profile-img {
        width: 120px;
        /* Ukuran lebih kecil pada tablet */
        height: 120px;
        /* Sesuaikan tinggi untuk menjaga rasio */
      }
    }

    /* Mobile */
    @media (max-width: 480px) {
      .profile-img {
        width: 100px;
        /* Ukuran lebih kecil pada perangkat mobile */
        height: 100px;
        /* Sesuaikan tinggi untuk menjaga rasio */
      }
    }

    /* Very Small Mobile (320px) */
    @media (max-width: 320px) {
      .profile-img {
        width: 80px;
        /* Ukuran lebih kecil untuk perangkat 320px */
        height: 80px;
        /* Sesuaikan tinggi untuk menjaga rasio */
      }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .article-box {
        width: 100%;
        margin-bottom: 20px;
      }

      .background-box {
        flex-direction: column;
        justify-content: center;
      }

      .article-text h3 {
        font-size: 18px;
      }

      .article-text p {
        font-size: 13px;
      }
    }

    /* Footer */
    .footer {
      width: 100%;
      text-align: center;
      padding: 20px 0;
      background-color: #4D869C;
      color: white;
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
      <img class="overlay-img" src="/upload/fotocar.jpg" alt="Gambar Overlay" />
      <div class="overlay-dark"></div>
      <div class="breadcrumb">Beranda / Produk</div>
      <div class="article-label">Produk Kami</div>
    </div>

    <!-- Judul Artikel -->
    <div class="article-title">Produk Kami</div>

    <!-- Kotak Artikel dengan 2 Konten -->
    <!-- Wrapper utama -->
    <div class="main-wrapper">
      <?php
      $counter = 0;
      foreach ($produkdata as $produk):
        // Mulai wrapper baru tiap dua data
        if ($counter % 2 === 0): ?>
          <div class="article-wrapper">
            <div class="background-box">
            <?php endif; ?>

            <!-- Kotak Artikel -->
            <div class="article-box">
              <img src="/upload/<?= $produk->img_produk ?>" alt="<?= $produk->title_produk ?>" class="article-img profile-img">
              <div class="article-text">
                <h3><?= $produk->title_produk ?></h3>
                <p class="custom-color">
                  <?php
                  $deskripsi_pendek = substr($produk->deskripsi_produk, 0, 150);
                  echo strlen($produk->deskripsi_produk) > 150 ? $deskripsi_pendek . '...' : $deskripsi_pendek;
                  ?>
                </p>

                <a href="" class="read-more-btn">Baca Selengkapnya</a>
              </div>
            </div>

            <?php
            // Tutup wrapper setelah dua data
            $counter++;
            if ($counter % 2 === 0): ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      <!-- Menutup wrapper jika ada sisa satu artikel yang belum tertutup -->
      <?php if ($counter % 2 !== 0): ?>
    </div>
  </div>
<?php endif; ?>
</div>




<!-- Footer -->
<div class="footer">
  <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
</div>
</div>
</body>

</html>