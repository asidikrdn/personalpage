<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>
    <link rel="icon" href="img/icon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugin Lightbox Master for Bootstrap -->
    <!-- <link href="css/ekko-lightbox.css" rel="stylesheet"> -->

    <!-- Plugin Lightbox 2 for Bootstrap -->
    <link href="css/lightbox.css" rel="stylesheet">
    
    <!-- CSS Manual -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- Fungsi Button untuk menampilkan tombol navigasi saat layar kecil, data target harus sama dengan id navbar colapse -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a href="#home" class="navbar-brand pagescroll"><i class="glyphicon glyphicon-home"></i> Sidik</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="pagescroll"><i class="glyphicon glyphicon-user"></i>About</a></li>
            <li><a href="#portfolio" class="pagescroll"><i class="glyphicon glyphicon-blackboard"></i>Portfolio</a></li>
            <li><a href="#contact" class="pagescroll"><i class="glyphicon glyphicon-earphone"></i>Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    
    <!-- Jumbotron / Header -->
    <div class="jumbotron text-center">
      <img src="img/profil.jpg" alt="profil pict" class="img-circle">
      <h1>Ahmad Sidik Rudini</h1>
      <p>Student of Informatics Engineering at Ibnu Khaldun University</p>
    </div>
    <!-- Akhir Jumbotron / Header -->


    <!-- Contoh kode untuk mengambil text di url sebagai variabel -->
    <?php
    $namatamu = @$_GET['tamu'];
    // fungsi @ = untuk melewatkan error jika ada warning pada variabel
    ?>
    <!-- Akhir Kode GET -->
    
    
    <!-- About -->
    <section class="about" id="about">
      <div class="container">
        
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2>
            <h2 class="text-center"><?php echo $namatamu; //untuk menampilkan variabel GET ?></h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5 col-sm-offset-1"> <!-- ofset digunakan untuk mengisi kolom sebelumnya dengan isian kosong-->
            <p class="pKiri">
              Perkenalkan, saya Ahmad Sidik Rudini. Saya seorang mahasiswa Teknik Informatika di salah satu perguruan tinggi swasta di Kota Bogor dengan fokus kompetensi rekayasa perangkat lunak (RPL).
              Kegiatan saya sehari-hari selain kuliah ialah bekerja sebagai kurir pada salah satu perusahaan ekspedisi di Kota Bogor.
            </p>
          </div>
          <div class="col-sm-5">
            <p class="pKanan">
              Saya sangat tertarik dengan dunia Teknologi Informasi. Saya senang mempelajari teknologi teknologi terbaru, khususnya pada bidang pemrograman. Namun, saya juga berpengalaman bekerja sebagai teknisi komputer dan jaringan. Saat ini saya sedang mempelajari bahasa pemrograman Javascript, yang mana bahasa tersebut merupakan bahasa pemrograman terpopuler untuk saat ini.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- Akhir About -->
    
    <!-- Portfolio -->
    <!--
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Portfolio</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <h4 class="text-center">Website Invitation</h4>
            <a data-lightbox="portfolio" data-title="Website Invitation" href="img/portfolio/1.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/1.jpg" alt="Portfolio 1">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Company Profile</h4>
            <a data-lightbox="portfolio" data-title="Company Profile" href="img/portfolio/2.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/2.jpg" alt="Portfolio 2">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Web-Based Apps</h4>
            <a data-lightbox="portfolio" data-title="Web-Based Apps" href="img/portfolio/3.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/3.jpg" alt="Portfolio 3">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Mobile Apps</h4>
            <a data-lightbox="portfolio" data-title="Mobile Apps" href="img/portfolio/4.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/4.jpg" alt="Portfolio 4">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Personal Blog</h4>
            <a data-lightbox="portfolio" data-title="Personal Blog" href="img/portfolio/5.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/5.jpg" alt="Portfolio 5">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Online Store</h4>
            <a data-lightbox="portfolio" data-title="Online Store" href="img/portfolio/6.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/6.jpg" alt="Portfolio 6">
            </a>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- Akhir Portfolio -->


    <!-- Skills -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">My Skills</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <h4 class="text-center">Computer Assembling</h4>
            <a data-lightbox="portfolio" data-title="Website Invitation" href="img/portfolio/1.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/1.jpg" alt="Portfolio 1">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Company Profile</h4>
            <a data-lightbox="portfolio" data-title="Company Profile" href="img/portfolio/2.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/2.jpg" alt="Portfolio 2">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Web-Based Apps</h4>
            <a data-lightbox="portfolio" data-title="Web-Based Apps" href="img/portfolio/3.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/3.jpg" alt="Portfolio 3">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Mobile Apps</h4>
            <a data-lightbox="portfolio" data-title="Mobile Apps" href="img/portfolio/4.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/4.jpg" alt="Portfolio 4">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Personal Blog</h4>
            <a data-lightbox="portfolio" data-title="Personal Blog" href="img/portfolio/5.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/5.jpg" alt="Portfolio 5">
            </a>
          </div>
          <div class="col-sm-4">
            <h4 class="text-center">Online Store</h4>
            <a data-lightbox="portfolio" data-title="Online Store" href="img/portfolio/6.jpg" class="thumbnail">
              <img class="img-responsive" src="img/portfolio/6.jpg" alt="Portfolio 6">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Portfolio -->


    <!-- Kontak -->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Kritik, Saran, dan Pertanyaan</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form action="proses_input_kotaksaran.php" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
              </div>
              <div class="form-group">
                <label for="telp">No. Telepon</label>
                <input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukkan No. Telepon">
              </div>
              <div class="form-group">
                <label for="kategori">Kritik, Saran, Pertanyaan</label>
                <select name="kategori" id="kategori" class="form-control">
                  <option value="">-- Pilih Kategori --</option>
                  <option value="Saran">Saran</option>
                  <option value="Kritik">Kritik</option>
                  <option value="Tanya">Tanya</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea name="pesan" id="pesan" class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
              </div>
              <button type="submit" name="simpan" class="btn btn-primary">Kirim Pesan</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </form>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">Hubungi Saya</h2>
              <hr>
            </div>
            <div class="col-sm-12 text-center">
              <a href="https://wa.me/087711356758" target="blank" class="btn btn-success"><i class="glyphicon glyphicon-envelope"></i> Chat via WhatsApp</a>
              <a href="https://t.me/asidikrdn" target="blank" class="btn btn-primary"><i class="glyphicon glyphicon-envelope"></i> Chat via Telegram</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Kontak -->


    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; Copyright 2021 | Built by <a href="http://instagram.com/asidikrdn" target="blank"><i class="glyphicon glyphicon-user"></i> Ahmad Sidik Rudini</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->


    




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery easing plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin Lightbox Master -->
    <script src="js/ekko-lightbox.js"></script>
    <!-- Plugin Lightbox 2 -->
    <script src="js/lightbox.js"></script>
    <!-- javascript Manual -->
    <script src="js/script.js"></script>
  </body>
  
</html>