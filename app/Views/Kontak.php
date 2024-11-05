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
  width: 30vw; /* default pada layar kecil */
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

/* Tablet */
@media (max-width: 768px) {
  .overlay-img {
    max-height: 300px; /* Mengurangi tinggi gambar */
  }
}

/* Mobile */
@media (max-width: 480px) {
  .overlay-img {
    max-height: 200px; /* Mengurangi tinggi gambar lebih lanjut */
  }
  
  .overlay-dark {
    background: rgba(0, 0, 0, 0.4); /* Mengurangi opacity agar teks lebih terbaca di layar kecil */
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
    font-size: 18px; /* Mengurangi ukuran font */
    padding: 8px; /* Mengurangi padding */
    letter-spacing: 1.5px; /* Menyesuaikan spasi antar huruf */
  }
}

/* Mobile */
@media (max-width: 480px) {
  .breadcrumb {
    font-size: 16px; /* Mengurangi ukuran font lebih lanjut */
    padding: 6px; /* Mengurangi padding lebih lanjut */
    letter-spacing: 1px; /* Mengurangi spasi antar huruf */
    top: 85%; /* Menyesuaikan posisi agar terlihat proporsional pada layar kecil */
  }
}

    .content {
            text-align: center;
            padding: 20px;
        }
        .content h1 {
    color: #003d4d; /* Warna asli, bisa diganti sesuai keinginan */
    font-size: 36px; /* Ukuran default */
    margin-bottom: 20px;
}

/* Untuk perangkat yang lebih kecil seperti tablet */
@media (max-width: 768px) {
    .content h1 {
        font-size: 28px; /* Ukuran yang lebih kecil untuk tablet */
        margin-bottom: 15px; /* Menyesuaikan margin */
    }
}

/* Untuk perangkat yang sangat kecil seperti ponsel */
@media (max-width: 480px) {
    .content h1 {
        font-size: 24px; /* Ukuran yang lebih kecil untuk ponsel */
        margin-bottom: 10px; /* Menyesuaikan margin */
    }
}

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }
        .contact-info, .map {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
        }
        .contact-info {
    width: 40%; /* Ukuran default */
    background-color: #e0f7fa;
    text-align: center; /* Menyusun teks di tengah */
    padding: 20px; /* Menambahkan padding untuk tampilan lebih baik */
}

/* Untuk perangkat yang lebih kecil seperti tablet */
@media (max-width: 768px) {
    .contact-info {
        width: 60%; /* Menambah lebar agar elemen tidak terlalu kecil pada layar tablet */
        text-align: left; /* Ubah alignment text jadi kiri untuk tablet */
    }
}

/* Untuk perangkat yang sangat kecil seperti ponsel */
@media (max-width: 480px) {
    .contact-info {
        width: 100%; /* Lebar penuh untuk ponsel */
        text-align: left; /* Menjaga alignment tetap kiri pada layar kecil */
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
    font-size: 24px; /* Mengurangi ukuran font */
    top: 15px; /* Menurunkan jarak dari atas */
    left: 15px; /* Menurunkan jarak dari kiri */
  }
}

/* Mobile */
@media (max-width: 480px) {
  .article-label {
    font-size: 18px; /* Mengurangi ukuran font lebih lanjut */
    top: 10px; /* Menurunkan jarak dari atas */
    left: 10px; /* Menurunkan jarak dari kiri */
    letter-spacing: 0.5px; /* Mengurangi spasi antar huruf */
  }
}

.contact-info ul {
    list-style-type: none;
    padding: 0;
    text-align: center; /* Menambahkan text-align: left */
}

.contact-info h2, .contact-info h3, .contact-info p {
    text-align: center; /* Menambahkan text-align: left */
}

.map {
    width: 50%; /* Lebar default */
    height: 530px; /* Tinggi default */
    display: flex;
    flex-direction: column;
}

/* Untuk perangkat yang lebih kecil seperti tablet */
@media (max-width: 768px) {
    .map {
        width: 80%; /* Lebar lebih besar agar terlihat jelas di tablet */
        height: 400px; /* Tinggi lebih kecil untuk tablet */
    }
}

/* Untuk perangkat yang sangat kecil seperti ponsel */
@media (max-width: 480px) {
    .map {
        width: 100%; /* Lebar penuh untuk ponsel */
        height: 300px; /* Tinggi lebih kecil untuk ponsel */
    }
}

        .map iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 10px;
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
      <div class="breadcrumb">Kontak / Artikel</div>
      <div class="article-label">Kontak Kami</div>
    </div>

    <div class="content">
        <h1>KONTAK KAMI</h1>
        <div class="contact-container">
            <div class="contact-info">
                <h2>Kontak Kami</h2>
                <p>Kami selalu siap membantu Anda! Untuk informasi lebih lanjut mengenai layanan kami, jadwal, atau jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi kami melalui berbagai saluran komunikasi di bawah ini.</p>
                <h3>Informasi Kontak:</h3>
                <ul>
                    <li>Alamat: Jl. Raya Bersih No. 123, Jakarta, Indonesia</li>
                    <li>Telepon: (021) 1234-5678</li>
                    <li>Email: info@LuxeWashAutoDetail.com</li>
                    <li>Jam Operasional:
                        <ul>
                            <li>Senin - Jumat: 08.00 - 18.00</li>
                            <li>Sabtu: 08.00 - 16.00</li>
                            <li>Minggu: Tutup</li>
                        </ul>
                    </li>
                </ul>
                <h3>Formulir Kontak:</h3>
                <p>Jika Anda ingin mengirimkan pertanyaan atau permintaan secara online, silakan isi formulir di bawah ini, dan kami akan merespons secepatnya:</p>
                <ul>
                    <li>Nama: [input field]</li>
                    <li>Email: [input field]</li>
                    <li>Telepon: [input field]</li>
                    <li>Pesan: [textarea for message]</li>
                </ul>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.5695500731!2d112.545083!3d-7.977778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b1b1b1b1b1%3A0x1b1b1b1b1b1b1b1b!2sMalang%2C%20East%20Java%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1633072800000!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
  <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
</html>
          