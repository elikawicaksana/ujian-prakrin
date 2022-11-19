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
          <li>Absensi</li>
        </ol>
      </div>
    </section>
    <section class="portfolio inner-page">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Absensi Siswa</h2>
          <p>Absensi selama masa prakrin dari bulan Juli sampai November</p>
        </div>
        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-juli">Juli</li>
          <li data-filter=".filter-agus">Agustus</li>
          <li data-filter=".filter-sept">September</li>
          <li data-filter=".filter-okto">Oktober</li>
          <li data-filter=".filter-nov">November</li>
        </ul>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-juli filter-agus">
            <div class="portfolio-img"><img src="img/lampiran/Absensi1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Absensi Bulan Juli - Agustus</h4>
              <p>Juli & Agustus</p>
              <a href="img/lampiran/Absensi1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" style="margin-right: -20px;" title="Absensi Siswa Bulan Juli & Agustus"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-sept filter-okto">
            <div class="portfolio-img"><img src="img/lampiran/Absensi2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Absensi Bulan September - Oktober</h4>
              <p>September & Oktober</p>
              <a href="img/lampiran/Absensi2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" style="margin-right: -20px;" title="Absensi Siswa Bulan September & Oktober"><i class="bx bx-plus"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-nov">
            <div class="portfolio-img"><img src="img/lampiran/Absensi3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Absensi Bulan November</h4>
              <p>November</p>
              <a href="img/lampiran/Absensi3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" style="margin-right: -20px;" title="Absensi Siswa Bulan November"><i class="bx bx-plus"></i></a>
            </div>
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