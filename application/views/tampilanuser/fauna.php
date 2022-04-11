

  <main id="main">

<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <p>Ensiklopedia Flora </p>
    </div>


    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
    <?php foreach ($hasil as $h): ?>
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="<?php echo base_url('upload/foto/'.$h->foto) ?>" class="img-fluid" alt=""style="width: 400px; height:300px;">
          <div class="portfolio-links">
            <a href="<?php echo base_url('upload/foto/'.$h->foto) ?>" data-gall="portfolioGallery" class="venobox" title="Lihat Foto"><i class="icofont-eye-open"></i></a>
            <a href="<?php echo base_url('home/detail_ensiklopediafauna/'.$h->id_fauna);?>" title="Selengkap nya"><i class="icofont-search-document"></i></a>
            
          </div>
          <div class="portfolio-info">
            <h4><?php echo $h->nama ?></h4>
            <p> Nama Latin :<?php echo $h->nama_latin ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>

<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      
      <p>Kontak Kami</p>
    </div>

    <div class="row">

    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <?php foreach ($data as $hs): ?>
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Alamat:</h4>
            <p><?php echo $hs->nama_alamat ?></p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p><?php echo $hs->email ?></p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>No Whatsapp:</h4>
            <p><?php echo $hs->no_wa ?></p>
          </div>

          <iframe src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fyayasanpalung.com%2Ftajam%2F&psig=AOvVaw0pBQ5uzmbPu8rWvOkIGEzY&ust=1630437098408000&source=images&cd=vfe&ved=0CAgQjRxqFwoTCIiZ0dK52fICFQAAAAAdAAAAABAD" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
            <?php endforeach;?>
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
        <form action="<?php echo base_url('home/kontak');?>" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="name">Nama Lengkap</label>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Pesan</label>
            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section>
</main><!-- End #main -->

