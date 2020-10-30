<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
   integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="<?= base_url('vendor/style.css') ?>">
   <link rel="shortcut icon" href="<?= base_url('vendor/image/logo-unpak.png') ?>" type="image/x-icon">

   <title>Learning Manajemen System</title>
</head>

<body>

<!-- Navbar -->
<div class="border-bottom mb-4">
   <div class="container">
      <nav class="row navbar navbar-expand-lg navbar-light bg-white">
         <a href="#" class="navbar-brand">
            <img src="<?= base_url('vendor/image/logo-unpak.png') ?>" width="50px" alt="Logo FMIPA">
         </a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">

            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
               <li class="nav-item mx-md-2">
                  <a href="#" class="nav-link scroll">Home</a>
               </li>
               <li class="nav-item mx-md-2">
                  <a href="#fakultas" class="nav-link scroll">Fakultas</a>
               </li>
               <li class="nav-item mx-md-2">
                  <a href="#layanan-akademik" class="nav-link scroll">Layanan Akademik</a>
               </li>
               <li class="nav-item mx-md-2">
                  <a href="#pengumuman" class="nav-link scroll">Pengumuman</a>
               </li>
            </ul>

            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
               <a class="btn btn-login my-2 my-sm-0 px-4 btn-block" href="<?= base_url('Auth') ?>">
                  Masuk
            </a>
            </form>

            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
               <a class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" href="<?= base_url('Auth') ?>">
                  Masuk
            </a>
            </form>
         </div>
      </nav>
   </div>
</div>
<!-- Akhir Navbar -->

<!-- landing page -->
<section class="hero" id="home"> 
   <div class="container">
      <div class="row">
         <div class="col-md-7 text">
            <span>Welcome</span>
            <h1>Learning Manajemen System</h1>
            <h6>Membuat belajar online anda menjadi lebih mudah dan efisien</h6>
            <p>Jadikan belajar online mu lebih asik dan terarah di LMS <span>Universitas Pakuan</span></p>
            <a href="#fakultas" class="btn-started scroll">Mulai</a>
         </div>
         <div class="col-md-5 kanan">
            <img src="<?= base_url('vendor/image/sekolah.jpg') ?>" alt="">
         </div>
      </div>
   </div>
</section>
<!-- Akhir landingpage -->

<!-- main -->
<main>

<section class="section-heading mt-5" id="fakultas">
   <div class="container">
      <div class="row">
         <div class="col text-center">
            <h2>Fakultas</h2>
            <p>Fakultas yang ada di <span>Universitas Pakuan</span></p>
            <div class="garis-bawah mb-4"></div>
         </div>
      </div>
   </div>
</section>

<section class="course">
      <div class="container">
         <div class="row justify-content-center text-center">
            <div class="col-10 col-md-3 col-lg-3 courses">
               <div class="card card-body">
                  <img src="<?= base_url('vendor/image/hukum.png') ?>" class="ml-auto mr-auto" width="120px">
                  <h3>Fakultas <span>Hukum</span></h3>
               </div>
               <a href="<?= base_url('Auth') ?>" class="btn-course">MASUK COURSE</a>
            </div>
            <div class="col-10 col-md-3 col-lg-3 courses">
               <div class="card card-body">
                  <img src="<?= base_url('vendor/image/FMIPA.png') ?>" class="ml-auto mr-auto img-responsive" width="120px">
                  <h3>Fakultas <span>FMIPA</span></h3>
               </div>
               <a href="<?= base_url('Auth') ?>" class="btn-course">MASUK COURSE</a>
            </div>
            <div class="col-10 col-md-3 col-lg-3 courses">
               <div class="card card-body">
                  <img src="<?= base_url('vendor/image/fkip.jpg') ?>" class="ml-auto mr-auto" width="120px">
                  <h3>Fakultas FKIP</h3>
               </div>
               <a href="<?= base_url('Auth') ?>" class="btn-course">MASUK COURSE</a>
            </div>
            <div class="col-10 col-md-3 col-lg-3 courses">
               <div class="card card-body">
                  <img src="<?= base_url('vendor/image/logo-unpak.png') ?>" class="ml-auto mr-auto" width="120px">
                  <h3>Pasca Sarjana</h3>
               </div>
               <a href="<?= base_url('Auth') ?>" class="btn-course">MASUK COURSE</a>
            </div>
         </div>
      </div>
</section>

