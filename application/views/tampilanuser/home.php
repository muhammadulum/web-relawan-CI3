
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>RK TAJAM Kab.Ketapang</h1>
          <h2>Relawan Konservasi Taruna Penjaga Alam Kabupaten Ketapang</h2>
          <a href="#services" class="btn-get-started scrollto">Selengkapnya</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?php echo base_url('assets/');?>/user/assets/img/orangutan.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">

    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
         
          <p>Tentang Kami</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <p class="description">Wadah Organisasi muda dalam Penyelamatan dan Pelestarian Lingkungan Bumi Kayong</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Misi</a></h4>
              <p class="description">1)Mempromosikan Lingkungan Yang Hijau Bersih dan Sehat
                <br>
                2)Memberikan Ruang Aktivitas Bagi Generasi Muda
                <br>
                3)Mendorong Upaya-Upaya Penyelamatan Orang Utan dan Habitatnya</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Sejarah</a></h4>
              <p class="description">Relawan Konservasi Taruna Penjaga Alam (RK-Tajam) merupakan relawan muda binaan Yayasan Palung yang ada di Kabupaten Ketapang

                Pada Mulanya Relawan Konservasi TAJAM di bentuk Oleh 39 Generasi Muda Ketapang pda Maret 2010 di Ketapang</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Mitra</a></h4>
              <p class="description">Mitra dari RK Tajam yaitu Yayasan Palung (YP) Berdiri sejak tahun 2002, bergerak dibidang konservasi hutan dan orangutan Kalimantan,untuk
                  lebih jelasnya silahkan klik link berikut <a href="https://yayasanpalung.com/">Yayasan Palung</a>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
       
          
          <p>Kontak Kami</p>
        </div>

        <div class="row">
        <?php foreach ($data as $hs): ?>
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main><!-- End #main -->

