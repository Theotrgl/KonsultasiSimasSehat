<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>SIMAS Sehat</title>
</head>
<body>
    <div class="banner">
        <img src="./assets/banner-lower-2.jpg" alt="banner">
        <div class="banner-text">
          <a href="index.php"><img src="./assets/logo-2.png" class="logo"></a>
          <h3>Tanyakan Kesehatanmu di</h3>
          <h1>Konsultasi Simas Sehat</h1>
          <button onclick="window.location.href='questions.php'" class="banner-button">Selengkapnya</button>
        </div>
    </div>

    <div class="article">
        <div class="article-container">
            <h1>Title</h1>
            <p>&nbsp</p>
            <p>Tanya Dok? Team Dokter Simas Sehat siap menjawab pertanyaan medis yang sudah diseleksi “gratis” dan mempublikasikannya disini agar membantu rekan-rekan Kita semua.</p>
        </div>
    </div>
    <div class="phone-button">
      <button onclick="window.location.href='questions.php'">Selengkapnya</button>
    </div> 
    <h1 class="category">5 Pertanyaan Konsultasi Paling Populer</h1>
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
      <div class="carousel-cell">
        <img src="./assets/1.png" alt="img-1">
        <div class="text">
          <h2>Title 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button onclick="window.location.href='answer.php'"class="card-button">Selengkapnya</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="./assets/2.png" alt="img-1">
        <div class="text">
          <h2>Title 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button class="card-button">Selengkapnya</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="./assets/3.png" alt="img-1">
        <div class="text">
          <h2>Title 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button class="card-button">Selengkapnya</button>
        </div>
      </div>
      <div class="carousel-cell">
        <img src="./assets/4.png" alt="img-1">
        <div class="text">
          <h2>Title 4</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button class="card-button">Selengkapnya</button>
        </div></div>
      <div class="carousel-cell">
        <img src="./assets/5.png" alt="img-1">
        <div class="text">
          <h2>Title 5</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eleifend sed orci vitae hendrerit. Maecenas maximus elit quis ultrices varius. Quisque iaculis et felis id vehicula.</p>
          <button class="card-button">Selengkapnya</button>
        </div>
      </div>
    </div>
    <div class="lower-banner-2">
      <a href="https://youtube.com/playlist?list=PLgbkSGbfrPb6xPAW03z4wYB26G3NP_qym"><img src="./assets/banner-youtube-4.jpg"></a>
    </div>
    <footer class="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer-col">
            <h4>ASURANSI SINAR MAS</h4>
            <ul>
              <li><a>Plaza Simas, Jl. KH Fachrudin No.18</a></li>
              <li><a>Tanah Abang, Jakarta 10250</a></li>
              <li><a>Telp. 021 2918 9999 (Hunting)</a></li>
              <li><a>Telp. 021 5050 9888 (Hunting)</a></li>

            </ul>
          </div>
          <div class="footer-col">
            <h4>Layanan di Jam Kerja</h4>
            <ul>
              <li><a>Whatapp Official <img src="./assets/wa.png" width="14px"> 021 806 00691</a></li>
              <li><a>Whatapp Pembayaran Premi <img src="./assets/wa.png" width="14px"> 0881 117 6644</a></li>
              <li><a>Whatapp Notifikasi Polis <img src="./assets/wa.png" width="14px"> 0881 234 0900</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Email Official</h4>
            <ul>
              <li><a>info@sinarmas.co.id</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="footnote">
            <p style="font-size:12px">Halaman ini merupakan kolaborasi bersama team dokter Simas Sehat.</p>
            <p>&nbsp</p>
            <p>PT Asuransi Sinar Mas <span>&copy</span> 
            <span id="copyright">
                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
            </span> All Rights Reserved.</p>
            <p>PT Asuransi Sinar Mas berizin dan diawasi oleh Otoritas Jasa Keuangan.</p>
          </div>
        </div>
      </div>
    </footer>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>