<section class="layanan-akademik" id="layanan-akademik">
   <div class="container-fluid">
      <div class="header-layanan text-center">
         <h3>Layanan Akademik</h3>
         <p>Aplikasi Layanan Akademik</p>
         <div class="garis-bawah"></div>
      </div>

      <div class="row">
         <div class="col-md-6 kiri">
            <img src="<?= base_url('vendor/image/service.jpg') ?>" width="80%" class="img-thumbnail mt-5">
         </div>
         <div class="col-md-6 kanan">
            <div class="row text-center">
               <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 mb-3">
                  <div class="card card-body simak ">
                     <img src="<?= base_url('vendor/image/programming.png') ?>" class="ml-auto mr-auto" width="60px">
                     <h6>SIMAK</h6>
                     <p>Sistem Informasi Akademik dan Kemahasiswaan</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                  <div class="card card-body sigap">
                     <img src="<?= base_url('vendor/image/bell.png') ?>" class="ml-auto mr-auto" width="60px">
                     <h6>SIGAP</h6>
                     <p>Sistem Cepat Tanggap Universitas Pakuan</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                  <div class="card card-body va-bni">
                     <img src="<?= base_url('vendor/image/credit-card.png') ?>" class="ml-auto mr-auto" width="60px">
                     <h6>VA BNI</h6>
                     <p>Sistem Virtual Account Pembayaran</p>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                  <div class="card card-body siup">
                     <img src="<?= base_url('vendor/image/social-network.png') ?>" class="ml-auto mr-auto" width="60px">
                     <h6>SIUP</h6>
                     <p>Sistem Informasi Universitas Pakuan</p>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</section>

<section class="jarallax pengumuman mb-5" id="pengumuman">
   <div class="container-fluid">
      <div class="pengumuman-header text-center">
         <h3 class="pt-5">Pengumuman</h3>
         <p>This Announcement Canvas Is A Bridge Between Students And Organizations For Updates.</p>
         <div class="garis-bawah"></div>
      </div>
      <div class="isi-pengumuman">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 kiri">
                  <div class="card card-body text-center">
                     <img src="<?= base_url('vendor/image/logo-unpak.png') ?>" class="ml-auto mr-auto mb-3 img-responsive" width="60px">
                     <h6 class="elearning">Akses e-learning.unpak.ac.id VIA Android</h6>
                     <p class="admin">Administrator Elearning</p>
                     <div class="tanggal">Monday, 21 Agustus 2020, 05.23PM</div>
                     <hr style="padding-bottom: -10px;">
                     <div class="akses">Akses e-learning.unpak.ac.id VIA Android</div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 tengah">
                  <div class="card card-body text-center">
                     <img src="<?= base_url('vendor/image/logo-unpak.png') ?>" class="ml-auto mr-auto mb-3 img-responsive" width="60px">
                     <h6 class="elearning">Elearning Lama</h6>
                     <p class="admin">Administrator Elearning</p>
                     <div class="tanggal">Saturday, 01 January 2020, 02.23PM</div>
                     <hr>
                     <p style="margin-bottom: 90px; text-align:center; color: #575063; font-weight: 300;">Lorem ipsum,
                        dolor sit amet
                        consectetur adipisicing elit. Dolor ipsa tenetur nostrum ea hic cupiditate recusandae, itaque
                        fuga quidem beatae, possimus laudantium odio quod fugit incidunt unde commodi, qui libero!</p>
                     <p class="data-course">Untuk Data course lama bisa di akses di : <span><a href="https://lms.unpak.ac.id/"style="color: #3f3ca0; font-size:12px;">https://elearning.unpak.ac.id</a></span>
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-12 col-xs-12 col-lg-4 kanan">
                  <div class="card card-body text-center">
                     <img src="<?= base_url('vendor/image/logo-unpak.png') ?>" class="ml-auto mr-auto mb-3 img-responsive" width="60px">
                     <h6 class="elearning">Akses e-learning.unpak.ac.id VIA IOS</h6>
                     <p class="admin">Administrator Elearning</p>
                     <div class="tanggal">Thursday, 21 June 2020, 01.23PM</div>
                     <hr style="padding-bottom: -10px;">
                     <div class="akses">Akses e-learning.unpak.ac.id VIA IOS</div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>
</main>

<hr style="color:#5e547c; margin-top: 400px;">

<footer>
   <div class="container pb-5">
      <div class="row">
         <div class="col-12">
            <div class="row">
               <div class="col-12 col-lg-4">

                  <h5>Fitur</h5>

                  <ul class="list-unstyled">
                     <li><a href="#">Ulasan</a></li>
                     <li><a href="#">Akreditasi</a></li>
                     <li><a href="#">Social Media</a></li>
                  </ul>
               </div>

               <div class="col-12 col-lg-4">
                  <h5>Akademik</h5>
                  <ul class="list-unstyled">
                     <li><a href="#">KRS</a></li>
                     <li><a href="#">Media</a></li>
                     <li><a href="#">Transkrip Nilai</a></li>
                  </ul>
               </div>

               <div class="col-12 col-lg-4">
                  <h5>Kontak kami</h5>
                  <ul class="list-unstyled">
                     <li><a href="#">Bogor, Jawa Barat</a></li>
                     <li><a href="#">Jl.Pakuan, RT.02/06 Tegal lega</a></li>
                     <li><a href="#">Unpak@unpak.ac.id</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <hr style="color: #5e547c; width: 100%; margin-top: -10px;">
   <center class="mt-2">
      <p>All right Reserved. Made by Kelompok 10</p>
   </center>
</footer> 

</body>
</html>

<script>


</script>