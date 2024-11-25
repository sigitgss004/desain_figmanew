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
  margin: 200px auto;
  display: flex;
  flex-direction: column; /* Default: gambar di atas teks */
  padding: 40px 20px;
  align-items: center;
  background-color: #4D869C;
  border-radius: 25px;
}

/* Menyesuaikan gambar profile */
.profile-img {
  width: 400px;
  height: 400px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 20px; /* Memberikan jarak antara gambar dan teks */
}

/* Responsif untuk tablet (lebar layar 768px ke bawah) */
@media (max-width: 768px) {
  .about-section {
    flex-direction: column; /* Gambar di atas teks pada tablet */
  }

  .profile-img {
    width: 300px;
    height: 300px;
  }

  .about-text {
    width: 80%; /* Lebar teks lebih besar untuk tablet */
    font-size: 16px; /* Mengurangi ukuran font untuk tablet */
    padding-right: 10px; /* Menyesuaikan padding */
    color: white; /* Menambahkan warna putih pada teks */

  }
}

/* Responsif untuk ponsel (lebar layar 480px ke bawah) */
@media (max-width: 480px) {
  .about-section {
    flex-direction: column; /* Gambar di atas teks pada ponsel */
  }

  .profile-img {
    width: 200px;
    height: 200px;
  }

  .about-text {
    width: 90%; /* Lebar teks lebih besar untuk ponsel */
    font-size: 14px; /* Ukuran font lebih kecil */
    padding-right: 0; /* Menghapus padding kanan */
    color: white; /* Menambahkan warna putih pada teks */

  }
}

/* Untuk laptop dan perangkat besar lainnya (lebih dari 768px) */
@media (min-width: 769px) {
  .about-section {
    flex-direction: row; /* Gambar di samping teks pada laptop dan perangkat besar */
    align-items: center; /* Menjaga posisi gambar dan teks sejajar secara vertikal */
    justify-content: space-between; /* Memberikan jarak antar gambar dan teks */
  }

  .profile-img {
    margin-bottom: 0; /* Menghapus margin bawah pada laptop */
    margin-right: 20px; /* Memberikan jarak antara gambar dan teks */
  }

  .about-text {
    width: 50%; /* Mengatur lebar teks lebih besar di layar besar */
    font-size: 19px; /* Ukuran font normal */
    color: white; /* Menambahkan warna putih pada teks */

  }

  /* Responsif untuk perangkat dengan lebar 320px atau lebih kecil */
@media (max-width: 320px) {
  .about-section {
    flex-direction: column; /* Gambar di atas teks pada layar 320px */
  }

  .profile-img {
    width: 320px; /* Gambar akan lebar penuh pada layar 320px */
    height: 320px; /* Menjaga aspek rasio gambar */
  }

  .about-text {
    width: 100%; /* Lebar teks hampir penuh pada layar 320px */
    font-size: 50px; /* Font lebih kecil untuk perangkat sangat kecil */
    padding-right: 0; /* Menghapus padding kanan */
  }
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