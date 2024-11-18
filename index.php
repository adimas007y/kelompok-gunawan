<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekayasa Perangkat Lunak TAMSIS</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <header>
        <nav>
            <div class="logo">
                <img src="https://www.smktamsis-yk.com/uploads/logo/logo_659ba836399811.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <li class="nav-item"><a href="index.php">Beranda</a></li>
                <li class="nav-item"><a href="./package/about.php">Tentang RPL</a></li>
                <li class="nav-item"><a href="./package/contact.php">Hubungi Kami</a></li>
                <li class="nav-item"><a href="./package/data-siswa.php">Data Siswa</a></li>
                <!-- <li class="nav-item"><a href="./login/loginn.php">Login</a></li> -->
                <li class="nav-item"><a href="./login/loginn.php">Login</a></li>
                <li class="nav-item"><a href="./session/session_destroy.php">Logout</a></li>
                <!-- <input type="search" name="myInput" placeholder="Search..." size="30" required> -->
                <!-- <li class="nav-item"><a href="#">Ikatan Alumni</a></li> -->
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1 class="color-running">SMK TAMANSISWA JETIS YOGYAKARTA</h1>
                <p>Jl. Pakuningratan No.34A, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233</p>
            </div>
        </section>

        <section class="features">
            <div class="feature">
                <h2>Edukasi Tinggi</h2>
                <p>Mempelajari dasar dari pemrograman komputer</p>
            </div>
            <div class="logorpl">
                <img src="./pictures/RPLpage.jpeg" alt="Logo">
            </div>
            <div class="feature">
                <h2>Menjadi Seorang Programmer Ahli</h2>
                <p>Belajar tentang struktur dan kefokusan pemrograman komputer</p>
            </div>
            <div class="logorpl1">
                <img src="./pictures/perangkat-lunak.png" alt="Logo">
            </div>
            <div class="feature">
                <h2>Menciptakan Inovasi Modern</h2>
                <p>Membuat struktur pemrograman yang modern dan profesional</p>
            </div>
        </section>

        <div class="slideshow-container">

            <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./pictures/RPL3.jpg" style="width:100%">
            <!-- <div class="text"></div> -->
            </div>

            <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./pictures/RPL2.jpg" style="width:100%">
            <!-- <div class="text">Caption Two</div> -->
            </div>

            <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./pictures/RPL1.jpg" style="width:100%">
            <!-- <div class="text">Caption Three</div> -->
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            </div>

        <section class="call-to-action">
            <img src="https://smkn4kendari.sch.id/wp-content/uploads/2021/05/18907.jpg" alt="" width="401">
            <h2>Selamat Datang di website resmi jurusan Rekayasa Perangkat Lunak SMK TamanSiswa Jetis Yogyakarta</h2>
            <h3>Rekayasa Perangkat Lunak SMK TamanSiswa Jetis Yogyakarta</h3>
            <a href="./package/learn.php" class="cta-button">Learn More</a>
        </section>

    </main>

            <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            }
            </script>


    <footer>
        <img src="https://www.smktamsis-yk.com/uploads/logo/logo_659ba836399811.png" alt="Logo">
        <br>
        <img src="./pictures/salam.png" alt="salam">
        <div class="contact-info">
            <p>SMK TAMANSISWA JETIS YOGYAKARTA</p>
            <p>Jl. Pakuningratan No.34A, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233</p>
            <a href="tel:+62274515836" class="icon-phone">Telp. 0274-515836</a>
            <a href="http://wa.me/+6288232128784" class="icon-whatsapp">WhatsApp 088232128784</a>
            <img class="slogansmk" src="https://www.smktamsis-yk.com/assets/img/tamsis-vokasi.png" alt="smkbisa">

            <?php

            // Cek apakah pengguna sudah login
            if (isset($_SESSION['username'])) {
                // Jika sudah login, tampilkan pesan selamat datang
                echo "Selamat datang, " . htmlspecialchars($_SESSION['username']) . "!";
            } else {
                // Jika belum login, simpan username ke session
                $_SESSION['username'] = 'User ?'; // Ganti dengan username yang sesuai
                echo "Anda telah login sebagai " . htmlspecialchars($_SESSION['username']) . ".";
            }
            ?>

        </div>
        <div class="footer-bottom">
            <p>© 2024 Rekayasa Perangkat Lunak</p>
        </div>
    </footer>
</body>
</html>
