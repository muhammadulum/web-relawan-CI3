<main id="main">

<section class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
        <img src="<?php echo base_url('upload/foto/'.$hasil->foto) ?>" class="img-fluid" alt="">
      </div>

      <div class="portfolio-info">
        <h3>Detail Informasi HHBK</h3>
        <ul>
          <li><strong>Nama : </strong><?php echo $hasil->nama ?></li>
          <li><strong>Harga : </strong><?php echo $hasil->harga ?></li>
          <li><strong>Whatsapp Pengrajin : </strong><?php echo $hasil->no_wa ?></li>
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Deskripsi</h2>
      <p>
      <?php echo $hasil->keterangan ?>
      </p>
    </div>
  </div>
</section>

</main><!-- End #main -->