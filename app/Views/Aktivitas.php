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
    }

.footer {
  width: 100%;
  text-align: center; /* Pastikan ini mengatur teks agar berada di tengah */
  padding: 50px 0; /* Tambahkan jarak di atas dan bawah footer */
  background-color: #4D869C;
  color: white;
  margin-top: 100px; /* Tambahkan jarak di atas footer */
  display: flex; /* Gunakan flexbox */
  justify-content: center; /* Pastikan isi footer berada di tengah */
  align-items: center; /* Vertikal tengah */
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
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0,);
    }

    .nav-item {
      color: white;
      font-size: 16px;
      font-weight: 800;
      margin-left: 20px;
      cursor: pointer;
      position: relative;
      transition: color 0.3s ease;
      text-decoration: none; /* Menghilangkan garis bawah */
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
      text-decoration: none; /* Menghilangkan garis bawah */

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

    .article-title {
      text-align: center;
      color: #4D869C;
      font-size: 35px;
      font-weight: 600;
      margin-top: 70px;  
      margin-bottom: 70px; 
      line-height: 1.2; 
    }

    /* Profile Image Wrapper */
    .article-wrapper {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
    }

    .background-box {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      background-color: #4D869C;
      border-radius: 0px 100px 0px 100px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 50px;
      box-sizing: border-box;
    }

    /* Box article individual */
    .article-box {
      width: 48%;
      background-color: ;
      border-radius: 0px 100px 0px 100px;
      padding: 10px;
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 5px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
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
      color: #fff; /* Default gray */
    }

    .read-more-btn {
    margin-top: 10px;
    display: inline-block;
    background-color: transparent; /* Atur warna latar belakang menjadi transparan jika diinginkan */
    color: white;
    padding: 10px 15px;
    border: 2px solid white; /* Menambahkan border putih */
    border-radius: 5px; /* Menjaga radius sudut */
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s ease; /* Transisi halus saat hover */
  }

  .read-more-btn:hover {
    background-color: rgba(255, 255, 255, 0.1); /* Efek hover untuk memberi warna latar belakang saat di-hover */
  }

    /* Gambar artikel */
    .article-img {
      width: 80px;
      height: 80px;
    }

    .profile-img {
      width: 150px; /* Ukuran gambar sedikit lebih kecil */
      height: 150px;
      object-fit: cover;
      border-radius: 12px; 
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
      <div class="breadcrumb">Beranda / Aktivitas</div>
      <div class="article-label">Aktivitas Kami</div>
    </div>

    <!-- Judul Artikel -->
    <div class="article-title">Aktivitas Kami</div>

    <!-- Kotak Artikel dengan 2 Konten -->
    <div class="article-wrapper">
      <div class="background-box">
        <!-- Konten 1 -->
        <div class="article-box">
          <img src="/upload/faktivitas1.jpg" alt="Memilih Layanan Car Wash" class="article-img profile-img">
          <div class="article-text">
            <h3>Pembersihan Harian</h3>
            <p class="custom-color">Setiap hari, tim profesional kami melakukan pembersihan menyeluruh pada eksterior dan interior kendaraan pelanggan. Aktivitas ini melibatkan pencucian eksterior untuk menghilangkan kotoran dan debu, vakum interior untuk kebersihan kabin, serta...</p>
            <a href="http://localhost:8080/aktivitas1" class="read-more-btn">Baca Selengkapnya</a>
          </div>
        </div>

        <!-- Konten 2 -->
        <div class="article-box">
          <img src="/upload/faktivitas2.jpg" alt="Detailing Mobil" class="article-img profile-img">
          <div class="article-text">
            <h3>Perawatan Berkala</h3>
            <p class="custom-color"> Kami menawarkan layanan perawatan rutin bagi pelanggan yang ingin menjaga kondisi mobil mereka tetap prima. Aktivitas ini mencakup pencucian mendalam, pembersihan interior yang lebih teliti, dan aplikasi perlindungan seperti waxing atau coating untuk mempertahankan....</p>
            <a href="http://localhost:8080/aktivitas2" class="read-more-btn">Baca Selengkapnya</a>
            </div>
        </div>
      </div>
    </div>

    <div class="article-wrapper">
      <div class="background-box">
        <!-- Konten 3 -->
        <div class="article-box">
          <img src="/upload/faktivitas3.jpg" alt="Membersihkan Mesin Mobil" class="article-img profile-img">
          <div class="article-text">
            <h3>Pelatihan Tim dan Pengembangan</h3>
            <p class="custom-color"> Layanan berkualitas dimulai dari tim yang terampil dan berpengalaman. Kami secara berkala mengadakan pelatihan untuk seluruh staf kami, baik dalam teknik terbaru pencucian, detailing, maupun penggunaan produk yang aman dan ramah lingkungan...</p>
            <a href="http://localhost:8080/aktivitas3" class="read-more-btn">Baca Selengkapnya</a>
            </div>
        </div>

        <!-- Konten 4 -->
        <div class="article-box">
          <img src="/upload/faktivitas4.jpg" alt="Pembersihan Interior" class="article-img profile-img">
          <div class="article-text">
            <h3>Evaluasi dan Peningkatan Layanan-</h3>
            <p class="custom-color">Kami menjalankan evaluasi secara rutin untuk menilai kualitas layanan yang kami berikan. Dengan mendengarkan feedback pelanggan dan melakukan analisis internal, kami terus berusaha meningkatkan kualitas layanan kami agar selalu memenuhi  standar tertinggi dan...</p>
            <a href="http://localhost:8080/aktivitas4" class="read-more-btn">Baca Selengkapnya</a>
            </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
</html>
