<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Wash Highlight</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GX4c9ud6XmSKsH8tBgn+ihT5CMJ5tb63kFIs1h6TuPvf5j03ZkGJ/fdBP+yo1L6c" crossorigin="anonymous">


  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Inter, sans-serif;
      background-color: #ffffff;
      /* Background for the entire body */
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

    /* Tablet */
    @media (max-width: 768px) {
      .footer {
        padding: 40px 10px;
        /* Kurangi padding di tablet */
        margin-top: 80px;
        /* Kurangi margin di tablet */
      }
    }

    /* Mobile landscape */
    @media (max-width: 576px) {
      .footer {
        padding: 30px 5px;
        /* Kurangi padding lebih jauh untuk mobile landscape */
        margin-top: 60px;
        /* Kurangi margin di mobile landscape */
        flex-direction: column;
        /* Stack content vertically pada layar kecil */
      }
    }

    /* Mobile portrait */
    @media (max-width: 320px) {
      .footer {
        padding: 20px 5px;
        /* Padding minimum untuk mobile portrait */
        margin-top: 40px;
        /* Margin lebih kecil untuk mobile portrait */
        font-size: 14px;
        /* Sesuaikan font agar tidak terlalu besar */
      }
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



    



    



    .text-box {
      color: #000;
      padding: 20px;
      /* Padding default untuk layar besar */
      background-color: rgba(255, 255, 255, 0.8);
      /* Latar semi-transparan untuk keterbacaan */
      border-radius: 10px;
      /* Sudut membulat untuk estetika */
      font-size: 16px;
      /* Ukuran font default */
    }

    /* Responsif untuk layar tablet (max-width: 768px) */
    @media (max-width: 768px) {
      .text-box {
        padding: 15px;
        /* Kurangi padding untuk layar tablet */
        font-size: 14px;
        /* Ukuran font sedikit lebih kecil untuk tablet */
        border-radius: 8px;
        /* Kurangi border-radius agar proporsional di layar kecil */
      }
    }

    /* Responsif untuk layar ponsel besar (max-width: 576px) */
    @media (max-width: 576px) {
      .text-box {
        padding: 10px;
        /* Kurangi padding lebih lanjut untuk ponsel besar */
        font-size: 12px;
        /* Ukuran font lebih kecil agar mudah dibaca di layar kecil */
        border-radius: 6px;
        /* Border-radius lebih kecil agar sesuai */
      }
    }

    /* Responsif untuk layar ponsel kecil (max-width: 320px) */
    @media (max-width: 320px) {
      .text-box {
        padding: 8px;
        /* Padding minimum untuk layar kecil */
        font-size: 10px;
        /* Ukuran font minimum agar tetap terbaca */
        border-radius: 4px;
        /* Border-radius minimal untuk tampilan yang rapi */
      }
    }


    .centered-text {
      width: 100%;
      text-align: center;
      font-size: 50px;
      font-weight: bold;
      margin-top: 250px;
      /* Jarak atas */
      margin-bottom: 100px;
      /* Margin bawah */
      color: #000000;
      position: relative;
      z-index: 2;
    }

    @media (max-width: 1200px) {
      .centered-text {
        font-size: 60px;
        margin-top: 200px;
        margin-bottom: 80px;
      }
    }

    @media (max-width: 992px) {
      .centered-text {
        font-size: 45px;
        margin-top: 150px;
        margin-bottom: 60px;
      }
    }

    @media (max-width: 768px) {
      .centered-text {
        font-size: 30px;
        margin-top: 100px;
        margin-bottom: 50px;
      }
    }

    @media (max-width: 576px) {
      .centered-text {
        font-size: 25px;
        margin-top: 80px;
        margin-bottom: 40px;
      }
    }



    .text-overlay {
      position: absolute;
      top: 60%;
      right: 150px;
      /* Default jarak dari tepi kanan */
      transform: translateY(-50%);
      text-align: right;
      color: #000;
      z-index: 2;
    }

    /* Responsif untuk tablet (max-width: 768px) */
    @media (max-width: 768px) {
      .text-overlay {
        right: 50px;
        /* Dekatkan teks ke tengah untuk tablet */
        font-size: 14px;
        /* Ukuran font lebih kecil untuk layar tablet */
        top: 50%;
        /* Sesuaikan posisi vertikal */
      }
    }

    /* Responsif untuk layar ponsel besar (max-width: 576px) */
    @media (max-width: 576px) {
      .text-overlay {
        right: 20px;
        /* Lebih dekat ke tepi pada layar kecil */
        font-size: 12px;
        /* Ukuran font lebih kecil untuk ponsel besar */
        text-align: center;
        /* Center text alignment for better readability */
        top: 55%;
        /* Adjust vertical position */
        width: 80%;
        /* Control width to avoid overflow */
      }
    }

    /* Responsif untuk layar ponsel kecil (max-width: 320px) */
    @media (max-width: 320px) {
      .text-overlay {
        right: 10px;
        /* Paling dekat ke tepi untuk layar sangat kecil */
        font-size: 10px;
        /* Ukuran font minimum untuk keterbacaan */
        top: 50%;
        /* Pusatkan posisi vertikal */
        text-align: center;
        /* Teks rata tengah untuk tampilan lebih rapi */
        width: 90%;
        /* Lebar hampir penuh untuk keterbacaan */
      }
    }



/* Default Style (untuk layar besar) */
.title-highlight {
  font-size: 100px;
  font-weight: bold;
  margin: 10px;
  color: #000000;
  word-spacing: 0px;
  position: relative;
  top: 50px;
}

.description {
  text-align: right; /* Tetap rata kanan */
  max-width: 500px;
  color: #000000;
  margin-left: auto; /* Gunakan auto untuk menjaga posisi */
  margin-right: 50px; /* Tetap beri jarak ke kanan */
}



    






    .title-carwash {
      font-size: 100px;
      /* Ukuran default untuk layar besar */
      font-weight: bold;
      margin: 10px;
      color: #000;
      word-spacing: 0px;
      position: relative;
      top: 30px;
      /* Geser teks sedikit ke bawah */
    }

    


    .description {
      font-size: 20px;
      /* Ukuran font default untuk layar besar */
      font-weight: normal;
      margin: 10px 0;
      color: #000;
      word-spacing: 30px;
      /* Spasi kata default */
      position: relative;
      top: 40px;
      /* Geser teks ke bawah */
      left: 0px;
      /* Geser teks ke kiri */
    }

    



    .text-box-about {
      width: 50%;
      /* Lebar 50% untuk layar besar */
      padding: 30px;
      background-color: #BFE1F2;
      /* Warna latar belakang */
      border-radius: 20px 0 0 20px;
    }

    /* Responsif untuk layar desktop kecil (max-width: 1200px) */
    @media (max-width: 1200px) {
      .text-box-about {
        width: 60%;
        /* Lebar sedikit lebih besar di layar desktop kecil */
        padding: 25px;
        /* Sesuaikan padding */
      }

      .text-box-about h2 {
        font-size: 1.4rem;
        /* Ukuran font h2 sedikit lebih kecil */
      }

      .text-box-about h1 {
        font-size: 1.8rem;
        /* Ukuran font h1 sedikit lebih kecil */
      }

      .text-box-about p {
        font-size: 0.95rem;
        /* Ukuran font paragraf sedikit lebih kecil */
      }
    }

    /* Responsif untuk tablet (max-width: 992px) */
    @media (max-width: 992px) {
      .text-box-about {
        width: 70%;
        /* Lebar lebih besar untuk tablet */
        padding: 20px;
        /* Padding lebih kecil */
      }

      .text-box-about h2 {
        font-size: 1.3rem;
        /* Ukuran font h2 lebih kecil untuk tablet */
      }

      .text-box-about h1 {
        font-size: 1.6rem;
        /* Ukuran font h1 lebih kecil */
      }

      .text-box-about p {
        font-size: 0.9rem;
        /* Ukuran font lebih kecil */
      }
    }

    /* Responsif untuk layar tablet kecil dan ponsel besar (max-width: 768px) */
    @media (max-width: 768px) {
      .text-box-about {
        width: 80%;
        /* Lebar lebih besar untuk tablet kecil dan ponsel besar */
        padding: 15px;
        /* Padding lebih kecil */
      }

      .text-box-about h2 {
        font-size: 1.2rem;
        /* Ukuran font h2 lebih kecil */
      }

      .text-box-about h1 {
        font-size: 1.4rem;
        /* Ukuran font h1 lebih kecil */
      }

      .text-box-about p {
        font-size: 0.85rem;
        /* Ukuran font lebih kecil */
      }
    }

    /* Responsif untuk layar ponsel (max-width: 576px) */
    @media (max-width: 576px) {
      .text-box-about {
        width: 90%;
        /* Lebar hampir penuh untuk ponsel */
        padding: 10px;
        /* Padding lebih kecil */
      }

      .text-box-about h2 {
        font-size: 1.1rem;
        /* Ukuran font h2 lebih kecil */
      }

      .text-box-about h1 {
        font-size: 1.2rem;
        /* Ukuran font h1 lebih kecil */
      }

      .text-box-about p {
        font-size: 0.8rem;
        /* Ukuran font lebih kecil untuk ponsel */
      }
    }

    /* Responsif untuk layar ponsel kecil (max-width: 320px) */
    @media (max-width: 320px) {
      .text-box-about {
        width: 95%;
        /* Lebar penuh untuk ponsel kecil */
        padding: 8px;
        /* Padding minimal */
      }

      .text-box-about h2 {
        font-size: 1rem;
        /* Ukuran font h2 lebih kecil */
      }

      .text-box-about h1 {
        font-size: 1.1rem;
        /* Ukuran font h1 lebih kecil */
      }

      .text-box-about p {
        font-size: 0.75rem;
        /* Ukuran font lebih kecil untuk ponsel kecil */
      }
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
      width: 500px;
      /* Lebar tetap */
      height: 500px;
      /* Tinggi tetap */
      object-fit: cover;
      /* Memastikan gambar tetap proporsional */
      border-radius: 0 40px 40px 0;
    }

    .about-background {
      position: relative;
      /* Membuat elemen sebagai parent untuk positioning */
      width: 80%;
      margin: 20px auto;
      padding: 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Bayangan di sekitar elemen */
      text-align: center;
      /* Teks diatur agar berada di tengah */
    }

    .about-background img {
      position: absolute;
      /* Gambar diatur agar menempel di atas */
      top: 0;
      /* Posisi gambar di atas */
      left: 50%;
      /* Menempatkan gambar di tengah horizontal */
      transform: translateX(-50%);
      /* Menyesuaikan posisi tengah */
      width: 100%;
      /* Gambar responsif */
      max-width: 500px;
      /* Maksimal lebar gambar */
      height: auto;
      /* Rasio gambar tetap */
      z-index: 1;
      /* Menempatkan gambar di atas */
    }

    .about-background p {
      position: relative;
      /* Membuat teks berada di bawah gambar */
      margin-top: 300px;
      /* Memberikan jarak agar tidak bertabrakan dengan gambar */
      font-size: 1.2em;
      /* Ukuran font nyaman */
      z-index: 0;
      /* Teks berada di bawah gambar */
    }

    /* Responsif untuk perangkat kecil */
    @media screen and (max-width: 600px) {
      .about-background {
        width: 95%;
      }

      .about-background img {
        max-width: 300px;
        /* Sesuaikan ukuran gambar untuk layar kecil */
      }

      .about-background p {
        font-size: 1em;
        margin-top: 200px;
      }
    }

    /* Responsif untuk tablet */
    @media screen and (max-width: 768px) and (min-width: 601px) {
      .about-background {
        width: 90%;
      }

      .about-background img {
        max-width: 400px;
      }

      .about-background p {
        font-size: 1.1em;
        margin-top: 250px;
      }
    }



    .about-text {
      width: 50%;
      background-color: #d0ecf6;
      /* Latar belakang untuk teks */
      padding: 20px;
      border-radius: 20px 20px 20px 20px;
      box-sizing: border-box;
    }

    .about-image {
      width: 50%;
      height: 100%;
      border-radius: 0 20px 20px 0;
      overflow: hidden;
      /* Agar gambar tidak keluar dari sudut membulat */
    }

    .about-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Menjaga proporsi gambar */
    }


    .about-text {
      width: 50%;
      /* Lebar teks 50% */
      margin-right: 20px;
      /* Jarak antara teks dan gambar */
    }

    @media (max-width: 1200px) {
      .about-text {
        width: 60%;
        /* Lebar lebih besar pada layar besar */
        margin-right: 15px;
      }
    }

    @media (max-width: 992px) {
      .about-text {
        width: 70%;
        /* Lebar lebih besar pada layar tablet */
        margin-right: 10px;
      }
    }

    @media (max-width: 768px) {
      .about-text {
        width: 100%;
        /* Lebar penuh untuk layar kecil */
        margin-right: 0;
        /* Margin kanan dihapus */
        margin-bottom: 20px;
        /* Tambahkan margin bawah untuk memberi ruang di bawah teks */
      }
    }

    @media (max-width: 576px) {
      .about-text {
        width: 100%;
        /* Tetap full width untuk ponsel */
        text-align: center;
        /* Pusatkan teks pada layar kecil */
      }
    }

    .about-container {
      display: flex;
      /* Menggunakan flexbox untuk tata letak horizontal */
      align-items: center;
      /* Opsional: menyelaraskan item secara vertikal */
      justify-content: space-between;
      /* Memberi jarak antara gambar dan deskripsi */
      gap: 20px;
      /* Opsional: Jarak antar elemen */
    }

    .about-description {
      width: 50%;
      /* Lebar deskripsi 50% */
    }

    .about-image {
      width: 50%;
      /* Lebar gambar 50% */
      border-radius: 20px;
      overflow: hidden;
    }

    .about-image img {
      width: 100%;
      /* Gambar memenuhi kontainer */
      height: auto;
      /* Memastikan proporsi gambar */
      object-fit: cover;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .about-container {
        flex-direction: column;
        /* Stack elemen secara vertikal */
        text-align: center;
        /* Memusatkan teks */
      }

      .about-description,
      .about-image {
        width: 100%;
        /* Elemen penuhi lebar layar */
      }

      .about-image {
        padding: 0 10px;
        /* Tambahkan padding opsional */
      }

      .about-image img {
        width: 100%;
        border-radius: 15px;
      }
    }








      .text-box {
        padding-left: 0;
        padding: 20px;
        /* Added padding for better mobile readability */
      }



      .title-carwash {
        font-size: 36px;
        /* Ukuran font "Car Wash" untuk mobile */
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

      .text-box-about,
      .image-box-about {
        width: 100%;
        border-radius: 20px;
      }

      .image-box-about img {
        border-radius: 20px;
      }

      .read-more-btn {
        display: inline-block;
        text-decoration: none;
        background-color: #3a78b3;
        /* Warna tombol */
        color: white;
        /* Warna teks */
        padding: 12px 30px;
        /* Padding untuk ruang di dalam tombol */
        border-radius: 30px;
        /* Membuat tombol berbentuk oval */
        font-weight: bold;
        /* Menebalkan teks */
        font-size: 16px;
        /* Ukuran teks */
        margin-top: 20px;
        /* Jarak antara teks terakhir dan tombol */
        transition: background-color 0.3s ease, transform 0.3s ease;
        /* Animasi transisi */
      }

      .read-more-btn:hover {
        background-color: #2a4d69;
        /* Warna tombol saat hover */
        transform: scale(1.05);
        /* Efek zoom kecil saat hover */
      }
    

    /* Hanya tambahkan styling ini agar aman dan tidak mengganggu konten lain */
    .image-card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      /* Menyesuaikan kolom secara otomatis */
      gap: 20px;
      /* Spasi antara kartu-kartu */
      margin: 20px 0;
      /* Margin atas dan bawah, aman agar tidak terlalu mepet konten lain */
    }



    .card {
      background-color: #000000;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0, );
      overflow: hidden;
      text-align: center;
      padding: 10px;
    }

    .card img {
      max-width: 100%;
      /* Gambar responsif, tidak melebihi lebar card */
      height: auto;
    }

    .card .label {
      background-color: #B3E5FC;
      color: #000000;
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
    }



    .card.premium .label {
      background-color: #B3E5FC;
      border: 2px solid #00BFFF;
    }

    .content {
      max-width: 400px;
      color: #000000;
      text-align: left;
    }

    .content h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .content p {
      font-size: 16px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .content .button {
      background-color: #FFFFFF;
      color: #6BA3B6;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }

    /* Mengatur elemen body dan html agar tidak memiliki margin/padding */
    body,
    html {
      padding: 0;
      margin: 0;
    }

    /* Mengatur kontainer utama */
    .container {
      width: 100vw;
      /* Mengatur lebar penuh viewport */
      max-width: 100%;
      /* Pastikan tidak ada batasan maksimal */
      margin: 0;
      /* Hapus margin */
      padding: 0;
      /* Hapus padding */
    }



    .box {
      background-color: #4D869C;
      color: white;
      padding: 20px;
      width: 100%;
      /* Ubah lebar menjadi 100% untuk memastikan elemen dapat menyesuaikan */
      max-width: 1400px;
      /* Tetapkan lebar maksimal agar tetap tidak terlalu besar */
      height: auto;
      /* Sesuaikan tinggi secara otomatis */
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      margin-top: 150px;
      /* Jarak atas ditambahkan di sini */
      margin-bottom: 50px;
      /* Margin bawah, sesuaikan jika perlu */
    }

    @media (max-width: 1200px) {
      .box {
        padding: 15px;
        /* Kurangi padding untuk layar lebih kecil */
        margin-top: 120px;
        /* Sesuaikan jarak atas */
      }
    }

    @media (max-width: 992px) {
      .box {
        padding: 12px;
        /* Padding lebih kecil pada tablet */
        margin-top: 100px;
        /* Sesuaikan jarak atas */
      }
    }

    @media (max-width: 768px) {
      .box {
        padding: 10px;
        /* Padding lebih kecil pada tablet kecil */
        margin-top: 80px;
        /* Sesuaikan jarak atas */
      }
    }

    @media (max-width: 576px) {
      .box {
        padding: 8px;
        /* Padding lebih kecil pada ponsel */
        margin-top: 60px;
        /* Sesuaikan jarak atas */
        flex-direction: column;
        /* Ubah arah flex menjadi kolom pada ponsel */
        align-items: center;
        /* Posisikan item ke tengah pada ponsel */
      }
    }



/* Gaya dasar untuk grid foto */
.photo-grid {
  display: grid;
  grid-template-columns: repeat(2, 200px);
  /* 2 kolom dengan lebar 200px */
  gap: 50px;
  /* Jarak antar foto */
  margin-left: 100px;
  /* Menggeser ke kiri */
}

/* Responsif untuk layar 1200px */
@media (max-width: 1200px) {
  .photo-grid {
    grid-template-columns: repeat(2, 180px);
    /* Lebar kolom sedikit lebih kecil */
    gap: 30px;
    /* Kurangi jarak antar foto */
    margin-left: 50px;
    /* Kurangi margin kiri */
  }
}

/* Responsif untuk layar 992px */
@media (max-width: 992px) {
  .photo-grid {
    grid-template-columns: repeat(2, 150px);
    /* Lebar kolom lebih kecil untuk tablet */
    gap: 20px;
    /* Kurangi jarak antar foto */
    margin-left: 30px;
    /* Kurangi margin kiri */
  }
}

/* Responsif untuk layar 768px (tablet kecil) - 2x2 layout */
@media (max-width: 768px) {
  .photo-grid {
    grid-template-columns: repeat(2, 1fr); 
    /* 2 kolom dengan lebar yang sama pada layar tablet kecil */
    gap: 20px;
    margin-left: 0;
    /* Menghilangkan margin kiri pada layar kecil */
  }
}

/* Responsif untuk layar 576px (ponsel) */
@media (max-width: 576px) {
  .photo-grid {
    grid-template-columns: repeat(1, 100%);
    /* 1 kolom penuh pada ponsel */
    gap: 15px;
    /* Mengurangi gap */
    margin-left: 0;
    /* Menghilangkan margin kiri */
  }
}

/* Responsif untuk layar 425px (ponsel besar) */
@media (max-width: 425px) {
  .photo-grid {
    grid-template-columns: repeat(1, 100%);
    /* 1 kolom penuh pada ponsel besar */
    gap: 15px;
    /* Mengurangi gap */
    margin-left: 0;
    /* Menghilangkan margin kiri */
  }
}

/* Responsif untuk layar 375px (ponsel kecil) */
@media (max-width: 375px) {
  .photo-grid {
    grid-template-columns: repeat(1, 100%);
    /* 1 kolom penuh pada ponsel kecil */
    gap: 10px;
    /* Mengurangi gap */
    margin-left: 0;
    /* Menghilangkan margin kiri */
  }
}

/* Responsif untuk layar 320px (ponsel sangat kecil) */
@media (max-width: 320px) {
  .photo-grid {
    grid-template-columns: repeat(1, 100%);
    /* 1 kolom penuh pada ponsel sangat kecil */
    gap: 8px;
    /* Mengurangi gap lebih kecil */
    margin-left: 0;
    /* Menghilangkan margin kiri */
  }
}


    .photo-container {
      position: relative;
      width: 100%;
      height: 200px;
      /* Sesuaikan tinggi kontainer */
    }

    .photo-grid img {
      width: 100%;
      height: 200px;
      /* Tinggi tetap */
      object-fit: cover;
      border-radius: 10px;
      /* Membulatkan sudut gambar */
    }

    .photo-info-bg {
      position: absolute;
      top: 0px;
      left: 50%;
      transform: translateX(-50%);
      background-color: white;
      width: 100%;
      height: 35px;
      border-radius: 10px;
      z-index: 1;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
    }





    .photo-info {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #9EDBDB;
      color: #ffffff;
      padding: 0px 5px;
      border-radius: 5px;
      font-weight: bold;
      font-size: 16px;
      text-align: center;
      z-index: 2;
      text-transform: uppercase;
      letter-spacing: 2px;
      width: 90%;
      max-width: 100%;
    }

    @media (max-width: 1200px) {
      .photo-info {
        font-size: 14px;
        /* Ukuran font lebih kecil pada layar besar */
        padding: 5px 10px;
        /* Penambahan padding sedikit */
      }
    }

    @media (max-width: 992px) {
      .photo-info {
        font-size: 12px;
        /* Ukuran font lebih kecil pada tablet */
        padding: 5px 15px;
        /* Menambahkan padding lebih banyak */
      }
    }

    @media (max-width: 768px) {
      .photo-info {
        font-size: 12px;
        /* Ukuran font lebih kecil pada tablet kecil */
        padding: 5px 15px;
        /* Padding tetap sama */
        width: 80%;
        /* Lebar lebih kecil pada layar tablet */
      }
    }

    @media (max-width: 576px) {
      .photo-info {
        font-size: 10px;
        /* Ukuran font paling kecil untuk ponsel */
        padding: 5px 10px;
        /* Padding lebih kecil */
        width: 80%;
        /* Lebar sedikit lebih kecil */
      }
    }





    .description2 {
      text-align: left;
      max-width: 500px;
      color: white;
      margin-left: 200px;
      /* Menggeser elemen ke kanan */
      transform: translateY(-40px);
      /* Geser elemen ke atas */
    }

    @media (max-width: 1200px) {
      .description2 {
        max-width: 450px;
        /* Kurangi lebar maksimal untuk layar lebih kecil */
        margin-left: 150px;
        /* Mengurangi jarak kiri */
        transform: translateY(-30px);
        /* Menyesuaikan geser ke atas */
      }
    }

    @media (max-width: 992px) {
      .description2 {
        max-width: 400px;
        /* Lebar maksimal lebih kecil pada tablet */
        margin-left: 100px;
        /* Mengurangi margin kiri lebih lanjut */
        transform: translateY(-20px);
        /* Menyesuaikan geser ke atas */
      }
    }

    @media (max-width: 768px) {
      .description2 {
        max-width: 350px;
        /* Lebar maksimal lebih kecil pada tablet kecil */
        margin-left: 50px;
        /* Margin kiri lebih kecil */
        transform: translateY(-10px);
        /* Menyesuaikan posisi elemen */
      }
    }

    @media (max-width: 576px) {
      .description2 {
        max-width: 90%;
        /* Lebar maksimal menjadi 90% pada ponsel */
        margin-left: 10px;
        /* Margin kiri minimal */
        transform: translateY(0);
        /* Kembalikan posisi vertikal */
      }
    }



    .description2 h2 {
      font-size: 70px;
      /* Ukuran font besar untuk layar besar */
      font-weight: bold;
      color: white;
      margin-bottom: 15px;
      /* Jarak bawah judul */
    }

    @media (max-width: 1200px) {
      .description2 h2 {
        font-size: 60px;
        /* Ukuran font sedikit lebih kecil pada layar besar */
        margin-bottom: 12px;
        /* Jarak bawah sedikit lebih kecil */
      }
    }

    @media (max-width: 992px) {
      .description2 h2 {
        font-size: 50px;
        /* Ukuran font lebih kecil pada tablet */
        margin-bottom: 10px;
        /* Jarak bawah lebih kecil */
      }
    }

    @media (max-width: 768px) {
      .description2 h2 {
        font-size: 40px;
        /* Ukuran font lebih kecil pada tablet kecil */
        margin-bottom: 8px;
        /* Mengurangi jarak bawah */
      }
    }

    @media (max-width: 576px) {
      .description2 h2 {
        font-size: 30px;
        /* Ukuran font lebih kecil pada ponsel */
        margin-bottom: 5px;
        /* Jarak bawah lebih kecil */
      }
    }


    .description2 p {
      font-size: 19px;
      /* Ukuran font standar */
      line-height: 1.6;
      margin-top: 10px;
      /* Jarak atas isi deskripsi */
      margin-bottom: 20px;
      color: white;
    }

    @media (max-width: 1200px) {
      .description2 p {
        font-size: 18px;
        /* Ukuran font lebih kecil untuk layar lebih kecil */
        margin-bottom: 18px;
        /* Mengurangi margin bawah */
      }
    }

    @media (max-width: 992px) {
      .description2 p {
        font-size: 16px;
        /* Ukuran font lebih kecil untuk tablet */
        margin-bottom: 16px;
        /* Margin bawah lebih kecil */
      }
    }

    @media (max-width: 768px) {
      .description2 p {
        font-size: 14px;
        /* Ukuran font lebih kecil untuk tablet kecil */
        margin-bottom: 14px;
        /* Margin bawah lebih kecil */
      }
    }

    @media (max-width: 576px) {
      .description2 p {
        font-size: 12px;
        /* Ukuran font lebih kecil untuk ponsel */
        margin-bottom: 12px;
        /* Margin bawah lebih kecil */
      }
    }


    .read-more-btn {
      background-color: #87CEEB;
      color: white;
      padding: 15px 30px;
      /* Padding tombol */
      border: none;
      border-radius: 5px;
      font-size: 20px;
      /* Ukuran font */
      font-weight: bold;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .read-more-btn:hover {
      background-color: #000000;
      /* Efek hover */
    }

    /* Responsif */
    @media (max-width: 1200px) {
      .read-more-btn {
        font-size: 18px;
        /* Ukuran font sedikit lebih kecil pada layar besar */
        padding: 12px 25px;
        /* Padding sedikit lebih kecil */
      }
    }

    @media (max-width: 992px) {
      .read-more-btn {
        font-size: 16px;
        /* Ukuran font lebih kecil pada tablet */
        padding: 10px 20px;
        /* Padding lebih kecil */
      }
    }

    @media (max-width: 768px) {
      .read-more-btn {
        font-size: 14px;
        /* Ukuran font lebih kecil pada tablet kecil */
        padding: 8px 18px;
        /* Padding lebih kecil */
      }
    }

    @media (max-width: 576px) {
      .read-more-btn {
        font-size: 12px;
        /* Ukuran font lebih kecil pada ponsel */
        padding: 8px 15px;
        /* Padding lebih kecil */
        width: 100%;
        /* Tombol mengambil lebar penuh pada ponsel */
      }
    }


    @media (max-width: 1200px) {
      .read-more-btn {
        padding: 12px 25px;
        /* Kurangi padding */
        font-size: 18px;
        /* Kurangi font */
      }
    }

    @media (max-width: 992px) {
      .read-more-btn {
        padding: 10px 20px;
        /* Padding lebih kecil */
        font-size: 16px;
      }
    }

    @media (max-width: 768px) {
      .read-more-btn {
        padding: 8px 18px;
        /* Padding lebih kecil untuk layar kecil */
        font-size: 14px;
      }
    }

    @media (max-width: 576px) {
      .read-more-btn {
        padding: 6px 15px;
        /* Padding minimum untuk ponsel kecil */
        font-size: 12px;
        width: 50%;
      }
    }

    /* Responsif pada layar 320px */
    @media (max-width: 320px) {
      .read-more-btn {
        font-size: 10px;
        /* Ukuran font lebih kecil untuk ponsel sangat kecil */
        padding: 6px 12px;
        /* Padding lebih kecil */
        width: 50%;
        /* Tombol mengambil lebar penuh pada ponsel kecil */
      }
    }



    .box-right {
      background-color: #4D869C;
      color: white;
      padding: 20px;
      width: 1400px;
      height: auto;
      display: flex;
      justify-content: flex-start;
      align-items: flex-start;
      margin-top: 150px;
      margin-bottom: 50px;
      flex-direction: row-reverse;
      /* Gambar di kanan, deskripsi di kiri */
    }

    .photo-grid-right {
      display: grid;
      grid-template-columns: repeat(2, 200px);
      /* Lebar kolom 200px */
      gap: 50px;
      /* Jarak antar foto */
      margin-right: 100px;
      /* Menggeser ke kanan */
    }

    .photo-container-right {
      position: relative;
      width: 100%;
      height: 200px;
      /* Sesuaikan tinggi kontainer */
    }

    .photo-grid-right img {
      width: 100%;
      height: 200px;
      /* Tinggi tetap */
      object-fit: cover;
      border-radius: 10px;
      /* Membulatkan sudut gambar */
    }

    .photo-info-bg-right {
      position: absolute;
      top: 0px;
      left: 50%;
      transform: translateX(-50%);
      background-color: white;
      width: 100%;
      height: 35px;
      border-radius: 10px;
      z-index: 1;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .photo-info-right {
      position: absolute;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #9EDBDB;
      color: #ffffff;
      padding: 0px 5px;
      border-radius: 5px;
      font-weight: bold;
      font-size: 16px;
      text-align: center;
      z-index: 2;
      text-transform: uppercase;
      letter-spacing: 2px;
      width: 90%;
      max-width: 100%;
    }

    .description-right {
      text-align: left;
      /* Teks di dalam deskripsi akan rata ke kiri */
      max-width: 500px;
      color: white;
      margin-right: 200px;
      /* Menggeser elemen ke kiri */
      transform: translateY(-40px);
      /* Geser elemen ke atas */
    }

    .description-right h2 {
      font-size: 70px;
      /* Diperbesar dari 50px menjadi 70px */
      font-weight: bold;
      color: white;
      margin-bottom: 15px;
      /* Jarak bawah judul */
    }

    .description-right p {
      font-size: 19px;
      line-height: 1.6;
      margin-top: 10px;
      margin-bottom: 20px;
      color: white;
    }

    .read-more-btn-right {
      background-color: #87CEEB;
      color: white;
      padding: 15px 30px;
      /* Padding diperbesar untuk menyesuaikan ukuran tombol */
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .read-more-btn-right:hover {
      background-color: #000000;
      /* Efek hover pada tombol */
    }


    .about-section {
      margin: 20px;
    }

    .sub-heading {
      color: #2C7A92;
      font-size: 19px;
      font-weight: bold;
      letter-spacing: 0.05em;
      font-family: 'Arial', sans-serif;
      margin-left: -490px;
      margin-bottom: 5px;
      margin-top: 10px;
    }

    @media (max-width: 1200px) {
      .sub-heading {
        font-size: 18px;
        margin-left: -300px;
      }
    }

    @media (max-width: 992px) {
      .sub-heading {
        font-size: 17px;
        margin-left: -150px;
      }
    }

    @media (max-width: 768px) {
      .sub-heading {
        font-size: 16px;
        margin-left: -50px;
      }
    }

    @media (max-width: 576px) {
      .sub-heading {
        font-size: 15px;
        margin-left: 0;
        /* Hilangkan margin kiri pada layar kecil */
        text-align: center;
        /* Teks di tengah pada perangkat kecil */
      }
    }


    .main-heading {
      color: #000000;
      font-size: 36px;
      font-weight: bold;
      margin-left: -490px;
      /* Menggeser judul utama ke kiri */
      font-family: 'Arial', sans-serif;
      margin-top: 10px;
      /* Menggeser judul utama ke bawah */
      margin-bottom: 5px;
      /* Mengurangi jarak bawah judul */
    }

    @media (max-width: 1200px) {
      .main-heading {
        font-size: 32px;
        margin-left: -300px;
      }
    }

    @media (max-width: 992px) {
      .main-heading {
        font-size: 28px;
        margin-left: -150px;
      }
    }

    @media (max-width: 768px) {
      .main-heading {
        font-size: 24px;
        margin-left: -50px;
      }
    }

    @media (max-width: 576px) {
      .main-heading {
        font-size: 20px;
        margin-left: 0;
        /* Menghilangkan margin kiri pada layar kecil */
        text-align: center;
        /* Menempatkan judul di tengah pada perangkat kecil */
      }
    }
  </style>

 <style>
  /* Section utama */
.card-custom {
  padding: 20px;
  /* Ruang dalam untuk section */
  background-color: #BFE1F2;
  /* Warna latar untuk kontras */
  border-radius: 10px;
  /* Sudut membulat */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  /* Bayangan lembut */
  max-width: 800px;
  /* Lebar maksimal */
  margin: 20px auto;
  /* Tengah halaman */
  display: flex;
  /* Layout fleksibel */
  align-items: center;
  /* Selaraskan elemen vertikal */
  gap: 20px;
  /* Jarak antara gambar dan teks */
  transition: box-shadow 0.3s ease, transform 0.3s ease; /* Animasi bayangan dan transformasi */
}

.card-custom:hover {
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Efek bayangan lebih besar */
  transform: translateY(-5px); /* Efek angkat pada card saat hover */
}

.card-custom .about-text2 {
  font-size: 16px;
  /* Ukuran teks sedang */
  color: #333;
  /* Warna teks yang mudah dibaca */
  line-height: 1.6;
  /* Jarak antar baris teks */
  text-align: center;
  /* Penjajaran teks */
  flex: 1;
  /* Teks mengambil ruang yang tersisa */
}

/* Gambar dalam section */
.card-custom .about-image2 {
  width: 70%;
  /* Gambar menempati 40% dari kontainer */
  border-radius: 10px;
  object-fit: cover;
  /* Proporsi gambar tetap baik */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  /* Bayangan gambar */
  transition: transform 0.3s ease; /* Animasi untuk transformasi gambar */
}

.card-custom .about-image2:hover {
  transform: scale(1.05); /* Gambar sedikit membesar saat hover */
}

/* Deskripsi tentang */
.card-custom .about-description2 {
  font-size: 16px;
  /* Ukuran teks sedang */
  color: #333;
  /* Warna teks yang mudah dibaca */
  line-height: 1.6;
  /* Jarak antar baris teks */
  text-align: justify;
  /* Penjajaran teks */
  flex: 1;
  /* Teks mengambil ruang yang tersisa */
}

/* Tombol Baca Selengkapnya */
.card-custom .read-more-btn2 {
  display: inline-block;
  /* Tombol berbentuk blok */
  padding: 10px 15px;
  /* Ruang dalam tombol */
  margin-top: 10px;
  /* Jarak dari teks */
  font-size: 14px;
  /* Ukuran teks tombol */
  color: #fff;
  /* Warna teks putih */
  background-color: #007bff;
  /* Warna utama tombol */
  border-radius: 5px;
  /* Sudut membulat */
  text-decoration: none;
  /* Hilangkan garis bawah */
  transition: background-color 0.3s ease, transform 0.3s ease; /* Animasi transisi */
}

.card-custom .read-more-btn2:hover {
  background-color: #0056b3;
  /* Warna saat hover */
  transform: translateY(-3px); /* Efek angkat pada tombol saat hover */
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
  .card-custom {
    flex-direction: column;
    /* Elemen dalam satu kolom */
    text-align: center;
    /* Pusatkan teks */
  }

  .card-custom .about-image2 {
    width: 100%;
    /* Gambar memenuhi lebar layar */
    margin-bottom: 15px;
    /* Jarak dengan teks */
  }

  .card-custom .about-description2 {
    text-align: justify;
    /* Teks terpusat */
  }
}

.overlay-img {
  width: 100%; /* Lebar penuh untuk semua layar */
  height: auto; /* Tinggi proporsional */
  object-fit: cover; /* Hindari distorsi */
  margin: 0; /* Tidak ada margin */
  padding: 0; /* Tidak ada padding */
  max-height: 450px; /* Tinggi maksimal default untuk desktop besar */
}

/* Desktop Besar (2560px ke bawah) */
@media (max-width: 2560px) {
  .overlay-img {
    max-height: 450px; /* Tinggi gambar disesuaikan untuk desktop besar */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Desktop Standar (1440px ke bawah) */
@media (max-width: 1440px) {
  .overlay-img {
    max-height: 1000px; /* Tinggi disesuaikan untuk layar besar */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Laptop (1024px ke bawah) */
@media (max-width: 1024px) {
  .overlay-img {
    max-height: 390px; /* Tinggi lebih kecil untuk laptop */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Tablet (768px ke bawah) */
@media (max-width: 768px) {
  .overlay-img {
    max-height: 300px; /* Tinggi untuk tablet */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Mobile - 480px */
@media (max-width: 480px) {
  .overlay-img {
    max-height: 220px; /* Tinggi gambar lebih kecil */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Mobile - 425px */
@media (max-width: 425px) {
  .overlay-img {
    max-height: 200px; /* Tinggi lebih kecil untuk layar 425px */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Mobile - 375px */
@media (max-width: 375px) {
  .overlay-img {
    max-height: 180px; /* Tinggi lebih kecil untuk layar 375px */
    width: 100%; /* Lebar tetap penuh */
  }
}

/* Mobile - 320px */
@media (max-width: 320px) {
  .overlay-img {
    max-height: 160px; /* Tinggi lebih kecil untuk layar 320px */
    width: 100%; /* Lebar tetap penuh */
  }
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



 </style>
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

      <img class="logo" src="/upload/<?= $beranda->img_logo ?>" alt="LuxeWash Auto Detail Logo">
    </div>

    <div class="overlay">
      <img class="overlay-img" src="/upload/<?= $beranda->img_banner?>" alt="Gambar Overlay" />
      <div class="overlay-dark"></div>
      <!-- <div class="breadcrumb">Beranda / Tentang</div>
      <div class="article-label">Tentang Kami</div> -->
    </div>



    <!-- Teks "LuxeWash Auto Detail" -->
    <div class="centered-text">
    <?php if ($lang == 'id'): ?>
    <?= $beranda->title_2 ?>
<?php else: ?>
    <?= $beranda->title_2_en ?>
<?php endif; ?>
    </div>
    <div class="about-section">
      <h3 class="sub-heading"><?=lang('Blog.beranda2');?></h3>
      <h1 class="main-heading"><?= $tentang->title_tentang ?></h1>
    </div>

    <!-- Latar Belakang Biru di Bawah Konten dengan Teks dan Gambar -->
    <section class="card-custom">
      <div class="about-text2">
        <!-- Gambar tentang -->
        <img src="/upload/<?= htmlspecialchars($tentang->img_tentang, ENT_QUOTES, 'UTF-8'); ?>" alt="Gambar tentang LuxeWash" class="about-image2" />
        <!-- Deskripsi tentang -->
        <p class="about-description2"><?php
if ($lang === 'id') {
    echo htmlspecialchars($tentang->deskripsi_tentang, ENT_QUOTES, 'UTF-8');
} else {
    echo htmlspecialchars($tentang->deskripsi_tentang_en, ENT_QUOTES, 'UTF-8');
}
?>
</p>
        <!-- Tombol Baca Selengkapnya -->
        <a href="<?= ($lang == 'en') ? base_url('/en/about') : base_url('/id/tentang') ?>" class="read-more-btn"><?= lang('Blog.bacaselengkapnya'); ?> </a>      </div>
    </section>



    <div class="box">
      <div class="photo-grid">
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $aktivitas->title_img1 ?></div>
          <img src="/upload/<?= $aktivitas->img_aktv1 ?>" alt="Foto 1">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $aktivitas->title_img2 ?></div>
          <img src="/upload/<?= $aktivitas->img_aktv2 ?>" alt="Foto 2">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $aktivitas->title_img3 ?></div>
          <img src="/upload/<?= $aktivitas->img_aktv3 ?>" alt="Foto 3">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $aktivitas->title_img4 ?></div>
          <img src="/upload/<?= $aktivitas->img_aktv4 ?>" alt="Foto 4">
        </div>
      </div>

      <div class="description2">
      <?php if ($lang == 'id'): ?>
    <h2><?= $aktivitas->title_aktivitas ?></h2>
<?php else: ?>
    <h2><?= $aktivitas->title_aktivitas_en ?></h2>
<?php endif; ?>
<?php if ($lang == 'id'): ?>
    <p><?= $aktivitas->deskripsi_aktivitas ?></p>
<?php else: ?>
    <p><?= $aktivitas->deskripsi_aktivitas_en ?></p>
<?php endif; ?>
<a href="<?= ($lang == 'en') ? base_url('/en/activity') : base_url('/id/aktivitas') ?>" class="read-more-btn"><?= lang('Blog.bacaselengkapnya'); ?> </a>      </div>
    </div>



    <div class="box">
      <div class="description2">
      <h2>
    <?php if ($lang == 'id'): ?>
        <?= $produk->title_produk ?>
    <?php else: ?>
        <?= $produk->title_produk_en ?>
    <?php endif; ?>
</h2>
<?php if ($lang === 'id'): ?>
    <p><?= $produk->deskripsi_produk ?></p>
<?php else: ?>
    <p><?= $produk->deskripsi_produk_en ?></p>
<?php endif; ?>
<a href="<?= ($lang == 'en') ? base_url('/en/product') : base_url('/id/produk') ?>" class="read-more-btn"><?= lang('Blog.bacaselengkapnya'); ?> </a>      </div>

      <div class="photo-grid">
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $produk->title_img1 ?></div>
          <img src="/upload/<?= $produk->img_produk1 ?>" alt="Foto 1">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $produk->title_img2 ?></div>
          <img src="/upload/<?= $produk->img_produk2 ?>" alt="Foto 2">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $produk->title_img3 ?></div>
          <img src="/upload/<?= $produk->img_produk3 ?>" alt="Foto 3">
        </div>
        <div class="photo-container">
          <div class="photo-info-bg"></div>
          <div class="photo-info"><?= $produk->title_img4 ?></div>
          <img src="/upload/<?= $produk->img_produk4 ?>" alt="Foto 4">
        </div>
      </div>
    </div>




    <!-- Footer -->
    <div class="footer">
      <p class="footer-text">&copy; 2024 LuxeWash Auto Detail. All Rights Reserved.</p>
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