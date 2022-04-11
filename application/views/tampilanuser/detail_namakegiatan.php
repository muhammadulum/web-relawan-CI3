<main id="main">

<section class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
        <img src="<?php echo base_url('upload/foto/'.$hasil->foto) ?>" class="img-fluid" alt="">
      </div>

      <div class="portfolio-info">
        <h3>Detail Nama Kegiatan</h3>
        <ul>
          <li><strong>Nama Kegiatan : </strong><?php echo $hasil->nama_kegiatan ?></li>
          <li><strong>Tahun : </strong><?php echo $hasil->tahun ?></li>
          <li><strong>Penyelenggara : </strong><?php echo $hasil->penyelenggara ?></li>
          
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Deskripsi</h2>
      <p>
      <?php echo $hasil->deskripsi ?>
      </p>
    </div>
  </div>
</section>

</main><!-- End #main -->