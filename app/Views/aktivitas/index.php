<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GX4c9ud6XmSKsH8tBgn+ihT5CMJ5tb63kFIs1h6TuPvf5j03ZkGJ/fdBP+yo1L6c" crossorigin="anonymous">


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
      flex-wrap: wrap;
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


    .logo-container {
      display: flex;
      /* Menggunakan flexbox */
      justify-content: flex-end;
      /* Mengatur konten ke kanan */
      align-items: center;
      /* Menyelaraskan secara vertikal */
      width: 100%;
      /* Lebar penuh */
      padding: 0 20px;
      /* Padding untuk jarak */
      box-sizing: border-box;
      /* Memastikan padding dihitung dalam lebar */
    }

    .logo {
      width: 30vw;
      /* Default pada layar kecil */
      height: auto;
      max-width: 106px;
      margin-left: auto;
      /* Mendorong logo ke kanan */
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
      gap: 20px;
      /* Jarak antar item menu */
    }

    .nav-item {
      color: white;
      font-size: 16px;
      font-weight: 800;
      margin: 0;
      /* Tidak ada jarak antar item menu */
      padding: 1px 1px;
      cursor: pointer;
      position: relative;
      /* Untuk efek garis bawah animatif */
      transition: color 0.3s ease, background-color 0.3s ease;
      text-decoration: none;
      /* Menghilangkan garis bawah */
    }

    /* Efek hover */
    .nav-item:hover {
      background-color: #3B6A85;
      /* Warna latar belakang saat hover */
      color: #FFF;
      /* Ubah warna teks */
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
        display: none;
        /* Sembunyikan menu utama */
        flex-direction: column;
        /* Menu akan vertikal saat diaktifkan */
        gap: 0;
        background-color: #4D869C;
        /* Warna latar belakang */
        position: absolute;
        top: 0;
        left: 0;
        width: 250px;
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        padding: 90px 10px;
        /* Padding dalam menu */
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        border-radius: 0 10px 10px 0;
        transition: transform 0.3s ease-in-out;
        /* Animasi buka/tutup */
      }

      .nav.active {
        display: flex;
        /* Tampilkan menu saat aktif */
        gap: 15px;
        /* Tambahkan jarak antar item menu */
        width: 30%;
        /* Kurangi lebar background */
        height: 200px;
        /* Kurangi tinggi background */
      }


      .nav-toggler {
        display: block;
        /* Tampilkan toggler */
        background-color: transparent;
        border: none;
        font-size: 24px;
        color: white;
        cursor: pointer;
        position: absolute;
        top: 20px;
        left: 20px;
        /* Posisi toggler */
        z-index: 1001;
        /* Tetap di atas elemen lain */
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

    /* Media Queries untuk layar besar (1024px) */
    @media (max-width: 1024px) {
      .read-more-btn {
        padding: 0.6rem 1.2rem;
        /* Sedikit menambah padding */
        font-size: 1.1rem;
        /* Ukuran font lebih besar */
      }
    }

    /* Media Queries untuk layar tablet (768px) */
    @media (max-width: 768px) {
      .read-more-btn {
        padding: 0.75rem 1.5rem;
        /* Tambahkan padding untuk layar lebih kecil */
        font-size: 1rem;
        /* Ukuran font tetap proporsional */
        margin: 10px auto;
        /* Memastikan tombol tetap rata tengah */
      }
    }

    /* Media Queries untuk layar 425px */
    @media (max-width: 425px) {
      .read-more-btn {
        width: 60%;
        /* Tombol memenuhi sebagian lebar kontainer */
        padding: 0.6rem 1.2rem;
        /* Kurangi padding sedikit */
        font-size: 0.9rem;
        /* Mengurangi ukuran font */
        margin: 0 auto;
        /* Rata tengah dengan margin auto */
        display: block;
        /* Agar tombol tampil sebagai elemen blok */
      }
    }

    /* Media Queries untuk layar 375px */
    @media (max-width: 375px) {
      .read-more-btn {
        width: 70%;
        /* Tombol lebih besar untuk layar lebih kecil */
        padding: 0.5rem 1rem;
        /* Kurangi padding sedikit */
        font-size: 0.85rem;
        /* Ukuran font lebih kecil */
        margin: 0 auto;
        /* Rata tengah */
      }
    }

    /* Media Queries untuk layar 320px */
    @media (max-width: 320px) {
      .read-more-btn {
        width: 60%;
        /* Tombol memenuhi sebagian besar lebar kontainer */
        padding: 0.4rem;
        /* Menyesuaikan padding untuk ukuran lebih kecil */
        font-size: 0.75rem;
        /* Ukuran font lebih kecil */
        margin: 0 auto;
        /* Rata tengah */
        display: block;
        /* Pastikan tombol tampil sebagai elemen blok */
      }
    }



    /* Gambar artikel */
    .article-img {
      width: 80px;
      height: 80px;
    }




    .profile-container {
      display: flex;
      /* Aktifkan Flexbox */
      justify-content: center;
      /* Pusatkan secara horizontal */
      align-items: center;
      /* Pusatkan secara vertikal */
      flex-direction: column;
      /* Pastikan gambar dan konten di bawahnya vertikal */
      padding: 10px;
      /* Tambahkan ruang di sekitar */
      text-align: center;
      /* Teks di dalam rata tengah */
    }

    /* Gaya untuk gambar */
    .profile-img {
      width: 150px;
      /* Ukuran default untuk desktop */
      height: 150px;
      object-fit: cover;
      /* Pastikan gambar sesuai rasio */
      border-radius: 12px;
      margin: 0 auto;
      /* Pusatkan gambar dalam container */
    }

    /* Tablet */
    @media (max-width: 768px) {
      .profile-img {
        width: 120px;
        height: 120px;
      }
    }

    /* Mobile (425px) */
    @media (max-width: 425px) {
      .profile-container {
        padding: 5px;
        /* Kurangi padding untuk layar kecil */
      }

      .profile-img {
        width: 100px;
        /* Ukuran lebih kecil */
        height: 100px;
        margin: 0 auto;
        /* Pusatkan gambar */
      }
    }

    /* Very Small Mobile (320px) */
    @media (max-width: 320px) {
      .profile-container {
        padding: 5px;
        /* Pastikan ada ruang di sekitar */
      }

      .profile-img {
        width: 80px;
        /* Ukuran lebih kecil */
        height: 80px;
        margin: 0 auto;
        /* Tetap rata tengah */
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

</style>

<!-- start css lang -->
<style>
  /* Wrapper posisi di pojok kanan bawah */
  .floating-language {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    z-index: 1000;
  }

  /* Tombol utama (Translate) */
  .main-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ffffff;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .main-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
  }

  /* Pilihan bahasa (ID dan EN) */
  .language-options {
    display: none;
    /* Sembunyikan secara default */
    flex-direction: column;
    gap: 10px;
    margin-bottom: 10px;
    /* Jarak dari tombol utama */
  }

  .language-item {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background-color: #ffffff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .language-item:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
  }

  .flag-icon {
    width: 24px;
    height: auto;
  }
</style>
<!-- end css lang -->

</head>

<body>

<?php
  // Ambil bahasa yang disimpan di session
  $lang = session()->get('lang') ?? 'id'; // Default ke 'en' jika tidak ada di session

  $current_url = uri_string();

  // Ambil query string (misalnya ?keyword=sukses)
  $query_string = $_SERVER['QUERY_STRING']; // Mengambil query string dari URL

  // Simpan segmen bahasa saat ini
  $lang_segment = substr($current_url, 0, strpos($current_url, '/') + 1); // Menyimpan 'id/' atau 'en/'

  // Definisikan tautan untuk setiap halaman berdasarkan bahasa
  $homeLink = ($lang_segment === 'en/') ? '/' : '/';
  $belajarEksporLink = ($lang_segment === 'en/') ? 'export-learning' : 'belajar-ekspor';
  $pendaftaranLink = ($lang_segment === 'en/') ? 'registration' : 'pendaftaran';
  $videoTutorialLink = ($lang_segment === 'en/') ? 'video-tutorial' : 'tutorial-video';
  $memberLink = ($lang_segment === 'en/') ? 'data-member' : 'data-member';
  $buyersLink = ($lang_segment === 'en/') ? 'data-buyers' : 'data-buyers';

  // Buat array untuk menggantikan segmen berdasarkan bahasa
  $replace_map = [
    'tentang' => 'about',
    'artikel' => 'article',
    'produk' => 'product',
    'aktivitas' => 'activity',
    'kontak' => 'contact',

  ];

  // Ambil bagian dari URL tanpa segmen bahasa
  $url_without_lang = substr($current_url, strlen($lang_segment));

  // Tentukan bahasa yang ingin digunakan
  $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

  // Gantikan setiap segmen dalam URL berdasarkan bahasa yang aktif
  foreach ($replace_map as $indonesian_segment => $english_segment) {
    if ($lang_segment === 'en/') {
      // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
      $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
    } else {
      // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
      $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
    }
  }

  // Tautan dengan bahasa yang baru
  $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

  // Gabungkan query string jika ada
  if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
  }


  // Tautan Bahasa Inggris
  $english_url = base_url($clean_url);

  // Tautan Bahasa Indonesia
  $indonesia_url = base_url($clean_url);
  ?>

  <div class="floating-language">
    <!-- Tombol Utama -->
    <button class="main-btn" id="translateBtn">
      <img src="https://upload.wikimedia.org/wikipedia/commons/<?= $lang === 'id' ? '9/9f/Flag_of_Indonesia' : 'a/a4/Flag_of_the_United_States'; ?>.svg" alt="Translate" class="flag-icon">
    </button>

    <!-- Opsi Bahasa -->
    <div class="language-options" id="languageOptions">
      <?php if ($lang === 'id'): ?>
        <!-- Hanya tampilkan opsi English jika bahasa saat ini adalah Indonesia -->
        <a href="<?= $english_url ?>" class="language-item" title="English">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English" class="flag-icon">
        </a>
      <?php elseif ($lang === 'en'): ?>
        <!-- Hanya tampilkan opsi Indonesian jika bahasa saat ini adalah English -->
        <a href="<?= $indonesia_url ?>" class="language-item" title="Bahasa Indonesia">
          <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian" class="flag-icon">
        </a>
      <?php endif; ?>
    </div>
  </div>
  <!-- end opsi -->

  <div class="container">
    <!-- Header -->
    <div class="header">
      <button class="nav-toggler">☰</button>
      <div class="nav">
        <!-- Link Beranda yang menyesuaikan dengan bahasa yang dipilih -->
        <a href="<?= ($lang == 'en') ? base_url('/en/') : base_url('/id/') ?>" class="nav-item"><?= ($lang == 'en') ? 'Home' : 'Beranda' ?></a>

        <!-- Link lainnya tetap sama seperti sebelumnya -->
        <a href="<?= ($lang == 'en') ? base_url('/en/about') : base_url('/id/tentang') ?>" class="nav-item"><?= ($lang == 'en') ? 'About' : 'Tentang' ?></a>
        <a href="<?= ($lang == 'en') ? base_url('/en/article') : base_url('/id/artikel') ?>" class="nav-item"><?= ($lang == 'en') ? 'Article' : 'Artikel' ?></a>
        <a href="<?= ($lang == 'en') ? base_url('/en/product') : base_url('/id/produk') ?>" class="nav-item"><?= ($lang == 'en') ? 'Product' : 'Produk' ?></a>
        <a href="<?= ($lang == 'en') ? base_url('/en/activity') : base_url('/id/aktivitas') ?>" class="nav-item"><?= ($lang == 'en') ? 'Activity' : 'Aktivitas' ?></a>
        <a href="<?= ($lang == 'en') ? base_url('/en/contact') : base_url('/id/kontak') ?>" class="nav-item"><?= ($lang == 'en') ? 'Contact' : 'Kontak' ?></a>
      </div>

      <img class="logo" src="<?= base_url('upload/' . $aktivitas->logo); ?>" alt="Logo">
      </div>

    <!-- Gambar Overlay -->
    <div class="overlay">
      <img class="overlay-img" src="/upload/fotocar.jpg" alt="Gambar Overlay" />
      <div class="overlay-dark"></div>
      <div class="breadcrumb"><?= lang('Blog.aktivitas'); ?></div>
      <div class="article-label"><?= lang('Blog.aktivitaskami'); ?></div>
    </div>

    <!-- Judul Artikel -->
    <div class="article-title"><?= lang('Blog.aktivitas1'); ?></div>

    <div class="main-wrapper">
      <?php
      $counter = 0;
      foreach ($aktivitasdata as $aktivitas):
        // Memulai wrapper baru setiap dua data
        if ($counter % 2 === 0): ?>
          <div class="article-wrapper">
            <div class="background-box">
            <?php endif; ?>

            <!-- Konten Artikel -->
            <div class="article-box">
              <img src="/upload/<?= $aktivitas->img_aktivitas ?>" alt="<?= $aktivitas->title_aktivitas ?>" class="article-img profile-img">
              <div class="article-text">
                <h3>
                  <?= ($lang == 'id') ? $aktivitas->title_aktivitas : $aktivitas->title_aktivitas_en ?>
                </h3>
                <p class="custom-color">
                  <?php
                  // Cek bahasa yang dipilih
                  if ($lang == 'id') {
                    $deskripsi_pendek = substr($aktivitas->deskripsi_aktivitas, 0, 200);
                    echo strlen($aktivitas->deskripsi_aktivitas) > 200 ? $deskripsi_pendek . '...' : $deskripsi_pendek;
                  } else {
                    $deskripsi_pendek_en = substr($aktivitas->deskripsi_aktivitas_en, 0, 200);
                    echo strlen($aktivitas->deskripsi_aktivitas_en) > 200 ? $deskripsi_pendek_en . '...' : $deskripsi_pendek_en;
                  }
                  ?>
                  <br>
                  <a href="<?= base_url(($lang === 'en' ? 'en/activity' : 'id/aktivitas') . '/' . ($lang === 'en' ? $aktivitas->slug_en : $aktivitas->slug));?>" class="read-more-btn"><?=lang('Blog.bacaselengkapnya');?></a>
                  </div>
            </div>

            <?php
            $counter++;
            // Menutup wrapper setelah dua data
            if ($counter % 2 === 0): ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      <!-- Menutup wrapper jika jumlah artikel ganjil (sisa satu artikel) -->
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

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-k7gTBuEJh2Vs6GOETtiFzZZPyHQoBr9I17PjA5iwBLkzvEeR/BgfZ13+7hl2tfto" crossorigin="anonymous"></script>
<script>
  // Tangkap elemen tombol dan opsi bahasa
  const translateBtn = document.getElementById('translateBtn');
  const languageOptions = document.getElementById('languageOptions');

  // Tambahkan event untuk menampilkan/menyembunyikan opsi bahasa
  translateBtn.addEventListener('click', () => {
    // Toggle kelas untuk menampilkan/menyembunyikan opsi
    languageOptions.style.display = languageOptions.style.display === 'flex' ? 'none' : 'flex';
  });
</script>
<!-- end copy js -->

<script>
  // Tunggu DOM selesai dimuat
  document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.nav-toggler');
    const navMenu = document.querySelector('.nav');

    // Event klik pada toggler
    toggleButton.addEventListener('click', function() {
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
      item.addEventListener('click', function() {
        navMenu.classList.remove('active'); // Sembunyikan menu
        toggleButton.innerHTML = '☰'; // Reset ikon toggler
      });
    });
  });

  function toggleNav() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('active');
  }
</script>

</html>