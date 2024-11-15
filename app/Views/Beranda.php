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

/* Tablet */
@media (max-width: 768px) {
  .footer {
    padding: 40px 10px; /* Kurangi padding di tablet */
    margin-top: 80px; /* Kurangi margin di tablet */
  }
}

/* Mobile landscape */
@media (max-width: 576px) {
  .footer {
    padding: 30px 5px; /* Kurangi padding lebih jauh untuk mobile landscape */
    margin-top: 60px; /* Kurangi margin di mobile landscape */
    flex-direction: column; /* Stack content vertically pada layar kecil */
  }
}

/* Mobile portrait */
@media (max-width: 320px) {
  .footer {
    padding: 20px 5px; /* Padding minimum untuk mobile portrait */
    margin-top: 40px; /* Margin lebih kecil untuk mobile portrait */
    font-size: 14px; /* Sesuaikan font agar tidak terlalu besar */
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
  align-items: center;
}

/* Atur navigasi kiri untuk tetap di kanan */
.nav-left {
  margin-left: auto;
}

/* Responsif untuk tablet (max-width: 768px) */
@media (max-width: 768px) {
  .nav-item {
    font-size: 14px; /* Sesuaikan ukuran font untuk layar tablet */
    margin-left: 15px; /* Kurangi jarak antar-item */
  }
}

/* Responsif untuk layar ponsel besar (max-width: 576px) */
@media (max-width: 576px) {
  .nav-item {
    font-size: 12px; /* Ukuran font lebih kecil untuk ponsel */
    margin-left: 10px; /* Jarak antar-item lebih kecil */
  }
  .nav {
    flex-direction: column; /* Susun item navigasi secara vertikal pada layar kecil */
    align-items: flex-start; /* Rata kiri untuk tampilan yang lebih alami */
    padding: 10px; /* Tambahkan padding untuk spasi */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .nav-item {
    font-size: 10px; /* Ukuran font minimum agar tetap terbaca */
    margin-left: 5px; /* Minimal jarak antar-item */
  }
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

@media (max-width: 1200px) {
  .car-img {
    max-width: 60%; /* Sedikit lebih besar di layar besar */
  }
}

@media (max-width: 992px) {
  .car-img {
    max-width: 70%; /* Lebih besar untuk layar tablet */
  }
}

@media (max-width: 768px) {
  .car-img {
    max-width: 80%; /* Lebih besar untuk tablet kecil dan ponsel besar */
  }
}

@media (max-width: 576px) {
  .car-img {
    max-width: 100%; /* Full width untuk layar ponsel */
  }
}

/* Tambahkan untuk layar ponsel kecil, maksimal 320px */
@media (max-width: 320px) {
  .car-img {
    max-width: 100%; /* Tetap full width untuk layar ponsel yang sangat kecil */
    padding: 0 10px; /* Opsional: tambahkan padding untuk mencegah gambar menempel ke tepi */
  }
}




.text-box {
  color: #000;
  padding: 20px; /* Padding default untuk layar besar */
  background-color: rgba(255, 255, 255, 0.8); /* Latar semi-transparan untuk keterbacaan */
  border-radius: 10px; /* Sudut membulat untuk estetika */
  font-size: 16px; /* Ukuran font default */
}

/* Responsif untuk layar tablet (max-width: 768px) */
@media (max-width: 768px) {
  .text-box {
    padding: 15px; /* Kurangi padding untuk layar tablet */
    font-size: 14px; /* Ukuran font sedikit lebih kecil untuk tablet */
    border-radius: 8px; /* Kurangi border-radius agar proporsional di layar kecil */
  }
}

/* Responsif untuk layar ponsel besar (max-width: 576px) */
@media (max-width: 576px) {
  .text-box {
    padding: 10px; /* Kurangi padding lebih lanjut untuk ponsel besar */
    font-size: 12px; /* Ukuran font lebih kecil agar mudah dibaca di layar kecil */
    border-radius: 6px; /* Border-radius lebih kecil agar sesuai */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .text-box {
    padding: 8px; /* Padding minimum untuk layar kecil */
    font-size: 10px; /* Ukuran font minimum agar tetap terbaca */
    border-radius: 4px; /* Border-radius minimal untuk tampilan yang rapi */
  }
}


    .centered-text {
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: bold;
  margin-top: 250px; /* Jarak atas */
  margin-bottom: 100px; /* Margin bawah */
  color: #000000;
  position: relative;
  z-index: 2;
}

@media (max-width: 1200px) {
  .centered-text {
    font-size: 40px;
    margin-top: 200px;
    margin-bottom: 80px;
  }
}

@media (max-width: 992px) {
  .centered-text {
    font-size: 35px;
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
  right: 150px; /* Default jarak dari tepi kanan */
  transform: translateY(-50%);
  text-align: right;
  color: #000;
  z-index: 2;
}

/* Responsif untuk tablet (max-width: 768px) */
@media (max-width: 768px) {
  .text-overlay {
    right: 50px; /* Dekatkan teks ke tengah untuk tablet */
    font-size: 14px; /* Ukuran font lebih kecil untuk layar tablet */
    top: 50%; /* Sesuaikan posisi vertikal */
  }
}

/* Responsif untuk layar ponsel besar (max-width: 576px) */
@media (max-width: 576px) {
  .text-overlay {
    right: 20px; /* Lebih dekat ke tepi pada layar kecil */
    font-size: 12px; /* Ukuran font lebih kecil untuk ponsel besar */
    text-align: center; /* Center text alignment for better readability */
    top: 55%; /* Adjust vertical position */
    width: 80%; /* Control width to avoid overflow */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .text-overlay {
    right: 10px; /* Paling dekat ke tepi untuk layar sangat kecil */
    font-size: 10px; /* Ukuran font minimum untuk keterbacaan */
    top: 50%; /* Pusatkan posisi vertikal */
    text-align: center; /* Teks rata tengah untuk tampilan lebih rapi */
    width: 90%; /* Lebar hampir penuh untuk keterbacaan */
  }
}



.title-highlight {
  font-size: 100px;
  font-weight: bold;
  margin: 10px;
  color: #000000;
  word-spacing: 0px;
  position: relative;
  top: 50px;
}

@media (max-width: 1200px) {
  .title-highlight {
    font-size: 80px;
    top: 40px;
  }
}

@media (max-width: 992px) {
  .title-highlight {
    font-size: 60px;
    top: 30px;
  }
}

@media (max-width: 768px) {
  .title-highlight {
    font-size: 40px;
    top: 20px;
  }
}

@media (max-width: 576px) {
  .title-highlight {
    font-size: 30px;
    top: 15px;
  }
}


.title-carwash {
  font-size: 100px; /* Ukuran default untuk layar besar */
  font-weight: bold;
  margin: 10px;
  color: #000;
  word-spacing: 0px;
  position: relative;
  top: 30px; /* Geser teks sedikit ke bawah */
}

/* Responsif untuk layar desktop kecil (max-width: 1200px) */
@media (max-width: 1200px) {
  .title-carwash {
    font-size: 80px; /* Ukuran font lebih kecil untuk layar desktop kecil */
    top: 25px; /* Sesuaikan top agar tetap proporsional */
  }
}

/* Responsif untuk layar tablet (max-width: 992px) */
@media (max-width: 992px) {
  .title-carwash {
    font-size: 60px; /* Ukuran font lebih kecil untuk tablet */
    top: 20px; /* Kurangi top agar teks tetap di tengah */
    margin: 5px; /* Kurangi margin untuk menambah ruang */
  }
}

/* Responsif untuk layar tablet kecil dan ponsel besar (max-width: 768px) */
@media (max-width: 768px) {
  .title-carwash {
    font-size: 40px; /* Ukuran font lebih kecil untuk ponsel besar dan tablet kecil */
    top: 15px; /* Kurangi top agar tetap proporsional */
    margin: 5px; /* Sesuaikan margin untuk layar kecil */
  }
}

/* Responsif untuk layar ponsel (max-width: 576px) */
@media (max-width: 576px) {
  .title-carwash {
    font-size: 30px; /* Ukuran font lebih kecil untuk ponsel */
    top: 10px; /* Sesuaikan top untuk layar kecil */
    margin: 3px; /* Margin minimal */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .title-carwash {
    font-size: 24px; /* Ukuran font paling kecil untuk keterbacaan di layar kecil */
    top: 5px; /* Top minimum agar tetap terlihat rapi */
    margin: 2px; /* Margin minimal untuk layar kecil */
  }
}



.description {
  font-size: 20px; /* Ukuran font default untuk layar besar */
  font-weight: normal;
  margin: 10px 0;
  color: #000;
  word-spacing: 30px; /* Spasi kata default */
  position: relative;
  top: 40px; /* Geser teks ke bawah */
  left: 0px; /* Geser teks ke kiri */
}

/* Responsif untuk layar desktop kecil (max-width: 1200px) */
@media (max-width: 1200px) {
  .description {
    font-size: 18px; /* Ukuran font sedikit lebih kecil */
    word-spacing: 25px; /* Kurangi jarak antar kata */
    top: 35px; /* Sesuaikan posisi vertikal */
  }
}

/* Responsif untuk layar tablet (max-width: 992px) */
@media (max-width: 992px) {
  .description {
    font-size: 16px; /* Ukuran font lebih kecil untuk tablet */
    word-spacing: 20px; /* Kurangi spasi kata */
    top: 30px; /* Sesuaikan posisi vertikal */
  }
}

/* Responsif untuk layar tablet kecil dan ponsel besar (max-width: 768px) */
@media (max-width: 768px) {
  .description {
    font-size: 14px; /* Ukuran font lebih kecil untuk ponsel besar dan tablet kecil */
    word-spacing: 15px; /* Kurangi spasi kata */
    top: 20px; /* Sesuaikan posisi vertikal */
    margin: 8px 0; /* Kurangi margin */
  }
}

/* Responsif untuk layar ponsel (max-width: 576px) */
@media (max-width: 576px) {
  .description {
    font-size: 12px; /* Ukuran font lebih kecil untuk ponsel */
    word-spacing: 10px; /* Lebih rapat antar kata */
    top: 15px; /* Kurangi top */
    margin: 5px 0; /* Kurangi margin lebih lanjut */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .description {
    font-size: 10px; /* Ukuran font lebih kecil agar tetap terbaca */
    word-spacing: 5px; /* Spasi kata minimal */
    top: 10px; /* Sesuaikan posisi vertikal */
    margin: 3px 0; /* Margin minimal */
  }
}



.text-box-about {
  width: 50%; /* Lebar 50% untuk layar besar */
  padding: 30px;
  background-color: #BFE1F2; /* Warna latar belakang */
  border-radius: 20px 0 0 20px;
}

/* Responsif untuk layar desktop kecil (max-width: 1200px) */
@media (max-width: 1200px) {
  .text-box-about {
    width: 60%; /* Lebar sedikit lebih besar di layar desktop kecil */
    padding: 25px; /* Sesuaikan padding */
  }

  .text-box-about h2 {
    font-size: 1.4rem; /* Ukuran font h2 sedikit lebih kecil */
  }

  .text-box-about h1 {
    font-size: 1.8rem; /* Ukuran font h1 sedikit lebih kecil */
  }

  .text-box-about p {
    font-size: 0.95rem; /* Ukuran font paragraf sedikit lebih kecil */
  }
}

/* Responsif untuk tablet (max-width: 992px) */
@media (max-width: 992px) {
  .text-box-about {
    width: 70%; /* Lebar lebih besar untuk tablet */
    padding: 20px; /* Padding lebih kecil */
  }

  .text-box-about h2 {
    font-size: 1.3rem; /* Ukuran font h2 lebih kecil untuk tablet */
  }

  .text-box-about h1 {
    font-size: 1.6rem; /* Ukuran font h1 lebih kecil */
  }

  .text-box-about p {
    font-size: 0.9rem; /* Ukuran font lebih kecil */
  }
}

/* Responsif untuk layar tablet kecil dan ponsel besar (max-width: 768px) */
@media (max-width: 768px) {
  .text-box-about {
    width: 80%; /* Lebar lebih besar untuk tablet kecil dan ponsel besar */
    padding: 15px; /* Padding lebih kecil */
  }

  .text-box-about h2 {
    font-size: 1.2rem; /* Ukuran font h2 lebih kecil */
  }

  .text-box-about h1 {
    font-size: 1.4rem; /* Ukuran font h1 lebih kecil */
  }

  .text-box-about p {
    font-size: 0.85rem; /* Ukuran font lebih kecil */
  }
}

/* Responsif untuk layar ponsel (max-width: 576px) */
@media (max-width: 576px) {
  .text-box-about {
    width: 90%; /* Lebar hampir penuh untuk ponsel */
    padding: 10px; /* Padding lebih kecil */
  }

  .text-box-about h2 {
    font-size: 1.1rem; /* Ukuran font h2 lebih kecil */
  }

  .text-box-about h1 {
    font-size: 1.2rem; /* Ukuran font h1 lebih kecil */
  }

  .text-box-about p {
    font-size: 0.8rem; /* Ukuran font lebih kecil untuk ponsel */
  }
}

/* Responsif untuk layar ponsel kecil (max-width: 320px) */
@media (max-width: 320px) {
  .text-box-about {
    width: 95%; /* Lebar penuh untuk ponsel kecil */
    padding: 8px; /* Padding minimal */
  }

  .text-box-about h2 {
    font-size: 1rem; /* Ukuran font h2 lebih kecil */
  }

  .text-box-about h1 {
    font-size: 1.1rem; /* Ukuran font h1 lebih kecil */
  }

  .text-box-about p {
    font-size: 0.75rem; /* Ukuran font lebih kecil untuk ponsel kecil */
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

@media (max-width: 1200px) {
  .about-text {
    width: 60%; /* Lebar lebih besar pada layar besar */
    margin-right: 15px;
  }
}

@media (max-width: 992px) {
  .about-text {
    width: 70%; /* Lebar lebih besar pada layar tablet */
    margin-right: 10px;
  }
}

@media (max-width: 768px) {
  .about-text {
    width: 100%; /* Lebar penuh untuk layar kecil */
    margin-right: 0; /* Margin kanan dihapus */
    margin-bottom: 20px; /* Tambahkan margin bawah untuk memberi ruang di bawah teks */
  }
}

@media (max-width: 576px) {
  .about-text {
    width: 100%; /* Tetap full width untuk ponsel */
    text-align: center; /* Pusatkan teks pada layar kecil */
  }
}


.about-image {
  width: 50%; /* Lebar gambar 50% */
  border-radius: 20px; /* Sudut membulat pada gambar */
  overflow: hidden; /* Menghindari gambar keluar dari sudut membulat */
}

.about-image img {
  width: 125%; /* Gambar memenuhi kolom */
  height: auto; /* Memastikan gambar proporsional */
  object-fit: cover; /* Menjaga agar gambar tidak terdistorsi */
  border-radius: 10px; /* Opsional: membuat sudut gambar membulat */
}

@media (max-width: 1200px) {
  .about-image img {
    width: 90%; /* Sedikit margin untuk layar lebih besar */
  }
}

@media (max-width: 992px) {
  .about-image img {
    width: 80%; /* Mengurangi lebar gambar untuk tablet */
  }
}

@media (max-width: 768px) {
  .about-image img {
    width: 100%; /* Full width untuk layar tablet kecil dan ponsel besar */
  }
}

@media (max-width: 576px) {
  .about-image img {
    width: 100%; /* Tetap 100% untuk layar ponsel */
  }
}

/* Tambahkan untuk layar ponsel kecil, maksimal 320px */
@media (max-width: 320px) {
  .about-image {
    width: 100%; /* Memastikan kontainer gambar penuh untuk layar kecil */
  }

  .about-image img {
    width: 100%; /* Penuhi lebar kontainer untuk layar yang sangat kecil */
    border-radius: 5px; /* Sudut sedikit lebih kecil agar lebih rapi */
  }
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

/* Default untuk layar desktop besar */
.title-highlight {
  font-size: 36px; /* Ukuran font default untuk layar besar */
}

/* Tablet */
@media (max-width: 768px) {
  .title-highlight {
    font-size: 28px; /* Ukuran font untuk tablet */
  }
}

/* Mobile landscape */
@media (max-width: 576px) {
  .title-highlight {
    font-size: 24px; /* Ukuran font untuk mobile landscape */
  }
}

/* Mobile portrait */
@media (max-width: 400px) {
  .title-highlight {
    font-size: 20px; /* Ukuran font untuk mobile portrait */
  }
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
}
      /* Hanya tambahkan styling ini agar aman dan tidak mengganggu konten lain */
.image-card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Menyesuaikan kolom secara otomatis */
    gap: 20px; /* Spasi antara kartu-kartu */
    margin: 20px 0; /* Margin atas dan bawah, aman agar tidak terlalu mepet konten lain */
}



.card {
    background-color: #000000;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0,);
    overflow: hidden;
    text-align: center;
    padding: 10px;
}

.card img {
    max-width: 100%; /* Gambar responsif, tidak melebihi lebar card */
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
body, html {
  padding: 0;
  margin: 0;
}

/* Mengatur kontainer utama */
.container {
  width: 100vw; /* Mengatur lebar penuh viewport */
  max-width: 100%; /* Pastikan tidak ada batasan maksimal */
  margin: 0; /* Hapus margin */
  padding: 0; /* Hapus padding */
}


 
.box {
    background-color: #4D869C;
    color: white;
    padding: 20px;
    width: 100%; /* Ubah lebar menjadi 100% untuk memastikan elemen dapat menyesuaikan */
    max-width: 1400px; /* Tetapkan lebar maksimal agar tetap tidak terlalu besar */
    height: auto; /* Sesuaikan tinggi secara otomatis */
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    margin-top: 150px; /* Jarak atas ditambahkan di sini */
    margin-bottom: 50px; /* Margin bawah, sesuaikan jika perlu */
}

@media (max-width: 1200px) {
    .box {
        padding: 15px; /* Kurangi padding untuk layar lebih kecil */
        margin-top: 120px; /* Sesuaikan jarak atas */
    }
}

@media (max-width: 992px) {
    .box {
        padding: 12px; /* Padding lebih kecil pada tablet */
        margin-top: 100px; /* Sesuaikan jarak atas */
    }
}

@media (max-width: 768px) {
    .box {
        padding: 10px; /* Padding lebih kecil pada tablet kecil */
        margin-top: 80px; /* Sesuaikan jarak atas */
    }
}

@media (max-width: 576px) {
    .box {
        padding: 8px; /* Padding lebih kecil pada ponsel */
        margin-top: 60px; /* Sesuaikan jarak atas */
        flex-direction: column; /* Ubah arah flex menjadi kolom pada ponsel */
        align-items: center; /* Posisikan item ke tengah pada ponsel */
    }
}



.photo-grid {
    display: grid;
    grid-template-columns: repeat(2, 200px); /* 2 kolom dengan lebar 200px */
    gap: 50px; /* Jarak antar foto */
    margin-left: 100px; /* Menggeser ke kiri */
}

@media (max-width: 1200px) {
    .photo-grid {
        grid-template-columns: repeat(2, 180px); /* Lebar kolom sedikit lebih kecil */
        gap: 30px; /* Kurangi jarak antar foto */
        margin-left: 50px; /* Kurangi margin kiri */
    }
}

@media (max-width: 992px) {
    .photo-grid {
        grid-template-columns: repeat(2, 150px); /* Lebar kolom lebih kecil untuk tablet */
        gap: 20px; /* Kurangi jarak antar foto */
        margin-left: 30px; /* Kurangi margin kiri */
    }
}

@media (max-width: 768px) {
    .photo-grid {
        grid-template-columns: repeat(1, 100%); /* 1 kolom penuh di layar tablet kecil */
        gap: 20px;
        margin-left: 0; /* Menghilangkan margin kiri pada layar kecil */
    }
}

@media (max-width: 576px) {
    .photo-grid {
        grid-template-columns: repeat(1, 100%); /* 1 kolom penuh pada ponsel */
        gap: 15px; /* Mengurangi gap */
        margin-left: 0; /* Menghilangkan margin kiri */
    }
}


.photo-container {
    position: relative;
    width: 100%;
    height: 200px; /* Sesuaikan tinggi kontainer */
}

.photo-grid img {
    width: 100%;
    height: 200px; /* Tinggi tetap */
    object-fit: cover;
    border-radius: 10px; /* Membulatkan sudut gambar */
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
.description {
    text-align: right; /* Teks di dalam deskripsi akan rata ke kanan */
    max-width: 500px;
    color: #000000;
    margin-left: 50px; /* Sedikit margin kiri untuk jarak dari gambar */
}

@media (max-width: 1200px) {
    .description {
        max-width: 400px;
        margin-left: 40px;
        text-align: center;
    }
}

@media (max-width: 992px) {
    .description {
        max-width: 350px;
        margin-left: 30px;
        text-align: center;
    }
}

@media (max-width: 768px) {
    .description {
        max-width: 300px;
        margin-left: 20px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .description {
        max-width: 100%;
        margin-left: 0; /* Margin dihilangkan untuk layar kecil */
        text-align: center; /* Teks ditengah untuk perangkat kecil */
    }
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
        font-size: 14px; /* Ukuran font lebih kecil pada layar besar */
        padding: 5px 10px; /* Penambahan padding sedikit */
    }
}

@media (max-width: 992px) {
    .photo-info {
        font-size: 12px; /* Ukuran font lebih kecil pada tablet */
        padding: 5px 15px; /* Menambahkan padding lebih banyak */
    }
}

@media (max-width: 768px) {
    .photo-info {
        font-size: 12px; /* Ukuran font lebih kecil pada tablet kecil */
        padding: 5px 15px; /* Padding tetap sama */
        width: 80%; /* Lebar lebih kecil pada layar tablet */
    }
}

@media (max-width: 576px) {
    .photo-info {
        font-size: 10px; /* Ukuran font paling kecil untuk ponsel */
        padding: 5px 10px; /* Padding lebih kecil */
        width: 80%; /* Lebar sedikit lebih kecil */
    }
}





.description2 {
    text-align: left;
    max-width: 500px;
    color: white;
    margin-left: 200px; /* Menggeser elemen ke kanan */
    transform: translateY(-40px); /* Geser elemen ke atas */
}

@media (max-width: 1200px) {
    .description2 {
        max-width: 450px; /* Kurangi lebar maksimal untuk layar lebih kecil */
        margin-left: 150px; /* Mengurangi jarak kiri */
        transform: translateY(-30px); /* Menyesuaikan geser ke atas */
    }
}

@media (max-width: 992px) {
    .description2 {
        max-width: 400px; /* Lebar maksimal lebih kecil pada tablet */
        margin-left: 100px; /* Mengurangi margin kiri lebih lanjut */
        transform: translateY(-20px); /* Menyesuaikan geser ke atas */
    }
}

@media (max-width: 768px) {
    .description2 {
        max-width: 350px; /* Lebar maksimal lebih kecil pada tablet kecil */
        margin-left: 50px; /* Margin kiri lebih kecil */
        transform: translateY(-10px); /* Menyesuaikan posisi elemen */
    }
}

@media (max-width: 576px) {
    .description2 {
        max-width: 90%; /* Lebar maksimal menjadi 90% pada ponsel */
        margin-left: 10px; /* Margin kiri minimal */
        transform: translateY(0); /* Kembalikan posisi vertikal */
    }
}



.description2 h2 {
    font-size: 70px; /* Ukuran font besar untuk layar besar */
    font-weight: bold;
    color: white;
    margin-bottom: 15px; /* Jarak bawah judul */
}

@media (max-width: 1200px) {
    .description2 h2 {
        font-size: 60px; /* Ukuran font sedikit lebih kecil pada layar besar */
        margin-bottom: 12px; /* Jarak bawah sedikit lebih kecil */
    }
}

@media (max-width: 992px) {
    .description2 h2 {
        font-size: 50px; /* Ukuran font lebih kecil pada tablet */
        margin-bottom: 10px; /* Jarak bawah lebih kecil */
    }
}

@media (max-width: 768px) {
    .description2 h2 {
        font-size: 40px; /* Ukuran font lebih kecil pada tablet kecil */
        margin-bottom: 8px; /* Mengurangi jarak bawah */
    }
}

@media (max-width: 576px) {
    .description2 h2 {
        font-size: 30px; /* Ukuran font lebih kecil pada ponsel */
        margin-bottom: 5px; /* Jarak bawah lebih kecil */
    }
}


.description2 p {
    font-size: 19px; /* Ukuran font standar */
    line-height: 1.6;
    margin-top: 10px; /* Jarak atas isi deskripsi */
    margin-bottom: 20px;
    color: white;
}

@media (max-width: 1200px) {
    .description2 p {
        font-size: 18px; /* Ukuran font lebih kecil untuk layar lebih kecil */
        margin-bottom: 18px; /* Mengurangi margin bawah */
    }
}

@media (max-width: 992px) {
    .description2 p {
        font-size: 16px; /* Ukuran font lebih kecil untuk tablet */
        margin-bottom: 16px; /* Margin bawah lebih kecil */
    }
}

@media (max-width: 768px) {
    .description2 p {
        font-size: 14px; /* Ukuran font lebih kecil untuk tablet kecil */
        margin-bottom: 14px; /* Margin bawah lebih kecil */
    }
}

@media (max-width: 576px) {
    .description2 p {
        font-size: 12px; /* Ukuran font lebih kecil untuk ponsel */
        margin-bottom: 12px; /* Margin bawah lebih kecil */
    }
}


.read-more-btn {
    background-color: #87CEEB;
    color: white;
    padding: 15px 30px; /* Padding tombol */
    border: none;
    border-radius: 5px;
    font-size: 20px; /* Ukuran font */
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.read-more-btn:hover {
    background-color: #000000; /* Efek hover */
}

/* Responsif */
@media (max-width: 1200px) {
    .read-more-btn {
        font-size: 18px; /* Ukuran font sedikit lebih kecil pada layar besar */
        padding: 12px 25px; /* Padding sedikit lebih kecil */
    }
}

@media (max-width: 992px) {
    .read-more-btn {
        font-size: 16px; /* Ukuran font lebih kecil pada tablet */
        padding: 10px 20px; /* Padding lebih kecil */
    }
}

@media (max-width: 768px) {
    .read-more-btn {
        font-size: 14px; /* Ukuran font lebih kecil pada tablet kecil */
        padding: 8px 18px; /* Padding lebih kecil */
    }
}

@media (max-width: 576px) {
    .read-more-btn {
        font-size: 12px; /* Ukuran font lebih kecil pada ponsel */
        padding: 8px 15px; /* Padding lebih kecil */
        width: 100%; /* Tombol mengambil lebar penuh pada ponsel */
    }
}


@media (max-width: 1200px) {
    .read-more-btn {
        padding: 12px 25px; /* Kurangi padding */
        font-size: 18px; /* Kurangi font */
    }
}

@media (max-width: 992px) {
    .read-more-btn {
        padding: 10px 20px; /* Padding lebih kecil */
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .read-more-btn {
        padding: 8px 18px; /* Padding lebih kecil untuk layar kecil */
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .read-more-btn {
        padding: 6px 15px; /* Padding minimum untuk ponsel kecil */
        font-size: 12px;
        width: 50%;
    }
}
/* Responsif pada layar 320px */
@media (max-width: 320px) {
    .read-more-btn {
        font-size: 10px; /* Ukuran font lebih kecil untuk ponsel sangat kecil */
        padding: 6px 12px; /* Padding lebih kecil */
        width: 50%; /* Tombol mengambil lebar penuh pada ponsel kecil */
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
    flex-direction: row-reverse; /* Gambar di kanan, deskripsi di kiri */
}

.photo-grid-right {
    display: grid;
    grid-template-columns: repeat(2, 200px); /* Lebar kolom 200px */
    gap: 50px; /* Jarak antar foto */
    margin-right: 100px; /* Menggeser ke kanan */
}

.photo-container-right {
    position: relative;
    width: 100%;
    height: 200px; /* Sesuaikan tinggi kontainer */
}

.photo-grid-right img {
    width: 100%;
    height: 200px; /* Tinggi tetap */
    object-fit: cover;
    border-radius: 10px; /* Membulatkan sudut gambar */
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
    text-align: left; /* Teks di dalam deskripsi akan rata ke kiri */
    max-width: 500px;
    color: white;
    margin-right: 200px; /* Menggeser elemen ke kiri */
    transform: translateY(-40px); /* Geser elemen ke atas */
}

.description-right h2 {
    font-size: 70px; /* Diperbesar dari 50px menjadi 70px */
    font-weight: bold;
    color: white;
    margin-bottom: 15px; /* Jarak bawah judul */
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
    padding: 15px 30px; /* Padding diperbesar untuk menyesuaikan ukuran tombol */
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
    background-color: #000000; /* Efek hover pada tombol */
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
        margin-left: 0; /* Hilangkan margin kiri pada layar kecil */
        text-align: center; /* Teks di tengah pada perangkat kecil */
    }
}


.main-heading {
    color: #000000;
    font-size: 36px;
    font-weight: bold;
    margin-left: -490px; /* Menggeser judul utama ke kiri */
    font-family: 'Arial', sans-serif;
    margin-top: 10px; /* Menggeser judul utama ke bawah */
    margin-bottom: 5px; /* Mengurangi jarak bawah judul */
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
        margin-left: 0; /* Menghilangkan margin kiri pada layar kecil */
        text-align: center; /* Menempatkan judul di tengah pada perangkat kecil */
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
      <img class="logo" src="/upload/<?=$beranda->img_logo?>" alt="LuxeWash Auto Detail Logo">
    </div>

<div class="overlay">
  <div class="content-wrapper">
    <img class="car-img" src="/upload/<?= $beranda->img_banner?>" alt="Gambar Mobil" />
    <div class="text-overlay">
      <p class="title-highlight"><?= $beranda->title_banner;?></p>
      <!-- <p class="title-carwash">Car Wash</p> -->
      <p class="description"><?= $beranda->deskripsi_banner; ?> </p>
      
    </div>
  </div>
</div>



 <!-- Teks "LuxeWash Auto Detail" -->
<div class="centered-text">
<?= $beranda->title_2?>
</div>
<div class="about-section">
    <h3 class="sub-heading">TENTANG KAMI</h3>
    <h1 class="main-heading"><?= $tentang->title_tentang?></h1>
</div>

<!-- Latar Belakang Biru di Bawah Konten dengan Teks dan Gambar -->
<div class="about-background">
  <div class="about-text">
    <p><?= $tentang->deskripsi_tentang?></p>
    <!-- Tombol Baca Selengkapnya -->
    <a href="tentang" class="read-more-btn">Baca Selengkapnya</a>
    </div>


  <!-- Gambar di sebelah teks -->
  <div class="about-image">
    <img src="/upload/<?=$tentang->img_tentang?>" alt="Gambar tentang LuxeWash">
  </div>
</div>


<div class="box">
    <div class="photo-grid">
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$aktivitas->title_img1?></div>
            <img src="/upload/<?=$aktivitas->img_aktv1?>" alt="Foto 1">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$aktivitas->title_img2?></div>
            <img src="/upload/<?=$aktivitas->img_aktv2?>" alt="Foto 2">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$aktivitas->title_img3?></div>
            <img src="/upload/<?=$aktivitas->img_aktv3?>" alt="Foto 3">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$aktivitas->title_img4?></div>
            <img src="/upload/<?=$aktivitas->img_aktv4?>" alt="Foto 4">
        </div>
    </div>

    <div class="description2">
        <h2><?=$aktivitas->title_aktivitas?></h2>
        <p><?=$aktivitas->deskripsi_aktivitas?></p>
        <a href="aktivitas" class="read-more-btn">Baca Selengkapnya</a>
    </div>
</div>



<div class="box">
    <div class="description2">
    <h2><?=$produk->title_produk?></h2>
    <p><?=$produk->deskripsi_produk?></p>
    <a href="produk" class="read-more-btn">Baca Selengkapnya</a>
        </div>

    <div class="photo-grid">
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$produk->title_img1?></div>
            <img src="/upload/<?=$produk->img_produk1?>" alt="Foto 1">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$produk->title_img2?></div>
            <img src="/upload/<?=$produk->img_produk2?>" alt="Foto 2">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$produk->title_img3?></div>
            <img src="/upload/<?=$produk->img_produk3?>" alt="Foto 3">
        </div>
        <div class="photo-container">
            <div class="photo-info-bg"></div>
            <div class="photo-info"><?=$produk->title_img4?></div>
            <img src="/upload/<?=$produk->img_produk4?>" alt="Foto 4">
        </div>
    </div>
</div>




    <!-- Footer -->
    <div class="footer">
      <p class="footer-text">&copy; 2024 LuxeWash Auto Detail. All Rights Reserved.</p>
    </div>
  </div>
</body>
</html>
