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
    }
    .header, .footer {
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
   box-shadow: 0px 4px 4px rgba(0, 0, 0, 0,); /* Bisa disesuaikan */
   background: none; /* Pastikan tidak ada background */
}

    .nav-item {
      color: white;
      font-size: 16px;
      font-weight: 800;
      margin-left: 20px;
      cursor: pointer;
    }
    .nav-item {
  color: white;
  font-size: 16px;
  font-weight: 800;
  margin-left: 20px;
  cursor: pointer;
  position: relative; /* Perlu untuk efek garis bawah animatif */
  transition: color 0.3s ease; /* Transisi halus pada perubahan warna */
  text-decoration: none; /* Menghilangkan garis bawah */

}

.nav-item:first-child {
  margin-left: 0;
}

/* Efek hover: warna berubah dan garis bawah muncul */
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
  color: #000000; /* Mengubah warna teks saat hover, misalnya menjadi emas */
}

/* Animasi garis bawah melebar saat hover */
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

    /* Style for the new layout */
    .article-section {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  margin: 70px 0;
  padding: 20px;
  background-color: #FFFFFF;
  border-radius: 12px;
  margin-top: 20px;
  margin-bottom: 100px; /* Ubah margin-bottom untuk memberi jarak dengan footer */
  padding-right: 20px;
}

    .article-title {
      text-align: center;
      color: black;
      font-size: 35px; /* Ukuran font lebih kecil */
      font-weight: 600; /* Sedikit kurang tebal */
      margin-top: 70px;  
      margin-bottom: 70px; 
      line-height: 1.2; 
    }

    /* Wrapper for product image background */
    .profile-img-wrapper {
  width: 500px;
  height: 500px;
  background-color: #4D869C; 
  border-radius: 0px 100px 0px 100px; /* Sudut kiri atas dan kanan bawah melengkung */
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 20px;
  margin-left: 100px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}


    .profile-img {
      width: 400px; /* Ukuran gambar sedikit lebih kecil */
      height: 400px;
      object-fit: cover;
      border-radius: 12px; 
    }

    .profile-info {
      flex: 1;
      color: black;
      font-size: 22px; /* Ukuran font lebih kecil */
      font-weight: 500;
      line-height: 30px; /* Ukuran lebih kecil */
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
      /* background-color: #000;  */
      font-size: 20px; /* Ukuran font lebih kecil */
      font-weight: 400; /* Sedikit kurang tebal */
      line-height: 27px; /* Ukuran lebih kecil */
      letter-spacing: 1.5px;
      text-align: justify;
    }

    .sub-title {
      text-align: center;
      color: black;
      font-size: 28px; /* Ukuran font lebih kecil */
      font-weight: 500;
      margin-top: 40px;
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
      <div class="breadcrumb">Beranda / Artikel</div>
      <div class="article-label">Produk Kami</div>
    </div>

    <!-- New Article Section Layout -->
    <div class="article-title">LuxeWash Auto Detail</div>
    <div class="article-section">
      <div class="profile-img-wrapper">
        <img class="profile-img" src="/upload/faktivitas1.jpg" alt="Profile Image" />
      </div>
      <div class="profile-info">
      <h2 style="font-size: 30px; font-weight: 700; margin-left: 50px; margin-top: -10px;"> Pembersihan Harian </h2>
      <p class="article-content">
      Setiap hari, tim profesional kami melakukan pembersihan menyeluruh pada eksterior dan interior kendaraan pelanggan. Aktivitas ini melibatkan pencucian eksterior untuk menghilangkan kotoran dan debu, vakum interior untuk kebersihan kabin, serta detailing ringan yang mencakup pembersihan kaca, dashboard, dan bagian-bagian detail lainnya. Kami memastikan setiap mobil keluar dari tempat kami dalam kondisi terbaik, bersih, dan berkilau. Selain itu, pembersihan harian kami menggunakan produk ramah lingkungan yang aman bagi kendaraan dan lingkungan. Dengan layanan ini, mobil tidak hanya terlihat bersih, tetapi juga mendapatkan perawatan yang menjaga kondisi cat dan interior tetap optimal. Layanan ini ideal untuk pelanggan yang membutuhkan pembersihan rutin dan berkualitas Tim kami bekerja dengan cepat dan efisien, memastikan kepuasan pelanggan dalam setiap kunjungan.  </div>
        </p>
      </div>
    </div>
  <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
</html>
          