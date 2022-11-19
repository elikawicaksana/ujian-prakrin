<!DOCTYPE html>
<html lang="en">
<?php
  include 'include/head.php';
?>
<body>
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Elika</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#portfolio">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Attachment</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="jurnal.php">Jurnal</a></li>
            <li><a href="absensi.php">Absensi</a></li>
            <li><a href="nilai.php">Nilai Kompetensi</a></li>
            <li><a href="surat.php">Surat Balasan</a></li>
            <li><a href="bimbingan.php">Form Bimbingan</a></li>
            <li><a href="sertifikat.php">Sertifikat</a></li>
          </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Sertifikat</li>
        </ol>
      </div>
    </section>
    <section class="portfolio inner-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Sertifikat Prakrin</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="container col-lg-8 col-md-6">
            <img src="img/lampiran/Sertifikat.jpg" alt="" class="col-lg-12">
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">
    <div class="container footer-bottom clearfix">
    <div class="copyright">
        &copy; Copyright <strong><span>Elika</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Bootstrap by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
    </div>
  </footer>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php
    include 'include/script.php';
  ?>
</body>
</html>