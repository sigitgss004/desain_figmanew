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

    /* Default layout for desktop */
    .article-section {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      margin: 70px 0;
      padding: 20px;
      background-color: #FFFFFF;
      border-radius: 12px;
      margin-top: 20px;
      margin-bottom: 100px;
      padding-right: 20px;
      flex-direction: row;
      /* Default layout: horizontal */
    }

    /* Responsive design for tablets (768px and below) */
    @media (max-width: 768px) {
      .article-section {
        flex-direction: column;
        /* Change layout to vertical */
        align-items: center;
        margin: 50px 0;
        /* Adjust margins */
        padding: 15px;
      }

      .article-description {
        text-align: center;
        /* Center-align text horizontally */
        margin: 20px 0;
        /* Add spacing above and below text */
        font-size: 16px;
        /* Adjust font size */
        line-height: 24px;
        /* Adjust line height for readability */
      }
    }

    /* Responsive design for mobile devices (480px and below) */
    @media (max-width: 480px) {
      .article-section {
        margin: 30px 10px;
        /* Reduce margins */
        padding: 10px;
        border-radius: 8px;
        /* Reduce border radius */
      }

      .article-description {
        text-align: center;
        /* Ensure text remains centered */
        font-size: 14px;
        /* Smaller font for small screens */
        line-height: 20px;
        /* Adjust line height */
        margin: 15px 0;
        /* Reduce margins for tighter spacing */
      }
    }

    /* Responsive design for very small smartphones (320px and below) */
    @media (max-width: 320px) {
      .article-section {
        margin: 20px 5px;
        padding: 5px;
        border-radius: 5px;
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .article-description {
        text-align: center;
        /* Center-align text */
        font-size: 12px;
        /* Even smaller font for readability */
        line-height: 18px;
        margin: 10px 0;
        /* Minimal spacing */
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

    /* Default untuk Desktop/Laptop */
    .profile-img-wrapper {
      width: 500px;
      height: 500px;
      background-color: #4D869C;
      border-radius: 0px 100px 0px 100px;
      /* Sudut kiri atas dan kanan bawah melengkung */
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 20px;
      margin-left: 100px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Tablet Landscape (max-width: 1200px) */
    @media (max-width: 1200px) {
      .profile-img-wrapper {
        width: 400px;
        /* Kurangi ukuran untuk tablet */
        height: 400px;
        margin-left: 50px;
        /* Kurangi margin kiri */
        margin-right: 15px;
        /* Kurangi margin kanan */
      }
    }

    /* Tablet Portrait (max-width: 992px) */
    @media (max-width: 992px) {
      .profile-img-wrapper {
        width: 300px;
        /* Lebih kecil untuk layar tablet portrait */
        height: 300px;
        margin-left: 30px;
        margin-right: 10px;
      }
    }

    /* Smartphone (max-width: 768px) */
    @media (max-width: 768px) {
      .profile-img-wrapper {
        width: 250px;
        /* Ukuran lebih kecil untuk smartphone */
        height: 250px;
        margin-left: 20px;
        /* Margin lebih kecil */
        margin-right: 0;
        /* Hilangkan margin kanan */
        border-radius: 20px;
        /* Kurangi radius sudut */
      }
    }

    /* Smartphone Kecil (max-width: 576px) */
    @media (max-width: 576px) {
      .profile-img-wrapper {
        width: 200px;
        /* Ukuran lebih kecil untuk layar kecil */
        height: 200px;
        margin: 0 auto;
        /* Pusatkan elemen dengan margin otomatis */
        border-radius: 10px;
        /* Radius sudut kecil */
      }
    }



    /* Default untuk Desktop/Laptop */
    .profile-img {
      width: 400px;
      /* Ukuran gambar besar untuk desktop */
      height: 400px;
      object-fit: cover;
      /* Gambar akan menyesuaikan area tanpa distorsi */
      border-radius: 12px;
      /* Sudut melengkung */
    }

    /* Tablet Landscape (max-width: 1200px) */
    @media (max-width: 1200px) {
      .profile-img {
        width: 300px;
        /* Kurangi ukuran untuk tablet */
        height: 300px;
        border-radius: 10px;
        /* Kurangi radius sudut */
      }
    }

    /* Tablet Portrait (max-width: 992px) */
    @media (max-width: 992px) {
      .profile-img {
        width: 250px;
        /* Lebih kecil untuk tablet portrait */
        height: 250px;
        border-radius: 8px;
        /* Sudut melengkung lebih kecil */
      }
    }

    /* Smartphone (max-width: 768px) */
    @media (max-width: 768px) {
      .profile-img {
        width: 200px;
        /* Ukuran lebih kecil untuk smartphone */
        height: 200px;
        border-radius: 6px;
        /* Kurangi radius sudut */
      }
    }

    /* Smartphone Kecil (max-width: 576px) */
    @media (max-width: 576px) {
      .profile-img {
        width: 150px;
        /* Ukuran sangat kecil untuk layar kecil */
        height: 150px;
        border-radius: 4px;
        /* Radius minimal */
      }
    }


    /* Default for desktop */
    .profile-info {
      flex: 1;
      color: black;
      font-size: 22px;
      /* Ukuran font default */
      font-weight: 500;
      line-height: 30px;
      /* Jarak antar baris default */
      text-align: justify;
      margin-left: 10px;
      margin-right: 100px;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    /* Tablet landscape (1200px and below) */
    @media (max-width: 1200px) {
      .profile-info {
        font-size: 20px;
        /* Sedikit lebih kecil */
        line-height: 28px;
        /* Sesuaikan jarak antar baris */
        margin-right: 50px;
        /* Kurangi margin kanan */
        padding-top: 8px;
        padding-bottom: 8px;
      }
    }

    /* Tablet portrait (992px and below) */
    @media (max-width: 992px) {
      .profile-info {
        font-size: 18px;
        /* Lebih kecil */
        line-height: 26px;
        margin-right: 30px;
        /* Kurangi margin kanan lebih jauh */
        text-align: left;
        /* Ubah ke rata kiri untuk tampilan lebih alami */
      }
    }

    /* Smartphone (768px and below) */
    @media (max-width: 768px) {
      .profile-info {
        font-size: 16px;
        /* Ukuran font lebih kecil */
        line-height: 24px;
        /* Jarak antar baris lebih kecil */
        margin-left: 5px;
        /* Margin kiri lebih kecil */
        margin-right: 15px;
        /* Margin kanan lebih kecil */
        padding-top: 6px;
        padding-bottom: 6px;
      }
    }

    /* Smartphone kecil (576px and below) */
    @media (max-width: 576px) {
      .profile-info {
        font-size: 14px;
        /* Ukuran font lebih kecil */
        line-height: 22px;
        /* Jarak antar baris lebih kecil */
        margin: 5px;
        /* Kurangi margin secara keseluruhan */
        text-align: center;
        /* Teks di tengah untuk perangkat kecil */
      }
    }

    /* Smartphone sangat kecil (320px and below) */
    @media (max-width: 320px) {
      .profile-info {
        font-size: 12px;
        /* Ukuran font terkecil */
        line-height: 20px;
        /* Jarak antar baris kecil */
        margin: 5px 2px;
        /* Margin minimum */
        padding-top: 4px;
        padding-bottom: 4px;
        text-align: center;
        /* Teks tetap di tengah */
      }
    }


    /* Default untuk Desktop */
    .article-content {
      width: 100%;
      max-width: 700px;
      /* Ukuran maksimum untuk desktop */
      margin: 50px;
      /* Margin untuk memberi ruang di sekitar konten */
      color: black;
      font-size: 20px;
      /* Ukuran font lebih kecil */
      font-weight: 400;
      /* Berat font normal */
      line-height: 27px;
      /* Jarak antar baris */
      letter-spacing: 1.5px;
      /* Spasi antar huruf */
      text-align: justify;
      /* Teks diratakan */
    }

    /* Tablet Landscape (max-width: 1200px) */
    @media (max-width: 1200px) {
      .article-content {
        max-width: 600px;
        /* Lebar sedikit lebih kecil */
        margin: 40px;
        /* Margin sedikit lebih kecil */
        font-size: 18px;
        /* Ukuran font sedikit lebih kecil */
        line-height: 24px;
        /* Jarak antar baris sedikit lebih kecil */
      }
    }

    /* Tablet Portrait (max-width: 992px) */
    @media (max-width: 992px) {
      .article-content {
        max-width: 500px;
        /* Lebar lebih kecil untuk tablet portrait */
        margin: 30px;
        /* Margin sedikit lebih kecil */
        font-size: 16px;
        /* Ukuran font lebih kecil */
        line-height: 22px;
        /* Jarak antar baris lebih kecil */
        letter-spacing: 1.2px;
        /* Spasi antar huruf lebih kecil */
      }
    }

    /* Smartphone (max-width: 768px) */
    @media (max-width: 768px) {
      .article-content {
        max-width: 100%;
        /* Lebar penuh untuk layar lebih kecil */
        margin: 20px;
        /* Margin lebih kecil */
        font-size: 14px;
        /* Ukuran font lebih kecil */
        line-height: 20px;
        /* Jarak antar baris lebih kecil */
        letter-spacing: 1px;
        /* Spasi antar huruf lebih kecil */
      }
    }

    /* Smartphone Kecil (max-width: 576px) */
    @media (max-width: 576px) {
      .article-content {
        font-size: 12px;
        /* Ukuran font sangat kecil untuk smartphone kecil */
        line-height: 18px;
        /* Jarak antar baris kecil */
        letter-spacing: 0.8px;
        /* Spasi antar huruf lebih kecil */
        margin: 10px;
        /* Margin minimal */
      }
    }

    /* Smartphone Sangat Kecil (max-width: 320px) */
    @media (max-width: 320px) {
      .article-content {
        font-size: 10px;
        /* Ukuran font lebih kecil */
        line-height: 16px;
        /* Jarak antar baris lebih kecil */
        letter-spacing: 0.5px;
        /* Spasi antar huruf lebih kecil */
        margin: 5px;
        /* Margin sangat minimal */
        text-align: left;
        /* Justifikasi diubah ke kiri untuk membaca lebih mudah */
      }
    }


    .sub-title {
      text-align: center;
      color: black;
      font-size: 28px;
      /* Ukuran font lebih kecil */
      font-weight: 500;
      margin-top: 40px;
    }
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

      <img class="logo" src="<?= base_url('upload/' . $artikel->logo); ?>" alt="Logo">
      </div>

    <!-- Gambar Tepat di Bawah Navbar -->
    <div class="overlay">
      <img class="overlay-img" src="/upload/fotocar.jpg" alt="Gambar Overlay" />
      <div class="overlay-dark"></div>
      <div class="breadcrumb"><?=lang('Blog.artikel');?></div>
      <div class="article-label"><?=lang('Blog.artikelkami');?></div>
    </div>

    <!-- New Article Section Layout -->
    <div class="article-title">LuxeWash Auto Detail</div>
    <div class="article-section">
      <div class="profile-img-wrapper">
        <img class="profile-img" src="/upload/<?= $artikel->img_artikel ?>" alt="Profile Image" />
      </div>
      <div class="profile-info">
        <h2 style="font-size: 30px; font-weight: 700; margin-left: 50px; margin-top: 40px;"><?= ($lang == 'id') ? $artikel->title_artikel : $artikel->title_artikel_en; ?></h2>
        <p class="article-content"><?= ($lang == 'id') ? $artikel->deskripsi_artikel : $artikel->deskripsi_artikel_en; ?></p>
      </div>
    </div>
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