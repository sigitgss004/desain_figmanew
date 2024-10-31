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
      position: relative; /* Perlu untuk efek garis bawah animatif */
      transition: color 0.3s ease; /* Transisi halus pada perubahan warna */
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
    }
    .nav-item:hover {
      color: #000000; /* Mengubah warna teks saat hover */
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
      color: black;
      font-size: 30px; /* Ukuran font lebih kecil */
      font-weight: 600; /* Sedikit kurang tebal */
      margin-top: 70px;  
      margin-bottom: 70px; 
      line-height: 1.2; 
    }

  
    .about-section {
  position: relative;
  max-width: 1200px;
  margin: 200px auto 200px; /* Berikan margin atas lebih besar (150px) */
  display: flex;
  padding: 40px 20px;
  align-items: center;
  background-color:#4D869C;
  border-radius: 25px;
}


    .about-text {
      width: 40 %;
      padding-right: 20px;
      font-size: 19px;
      color: #ffffff  ;
      line-height: 1.8;
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

    .about-title-container {
  background-color: #4D869C; 
  color: white;
  padding: 20px 40px; 
  border-radius: 0px 50px 50px 0px; /* Ini akan tetap menjaga radius pada dua sudut */
  width: 300px; 
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
  position: absolute; 
  top: -150px; 
  left: 900px; /* Tidak diubah, tetap absolut */
  z-index: 3;
  overflow: hidden; /* Tambahkan ini untuk memastikan elemen tidak keluar dari area melengkung */
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
        <h2>Luxe Auto Detail </h2>
      </div>
      <div class="about-text">
        <p>
          Selamat datang di LuxeWash Auto Detail, tempat di mana mobil Anda mendapatkan perawatan terbaik dengan layanan cuci mobil profesional yang berkomitmen untuk memberikan hasil sempurna menggunakan teknologi terkini dan produk ramah lingkungan. Kami memahami bahwa mobil Anda adalah cerminan gaya hidup dan kebanggaan Anda, sehingga kami menawarkan berbagai paket layanan, mulai dari cuci eksterior yang cepat hingga detailing menyeluruh, dengan fokus pada detail dan kepuasan pelanggan, memastikan setiap kendaraan meninggalkan kilauan yang luar bi
        </p>
        <p>
          LuxeWash Auto Detail juga menyediakan layanan home service untuk kenyamanan Anda, sehingga Anda dapat menikmati mobil yang bersih dan terawat tanpa meninggalkan rumah. Kami berkomitmen untuk memberikan layanan terbaik dengan tim profesional yang terlatih dan menggunakan produk berkualitas tinggi.
        </p>
      </div>
      <div class="profile-img-wrapper">
        <img class="profile-img" src="/upload/profiltentang.jpg" alt="Profile Image" />
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
</html>
