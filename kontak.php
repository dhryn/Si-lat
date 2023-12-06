<!DOCTYPE html>
<HTML>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>Kontak</title>
    </head>
        
    <body>
        <header>
        <div id="minimize-icon" class="minimize"><span class="fa fa-list"></span></div>
            <div class="menu">
                <ul id="menu-icon" class="hidden">
                    <li class="list-menu"><a href="beranda.html">Beranda</a></li>
                    <li class="list-menu"><a href="kata_pengantar.html">Kata Pengantar</a></li>
                    <li class="list-menu"><a href="daftar_materi.html">Daftar Materi</a></li>
                    <li class="list-menu"><a href="tentang_kami.html">Tentang Kami</a></li>
                    <li class="list-menu"><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="sosmed">
                <ul id="sosmed-icon" class="hidden">
                    <li class="logo-sosmed"><a href="#" class="logo facebook" target="_blank"><span class="fa fa-facebook-square"></span></a></li>
                    <li class="logo-sosmed"><a href="#" class="logo twitter" target="_blank"><span class="fa fa-twitter-square"></span></a></a></li>
                    <li class="logo-sosmed"><a href="#" class="logo instagram" target="_blank"><span class="fa fa-instagram"></span></a></a></li>
                </ul>
            </div>
        </header>
        
        <div class="body">
            <div class="container-identitas">
                <div class="identitas-stifar">
                    <div class="stifar-logo">
                        <img class="logo-stifar" src="gambar/logostifar.png">
                    </div>
                    <div class="stifar-kontak">
                        <h1 class="kontak-instansi" 
                        data-aos="fade-right"
                        data-aos-duration="3000">STIFAR</br>Sekolah Tinggi Ilmu Farmasi</h1>
                        <p class="kontak-alamat"
                        data-aos="fade-left"
                        data-aos-duration="3000">Jl. Sarwo Edie Wibowo KM 1 Plamongan Sari, Kec. Pedurungan, Kota Semarang, Jawa Tengah
                        </p>
                        <p class="kontak-email"
                        data-aos="fade-up"
                        data-aos-duration="3000"></br>Email: stifar_yaphar@yahoo.com</br>Telp: (024) 6706147</br>FAX: (024) 6725272</p>
                    </div>
                </div>
            </div>
            <div class="container-kontak">
                <div class="kontak">
                    <h2>Contact Us</h2>
                    <form class="kontak-form" action="" method="post">
                    <table>
                        <tr>
                            <td><label for="nama">Nama</label></td>
                            <td><input name="nama" type="text" required></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input name="email" type="email" required></td>
                        </tr>
                        <tr>
                            <td><label for="telepon">Telepon</label></td>
                            <td><input name="telepon" type="number" required></td>
                        </tr>
                        <tr>
                            <td><label for="institusi">Institusi</label></td>
                            <td><input name="institusi" type="text" required></td>
                        </tr>
                        <tr>
                            <td><label for="subyek">Subyek</label></td>
                            <td><input name="subyek" type="text" required></td>
                        </tr>
                        <tr>
                            <td><label for="pesan">Pesan</label></td>
                            <td><textarea name="pesan" type="text"></textarea></td>
                        </tr>
                        <tr>
                            <td><label></label></td>
                            <td><input class="button-form" type="submit" name="proses" value="Submit"></td>
                        </tr>
                    </table>
                    </form>

                    <?php
                    include "koneksi.php";

                    if(isset($_POST['proses'])){
                        mysqli_query($koneksi,"insert into data set
                        nama = '$_POST[nama]',
                        email = '$_POST[email]',
                        telepon = '$_POST[telepon]',
                        institusi = '$_POST[institusi]',
                        subyek = '$_POST[subyek]',
                        pesan = '$_POST[pesan]'");

                        echo '<script type = "text/JavaScript">';
                        echo 'alert("Pesan anda sudah terkirim")';
                        echo '</script>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <footer>
            
        </footer>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
    <script src="js/dropdown.js"></script>
</HTML>