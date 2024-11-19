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
.logo-container {
  display: flex; /* Menggunakan flexbox */
  justify-content: flex-end; /* Mengatur konten ke kanan */
  align-items: center; /* Menyelaraskan secara vertikal */
  width: 100%; /* Lebar penuh */
  padding: 0 20px; /* Padding untuk jarak */
  box-sizing: border-box; /* Memastikan padding dihitung dalam lebar */
}

.logo {
  width: 30vw; /* Default pada layar kecil */
  height: auto;
  max-width: 106px;
  margin-left: auto; /* Mendorong logo ke kanan */
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

/* Default: Tampilan Desktop */
.nav {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 20px; /* Jarak antar item menu */
}

.nav-item {
    color: white;
    font-size: 16px;
    font-weight: 800;
    margin: 0; /* Tidak ada jarak antar item menu */
    padding: 1px 1px;
    cursor: pointer;
    position: relative; /* Untuk efek garis bawah animatif */
    transition: color 0.3s ease, background-color 0.3s ease;
    text-decoration: none; /* Menghilangkan garis bawah */
}

/* Efek hover */
.nav-item:hover {
    background-color: #3B6A85; /* Warna latar belakang saat hover */
    color: #FFF; /* Ubah warna teks */
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

/* Efek hover: garis bawah */
.nav-item:hover::after {
    width: 100%;
}

/* Toggler: Desktop (disembunyikan) */
.nav-toggler {
    display: none;
}

/* Navigasi: Layar kecil */
@media (max-width: 768px) {
    .nav {
        display: none; /* Sembunyikan menu utama */
        flex-direction: column; /* Menu akan vertikal saat diaktifkan */
        gap: 0;
        background-color: #4D869C; /* Warna latar belakang */
        position: absolute;
        top: 0;
        left: 0;
        width: 250px;
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        padding: 90px 10px; /* Padding dalam menu */
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        border-radius: 0 10px 10px 0;
        transition: transform 0.3s ease-in-out; /* Animasi buka/tutup */
    }

    .nav.active {
    display: flex; /* Tampilkan menu saat aktif */
    gap: 15px; /* Tambahkan jarak antar item menu */
    width: 30%; /* Kurangi lebar background */
    height: 200px; /* Kurangi tinggi background */
}


    .nav-toggler {
        display: block; /* Tampilkan toggler */
        background-color: transparent;
        border: none;
        font-size: 24px;
        color: white;
        cursor: pointer;
        position: absolute;
        top: 20px;
        left: 20px; /* Posisi toggler */
        z-index: 1001; /* Tetap di atas elemen lain */
    }
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
    font-size: 28px; /* Mengurangi ukuran font */
    margin-top: 50px; /* Mengurangi margin atas */
    margin-bottom: 50px; /* Mengurangi margin bawah */
  }
}

/* Mobile */
@media (max-width: 480px) {
  .article-title {
    font-size: 22px; /* Mengurangi ukuran font lebih lanjut */
    margin-top: 30px; /* Mengurangi margin atas */
    margin-bottom: 30px; /* Mengurangi margin bawah */
    line-height: 1.3; /* Menyesuaikan line-height untuk keterbacaan */
  }
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
    <button class="nav-toggler">☰</button>
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
      <div class="breadcrumb">Beranda / Produk</div>
      <div class="article-label">Produk Kami</div>
    </div>

    <!-- New Article Section Layout -->
    <div class="article-title">LuxeWash Auto Detail</div>
    <div class="article-section">
      <div class="profile-img-wrapper">
        <img class="profile-img" src="/upload/<?=$produk->img_produk?>" alt="Profile Image" />
      </div>
      <div class="profile-info">
      <h2 style="font-size: 30px; font-weight: 700; margin-left: 50px; margin-top: -10px;"><?=$produk->title_produk?></h2>
    <p class="article-content">
    <?=$produk->deskripsi_produk?></div>
        </p>
      </div>
    </div>
  <div class="footer">
      <div class="footer-text">Copyright ©2024. Design by Sigit Design</div>
    </div>
  </div>
</body>
<script>// Tunggu DOM selesai dimuat
document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.querySelector('.nav-toggler');
    const navMenu = document.querySelector('.nav');

    // Event klik pada toggler
    toggleButton.addEventListener('click', function () {
        navMenu.classList.toggle('active'); // Tampilkan atau sembunyikan menu

        // Ubah ikon toggler (contoh dari ☰ ke ✕)
        if (navMenu.classList.contains('active')) {
            toggleButton.innerHTML = '✕';
        } else {
            toggleButton.innerHTML = '☰';
        }
    });

    // Menutup menu saat item diklik (opsional)
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('click', function () {
            navMenu.classList.remove('active'); // Sembunyikan menu
            toggleButton.innerHTML = '☰'; // Reset ikon toggler
        });
    });
});
function toggleNav() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('active');
}</script>
</html>
          