<?php
session_start();
include "setting/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-Booking</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->

    <?php 
    include 'menu.php';
    ?>

    <div class="wrapper">
        <!-- untuk home-->
        <section id="home">
            <img class="pic" src="img/home.jpg"/>
            <div class="kolom-atas erepair">
                <p class="deskripsi">Cari Jasa? TINGGAL ORDER AJA!</p>
                <h2>Langsung di M-Booking</h2>
                <p>merupakan sebuah website untuk melakukan sebuah appointment, janji temu, atau reservasi antara customer dan penyedia jasa seperti dokter praktek, tukang cukur, 
dan restoran, yang andal, fleksibel, efisien, dan mudah digunakan..</p>
                
            </div>
        </section>

        <!-- untuk jenis jasa -->
        <section id="jenisjasa">
            <div class="tengah">
                <div class="kolom">
                    <h2>Jenis Jasa</h2>
                    <p class="deskripsi">Pilih jasa sesuai kebutuhanmu</p>
                    <p>M-Booking menyediakan jasa servis untuk segala macam Jasa.</p>
                </div>

                <div class="jasa-list">
                    <div class="jasa">
                        <img src="img/servismobil.jpg"/>
                        <p>Servis Mobil</p>
                    </div>
                    <div class="jasa">
                        <img src="img/servishandphone.jpg"/>
                        <p>Servis Handphone</p>
                    </div>
                    <div class="jasa">
                        <img src="img/servislaptop.jpg"/>
                        <p>Servis PC</p>
                    </div>
                    <div class="jasa">
                        <img src="img/servisperalatanrumahtangga.jpg"/>
                        <p>Servis Peralatan Rumah Tangga</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk order -->
        <section id="order">
            <div class="kolom-bawah reveal">
                <h2>Cari Jasa Terbaik dengan <span> Cepat </span> dan <span> Mudah </span></h2>
                <p>M-Booking memberi kemudahan dan kecepatan bagi kamu untuk menemukan Jasa yang handal. Tanpa repot, tanpa bingung. Tidak perlu menunggu lebih lama lagi</p>
                <br>
                <a class="tombol" href="jasa.php">Pesan Sekarang<a>
            </div>
            <img src="img/order.jpg"/>
        </section>

        <!-- untuk bantuan -->
        <section id="bantuan">
            <div class="pinggir kolom">
                <div class="head-qa">
                    <h2>BANTUAN<h2>
                    <h2>Q & A</h2>
                    <p>Membantu kalian untuk menjawab semua kendala permasalahan yang ada di applikasi M-Booking</p>
                </div>
            <div class="form">
            <form>
                <input type="email" placeholder="Email" style="width: 60%; height: 45px; padding-left: 2%; padding-right: 2%;"><br><br>
                <textarea name="message" cols="30" rows="10" placeholder="Message" style="width: 60%; padding-left: 2%; padding-right: 2%;  margin-bottom: 3%"></textarea><br>
            <input type="submit">
            </form>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="footer-wraper">
            <div class="footer">
                <div class="footer-section">
                    <h3>M-Booking</h3>
                    <p>M-Booking merupakan memberi kemudahan dan kecepatan bagi kamu untuk menemukan Jasa yang handal. Tanpa repot, tanpa bingung. Tidak perlu menunggu lebih lama lagi.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>No. telepon: 123-98576</p>
                    <p>Facebook   : M-Booking </p>
                    <p>Twitter    : @M-Booking</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>M-Booking</b> All Rights Reserved.
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>