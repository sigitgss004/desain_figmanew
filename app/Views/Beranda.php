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
  width: 100vw; /* Tetap full width */
  height: 250px; /* Ubah dari 400px ke 250px untuk mengurangi tinggi */
  position: relative;
  background: linear-gradient(90deg, #4D869C 50%, #BFE1F2 50%);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
  margin-bottom: 50px;
  padding: 0;
  background-image: url('/upload/your-background-image.jpg'); /* Contoh jika ingin gambar */
  background-size: cover; /* Menyesuaikan gambar dengan ukuran elemen */
  background-position: center; /* Posisi gambar agar berada di tengah */
}
 

.content-wrapper {
  background-color: #BFE1F2; /* Warna semi-transparan di belakang gambar */
  padding: 20px;
  border-radius: 10px; /* Opsional untuk mempercantik */
  width: 100%;
  max-width: 100%;
  box-sizing: border-box;
  position: relative; /* Tambahkan agar elemen ini bisa diatur z-index-nya */
  z-index: 1; /* Pastikan background berada di layer belakang */
}

.car-img {
  max-width: 50%;
  height: auto;
  object-fit: contain;
  z-index: 2; /* Z-index lebih tinggi untuk memastikan gambar ada di depan */
  position: relative; /* Aktifkan z-index dengan relative positioning */
}


    .text-box {
      color: #000;
      padding-left: 20px;
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for readability */
      border-radius: 10px; /* Rounded corners for aesthetics */
    }

    .centered-text {
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: bold;
  margin-top: 300px; /* Jarak atas ditambahkan di sini */
  margin-bottom: 10px; /* Margin bawah, sesuaikan jika perlu */
  color: #000000;
  position: relative;
  z-index: 2;
}


    .text-overlay {
  position: absolute;
  top: 60%;
  right: 150px; /* Lebih mendekatkan teks ke tepi */
  transform: translateY(-50%);
  text-align: right;
  color: #000;
  z-index: 2;
}


.title-highlight {
  font-size: 100px;
  font-weight: bold;
  margin: 10px;
  color: #000000;
  word-spacing: 0px;
  position: relative;
  top: 50px; /* Geser teks ke bawah */
}

.title-carwash {
  font-size: 100px;
  font-weight: bold;
  margin: 10px;
  color: #000;
  word-spacing: 0px;
  position: relative;
  top: 30px; /* Geser teks ke bawah */
}


.description {
  font-size: 20px;
  font-weight: normal;
  margin: 10px 0;
  color: #000;
  word-spacing: 30px;
  position: relative;
  top: 40px; /* Geser teks ke bawah */
  left: 0px; /* Geser teks ke kiri */
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
  display: flex; /* Flexbox untuk menampilkan gambar dan teks berdampingan */
  align-items: center; /* Menjaga gambar dan teks sejajar secara vertikal */
  justify-content: space-between;
  background-color: transparent; /* Membuat latar belakang transparan */
  margin: 20px auto;
  padding: 0;
  width: 80%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0, ); /* Bayangan di sekitar elemen */
}


.about-text {
  width: 50%;
  background-color: #d0ecf6; /* Latar belakang untuk teks */
  padding: 20px;
  border-radius: 20px 20px 20px
   20px;
  box-sizing: border-box;
}

.about-image {
  width: 50%;
  height: 100%;
  border-radius: 0 20px 20px 0;
  overflow: hidden; /* Agar gambar tidak keluar dari sudut membulat */
}

.about-image img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Menjaga proporsi gambar */
}


.about-text {
  width: 50%; /* Lebar teks 50% */
  margin-right: 20px; /* Jarak antara teks dan gambar */
}

.about-image {
  width: 50%; /* Lebar gambar 50% */
  border-radius: 20px; /* Sudut membulat pada gambar */
  overflow: hidden; /* Menghindari gambar keluar dari sudut membulat */
}

.about-image img {
  width: 100%; /* Gambar memenuhi kolom */
  height: auto; /* Memastikan gambar proporsional */
  object-fit: cover; /* Menjaga agar gambar tidak terdistorsi */
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

      .read-more-btn {
  display: inline-block;
  text-decoration: none;
  background-color: #3a78b3; /* Warna tombol */
  color: white; /* Warna teks */
  padding: 12px 30px; /* Padding untuk ruang di dalam tombol */
  border-radius: 30px; /* Membuat tombol berbentuk oval */
  font-weight: bold; /* Menebalkan teks */
  font-size: 16px; /* Ukuran teks */
  margin-top: 20px; /* Jarak antara teks terakhir dan tombol */
  transition: background-color 0.3s ease, transform 0.3s ease; /* Animasi transisi */
}

.read-more-btn:hover {
  background-color: #2a4d69; /* Warna tombol saat hover */
  transform: scale(1.05); /* Efek zoom kecil saat hover */
}

.blue-background {
  width: 100%;
  height: 200px; /* Sesuaikan tinggi sesuai kebutuhan */
  background-color: #4D869C; /* Warna biru yang diinginkan */
  margin-top: 20px; /* Jarak dari elemen sebelumnya */
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

<div class="overlay">
  <div class="content-wrapper">
    <img class="car-img" src="/upload/fotoberanda.png" alt="Gambar Mobil" />
    <div class="text-overlay">
      <p class="title-highlight">Highlight of</p>
      <p class="title-carwash">Car Wash</p>
      <p class="description">Menjadikan setiap mobil tampil memukau,</p>
      <p class="description">membuat setiap perjalanan lebih istimewa.</p>
    </div>
  </div>
</div>

 <!-- Teks "LuxeWash Auto Detail" -->
<div class="centered-text">
Kilau Sempurna, Perjalanan Luar Biasa
</div>


<!-- Latar Belakang Biru di Bawah Konten dengan Teks dan Gambar -->
<div class="about-background">
  <div class="about-text">
    <p>Selamat datang di LuxeWash Auto Detail, tempat di mana mobil Anda mendapatkan perawatan terbaik dengan layanan cuci mobil profesional yang berkomitmen untuk memberikan hasil sempurna menggunakan teknologi terkini dan produk ramah lingkungan. Kami memahami bahwa mobil Anda adalah cerminan gaya hidup dan kebanggaan Anda, sehingga kami menawarkan berbagai paket layanan, mulai dari cuci eksterior yang cepat hingga detailing menyeluruh, dengan fokus pada detail dan kepuasan pelanggan, memastikan setiap kendaraan meninggalkan kilauan yang luar biasa.</p>
    <p>LuxeWash Auto Detail berdiri sejak tahun 2014, dengan visi untuk menjadi penyedia layanan cuci mobil terbaik di kota ini. Dimulai dari sebuah lokasi kecil, kami telah berkembang pesat berkat dedikasi kami terhadap kualitas dan kepuasan pelanggan.</p>
    <!-- Tombol Baca Selengkapnya -->
    <a href="#" class="read-more-btn">Baca Selengkapnya</a>
  </div>


  <!-- Gambar di sebelah teks -->
  <div class="about-image">
    <img src="/upload/fotocar.jpg" alt="Gambar tentang LuxeWash">
  </div>
</div>

<!-- Kotak background biru -->
<div class="blue-background"></div>



    <!-- Footer -->
    <div class="footer">
      <p class="footer-text">&copy; 2024 LuxeWash Auto Detail. All Rights Reserved.</p>
    </div>
  </div>
</body>
</html>
