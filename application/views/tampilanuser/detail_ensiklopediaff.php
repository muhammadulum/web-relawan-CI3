<main id="main">
<section class="portfolio-details">
  <div class="container">

    <div class="portfolio-details-container">

      <div class="owl-carousel portfolio-details-carousel">
        <img src="<?php echo base_url('upload/foto/'.$hasil->foto) ?>" class="img-fluid" alt="">
      </div>

      <div class="portfolio-info">
        <h3>Detail Informasi Flora dan Fauna</h3>
        <ul>
          <li><strong>Nama : </strong><?php echo $hasil->nama ?></li>
          <li><strong>Nama Latin : </strong><?php echo $hasil->nama_latin ?></li>
          <li><strong>Status : </strong><?php echo $hasil->status ?></li>
          <li><strong>Jenis : </strong><?php echo $hasil->jenis ?></li>
        </ul>
      </div>

    </div>

    <div class="portfolio-description">
      <h2>Deskripsi</h2>
      <p>
      <?php echo $hasil->deskripsi ?>
      </p>
      <br>

    <div class="portfolio-description">
      <h2>Ancaman</h2>
      <p>
      <?php echo $hasil->ancaman ?> 
      </p>
    </div>
  </div>
</section>

</main><!-- End #main -->